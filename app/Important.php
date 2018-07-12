<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Important extends Model
{
  protected $table = 'important';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = 1;
   $important = DB::table('important')->where('id',$select)->get();

    return $important;
  }
}