<?php

use Illuminate\Database\Seeder;

use App\Product;
use App\Brand;
use App\Customer;
use App\Provider;

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
        Brand::truncate();
        Product::truncate();
        Customer::truncate();
        Provider::truncate();

        Brand::create(['id' => 1,'name' => 'Kundali']);
        Brand::create(['id' => 2,'name' => 'Naturela']);

        Product::create(['name' => 'VINAGRE CIDRA DE MANZANA 500','brand_id' =>1]);
        Product::create(['name' => 'TORTA MIX (MEZCLA SIN GLUTEN) 250 G','brand_id' => 1]);
        Product::create(['name' => 'Té SPIRUTé VERDE 45 G','brand_id' => 1]);
        Product::create(['name' => 'Té VERDE MATCHA, MATCHA PREMIUM - GRADO EXCLUSIVO 50','brand_id' => 1]);
        Product::create(['name' => 'INFUSION SURTIDA SABORES FRUTALES 17.4 G','brand_id' => 1]);
        Product::create(['name' => 'INFUSIóN HERBAL LIGEREZA','brand_id' => 1]);
        Product::create(['name' => 'Té VERDE MATCHA, MATCHA PREMIUM - GRADO BáSICO 50 G','brand_id' => 1]);
        Product::create(['name' => 'Té SPIRUTé ROJO 45 G','brand_id' => 2]);
        Product::create(['name' => 'INFUSIóN HERBAL LIGEREZA','brand_id' => 2]);
        Product::create(['name' => 'Té NEGRO PODER','brand_id' => 2]);

        Customer::create(['name' => 'Alejandro']);
        Customer::create(['name' => 'Carlos']);
        Customer::create(['name' => 'Jorge']);

        Provider::create(['name' => 'Provider 1']);
        Provider::create(['name' => 'Provider 2']);
    }
}
