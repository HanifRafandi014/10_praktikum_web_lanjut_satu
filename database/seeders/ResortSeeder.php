<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resort;
use Carbon\Carbon;

class ResortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resort::truncate();

        $resorts = [
            [
                'title' => 'LUXURY SPA',
                'image' => 'images/category1.png',
                'content' => 'Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'BEATUSISH INGL',
                'image' => 'images/category2.png',
                'content' => 'Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'LUXURY ROOM',
                'image' => 'images/category3.png',
                'content' => 'Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'HEAVEN SEANERY',
                'image' => 'images/category4.png',
                'content' => 'Lorem ipsum dolor sit amet, consec adipiscing elit. Nunc lorem nulla, ornare eu felis luctus non maximus vitae, portt neque. ipsum dolor sit amet, consec adipiscing elit.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        Resort::insert($resorts);
    }
}
