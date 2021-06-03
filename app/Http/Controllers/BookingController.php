<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Order;
use App\Models\RoomAndSuite;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function now;
use function PHPUnit\Framework\isEmpty;
use function redirect;
use function session;
use function view;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $room_booking = RoomAndSuite::find($id);

        if ($room_booking === null) {
            session()->flash('room_not_exist', 'Desole la chambre rechercher n\'exist pas');
            return redirect()->back();
        }

        return view('pages.booking.index', [
            'room_booking' => $room_booking
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arrival_date = $request['arrival_date'];

        $data = $request->validate([
            'room_and_suites_id' => 'required|numeric|exists:room_and_suites,id',
            'mail' => 'required|email',
            'arrival_date' => 'required|date',
            'departure_date' => 'required|after:' . $arrival_date,
            'adult' => 'required|numeric|min:1',
            'child' => 'numeric'
        ]);

        if (isEmpty($data['child'])) {
            $data['child'] = 0;
        }

        $all_booking = Booking::where('room_and_suites_id', $request['room_and_suites_id'])->get();

        foreach ($all_booking as $booking) {
            if ($data['arrival_date'] >= $booking['arrival_date'] && $data['arrival_date'] <= $booking['departure_date'] ||
                $data['departure_date'] <= $booking['departure_date'] && $data['departure_date'] >= $booking['arrival_date']) {

                session()->flash('not_available', 'Desole cette chambre n\'est pas disponible a ces dates. <br><br> Cette chambre sera libre apres le ' . $booking['departure_date']);
                return redirect()->back();

            }
        }

        $data['total_customer'] = $data['adult'] + $data['child'];

        $data['reference'] = $this->generateOrderReference();

        $booking = Booking::create($data);

        session()->flash('reference_booking', $booking->reference);

        return redirect()->back();
    }

    private function generateOrderReference()
    {
        $string = Str::upper(Str::random(4));

        $date = now()->format('Ymd');

        $order_number = $date . $string;

        if (Booking::where('reference', $order_number)->exists()) {
            return $this->generateOrderReference();
        }

        return $order_number;
    }
}


