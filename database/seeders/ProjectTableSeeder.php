<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = ['Project1', 'Project2', 'Project3', 'Project4', 'Project5'];
        foreach ($data as $item) {
            $new_item = new Project();
            $new_item->title = $item;
            $new_item->slug = ;
            $new_item->save();
        }
    }
}
