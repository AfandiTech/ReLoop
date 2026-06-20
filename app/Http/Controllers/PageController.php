<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Laptops & Workstations', 'icon' => 'fa-laptop'],
            ['title' => 'Smartphones', 'icon' => 'fa-mobile-screen'],
            ['title' => 'Tablets & Gadgets', 'icon' => 'fa-tablet-screen-button'],
        ];

        return view('welcome', compact('products'));
    }
}