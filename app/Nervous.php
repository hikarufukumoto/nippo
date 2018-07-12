<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Nervous extends Model
{
  protected $table = 'nervous';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,19);
   $nervous = DB::table('nervous')->where('id',$select)->get();

    return $nervous;
  }
}