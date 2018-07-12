<?php

namespace App\Http\Controllers;

use App\Happy;
use App\Interesting;
use App\Expect;
use App\Excited;
use App\Satisfied;
use App\Tired;
use App\Confused;
use App\Worried;
use App\Hard;
use App\Nervous;
use App\Impressed;
use App\Important;
use App\Special;

use Request;

class HappyController extends Controller
{
  public function index()
  {
    //dd(Request::all());
    
    $data = [
      "happy" =>[],
      "interesting"=>[],
      "expect"=>[],
      "excited"=>[],
      "satisfied"=>[],
      "tired"=>[],
      "confused"=>[],
      "worried"=>[],
      "hard"=>[],
      "nervous"=>[],
      "impressed"=>[],
      "important"=>[],
      "special"=>[],
      ];
    
    if (Request::has('happy')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Happy;
    // データ取得
    $happy = $md->getData();
    $data['happy'] = $happy;
    }

    if (Request::has('interesting')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Interesting;
    // データ取得
    $interesting = $md->getData();
    $data['interesting'] = $interesting;
    } 
    
    if (Request::has('expect')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Expect;
    // データ取得
    $expect = $md->getData();
    $data['expect'] = $expect;
    } 
    
     if (Request::has('excited')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Excited;
    // データ取得
    $excited = $md->getData();
    $data['excited'] = $excited;
    } 
    
     if (Request::has('satisfied')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Satisfied;
    // データ取得
    $satisfied = $md->getData();
    $data['satisfied'] = $satisfied;
    }
    
     if (Request::has('tired')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Tired;
    // データ取得
    $tired = $md->getData();
    $data['tired'] = $tired;
    } 
    
    if (Request::has('confused')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Confused;
    // データ取得
    $confused = $md->getData();
    $data['confused'] = $confused;
    } 
    
    if (Request::has('worried')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Worried;
    // データ取得
    $worried = $md->getData();
    $data['worried'] = $worried;
    } 
    
    if (Request::has('hard')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Hard;
    // データ取得
    $hard = $md->getData();
    $data['hard'] = $hard;
    }
    
    if (Request::has('nervous')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Nervous;
    // データ取得
    $nervous = $md->getData();
    $data['nervous'] = $nervous;
    }
    
     if (Request::has('impressed')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Impressed;
    // データ取得
    $impressed = $md->getData();
    $data['impressed'] = $impressed;
    }
    
     if (Request::has('important')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Important;
    // データ取得
    $important = $md->getData();
    $data['important'] = $important;
    }
    
    
    if (Request::has('special')) {
    
    // Frameworksモデルのインスタンス化
    $md = new Special;
    // データ取得
    $special = $md->getData();
    $data['special'] = $special;
    }
    
    // ビューを返す
    return view('/result',$data);
    

}
}