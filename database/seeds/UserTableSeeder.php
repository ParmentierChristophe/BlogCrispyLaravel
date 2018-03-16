<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table( 'users' )->insert( [

        [
            'name'      => 'Christophe Parmentier',
            'email'     => 'admin@admin.com',
            'password'  => 'admin',
            'created_at' => date( 'Y-m-d H:i:s' ),
            'updated_at' => date( 'Y-m-d H:i:s' ),
        ],
        [
            'name'      => 'John Doe',
            'email'     => 'johndoe@admin.com',
            'password'  => 'admin',
            'created_at' => date( 'Y-m-d H:i:s' ),
            'updated_at' => date( 'Y-m-d H:i:s' ),
        ],

    ] );

    }
}
