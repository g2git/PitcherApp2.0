<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     //Original seeds

     // public function run()
     // {
     //     // Laptops
     //     for ($i=1; $i <= 30; $i++) {
     //         Product::create([
     //             'name' => 'Laptop '.$i,
     //             'slug' => 'laptop-'.$i,
     //             'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
     //             'price' => rand(149999, 249999),
     //             'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
     //         ])->categories()->attach(1);
     //     }
     //
     //     $product = Product::find(1);
     //     $product->categories()->attach(2);
     //
     //     // Desktops
     //     for ($i = 1; $i <= 9; $i++) {
     //         Product::create([
     //             'name' => 'Desktop ' . $i,
     //             'slug' => 'desktop-' . $i,
     //             'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
     //             'price' => rand(249999, 449999),
     //             'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
     //         ])->categories()->attach(2);
     //     }
     //     // Phones
     //     for ($i = 1; $i <= 9; $i++) {
     //         Product::create([
     //             'name' => 'Phone ' . $i,
     //             'slug' => 'phone-' . $i,
     //             'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
     //             'price' => rand(79999, 149999),
     //             'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
     //         ])->categories()->attach(3);
     //     }
     //     // Tablets
     //     for ($i = 1; $i <= 9; $i++) {
     //         Product::create([
     //             'name' => 'Tablet ' . $i,
     //             'slug' => 'tablet-' . $i,
     //             'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' inch screen, 4GHz Quad Core',
     //             'price' => rand(49999, 149999),
     //             'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
     //
     //         ])->categories()->attach(4);
     //     }
     //     // TVs
     //     for ($i = 1; $i <= 9; $i++) {
     //         Product::create([
     //             'name' => 'TV ' . $i,
     //             'slug' => 'tv-' . $i,
     //             'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart TV, 4K',
     //             'price' => rand(79999, 149999),
     //             'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
     //
     //         ])->categories()->attach(5);
     //     }
     //     // Cameras
     //     for ($i = 1; $i <= 9; $i++) {
     //         Product::create([
     //             'name' => 'Camera ' . $i,
     //             'slug' => 'camera-' . $i,
     //             'details' => 'Full Frame DSLR, with 18-55mm kit lens.',
     //             'price' => rand(79999, 249999),
     //             'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
     //
     //         ])->categories()->attach(6);
     //     }
     //     // Appliances
     //     for ($i = 1; $i <= 9; $i++) {
     //         Product::create([
     //             'name' => 'Appliance ' . $i,
     //             'slug' => 'appliance-' . $i,
     //             'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
     //             'price' => rand(79999, 149999),
     //             'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
     //
     //         ])->categories()->attach(7);
     //     }
     //
     //
     // }


     //New Seeds
     public function run()
   {
       // Laptops
       for ($i=1; $i <= 30; $i++) {
           Product::create([
               'name' => 'Laptop '.$i,
               'slug' => 'laptop-'.$i,
               'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
               'price' => rand(149999, 249999),
               'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               'image' => 'products/laptop-'.$i.'.jpg',
               'images' => '["products\/laptop-2.jpg","products\/laptop-3.jpg","products\/laptop-4.jpg"]',
               'averagerating' => 0.0,
           ])->categories()->attach(1);
       }
       // Make Laptop 1 a Desktop as well. Just to test multiple categories
       // $product = Product::find(1);
       // $product->categories()->attach(2);
       // Desktops
       for ($i = 1; $i <= 9; $i++) {
           Product::create([
               'name' => 'Desktop ' . $i,
               'slug' => 'desktop-' . $i,
               'details' => [24, 25, 27][array_rand([24, 25, 27])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] . ' TB SSD, 32GB RAM',
               'price' => rand(249999, 449999),
               'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               'image' => 'products/desktop-'.$i.'.jpg',
               'images' => '["products\/laptop-2.jpg","products\/laptop-3.jpg","products\/laptop-4.jpg"]',
           ])->categories()->attach(2);
       }
       // Phones
       for ($i = 1; $i <= 9; $i++) {
           Product::create([
               'name' => 'Phone ' . $i,
               'slug' => 'phone-' . $i,
               'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [7, 8, 9][array_rand([7, 8, 9])] . ' inch screen, 4GHz Quad Core',
               'price' => rand(79999, 149999),
               'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               'image' => 'products/phone-'.$i.'.jpg',
               'images' => '["products\/laptop-2.jpg","products\/laptop-3.jpg","products\/laptop-4.jpg"]',
           ])->categories()->attach(3);
       }
       // Tablets
       for ($i = 1; $i <= 9; $i++) {
           Product::create([
               'name' => 'Tablet ' . $i,
               'slug' => 'tablet-' . $i,
               'details' => [16, 32, 64][array_rand([16, 32, 64])] . 'GB, 5.' . [10, 11, 12][array_rand([10, 11, 12])] . ' inch screen, 4GHz Quad Core',
               'price' => rand(49999, 149999),
               'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               'image' => 'products/tablet-'.$i.'.jpg',
               'images' => '["products\/laptop-2.jpg","products\/laptop-3.jpg","products\/laptop-4.jpg"]',
               'averagerating' => 0.0,
           ])->categories()->attach(4);
       }
       // TVs
       for ($i = 1; $i <= 9; $i++) {
           Product::create([
               'name' => 'TV ' . $i,
               'slug' => 'tv-' . $i,
               'details' => [46, 50, 60][array_rand([7, 8, 9])] . ' inch screen, Smart TV, 4K',
               'price' => rand(79999, 149999),
               'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               'image' => 'products/tv-'.$i.'.jpg',
               'images' => '["products\/laptop-2.jpg","products\/laptop-3.jpg","products\/laptop-4.jpg"]',
           ])->categories()->attach(5);
       }
       // Cameras
       for ($i = 1; $i <= 9; $i++) {
           Product::create([
               'name' => 'Camera ' . $i,
               'slug' => 'camera-' . $i,
               'details' => 'Full Frame DSLR, with 18-55mm kit lens.',
               'price' => rand(79999, 249999),
               'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               'image' => 'products/camera-'.$i.'.jpg',
               'images' => '["products\/laptop-2.jpg","products\/laptop-3.jpg","products\/laptop-4.jpg"]',
           ])->categories()->attach(6);
       }
       // Appliances
       for ($i = 1; $i <= 9; $i++) {
           Product::create([
               'name' => 'Appliance ' . $i,
               'slug' => 'appliance-' . $i,
               'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, dolorum!',
               'price' => rand(79999, 149999),
               'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
               'image' => 'products/appliance-'.$i.'.jpg',
               'images' => '["products\/laptop-2.jpg","products\/laptop-3.jpg","products\/laptop-4.jpg"]',
           ])->categories()->attach(7);
       }

       //Bags
       Product::create([
           'name' => 'Bag 0',
           'slug' => 'bag-0',
           'details' => 'Gucci, GG Marmont Small shoulder bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags.jpeg',
           'images' => '["products\/bags.jpeg","products\/bags.jpeg","products\/bags.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 1',
           'slug' => 'bag-1',
           'details' => 'Gucci, GG Marmont Mini velvet shoulder bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags1.jpeg',
           'images' => '["products\/bags1.jpeg","products\/bags1.jpeg","products\/bags1.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 2',
           'slug' => 'bag-2',
           'details' => 'Prada, Galleria Saffiano Small leather shoulder bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags2.jpeg',
           'images' => '["products\/bags2.jpeg","products\/bags2.jpeg","products\/bags2.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 3',
           'slug' => 'bag-3',
           'details' => 'Valentino, Valentino Garavani Lock Small leather shoulder bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags3.jpeg',
           'images' => '["products\/bags3.jpeg","products\/bags3.jpeg","products\/bags3.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 4',
           'slug' => 'bag-4',
           'details' => 'Chloé, Small Nile leather bracelet crossbody bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags4.jpeg',
           'images' => '["products\/bags4.jpeg","products\/bags4.jpeg","products\/bags4.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 5',
           'slug' => 'bag-5',
           'details' => 'Saint Laurent - Black College Medium Leather shoulder bag - women - Leather - One Size',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags5.jpeg',
           'images' => '["products\/bags5.jpeg","products\/bags5.jpeg","products\/bags5.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 6',
           'slug' => 'bag-6',
           'details' => 'Loewe, T Small leather bucket bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags6.jpeg',
           'images' => '["products\/bags6.jpeg","products\/bags6.jpeg","products\/bags6.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 7',
           'slug' => 'bag-7',
           'details' => 'Fendi, By The Way leather shoulder bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags7.jpeg',
           'images' => '["products\/bags7.jpeg","products\/bags7.jpeg","products\/bags7.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 8',
           'slug' => 'bag-8',
           'details' => 'Miu Miu - matelassé tote bag - women - Leather - One Size - Black',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags8.jpeg',
           'images' => '["products\/bags8.jpeg","products\/bags8.jpeg","products\/bags8.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 9',
           'slug' => 'bag-9',
           'details' => 'Saint Laurent Small Sac De Jour Bag In Black Grained Leather',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags9.jpeg',
           'images' => '["products\/bags9.jpeg","products\/bags9.jpeg","products\/bags9.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 10',
           'slug' => 'bag-10',
           'details' => 'Saint Laurent Medium Sunset Bag In Black Crocodile Embossed Leather',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags10.jpeg',
           'images' => '["products\/bags10.jpeg","products\/bags10.jpeg","products\/bags10.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 11',
           'slug' => 'bag-11',
           'details' => 'GUCCI GG Marmont Matelassé Mini Bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags11.jpeg',
           'images' => '["products\/bags11.jpeg","products\/bags11.jpeg","products\/bags11.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 12',
           'slug' => 'bag-12',
           'details' => 'Nero Intrecciato Nappa Large Cesta Bag - Bottega Veneta',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags12.jpeg',
           'images' => '["products\/bags12.jpeg","products\/bags12.jpeg","products\/bags12.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 13',
           'slug' => 'bag-13',
           'details' => 'Bao Bao Issey Miyake - Lander gloss shoulder bag - women - Leather/PVC - One Size - Pink & Purple',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags13.jpeg',
           'images' => '["products\/bags13.jpeg","products\/bags13.jpeg","products\/bags13.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 14',
           'slug' => 'bag-14',
           'details' => 'Gucci - Black GG Marmont large leather shoulder bag - women - Leather - One Size',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags14.jpeg',
           'images' => '["products\/bags14.jpeg","products\/bags14.jpeg","products\/bags14.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 15',
           'slug' => 'bag-15',
           'details' => 'Perrin Paris - Strass clutch - women - Leather - One Size - White',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags15.jpeg',
           'images' => '["products\/bags15.jpeg","products\/bags15.jpeg","products\/bags15.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 16',
           'slug' => 'bag-16',
           'details' => 'Anya Hindmarch, Ebury Small II All Over Wink handbag - Women',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags16.jpeg',
           'images' => '["products\/bags16.jpeg","products\/bags16.jpeg","products\/bags16.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 17',
           'slug' => 'bag-17',
           'details' => 'GUCCI Dionysus Leather Top Handle Bag',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags17.jpeg',
           'images' => '["products\/bags17.jpeg","products\/bags17.jpeg","products\/bags17.jpeg"]',
       ])->categories()->attach(8);

       Product::create([
           'name' => 'Bag 18',
           'slug' => 'bag-18',
           'details' => 'Calvin Klein 205W39NYC, Leather tote - Women',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/bags18.jpeg',
           'images' => '["products\/bags18.jpeg","products\/bags18.jpeg","products\/bags18.jpeg"]',
       ])->categories()->attach(8);

       //Diamonds
       Product::create([
    'name' => 'Diamond 0',
    'slug' => 'diamond-0',
    'details' => 'Solitaire diamond earrings in platinum',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping.jpeg',
    'images' => '["products\/dia-shopping.jpeg","products\/dia-shopping.jpeg","products\/dia-shopping.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 1',
    'slug' => 'diamond-1',
    'details' => '3.00 caraat diamanten solitaire ring in geel goud',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping1.jpeg',
    'images' => '["products\/dia-shopping1.jpeg","products\/dia-shopping1.jpeg","products\/dia-shopping1.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 2',
    'slug' => 'diamond-2',
    'details' => '3.00 caraat diamanten solitaire ring in platina met zijdiamanten',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping2.jpeg',
    'images' => '["products\/dia-shopping2.jpeg","products\/dia-shopping2.jpeg","products\/dia-shopping2.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 3',
    'slug' => 'diamond-3',
    'details' => 'Soleste band ring in platinum with diamonds',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping3.jpeg',
    'images' => '["products\/dia-shopping3.jpeg","products\/dia-shopping3.jpeg","products\/dia-shopping3.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 4',
    'slug' => 'diamond-4',
    'details' => 'Diamond Point Gouden Ring Circle Of Life',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping4.jpeg',
    'images' => '["products\/dia-shopping4.jpeg","products\/dia-shopping4.jpeg","products\/dia-shopping4.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 5',
    'slug' => 'diamond-5',
    'details' => '1 1 / 10ct Vintage Pave Diamond Ring Set 14K White Gold',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping5.jpeg',
    'images' => '["products\/dia-shopping5.jpeg","products\/dia-shopping5.jpeg","products\/dia-shopping5.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 6',
    'slug' => 'diamond-6',
    'details' => '1 / 2ct Pink Sapphire Princess Cut Diamond Ring 14K witgoud',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping6.jpeg',
    'images' => '["products\/dia-shopping6.jpeg","products\/dia-shopping6.jpeg","products\/dia-shopping6.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 7',
    'slug' => 'diamond-7',
    'details' => 'Ringen Diamant 585 Wit Goud GLAMIRA Ring Cecily',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping7.jpeg',
    'images' => '["products\/dia-shopping7.jpeg","products\/dia-shopping7.jpeg","products\/dia-shopping7.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 8',
    'slug' => 'diamond-8',
    'details' => 'Ringen Diamant 585 Wit Goud Glamira Ring Vorian',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping8.jpeg',
    'images' => '["products\/dia-shopping8.jpeg","products\/dia-shopping8.jpeg","products\/dia-shopping8.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 9',
    'slug' => 'diamond-9',
    'details' => '1.50 caraat diamanten solitaire ring in platina met zijdiamanten',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping9.jpeg',
    'images' => '["products\/dia-shopping9.jpeg","products\/dia-shopping9.jpeg","products\/dia-shopping9.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 10',
    'slug' => 'diamond-10',
    'details' => 'Diamond Point Witgouden Solitair Groeibriljant Ring, 0.50 Ct.',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping10.jpeg',
    'images' => '["products\/dia-shopping10.jpeg","products\/dia-shopping10.jpeg","products\/dia-shopping10.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 11',
    'slug' => 'diamond-11',
    'details' => 'Diamond Point Princess Groeibriljant Ring',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping11.jpeg',
    'images' => '["products\/dia-shopping11.jpeg","products\/dia-shopping11.jpeg","products\/dia-shopping11.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 12',
    'slug' => 'diamond-12',
    'details' => 'Repossi, Berbere Technical 18kt rose gold ring with diamonds',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping12.jpeg',
    'images' => '["products\/dia-shopping12.jpeg","products\/dia-shopping12.jpeg","products\/dia-shopping12.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 13',
    'slug' => 'diamond-13',
    'details' => '0.50 caraat solitaire ring (half gezet) in geel goud met zijdiamanten',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping13.jpeg',
    'images' => '["products\/dia-shopping13.jpeg","products\/dia-shopping13.jpeg","products\/dia-shopping13.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 14',
    'slug' => 'diamond-14',
    'details' => 'Embrace band ring in platinum with diamonds and pink sapphires',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping14.jpeg',
    'images' => '["products\/dia-shopping14.jpeg","products\/dia-shopping14.jpeg","products\/dia-shopping14.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 15',
    'slug' => 'diamond-15',
    'details' => 'Diamond Point solitair verlovingsring geelgoud maat 55 18 karaat (3.4 gr) 1 briljant geslepen diamant totaalgewicht 0. ct.',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping15.jpeg',
    'images' => '["products\/dia-shopping15.jpeg","products\/dia-shopping15.jpeg","products\/dia-shopping15.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 16',
    'slug' => 'diamond-16',
    'details' => 'Alinka - TANIA diamond ring - women - Diamond/18kt White Gold - L - Black',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping16.jpeg',
    'images' => '["products\/dia-shopping16.jpeg","products\/dia-shopping16.jpeg","products\/dia-shopping16.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 17',
    'slug' => 'diamond-17',
    'details' => '1.45 carat D SI2 Diamond Engagement Ring 14K geel gouden Halo Vintage Micro effenen',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-shopping17.jpeg',
    'images' => '["products\/dia-shopping17.jpeg","products\/dia-shopping17.jpeg","products\/dia-shopping17.jpeg"]',
])->categories()->attach(9);

Product::create([
    'name' => 'Diamond 18',
    'slug' => 'diamond-18',
    'details' => '3.00 caraat diamanten solitaire ring in wit goud met zijdiamanten',
    'price' => rand(249999, 449999),
    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
    'image' => 'products/dia-index.jpeg',
    'images' => '["products\/dia-index.jpeg","products\/dia-index.jpeg","products\/dia-index.jpeg"]',
])->categories()->attach(9);

//Shoes
Product::create([
           'name' => 'Shoe 0',
           'slug' => 'shoe-0',
           'details' => 'Rylee leather ankle boots',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel.jpg',
           'images' => '["products\/shoel.jpg","products\/shoel.jpg","products\/shoel.jpg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 1',
           'slug' => 'shoe-1',
           'details' => 'Rylee snake-effect leather ankle boots',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel1.jpg',
           'images' => '["products\/shoel1.jpg","products\/shoel1.jpg","products\/shoel1.jpg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 2',
           'slug' => 'shoe-2',
           'details' => 'Nouvelle Jimmy Choo Trapeze 100 100mm Sandales en Cuir Nappa Noir et Imprime laphe Noir et Blanc Femme',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel2.jpg',
           'images' => '["products\/shoel2.jpg","products\/shoel2.jpg","products\/shoel2.jpg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 3',
           'slug' => 'shoe-3',
           'details' => 'Boutique Jimmy Choo Anouk 120mm Escarpins Noirs Ornes De Clous en Cuir Floque et Bout Pointu Femme En Ligne',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel3.jpg',
           'images' => '["products\/shoel3.jpg","products\/shoel3.jpg","products\/shoel3.jpg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 4',
           'slug' => 'shoe-4',
           'details' => 'flame metal leaf wing high heel sandals gold',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel4.jpg',
           'images' => '["products\/shoel4.jpg","products\/shoel4.jpg","products\/shoel4.jpg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 5',
           'slug' => 'shoe-5',
           'details' => 'Jimmy Choo Luna 100mm Escarpins a Plateforme en Lame Gris Anthracite Paillete Femme Nouvelle',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel5.jpg',
           'images' => '["products\/shoel5.jpg","products\/shoel5.jpg","products\/shoel5.jpg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 6',
           'slug' => 'shoe-6',
           'details' => 'Tods lady shoes orange 166',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel6.jpg',
           'images' => '["products\/shoel6.jpg","products\/shoel6.jpg","products\/shoel6.jpg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 7',
           'slug' => 'shoe-7',
           'details' => 'Jimmy Choo, Falcon 100 leather sandals - Women',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel7.jpeg',
           'images' => '["products\/shoel7.jpeg","products\/shoel7.jpeg","products\/shoel7.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 8',
           'slug' => 'shoe-8',
           'details' => 'Gucci, Platform sneakers - Women',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel8.jpeg',
           'images' => '["products\/shoel8.jpeg","products\/shoel8.jpeg","products\/shoel8.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 9',
           'slug' => 'shoe-9',
           'details' => 'Prada, Prada Derby patent leather shoes',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel9.jpeg',
           'images' => '["products\/shoel9.jpeg","products\/shoel9.jpeg","products\/shoel9.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 10',
           'slug' => 'shoe-10',
           'details' => 'Casadei - pointed stiletto pumps - women - Leather - 40 - Black',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel10.jpeg',
           'images' => '["products\/shoel10.jpeg","products\/shoel10.jpeg","products\/shoel10.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 11',
           'slug' => 'shoe-11',
           'details' => 'Tom Ford - pointed two tone pumps - women - Leather/Brass - 38 - White',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel11.jpeg',
           'images' => '["products\/shoel11.jpeg","products\/shoel11.jpeg","products\/shoel11.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 12',
           'slug' => 'shoe-12',
           'details' => 'Charlotte Olympia - Dolly pumps - women - Leather - 40 - Black',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel12.jpeg',
           'images' => '["products\/shoel12.jpeg","products\/shoel12.jpeg","products\/shoel12.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 13',
           'slug' => 'shoe-13',
           'details' => 'Isabel Marant - Leather Cowboy Boots,white',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel13.jpeg',
           'images' => '["products\/shoel13.jpeg","products\/shoel13.jpeg","products\/shoel13.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 14',
           'slug' => 'shoe-14',
           'details' => 'Proenza Schouler, Suede and leather pumps',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel14.jpeg',
           'images' => '["products\/shoel14.jpeg","products\/shoel14.jpeg","products\/shoel14.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 15',
           'slug' => 'shoe-15',
           'details' => 'Dolce & Gabbana, Exclusive to mytheresa.com – suede plateau sandals - Women',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel15.jpeg',
           'images' => '["products\/shoel15.jpeg","products\/shoel15.jpeg","products\/shoel15.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 16',
           'slug' => 'shoe-16',
           'details' => 'Nicholas Kirkwood, Casati Pearl leather over-the-knee boots - Women',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel16.jpeg',
           'images' => '["products\/shoel16.jpeg","products\/shoel16.jpeg","products\/shoel16.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 17',
           'slug' => 'shoe-17',
           'details' => 'Isabel Marant Women Shoes Bekett Sbl Exclusive',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel17.jpeg',
           'images' => '["products\/shoel17.jpeg","products\/shoel17.jpeg","products\/shoel17.jpeg"]',
       ])->categories()->attach(10);

       Product::create([
           'name' => 'Shoe 18',
           'slug' => 'shoe-18',
           'details' => 'Saint Laurent - Candy 50 Love sandals - women - Cotton/Leather/Suede/rubber - 41 - Black',
           'price' => rand(249999, 449999),
           'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
           'image' => 'products/shoel18.jpeg',
           'images' => '["products\/shoel18.jpeg","products\/shoel18.jpeg","products\/shoel18.jpeg"]',
       ])->categories()->attach(10);



       // Select random entries to be featured
       Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);
   }

}
