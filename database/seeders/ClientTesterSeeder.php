<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClientTester;
use Carbon\Carbon;

class ClientTesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientTester::truncate();

        $ClientTesters = [
            [
                'name' => 'Walter Hucko',
                'rev' => 'Satisfied Customer',
                'image' => 'images/client1.png',
                'statement' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jules Boutin',
                'rev' => 'Satisfied Customer',
                'image' => 'images/client2.png',
                'statement' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Attilio Marzi',
                'rev' => 'Satisfied Customer',
                'image' => 'images/client3.png',
                'statement' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        ClientTester::insert($ClientTesters);
    }
}
