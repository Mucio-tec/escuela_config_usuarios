<?php

use Illuminate\Database\Seeder;

class UsersTableSeede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public function run()     {         
            App\User::create(['name'=>'Sir.Albert',             
            'email'=>'space_jam@hotmail.com',             
            'password'=> bcrypt('laravel'), 
            ]); 

            App\User::create(['name'=>'michel elias',             
            'email'=>'michel.elia.avila@outlook.es',             
            'password'=> bcrypt('laravel123'), 
            ]); 



    }
}
