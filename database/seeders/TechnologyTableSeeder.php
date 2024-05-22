<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Functions\Helper;
use App\Models\Technology;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['html', ' css', 'javascript', 'vuejs', 'php', 'laravel'];
        foreach ($data as $item) {
            $new_item = new Technology();
            $new_item->title = $item;
            $new_item->slug = Helper::generateSlug($new_item->title, new Technology() ); //tra le parentesi, come previsto in  Helper.php ci va stringa ovvero: $new_item->title ( oppure $item) e model new Project() oppure  Project::class

            $new_item->save();
        }
    }
}
