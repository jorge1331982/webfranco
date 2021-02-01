@extends('adminlte::page')

@section('title', 'Site-Ventas')


@section('content_header')


<div class="d-flex justify-content-end">


<h6 class="text-center"> User: {{ Auth::user()->name }}</h6>



</div>
<div class="d-flex justify-content-center" id="logo">

    <h2 class="circle"  style="color:rgb(120, 243, 120)">Hola</h2>
    <h2 class="circle" style="color:rgb(120, 243, 120)">Bienvenidos</h2>
    <h2 class="circle"  style="color:rgb(120, 243, 120)">Carrocerias</h2>
    <h2 class="circle"  style="color:rgb(120, 243, 120)">Franco</h2>
</div>




<div class="d-flex justify-content-center">
  <img src="{{asset('img/portada.svg')}}" alt=""width="680px" height="680px" id="imagen">
</div>


@stop

@section('content')

<script src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js" > </script>

<script>
      let tween=gsap.timeline({repeat:1,yoyo:true});
     tween.from('.circle', {
        duration: .3,
        y: -200, //'random(-500,500)',
        scale: 0,
        stagger: 1.5,
        delay: 3 // it's better to use timeline
    });

    let tl=gsap.timeline();
      tl.from('#imagen',{
          duration:4,
          rotate:360
      });
</script>














@stop

@section('css')
<link rel="preconnect" href="https://fonts.gstatic.com">


<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
<style>
     body,HTML{


            font-family: 'Langar', cursive;

             }
             .circle {
                display: inline-block;
                margin-left: 30px;
            }

            .circle:nth-of-type(1) {
                background: black;
            }

            .circle:nth-of-type(2) {
                background:black;
            }

            .circle:nth-of-type(3) {
                background:black;
            }

            .circle:nth-of-type(4) {
                background:black;
            }

</style>



@stop

@section('js')

@stop
