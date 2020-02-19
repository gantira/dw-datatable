<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //AKAN MEMBUAT DATA DUMMY SEBANYAK 50 DATA.
        factory(App\Post::class, 50)->create();
    }
}
