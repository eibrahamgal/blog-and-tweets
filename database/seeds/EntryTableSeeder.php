<?php

use Illuminate\Database\Seeder;

use App\Entry;

class EntryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Entry::class, 100)->create();
    }
}
