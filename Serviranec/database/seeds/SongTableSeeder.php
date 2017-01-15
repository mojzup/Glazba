<?php

use Illuminate\Database\Seeder;

class SongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $song = new \App\Song([
            'product_id' => 3,
        	'ime' => 'An Infinite Regression',
        	'dolzina' => '4'
        	]);
        $song->save();
          $song = new \App\Song([
            'product_id' => 3,
        	'ime' => 'Odessa',
        	'dolzina' => '4:14'
        	]);
        $song->save();
          $song = new \App\Song([
            'product_id' => 3,
        	'ime' => 'Isolated Incidents',
        	'dolzina' =>' 3:23'
        	]);
        $song->save();
          $song = new \App\Song([
            'product_id' => 3,
        	'ime' => 'Espera',
        	'dolzina' => '2:12'
        	]);
        $song->save();
          $song = new \App\Song([
            'product_id' => 7,
        	'ime' => 'Lisica',
        	'dolzina' => '2:12'
        	]);
        $song->save();
    
      $song = new \App\Song([
            'product_id' => 7,
        	'ime' => 'Masaz',
        	'dolzina' => '4:12'
        	]);
        $song->save();
    
      $song = new \App\Song([
            'product_id' => 7,
        	'ime' => 'Mamutami',
        	'dolzina' => '6:11'
        	]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 1,
          'ime' => 'Komad',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 2,
          'ime' => 'Behaving Badly',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 4,
          'ime' => 'Nephele',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 5,
          'ime' => 'Komad',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 6,
          'ime' => 'Bullwinkle Part II',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 8,
          'ime' => 'Miracle of the Fishes',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 9,
          'ime' => 'Spain',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 10,
          'ime' => 'Scalliwag',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 11,
          'ime' => 'Komad',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 12,
          'ime' => 'Shove it',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 13,
          'ime' => 'Komad',
          'dolzina' => '6:11'
          ]);
        $song->save();
         $song = new \App\Song([
            'product_id' => 14,
          'ime' => 'Megalodon',
          'dolzina' => '6:11'
          ]);
        $song->save();
    }
    
}
