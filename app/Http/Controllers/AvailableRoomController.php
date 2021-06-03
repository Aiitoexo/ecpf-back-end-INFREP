<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RoomAndSuite;
use Illuminate\Http\Request;
use function array_push;
use function count;
use function PHPUnit\Framework\isEmpty;
use function redirect;
use function session;
use function view;

class AvailableRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $arrival_date = $request['arrival_date'];

        $data = $request->validate([
            'arrival_date' => 'required|date',
            'departure_date' => 'required|after:' . $arrival_date,
            'adult' => 'required|numeric|min:1',
            'child' => 'numeric'
        ]);

        if (isEmpty($data['child'])) {
            $data['child'] = (int)0;
        }

        $data['total_customer'] = (int)$data['adult'] + (int)$data['child'];

        $all_bookings = Booking::all();

        $room_not_available = [];
        $room_select_available = [];


        foreach ($all_bookings as $booking) {
            if ($data['arrival_date'] >= $booking['arrival_date'] && $data['arrival_date'] <= $booking['departure_date'] ||
                $data['departure_date'] <= $booking['departure_date'] && $data['departure_date'] >= $booking['arrival_date']) {

                array_push($room_not_available, $booking->room_and_suites_id);
            }
        }

        $room_available = RoomAndSuite::whereNotIn('id', $room_not_available)->select('id')->get();
        $room_available_to_select = RoomAndSuite::whereIn('id', $room_available)->get();

        if (count($room_available) === 0) {
            session()->flash('no_room_available', 'Désole aucune de nos chambre nest disponible avec vos date de reservation');
            return redirect()->back();
        }

        foreach ($room_available_to_select as $room) {
            if ($data['total_customer'] <= $room->max_people) {
                array_push($room_select_available, $room);
            }
        }

        if (count($room_select_available) === 0) {
            session()->flash('to_much_customer', 'Désole aucune de nos chambre nest disponible pour autant de personnes');
            return redirect()->back();
        }

        session()->put('research', $data);

        return view('pages.availableRoom.index', [
            'room_available' => $room_select_available,
            'research' => session('research')
        ]);
    }
}
