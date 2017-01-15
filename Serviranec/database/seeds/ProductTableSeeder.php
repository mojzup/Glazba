<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'slike/orchid-the-mouths-of-madness.jpg',
            'artist_id' => 1,
        	'ime' => 'The Mouths of Madness',
        	'leto' => 2013,
        	'cena' => 15,
        	'format' => 1,
        	'opis' => 'The Mouths of Madness je drugi studijski album Ameriške heavy metal skupine Orchid.'
        	]);
        $product->save();

          $product = new \App\Product([
        	'imagePath' => 'slike/aal2.jpg',
            'artist_id' => 2,
        	'ime' => 'Animals as Leaders',
        	'leto' => 2009,
        	'cena' => 13,
        	'format' => 1,
        	'opis' => 'Animals as Leaders is the debut album by progressive metal group Animals as Leaders. It was released on April 28, 2009 by Prosthetic Records. In 2015, a reissue titled Animals as Leaders – Encore Edition was released with bonus tracks.'
        	]);
        $product->save();

          $product = new \App\Product([
        	'imagePath' => 'slike/aal3.jpg',
            'artist_id' => 2,
        	'ime' => 'Weightless',
        	'leto' => 2011,
        	'cena' => 16,
        	'format' => 1,
        	'opis' => 'Weightless is the second album by instrumental progressive metal group Animals as Leaders. It was released on November 4, 2011 in Europe, November 7, 2011 in the UK, and November 8, 2011 in the US by Prosthetic Records.[1] The album charted at No. 92 on Billboard’s Top 200 Chart, as well as No. 7 on Billboard’s Hard Rock Albums Chart, No. 16 on their Top Independent Album Chart and No. 50 on the Top Current Digital Album Chart.'
        	]);
        $product->save();

          $product = new \App\Product([
        	'imagePath' => 'slike/aal4.jpg',
            'artist_id' => 2,
        	'ime' => ' The Joy of Motion',
        	'leto' => 2014,
        	'cena' => 16,
        	'format' => 1,
        	'opis' => 'The Joy of Motion has been described as a blend of the bands usual progressive metal technicality with elements of jazz, electronic, Latin, and dance-pop.'
        	]);
        $product->save();

          $product = new \App\Product([
        	'imagePath' => 'slike/aal5.jpg',
            'artist_id' => 2,
        	'ime' => ' The Madness of Many',
        	'leto' => 2016,
        	'cena' => 21,
        	'format' => 1,
        	'opis' => 'The Madness of Many is the fourth album by Animals as Leaders, released in November 2016.'
        	]);
        $product->save();

          $product = new \App\Product([
        	'imagePath' => 'slike/surfers.jpg',
            'artist_id' => 3,
        	'ime' => 'Surfers Pajama Party',
        	'leto' => 1963,
        	'cena' => 12,
        	'format' => 0,
        	'opis' => ' For some reason, possibly a mistake at the pressing plant, the Centurians album was released using the same catalog number as the Bruce Johnstons "Surfers Pajama Party". The cover is almost the same, being slightly modified by taking the titles off the front and removing "With the Bruce Johnston Surfing Band ". '
        	]);
        $product->save();

          $product = new \App\Product([
        	'imagePath' => 'slike/prijazni.jpg',
            'artist_id' => 4,
        	'ime' => 'Na lepem prijazni',
        	'leto' => 1981,
        	'cena' => 8,
        	'format' => 0,
        	'opis' => 'Total: A min. 17:55, B min. 17:42 
						Recorded at studio Akademik, November and December 1980. 
						Pressed by Helidon.'
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'slike/natdancer.jpg',
            'artist_id' => 5,
        	'ime' => 'Native Dancer',
        	'leto' => 1974,
        	'cena' => 11,
        	'format' => 2,
        	'opis' => 'Native Dancer is the fifteenth album by Wayne Shorter. It is a collaboration with Brazilian musician Milton Nascimento, featuring some of his most acclaimed compositions, including "Ponta de Areia" and "Miracle of The Fishes". It is notable for including jazz rock and funk elements in addition to regional rhythms and Brazilian influence, in an attempt to create a "world" music accessible from many perspectives.'
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'slike/spanheart.jpg',
            'artist_id' => 6,
        	'ime' => 'My Spanish Heart',
        	'leto' => 1976,
        	'cena' => 10,
        	'format' => 2,
        	'opis' => 'The album combines jazz fusion pieces and more traditional Latin music pieces. The album includes use of full brass and string sections on some tracks. "El Bozo" suite relies heavily on the use of synthesizers while "Spanish Fantasy" suite is mostly acoustic. The first four tracks form a suite as well.'
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'slike/yerwellies.jpg',
            'artist_id' => 7,
        	'ime' => 'Bring Yer Wellies',
        	'leto' => 2006,
        	'cena' => 9,
        	'format' => 1,
        	'opis' => 'Bring Yer Wellies is the sixth album by Celtic band Gaelic Storm, Scalliwag where music is the highlight of the album. It was released on July 25, 2006. "Wellies" is a nickname for Wellington boots, which feature prominently in the lyrics of "Kellys Wellies" and on the album cover.'
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'slike/gogopenguin.jpg',
            'artist_id' => 8,
        	'ime' => 'Man made Object',
        	'leto' => 2016,
        	'cena' => 16,
        	'format' => 1,
        	'opis' => ''
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'slike/santogold.jpg',
            'artist_id' => 9,
        	'ime' => 'Santogold',
        	'leto' => 2008,
        	'cena' => 14,
        	'format' => 1,
        	'opis' => 'Blending a variety of musical genres ranging from new wave to alternative rock and reggae, the album was very well received by critics upon release and was noted for its "cross-genre confidence".'
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'slike/galacticmelt.jpg',
            'artist_id' => 10,
        	'ime' => 'Galactic Melt',
        	'leto' => 2011,
        	'cena' => 13,
        	'format' => 1,
        	'opis' => 'Galactic Melt received generally positive reviews from critics, with a score of 71 out of 100 based on 16 reviews on review aggregator website Metacritic.'
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'slike/leviathan.jpg',
            'artist_id' => 11,
        	'ime' => 'Leviathan',
        	'leto' => 2004,
        	'cena' => 18,
        	'format' => 1,
        	'opis' => 'Leviathan is the second album by American heavy metal band Mastodon, released in 2004 by Relapse Records. The album is the groups first concept album and is loosely based on the Herman Melville novel Moby-Dick, and the songs "Iron Tusk", "Blood and Thunder", "I Am Ahab" and "Seabeast" were released as singles. Three magazines awarded it Album of the Year in 2004: Revolver, Kerrang! and Terrorizer. In 2009 and 2015 MetalSucks named Leviathan the best metal album of the 21st century.'
        	]);
        $product->save();
    }
}
