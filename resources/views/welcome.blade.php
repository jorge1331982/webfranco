<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
       <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
       <style>
           body,HTML{

               background-repeat: no-repeat;
               background-attachment: fixed;

               font-family: 'Langar', cursive;

           }
           img{
               align-content: center;
           }
       </style>

    </head>
    <body class="container">


        <div class="d-flex justify-content-end ">

            @if (Route::has('login'))
                <div class="aling-item-center mt-5">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-success"> 👉   Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success btn-lg mx-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 479 480" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m316.410156 252.570312c6.5625 9.289063 21.363282 29.519532 35.0625 43.230469 13.308594 13.308594 31.347656 26.167969 40.078125 32.109375 1.328125.902344 2.21875 2.316406 2.46875 3.902344.246094 1.585938-.171875 3.203125-1.15625 4.46875l-51.351562 66.007812c-1.933594 2.484376-5.492188 2.980469-8.03125 1.121094-12.882813-9.472656-25.234375-19.648437-37-30.480468l-43.527344 43.519531-20.269531 20.269531 2.597656 15.832031-18.089844-.339843 1.359375 17.070312-16.628906-1.792969-12.519531 12.511719-20.941406-4.191406-4.179688-20.9375 107.070312-107.070313c-3.800781-4.128906-7.519531-8.332031-11.160156-12.601562-6.730468-7.890625-13.167968-16.027344-19.320312-24.410157-1.867188-2.535156-1.375-6.09375 1.109375-8.027343l66.121093-51.421875c1.253907-.972656 2.847657-1.390625 4.417969-1.160156 1.570313.234374 2.976563 1.097656 3.890625 2.390624zm29.632813 99.269532 11.71875-15.070313-12.640625-11.058593c-9.425782-8.257813-18.296875-17.128907-26.550782-26.5625l-11.058593-12.636719-15.078125 11.726562 18.429687 35.183594zm0 0" fill="#af7df8" data-original="#f8ec7d" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m110.363281 101.648438c56.386719 50.25 140.476563 47.023437 140.476563 47.023437v-.222656c7.984375.671875 14.640625 6.382812 16.523437 14.171875 1.625 6.644531.425781 13.667968-3.3125 19.398437s-9.679687 9.660157-16.417969 10.851563v.148437l-5.101562 17.53125c-8.148438 43.347657-46.003906 74.753907-90.113281 74.753907s-81.96875-31.40625-90.117188-74.753907l-5.097656-17.53125v-.148437c-6.738281-1.191406-12.683594-5.117188-16.421875-10.851563-3.738281-5.730469-4.9375-12.753906-3.308594-19.398437 1.886719-7.808594 8.566406-13.523438 16.570313-14.179688v.578125c2.015625 1.207031 4.320312 1.84375 6.667969 1.851563 7.066406 0 12.882812-5.554688 13.199218-12.609375l1.632813-35.722657c11.613281.386719 23.238281.089844 34.820312-.890624zm0 0" fill="#ffc9a4" data-original="#ffc9a4" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m163.210938 92.789062c-17.304688 4.574219-34.996094 7.539063-52.847657 8.859376-11.582031.980468-23.207031 1.277343-34.820312.890624l-1.632813 35.722657c-.316406 7.054687-6.132812 12.609375-13.199218 12.609375-2.347657-.007813-4.652344-.644532-6.667969-1.851563v-50.621093c0-54.34375 44.054687-98.398438 98.398437-98.398438s98.398438 44.054688 98.398438 98.398438v33.953124c-59.886719-3.863281-87.628906-39.5625-87.628906-39.5625zm0 0" fill="#e48e66" data-original="#e48e66" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m196.292969 313.890625 63.898437 21.308594c3.640625 4.28125 7.359375 8.480469 11.160156 12.601562l-86.898437 86.898438h-183.953125v-49.398438c-.03125-3.714843.363281-7.425781 1.171875-11.050781.160156-.648438.320313-1.300781.5-1.941406 4.570313-16.636719 17.609375-29.636719 34.019531-34.957032l72.351563-23.460937c27.375 14.800781 60.371093 14.800781 87.75 0zm0 0" fill="#1d2122" data-original="#6fe3ff" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m108.652344 274.191406c27.296875 14.8125 60.234375 14.8125 87.53125 0v39.660156l.109375.039063c-27.378907 14.800781-60.375 14.800781-87.75 0l.109375-.039063zm0 0" fill="#efbd9c" data-original="#efbd9c" style="" class=""/><path xmlns="http://www.w3.org/2000/svg" d="m163.210938 92.789062s27.742187 35.699219 87.628906 39.5625v16.320313s-84.089844 3.226563-140.476563-47.023437c17.851563-1.320313 35.542969-4.285157 52.847657-8.859376zm0 0" fill="#cc7350" data-original="#cc7350" style="" class=""/></g></svg>Login</a>
</a>

                        <!--boton desabilitado de registro quitar solamente los comentarios-->
                        <!--@if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-light">Register</a>
                        @endif-->
                    @endif
                </div>
            @endif
        </div>
             <div>
                 <h1 class="text-center" id="title">Carrocerias Franco</h1>
             </div>
            <div class="d-flex justify-content-center">
                <img src="{{asset('img/portada.svg')}}" alt="" width="800" height="800" id="img">
                <script src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js" > </script>

<script>
    gsap.from("#title", {duration: 3, x: 300, opacity: 0, scale: 0.5,background:'green'});



     gsap.to("#img", {duration: 3, rotationX: 360,delay:2});
    </script>

            </div>
    </body>
</html>
