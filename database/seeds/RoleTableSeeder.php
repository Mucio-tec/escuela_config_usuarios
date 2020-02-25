<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public function run(){
            $role=new Role();
            $role->name="admin";
            $role->save();

            $role=new Role();
            $role->name="user";
            $role->save();


        




        }
    }
}
