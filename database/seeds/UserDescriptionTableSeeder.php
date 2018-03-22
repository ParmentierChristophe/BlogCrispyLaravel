<?php

use Illuminate\Database\Seeder;

class UserDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


     DB::table( 'user_descriptions' )->insert( [

      [
                   'user_id' => 1,
                   'description' => 'Developper Web - Graphiste Freelance basé à Lille',
                   'website' => 'www.christophe-parmentier.fr',
                   'created_at' => date( 'Y-m-d H:i:s' ),
                   'updated_at' => date( 'Y-m-d H:i:s' ),
       ],
       [
                    'user_id' => 2,
                    'description' => 'Graphiste web at trollolo.com',
                    'website' => 'www.jhon-doe.fr',
                    'created_at' => date( 'Y-m-d H:i:s' ),
                    'updated_at' => date( 'Y-m-d H:i:s' ),
        ]
            ] );

    }
}
