<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Special extends Model
{
  protected $table = 'special';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,14);
   $special = DB::table('special')->where('id',$select)->get();

    return $special;
  }
}