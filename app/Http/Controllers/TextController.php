<?php

namespace App\Http\Controllers;

use App\Text;

use Request;

class TextController extends Controller
{
  public function index()
  {
    $positive = Request::input('positive');
    return view('/result', compact('positive'));
    
    
    // Frameworksモデルのインスタンス化
    //$md = new Text;
    // データ取得
    //$data = $md->getData();

    // ビューを返す
    //return view('/result', ['data' => $data]);
  }
  
  public function store(){
    //
  }
  
  public function edit(){
    //
  }
  
  public function destroy(){
    //
  }
  
}

 