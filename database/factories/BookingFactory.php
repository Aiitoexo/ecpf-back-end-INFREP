<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\RoomAndSuite;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function now;
use function rand;

class BookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $all_id_room = RoomAndSuite::all();

        $arrival_date = $this->faker->dateTimeBetween('+0 days', '+30 days');
        $arrival_date_clone = clone $arrival_date;
        $departure_date = $this->faker->dateTimeBetween($arrival_date, $arrival_date_clone->modify('+15 days'));

        return [
            'reference' => $this->generateOrderReference(),
            'room_and_suites_id' => rand(1, count($all_id_room)),
            'mail' => $this->faker->safeEmail,
            'arrival_date' => $arrival_date,
            'departure_date' => $departure_date,
            'adult' => 1,
            'child' => 1,
            'total_customer' => 2
        ];
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
