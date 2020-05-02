<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class,5)->create();
        factory(App\Model\Product::class, 5)->create();
        factory(App\Model\Review::class,10)->create();

        // if want per product two review

    	// factory(App\Model\Product::class,5)->create()->each(function (App\Model\Product $product) {
        //    factory(App\Model\Review::class,2)->create(['product_id' => $product->id]);
    	// });

    }
}
