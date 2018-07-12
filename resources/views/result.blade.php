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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
                    <div>
                         @foreach($happy as $d)
                          {{$d->sentence}}
                         @endforeach
                         
                         @foreach($interesting as $a)
                          {{$a->sentence}}
                         @endforeach
                         
                         @foreach($expect as $b)
                          {{$b->sentence}}
                         @endforeach
                         
                         @foreach($excited as $c)
                          {{$c->sentence}}
                         @endforeach
                         
                          @foreach($satisfied as $e)
                          {{$e->sentence}}
                         @endforeach
                         
                          @foreach($tired as $f)
                          {{$f->sentence}}
                         @endforeach
                         
                          @foreach($confused as $g)
                          {{$g->sentence}}
                         @endforeach
                          
                          @foreach($worried as $h)
                          {{$h->sentence}}
                         @endforeach
                         
                         @foreach($hard as $i)
                          {{$i->sentence}}
                         @endforeach
                         
                         @foreach($nervous as $j)
                          {{$j->sentence}}
                         @endforeach
                         
                         @foreach($impressed as $k)
                          {{$k->sentence}}
                         @endforeach
                         
                         @foreach($important as $l)
                          {{$l->sentence}}
                         @endforeach
                         
                         @foreach($special as $m)
                          {{$m->sentence}}
                         @endforeach
                         
                         
                    </div>
    </div>
</div>

@endsection


