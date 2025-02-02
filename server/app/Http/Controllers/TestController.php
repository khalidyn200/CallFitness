<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class TestController extends Controller
{
    protected $gymAccessories = [
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
        [
            'id' => 4,
            'name' => 'Banc de musculation pliable',
            'price' => 99.99,
            'short_description' => 'Banc de musculation pliable pour un gain de place.',
            'imageURL' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fprotfitness.com%2Fwp-content%2Fuploads%2F2018%2F09%2FBFFID10r_folded_DSF1739_600px_1024x1024.png&f=1&nofb=1&ipt=4dbfa8c4692d586fcd232721148effe3da98524c765f4d0102cc66d41410b77e&ipo=images',
            'category_id' => 1
        ],
        [
            'id' => 5,
            'name' => 'Ceinture de musculation',
            'price' => 14.99,
            'short_description' => 'Ceinture de musculation pour soutenir votre dos lors des exercices.',
            'imageURL' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.nike.com%2Fa%2Fimages%2Ft_default%2Fu7lrpmy6djluxuvhbegv%2Fceinture-de-musculation-structuree-mqWqdg.png&f=1&nofb=1&ipt=e29fa3a8fb1d0ad80f3d644f2f8b5796fc0a2a3804ad75eaab7dc1be3c41bf7f&ipo=images',
            'category_id' => 1
        ]
    ];

    public function getGymThreeProducts()
    {
        $gymAccessories = array_slice($this->gymAccessories, 0, 3);
        return view('layouts.index', compact('gymAccessories'));
    }

    public function getGymAccessories(Request $request)
    {
        $gymAccessories = $this->paginate($this->gymAccessories, $request);

        return view('products.index', compact('gymAccessories'));
    }

    public function getGymAccessoryDetails($id)
    {
        $accessorie = '';
        foreach ($this->gymAccessories as $accessory) {
            if ($accessory['id'] == $id) {
                $accessorie = $accessory;
                break;
            }
        }
        $gymAccessories = $this->gymAccessories; 
        return view('products.show', compact('accessorie', 'gymAccessories'));
    }

    private function paginate($items, $request, $perPage =3 , $page = null, $options = [])
    {
        $page = $page ?: (LengthAwarePaginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginatedItems = new LengthAwarePaginator(
            $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page,
            $options
        );

        return $paginatedItems->setPath($request->url());
    }
}
