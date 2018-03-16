<?php

use Illuminate\Database\Seeder;
use App\Article;
use Carbon\Carbon;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


		DB::table( 'articles' )->insert( [

			[
                'title' => 'First Article',
                'user_id' => 1,
                'categorie_id' => 1,
                'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis [nostrud](test.com) exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

![test](https://user-images.githubusercontent.com/13301795/37514252-a88e8eac-2907-11e8-83bc-11bfb2cdc4fa.jpg)

## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.',
                'created_at' => date( 'Y-m-d H:i:s' ),
                'updated_at' => date( 'Y-m-d H:i:s' ),
    ],

    [
    'title' => 'Second Article',
    'user_id' => 2,
    'categorie_id' => 2,
    'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis [nostrud](test.com) exercitation ullamco laboris nisi ut aliquip ex ea
    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

![test](https://user-images.githubusercontent.com/13301795/37514252-a88e8eac-2907-11e8-83bc-11bfb2cdc4fa.jpg)

## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.',
    'created_at' => date( 'Y-m-d H:i:s' ),
    'updated_at' => date( 'Y-m-d H:i:s' ),
    ],
    [

        'title' => 'Another Article',
        'user_id' => 1,
        'categorie_id' => 2,
        'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis [nostrud](test.com) exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

![test](https://user-images.githubusercontent.com/13301795/37514252-a88e8eac-2907-11e8-83bc-11bfb2cdc4fa.jpg)

## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.',
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m-d H:i:s' ),
    ],
    [

            'title' => 'whaouh awesome Article',
            'user_id' => 1,
            'categorie_id' => 3,
            'content' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis [nostrud](test.com) exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

![test](https://user-images.githubusercontent.com/13301795/37514252-a88e8eac-2907-11e8-83bc-11bfb2cdc4fa.jpg)

## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.',
            'created_at' => date( 'Y-m-d H:i:s' ),
            'updated_at' => date( 'Y-m-d H:i:s' ),
    ],

    [
        'title' => 'Testing Markdown class',
        'user_id' => 1,
        'categorie_id' => 1,
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis [nostrud](test.com) exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

![screenshot-2017-12-29 film replica](https://user-images.githubusercontent.com/13301795/34437774-72167e04-eca1-11e7-8d3a-0c367206c917.png)


## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.

![back-to-home_1920x1200](https://user-images.githubusercontent.com/13301795/37515146-2a893c66-290a-11e8-963b-d8c2d28738ec.jpg)

## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.


        Im code mothafuck

Lorem ipsum _dolor sit amet_, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) **ex ea commodo consequat**. Duis aute irure dolor in reprehenderit in voluptate velit esse *cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.*

### H3 heading

- oui
- non
    - maybe


>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco',
        'created_at' => date( 'Y-m-d H:i:s' ),
        'updated_at' => date( 'Y-m-d H:i:s' ),
    ],


[
    'title' => 'Testing Markdown class',
    'user_id' => 2,
    'categorie_id' => 3,
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis [nostrud](test.com) exercitation ullamco laboris nisi ut aliquip ex ea
    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

![screenshot-2017-12-29 film replica](https://user-images.githubusercontent.com/13301795/34437774-72167e04-eca1-11e7-8d3a-0c367206c917.png)


## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.

![back-to-home_1920x1200](https://user-images.githubusercontent.com/13301795/37515146-2a893c66-290a-11e8-963b-d8c2d28738ec.jpg)

## Subtitle

Lorem ipsum dolor sit amet, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.


    Im code mothafuck

Lorem ipsum _dolor sit amet_, [consectetur adipisicing](test.com) elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut [aliquip](test.com) **ex ea commodo consequat**. Duis aute irure dolor in reprehenderit in voluptate velit esse *cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id
est laborum.*

### H3 heading

- oui
- non
    - maybe


>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco',
    'created_at' => date( 'Y-m-d H:i:s' ),
    'updated_at' => date( 'Y-m-d H:i:s' ),
]

]);


    }
}
