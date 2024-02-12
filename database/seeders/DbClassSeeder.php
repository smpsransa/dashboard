<?php

namespace Database\Seeders;

use App\Models\DbClass;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DbClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class = [
            [
                'name' => '7a',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '7b',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '7c',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '7d',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '7e',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '7f',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '8a',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '8b',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '8c',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '8d',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '8e',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '8f',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '9a',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '9b',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '9c',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '9d',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '9e',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ], [
                'name' => '9f',
                // 'captain' => '',
                // 'secretary' => '',
                // 'treasurer' => '',
            ],
        ];
        DbClass::factory()->createMany($class);
    }
}
