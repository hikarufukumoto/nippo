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


<div class="zentai">
@section('content')
<div class="container1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                      
            
                        <div class="workonon">■Thoughts on Today■<br>Today, I worked on {{ $name }}.
                        
                        
                        
                         @foreach($happy as $d)
                          <span class="result">{{$d->sentence}} </span>
                         @endforeach
                         @foreach($interesting as $a)
                          <span class="result">{{$a->sentence}}</span>
                         @endforeach
                         @foreach($expect as $b)
                          <span class="result"> {{$b->sentence}}</span>
                         @endforeach
                         @foreach($excited as $c)
                          <span class="result"> {{$c->sentence}}</span>
                         @endforeach
                          @foreach($satisfied as $e)
                         <span class="result">{{$e->sentence}}</span>
                         @endforeach
                          @foreach($tired as $f)
                          <span class="result">  {{$f->sentence}}</span>
                         @endforeach
                          @foreach($confused as $g)
                         <span class="result">{{$g->sentence}}</span>
                         @endforeach
                          @foreach($worried as $h)
                         <span class="result">{{$h->sentence}}</span>
                         @endforeach
                         @foreach($hard as $i)
                         <span class="result">{{$i->sentence}}</span>
                         @endforeach
                         @foreach($nervous as $j)
                         <span class="result"> {{$j->sentence}}</span>
                         @endforeach
                         @foreach($impressed as $k)
                          <span class="result">{{$k->sentence}}</span>
                         @endforeach
                         @foreach($important as $l)
                          <span class="result">{{$l->sentence}}</span>
                         @endforeach
                         @foreach($special as $m)
                          <span class="result">{{$m->sentence}}</span>
                         @endforeach Thank you.<br><br>
                         
                         
                         
          ■Next Business Day's Goals■<br>
                         
          <div class="smart1">SMART Goal 1: @foreach($smartgoal as $n){{$n->sentence}}@endforeach
          <br>➣	Why→ @foreach($why1 as $p){{$p->sentence}}@endforeach</br>
          </div>

          <div class="smart2">SMART Goal 2: @foreach($smartgoal2 as $l){{$l->sentence}}@endforeach
          <br>➣	Why→ @foreach($why2 as $q){{$q->sentence}}@endforeach</br>
          </div>
 
          <div class="smart3">SMART Goal 3: @foreach($smartgoal3 as $o){{$o->sentence}}@endforeach
          <br>➣ Why→ @foreach($why3 as $r){{$r->sentence}}@endforeach</br>
          </div>
          
          <div class="tyuui">
           <br>※この結果はあくまで参考ですので、使用に関して如何なる責任も負いません。
          </div>
                         </div>
                       
    </div>
  </div>
</div>
              <a class="btnback" href="{{ url('/home') }}">Back</a>
</div>

@endsection


