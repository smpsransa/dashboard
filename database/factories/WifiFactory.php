<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wifi>
 */
class WifiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ip = $this->faker->localIpv4();
        $network = ".0/24";
        return [
            'ruang' => $this->faker->sentence(2),
            'devices' => $this->faker->sentence(2),
            'parent' => $this->faker->sentence(2),
            'network' => implode(".", array_slice(explode(".", $ip), 0, 3)) . $network,
            'ssid' => $this->faker->sentence(2),
            'preview_url' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
