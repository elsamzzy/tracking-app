<?php

namespace Database\Factories;

use App\Models\track;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TracksFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = track::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'etag' => Str::random(25),
            'RowKey' => $this->faker->uuid,
            'asset_fleet_no' => Str::random(4),
            'asset_reg_no' => Str::random(8),
            'client_id' => $this->faker->uuid,
            'client_tracking_id' => $this->faker->uuid,
            'current_asset_position_coord' => $this->faker->longitude . ',' . $this->faker->latitude,
            'current_asset_position_name' => $this->faker->address,
            'current_asset_position_timestamp' => $this->faker->dateTime,
            'time_hrs_since_last_asset_position' => $this->faker->time(),
            'dispatched_by' => $this->faker->safeEmail,
            'distance_from_start' => $this->faker->randomFloat('1'),
            'distance_to_destination' => $this->faker->randomNumber('5'),
            'this_tracking_job_id' => $this->faker->uuid,
            'service_tracking_id' => Str::random(6),
        ];
    }
}
