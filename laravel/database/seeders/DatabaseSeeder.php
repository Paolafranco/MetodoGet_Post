<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  \App\Models\Level;
use  \App\Models\User;
use  \App\Models\Location;
use  \App\Models\Perfil;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(10)->create();
        //level::factory(10)->create();
        //Level::factory()->create(['nombre'=>'Oro','descripcion'=>'quito']);
        //Level::factory()->create(['nombre'=>'Bronce','descripcion'=>'cuenca']);

        //Perfil::factory(10)->create();
        //Perfil::factory()->create(['nombre'=>'Perfil2','user_id'=>'2']);
        //Perfil::factory()->create(['nombre'=>'Perfil3','user_id'=>'3']);

        //Location::factory(10)->create();
        //Location::factory()->create(['country'=>'Colombia']);
        //Location::factory()->create(['country'=>'Chile']);
        
        \App\Models\Group::factory(3)->create(); 
        \App\Models\Level::factory()->create(['name'=>'Oro']);
        \App\Models\Level::factory()->create(['name'=>'Bronce']);
        \App\Models\Level::factory()->create(['name'=>'Plata']);
        \App\Models\User::factory(5)->create()->each(function($user){
            $perfil=$user->perfil()->save(\App\Models\Perfil::make());
            $perfil->location()->save(\App\Models\Location::make());
            $user->groups()->attach($this->array(rand(1,3)));
        });
    }
    public function array($max)
    {
       $values=[];
       for($_REQUEST["i"]=1;$_REQUEST["i"]<$max;$_REQUEST["i"]++){
          $values[]=$_REQUEST["i"];
       }
       return $values;
    }
   
}
