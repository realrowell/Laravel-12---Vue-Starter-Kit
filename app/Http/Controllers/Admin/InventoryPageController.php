<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InventoryPageController extends Controller
{
    public function ProductsPage()
    {

        return Inertia::render('inventories/Products');
    }

    public function ProductCreatePage()
    {

        return Inertia::render('inventories/ProductCreate');
    }

    public function CategoriesPage()
    {
        $data = [
            'categories' => [
                [
                    'cat_code' => str()->random(8),
                    'cat_name' => 'Laptop',
                    'is_active' => true
                ],
                [
                    'cat_code' => str()->random(8),
                    'cat_name' => 'Desktop Computer',
                    'is_active' => true
                ],
                [
                    'cat_code' => str()->random(8),
                    'cat_name' => 'Graphics Card',
                    'is_active' => true
                ],
                [
                    'cat_code' => str()->random(8),
                    'cat_name' => 'Processor',
                    'is_active' => true
                ],
                [
                    'cat_code' => str()->random(8),
                    'cat_name' => 'Motherboard',
                    'is_active' => true
                ],
                [
                    'cat_code' => str()->random(8),
                    'cat_name' => 'Mouse & Keyboard',
                    'is_active' => true
                ],
            ]
        ];
        return Inertia::render('inventories/Categories', $data);
    }

    public function CategoryCreate()
    {
        return Inertia::render('inventories/CategoryCreate');
    }
}
