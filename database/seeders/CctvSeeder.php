<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CctvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cctv = [
            [
                'name' => 'halaman depan',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/halaman%20depan',
            ], [
                'name' => 'halaman kantin',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/halaman%20kantin',
            ], [
                'name' => 'pagar timur-selatan',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/halaman%20timur',
            ], [
                'name' => 'pagar timur-utara',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/lorong%20gerbang%20utara'
            ], [
                'name' => 'kelas 8f',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/kelas%208f',
            ], [
                'name' => 'kelas 9a',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/kelas%209a',
            ], [
                'name' => 'kelas 9b',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/kelas%209b',
            ], [
                'name' => 'lab kom 2',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/lab%20kom%202',
            ], [
                'name' => 'lab kom 3',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/lab%20kom%203',
            ], [
                'name' => 'parkiran barat',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/pantau%20lab%20kom',
            ], [
                'name' => 'parkiran utara',
                'address' => 'http://cctv.smpsransa.sch.id/stream/player/parkiran%20utara',
            ]
        ];

        \App\Models\Cctv::factory()->createMany($cctv);
    }
}
