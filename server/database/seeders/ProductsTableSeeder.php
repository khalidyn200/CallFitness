<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            [
                'title' => 'Smartphone',
                'short_description' => 'Un smartphone avec un écran de haute qualité.',
                'description' => 'Ce smartphone dispose de nombreuses fonctionnalités, y compris une caméra haute résolution, un processeur rapide, et une grande capacité de stockage.',
                'price' => 699.99,
                'pictures' => '/public/pictures/smartphone.jpg',
                'categorie_id' => 1,
            ],
            [
                'title' => 'Ordinateur Portable',
                'short_description' => 'Un ordinateur portable puissant pour tous vos besoins.',
                'description' => 'Cet ordinateur portable est équipé d\'un processeur rapide, d\'une grande quantité de RAM et d\'un disque dur SSD.',
                'price' => 1199.99,
                'pictures' => '/public/pictures/ordinateur.jpeg',
                'categorie_id' => 1,
            ],
            [
                'title' => 'Tablette',
                'short_description' => 'Une tablette légère et performante.',
                'description' => 'Cette tablette offre une excellente portabilité, un écran de haute qualité, et une longue autonomie.',
                'price' => 499.99,
                'pictures' => '/public/pictures/tablette.jpeg',
                'categorie_id' => 1,
            ],
            [
                'title' => 'Télévision 4K',
                'short_description' => 'Une télévision 4K ultra haute définition.',
                'description' => 'Cette télévision 4K offre une qualité d\'image exceptionnelle avec des couleurs vives et des détails nets.',
                'price' => 899.99,
                'pictures' =>'/public/pictures/television.jpeg',
                'categorie_id' =>1,
            ],
            [
                'title' => 'Caméra Numérique',
                'short_description' => 'Une caméra numérique avec une résolution élevée.',
                'description' => 'Cette caméra numérique est parfaite pour capturer des photos et des vidéos de haute qualité.',
                'price' => 299.99,
                'pictures' => '/public/pictures/camera.webp',
                'categorie_id' =>1,
            ],
        ]);
    }
}
