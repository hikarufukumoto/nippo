<?php

namespace App\Http\Controllers;


use App\Interesting;

use Request;

class InterestingController extends Controller
{
  public function index()
  {

    
    if (Request::has('interesting')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Interesting;
    // データ取得
    $interesting = $md->getData();

    // ビューを返す
    return view('/result', ['data' => $interesting]);
  }
  


}
}
 