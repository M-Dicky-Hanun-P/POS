<?php
namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function foodbeverage(){
        return view('produk.produk')
            ->with('category','food beverage');
    }

    public function beautyhealth(){
        return view('produk.produk')
            ->with('category','beauty health');
    }

    public function homecare(){
        return view('produk.produk')
            ->with('category','home care');
    }
    
    public function babykid(){
        return view('produk.produk')
            ->with('category','baby kid');
    }
}
?>