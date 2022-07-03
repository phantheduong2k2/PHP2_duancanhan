<?php

namespace App\Controllers;

use App\Models\BaseModel;
use App\Models\Product;

class CartController extends BaseModel
{

    public function Cart()
    {
        $Products = Product::all();
        $productId = $_GET['id'];
       
        $product = Product::find(['id', '=', $productId])->first();
    //     $proData = [
    //         'id' => $productId->id,
    //         'ten_hh' => $productId->ten_hh,
    //        'image' => $productId->image,
    //        'image' => $productId->image,
    //        'gia' => $productId->gia,
    //        'mota' => $productId->mota,
    //        'soluong' => $productId->soluong
    //  ];
        $arrPr=(array) $product;
        $arrSS=(array)$_SESSION['cart'];
        if (empty( $arrSS) || !array_key_exists( $productId,  $arrSS)) {
             $arrSS = $arrPr ;
        } else {
      $arrSS[$productId]  ;

                 $arrSS[$productId] = $arrPr;
        }
   
        render('layoutCart.blade', ['page' => 'cart.blade',  'pr' =>$arrSS ]);
        //   include_once './app/views/hang-hoa/index.php';
        
    }
   public function CartCt(){
    
   
    render('layoutCart.blade', ['page' => 'cart.blade',  'pr' =>$arrPr ]);

   }

    public function remove()
    {
        $productId = $_GET['id'];
        unset($_SESSION['cart'][$productId]);

        header('location: ' . BASE_URL . 'cart/show');
    }
}
