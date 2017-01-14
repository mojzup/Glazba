<?php

use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $artist = new \App\Artist([
        	'imagePath' => 'slike/orchid.jpg',
        	'ime' => 'Orchid',
        	'izvor' => 'Amherst, Massachusetts, ZDA',
        	'zalozba' => 'Ebullition, Clean Plate',
        	'leta' => '1997–2002',
        	'clani' => '',
        	'exclani' => 'Will Killingsworth, Jayson Green, Jeff Salane, Geoff Garlock, Brad Wallace',
        	'spletna' => 'http://www.orchidsf.com/'
        	]);
        $artist->save();
        $artist = new \App\Artist([
        	'imagePath' => 'slike/AAL.jpg',
        	'ime' => 'Animals As Leaders',
        	'izvor' => 'Washington, D.C, United States',
        	'zalozba' => 'Sumerian Records, Prosthetic',
        	'leta' => 'Sumerian Records, Prosthetic',
        	'clani' => 'Tosin Abasi, Javier Reyes, Matt Garstka',
        	'exclani' => 'Matt Halpern, Chebon Littlefield, Navene Koperweis',
        	'spletna' => 'www.animalsasleaders.org'
        	]);
        $artist->save();
      $artist = new \App\Artist([
        	'imagePath' => 'slike/centurions.jpg',
        	'ime' => 'The Centurions',
        	'izvor' => 'Newport Beach, California, ZDA',
        	'zalozba' => 'Del-Fi ',
        	'leta' => 'okoli 1950 - okoli 1960',
        	'clani' => '',
        	'exclani' => 'Dennis Rose, Joe Dominic, Ernie Furrow, Jerry Dicks, Pat Gagnebin, Jeffrey Lear, Ken Robison',
        	'spletna' => ''
        	]);
        $artist->save();
         $artist = new \App\Artist([
        	'imagePath' => 'slike/prijazni.jpg',
        	'ime' => 'Na lepem prijazni',
        	'izvor' => 'Ljubljana, Slovenija',
        	'zalozba' => 'Helidon, Nika Records',
        	'leta' => '1978 - 1981',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => ''
        	]);
        $artist->save();
         $artist = new \App\Artist([
        	'imagePath' => 'slike/wayne.jpg',
        	'ime' => 'Wayne Shorter',
        	'izvor' => 'ZDA',
        	'zalozba' => 'Blue Note, Columbia, Verve',
        	'leta' => '1958 – danes',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => 'www.wayneshorter.com'
        	]);
        $artist->save();
         $artist = new \App\Artist([
        	'imagePath' => 'slike/corea.jpg',
        	'ime' => 'Chick Corea',
        	'izvor' => 'ZDA',
        	'zalozba' => 'ECM, Polydor, Stretch, Warner Bros.',
        	'leta' => '1962-danes',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => 'www.chickcorea.com'
        	]);
        $artist->save();
        $artist = new \App\Artist([
        	'imagePath' => 'slike/gaelic.jpg',
        	'ime' => 'Gaelic Storm',
        	'izvor' => '	Santa Monica, California, ZDA',
        	'zalozba' => 'ECM, Polydor, Stretch, Warner Bros.',
        	'leta' => '1962-danes',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => 'www.chickcorea.com'
        	]);
        $artist->save();
        $artist = new \App\Artist([
        	'imagePath' => 'slike/penguin.jpg',
        	'ime' => 'GoGo Penguin',
        	'izvor' => '',
        	'zalozba' => '',
        	'leta' => '',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => ''
        	]);
        $artist->save();
        $artist = new \App\Artist([
        	'imagePath' => 'slike/santigold.jpg',
        	'ime' => 'Santigold',
        	'izvor' => 'ZDA',
        	'zalozba' => 'ECM, Polydor, Stretch, Warner Bros.',
        	'leta' => '1962-danes',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => 'www.chickcorea.com'
        	]);
        $artist->save();
        $artist = new \App\Artist([
        	'imagePath' => 'slike/comtruise.jpg',
        	'ime' => 'Com Truise',
        	'izvor' => 'ZDA',
        	'zalozba' => 'ECM, Polydor, Stretch, Warner Bros.',
        	'leta' => '1962-danes',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => ''
        	]);
        $artist->save();
        $artist = new \App\Artist([
        	'imagePath' => 'slike/mastodon.jpg',
        	'ime' => 'Mastodon',
        	'izvor' => 'ZDA',
        	'zalozba' => 'ECM, Polydor, Stretch, Warner Bros.',
        	'leta' => '1962-danes',
        	'clani' => '',
        	'exclani' => '',
        	'spletna' => ''
        	]);
        $artist->save();
}
}