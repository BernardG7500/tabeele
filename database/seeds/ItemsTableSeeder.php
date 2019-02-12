<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
 
        $items = array(
            [   'id' => 1, 
                'title' => 'HP 15-ba051nb Azerty', 
                'beschrijving' => 'HP 15-ba051nb Azerty', 
                'foto' => 'https://image.coolblue.io/products/550141?width=170&height=170', 
                'prijs' => 550, 
                'voorraad' => 35,
                'created_at' => new DateTime, 
                'updated_at' => new DateTime],
                
            [   'id' => 2, 
                'title' => 'Lenovo IdeaPad 500-15ISK 80NT00G0MB Azerty',
                'beschrijving' => 'Lenovo IdeaPad 500-15ISK 80NT00G0MB Azerty',
                'foto' => 'https://image.coolblue.io/products/484852?width=170&height=170', 
                'prijs' => 700, 
                'voorraad' => 49,
                'created_at' => new DateTime, 
                'updated_at' => new DateTime],
                
            [   'id' => 3, 
                'title' => 'Acer Aspire ES1-731-C7TW Azerty', 
                'beschrijving' => 'Acer Aspire ES1-731-C7TW Azerty', 
                'foto' => 'https://image.coolblue.io/products/345641?width=170&height=170',
                'prijs' => 400, 
                'voorraad' => 23,
                'created_at' => new DateTime, 
                'updated_at' => new DateTime]
        );
        
        DB::table('items')->insert($items);
    }
}