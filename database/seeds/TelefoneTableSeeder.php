<?php

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(\App\Entities\Telefones::class, 30)->create();
    }
}
