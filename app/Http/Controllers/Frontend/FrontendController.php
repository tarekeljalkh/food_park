<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SectionTitle;
use App\Models\Slider;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index ()
    {
        $sliders = Slider::where('status', 1)->get();
        $sectionTitles = SectionTitle::all()->pluck('value', 'key');
        $whyChooseUs = WhyChooseUs::where('status', 1)->get();
        $categories = Category::where(['status' => 1, 'show_at_home' => 1])->get();
        return view('frontend.home.index', compact('sliders', 'sectionTitles', 'whyChooseUs', 'categories'));
    }

    public function showProduct($slug)
    {
        $product = Product::with(['productImages', 'productSizes', 'productOptions'])->where(['slug' => $slug, 'status' => 1])->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->take(8)->latest()->get();
        return view('frontend.pages.product', compact('product', 'relatedProducts'));
    }
}
