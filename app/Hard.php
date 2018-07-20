<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Hard extends Model
{
  protected $table = 'hard';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,48);
    $hard= DB::table('hard')->where('id',$select)->get();

    return $hard;
  }
}