<?php

namespace App\Http\Controllers;

use App\Text;

class TextController extends Controller
{
  public function index()
  {
    // Frameworksモデルのインスタンス化
    $md = new Text;
    // データ取得
    $data = $md->getData();

    // ビューを返す
    return view('/result', ['data' => $data]);
  }
}