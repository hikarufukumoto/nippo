<!DOCTYPE html> 
 <html lang="jp"> 
 
 
   <head> 
 
 
     <meta charset="utf-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
     <meta name="description" content=""> 
     <meta name="author" content=""> 
 
 
     <title>NIPPO</title> 

 
     <!-- Bootstrap core CSS --> 
     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
 
 
     <!-- Custom fonts for this template --> 
     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'> 
     <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> 
 
 
     <!-- Plugin CSS --> 
     <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> 

 
     <!-- Custom styles for this template --> 
     <link href="css/test.css" rel="stylesheet"> 
 
 
   </head> 
@extends('layouts.app')



@section('content')
<div class="container1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                        Today, we worked on 
                         @foreach($happy as $d)
                          <div class="result">{{$d->sentence}} </div>
                         @endforeach
                         
                         @foreach($interesting as $a)
                          <div class="result">{{$a->sentence}}</div>
                         @endforeach
                         
                         @foreach($expect as $b)
                          <div class="result"> {{$b->sentence}}</div>
                         @endforeach
                         
                         @foreach($excited as $c)
                          <div class="result"> {{$c->sentence}}</div>
                         @endforeach
                         
                          @foreach($satisfied as $e)
                         <div class="result">{{$e->sentence}}</div>
                         @endforeach
                         
                          @foreach($tired as $f)
                          <div class="result">  {{$f->sentence}}</div>
                         @endforeach
                         
                          @foreach($confused as $g)
                         <div class="result">{{$g->sentence}}</div>
                         @endforeach
                          
                          @foreach($worried as $h)
                         <div class="result">{{$h->sentence}}</div>
                         @endforeach
                         
                         @foreach($hard as $i)
                         <div class="result">{{$i->sentence}}</div>
                         @endforeach
                         
                         @foreach($nervous as $j)
                         <div class="result"> {{$j->sentence}}</div>
                         @endforeach
                         
                         @foreach($impressed as $k)
                          <div class="result">{{$k->sentence}}</div>
                         @endforeach
                         
                         @foreach($important as $l)
                          <div class="result">{{$l->sentence}}</div>
                         @endforeach
                         
                         @foreach($special as $m)
                          <div class="result">{{$m->sentence}}</div>
                         @endforeach
                         
                         
                   
    </div>
</div>

@endsection


