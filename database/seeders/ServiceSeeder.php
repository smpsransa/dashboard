<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'url' => 'smpsransa.sch.id',
                'description' => 'Halaman Resmi SMP N 1 Srandakan'
            ], [
                'url' => 'lib.smpsransa.sch.id',
                'description' => 'Halaman Pembukuan Kunjungan dan Pengelolaan Buku Perpustakaan Graha Waskita Kencana'
            ], [
                'url' => 'perpus.smpsransa.sch.id',
                'description' => 'Halaman Resmi Perpustakaan Graha Waskita Kencana'
            ], [
                'url' => 'portal.smpsransa.sch.id',
                'description' => 'Aplikasi Mobile Layanan Digital Warga SMP N 1 Srandakan: cek nilai, wifi, dan penjadwalan'
            ], [
                'url' => 'server.smpsransa.sch.id',
                'description' => 'Dashboard Kontrol Tata Usaha'
            ], [
                'url' => 'proxy.smpsransa.sch.id',
                'description' => 'Monitoring DNS atau Jaringan Sekolah'
            ], [
                'url' => 'cctv.smpsransa.sch.id',
                'description' => 'Monitoring CCTV Sekolah'
            ], [
                'url' => 'drive.smpsransa.sch.id',
                'description' => 'alternative google drive'
            ],

        ];

        \App\Models\Service::factory()->createMany($services);
    }
}
