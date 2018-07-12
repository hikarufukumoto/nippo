<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tired extends Model
{
  protected $table = 'tired';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,50);
   $tired = DB::table('tired')->where('id',$select)->get();

    return $tired;
  }
}