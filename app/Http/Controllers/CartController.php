<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Cart;

class CartController extends Controller
{

    

    public function addItem (){
        $data = array(

               array(
                       'id'      => 1,
                       'quantity'     => 1,
                       'price'   => 00.00,
                       'name'    => 'skin glow bleaching',
                    ),
               array(
                       'id'      => 3,
                       'quantity'     => 2,
                       'price'   => 00.00,
                       'name'    => 'sutla bleaching products'
                    ),
               array(
                       'id'      => 5,
                       'quantity'     => 1,
                       'price'   => 00.00,
                       'name'    => 'benars skin tighten'
                    )
            );
       return view('view', ['data' => $data]);

     }


     public function checkout(){
      return view('info');
     }
    }