<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Satisfied extends Model
{
  protected $table = 'satisfied';

  protected $guarded = array('id');

  public $timestamps = false;
  


  public function getData()
  {
   // $select = rand(1,2); //idの最大値を入力する
   $select = rand(1,50);
   $satisfied = DB::table('satisfied')->where('id',$select)->get();

    return $satisfied;
  }
}