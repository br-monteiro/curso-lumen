<?php

use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    
    public function run()
    {
        factory(\App\Entities\Pessoa::class, 30)->create();
    }
}
