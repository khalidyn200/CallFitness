<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function getGymThreeProducts()
    {
        $gymAccessories = [
            [
                'id' => 1,
                'name' => 'Haltères réglables',
                'price' => 49.99,
                'short_description' => 'Haltères réglables pour un entraînement complet à domicile.',
                'imageURL' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pngarts.com%2Ffiles%2F3%2FDumbbell-PNG-Transparent-Image.png&f=1&nofb=1&ipt=df2f53c6a79708627ef4a9b6b57c3cb52996cc25e6d0ff3267c9d13567a9f88e&ipo=images',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Tapis de yoga',
                'price' => 29.99,
                'short_description' => 'Tapis de yoga antidérapant pour une pratique confortable.',
                'imageURL' => 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpluspng.com%2Fimg-png%2Fyoga-mat-png-b-yoga-679.png&f=1&nofb=1&ipt=b42fd6977a806c57a5656c23d5249b68b1bd560b53898ab165b4e61b12176360&ipo=images',
                'category_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'Balles de fitness',
                'price' => 19.99,
                'short_description' => 'Balles de fitness pour améliorer votre équilibre et coordination.',
                'imageURL' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.mytopmarket.com%2Fwp-content%2Fuploads%2F2021%2F02%2FCapture_d_ecran_2021-01-26_a_17.11.35-removebg-preview.png&f=1&nofb=1&ipt=6a0222a512ce13b6d02d1009b26c4f219d6a3b984ed6a19b978e49c0f2077d32&ipo=images',
                'category_id' => 3
            ],
        ];
        return view('layouts.index', compact('gymAccessories'));
    }

    public function getGymAccessories()
    {
        $gymAccessories = [
            [
                'id' => 1,
                'name' => 'Haltères réglables',
                'price' => 49.99,
                'short_description' => 'Haltères réglables pour un entraînement complet à domicile.',
                'imageURL' => 'halteres_reglables.jpg',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Tapis de yoga',
                'price' => 29.99,
                'short_description' => 'Tapis de yoga antidérapant pour une pratique confortable.',
                'imageURL' => 'tapis_yoga.jpg',
                'category_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'Balles de fitness',
                'price' => 19.99,
                'short_description' => 'Balles de fitness pour améliorer votre équilibre et coordination.',
                'imageURL' => 'balles_fitness.jpg',
                'category_id' => 3
            ],
            [
                'id' => 4,
                'name' => 'Banc de musculation pliable',
                'price' => 99.99,
                'short_description' => 'Banc de musculation pliable pour un gain de place.',
                'imageURL' => 'banc_musculation.jpg',
                'category_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Ceinture de musculation',
                'price' => 14.99,
                'short_description' => 'Ceinture de musculation pour soutenir votre dos lors des exercices.',
                'imageURL' => 'ceinture_musculation.jpg',
                'category_id' => 1
            ]
        ];
        return view('products.index', compact('gymAccessories'));
    }

    public function getGymAccessoryDetails($id)
    {
        $gymAccessories = [
            [
                'id' => 1,
                'name' => 'Haltères réglables',
                'price' => 49.99,
                'short_description' => 'Haltères réglables pour un entraînement complet à domicile.',
                'imageURL' => 'halteres_reglables.jpg',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Tapis de yoga',
                'price' => 29.99,
                'short_description' => 'Tapis de yoga antidérapant pour une pratique confortable.',
                'imageURL' => 'tapis_yoga.jpg',
                'category_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'Balles de fitness',
                'price' => 19.99,
                'short_description' => 'Balles de fitness pour améliorer votre équilibre et coordination.',
                'imageURL' => 'balles_fitness.jpg',
                'category_id' => 3
            ],
            [
                'id' => 4,
                'name' => 'Banc de musculation pliable',
                'price' => 99.99,
                'short_description' => 'Banc de musculation pliable pour un gain de place.',
                'imageURL' => 'banc_musculation.jpg',
                'category_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Ceinture de musculation',
                'price' => 14.99,
                'short_description' => 'Ceinture de musculation pour soutenir votre dos lors des exercices.',
                'imageURL' => 'ceinture_musculation.jpg',
                'category_id' => 1
            ]
        ];
        $accessorie = '';
        foreach ($gymAccessories as $accessory) {
            if ($accessory['id'] == $id) {
                $accessorie = $accessory;
                break;
            }
        }
        return view('products.show', compact('accessorie'));
    }
}
