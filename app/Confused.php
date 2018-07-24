<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Confused extends Model
{
  protected $table = 'confused';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select =rand (1,47);
   $confused = DB::table('confused')->where('id',$select)->get();

    return $confused;
  }
}