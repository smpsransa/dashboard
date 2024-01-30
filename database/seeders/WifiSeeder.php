<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WifiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wifi = [
            [
                'ruang' => 'Lab Komputer',
                'devices' => 'CPE 220',
                'parent' => 'Router Guru(Nokia)',
                'network' => '172.16.1.0/24',
                'ssid' => 'Portal Sransa (Barat)',
                'preview_url' => 'https://images.tokopedia.net/img/cache/700/product-1/2019/8/17/2149018/2149018_e2a6555f-8b3f-444d-bdcb-424caf360458_700_700'
            ], [
                'ruang' => 'Lab IPA',
                'devices' => 'TL WA511G',
                'parent' => 'Router TU(Mikrotik)',
                'network' => '192.168.2.0/24',
                'ssid' => 'Portal Sransa (LAB. IPA)',
                'preview_url' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2022/2/5/78aec99f-1fcd-4d11-ac5f-6e88056782c0.jpg'
            ], [
                'ruang' => 'Lab MM',
                'devices' => 'TL WR340G',
                'parent' => 'Router TU(Mikrotik)',
                'network' => '10.10.10.0/24',
                'ssid' => 'Portal Sransa (LAB. MM)',
                'preview_url' => 'https://images.tokopedia.net/img/cache/700/product-1/2020/1/6/8741514/8741514_0a111a51-cdb2-4e2a-bc20-c58ef720a4c5_899_899'
            ], [
                'ruang' => 'Aula',
                'devices' => 'TL Archer AX10',
                'parent' => 'Router TU(Mikrotik)',
                'network' => '10.10.10.0/24',
                'ssid' => 'Portal Sransa (Aula)',
                'preview_url' => 'https://apollo.olx.co.id/v1/files/ey6uvyxiz6bg-ID/image'
            ], [
                'ruang' => 'Tata Usaha',
                'devices' => 'TL WDR4900',
                'parent' => 'Router TU(Mikrotik)',
                'network' => '10.10.10.0/24',
                'ssid' => 'Portal Sransa (TU)',
                'preview_url' => 'https://images.tokopedia.net/img/cache/700/product-1/2019/2/18/7174345/7174345_5b85f5e8-1c23-4453-8faa-74d5f4827dc0_700_676.jpg'
            ], [
                'ruang' => 'Perpus',
                'devices' => 'CPE 220',
                'parent' => 'Router TU(Mikrotik)',
                'network' => '10.10.10.0/24',
                'ssid' => 'Portal Sransa (perpus)',
                'preview_url' => 'https://images.tokopedia.net/img/cache/700/product-1/2019/8/17/2149018/2149018_e2a6555f-8b3f-444d-bdcb-424caf360458_700_700'
            ],
        ];

        \App\Models\Wifi::factory()->createMany($wifi);
    }
}
