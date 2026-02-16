<?php

namespace App\Http\Controllers\UiFramework;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UiElementsPageController extends Controller
{
    public function AlertsPage()
    {
        return Inertia::render('inventories/ProductCreate');
    }
    public function AvatarsPage() {}
    public function BadgesPage() {}
    public function ButtonsPage() {}
    public function AlertCardsPagesPage() {}
    public function CarouselsPage() {}
    public function ImagesPage() {}
    public function LinksPage() {}
}
