<?php

use Illuminate\Database\Seeder;
use  Spatie\Permission\Models\Permission;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name'  =>'descargar documento'
            'guard_name'  =>'users.download'
        ]);


          //Roles  
        Permission::create([
            'name'  =>'descargar roles'
            'guard_name'  =>'roles.download'
        ]);

        //Documento
        Permission::create([
            'name'  =>'descargar roles'
            'guard_name'  =>'documentos.download'
        ]);

        
    }
    }
}
