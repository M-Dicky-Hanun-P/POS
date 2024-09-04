<?php
namespace App\Http\Controllers;

use Illuminate\http\Request;

class SaleController extends Controller{
    public function sale(){
        return view('sales.sale');
    }
}
?>