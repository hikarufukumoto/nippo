<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Impressed extends Model
{
  protected $table = 'impressed';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,15);
   $impressed = DB::table('impressed')->where('id',$select)->get();

    return $impressed;
  }
}