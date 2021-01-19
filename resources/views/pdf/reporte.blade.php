<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>



 <style>

   body{

     background: url("img/fin.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
      background-size: cover;

   }
   .titulo{
     margin-top: 95;
     margin-left: 10;
   }
   .logo{
       margin-top: 40;
       margin-left: 110;

   }
  .imagen{
    margin-top:40 ;
  }
  .terminos{
    font-size: 9;
    font-style: bold;
    line-height : 5px;
    margin-left: 10;
    font-weight: bold;
    margin-top: 6;
  }


.alerta1{
  float: left;
  width: 240;
  height: 180;
  background-color: #F9EAD1;
  margin-left: 15;
  margin-top: 0;
  border-radius: 15;
  text-align: center;
  font-size: 10;





}
.alerta2{
  float: right;
  width: 240;
  height: 120;
  background-color: #E1F9D1;
  margin-right: 20;
  margin-top: 55;
  border-radius: 15;
  text-align: center;




}
.alerta3{
  float: right;
  border-radius: 15;
  text-align: center;
  margin-right: 30;
  width: 220;
  height: 19;

}

.ultimo{
  margin-top: 209;
  border-radius: 15;



}
.observa{
  color: #BA4A00 ;
  padding-left: 5;

}
.observa2{
  color: #3498DB ;
  padding-left: 3;
  line-height : 10px;
  margin-top: 15;

}
li{
  font-size: 11;
}


 </style>
<body>


   <h2 class="titulo">Cotizaciones</h2>
   <p style="font-size:8;margin-left:6; " class="font-weight-bold">Por medio de la presente someto a su apreciable consideracion la cotizacion para:</p>
      <div style="float:right;margin-right:130;margin-top:19;line-height : 5px; font-size:10">
         <p class="font-italic font-weight-bold">Ecatepec Estado de Mexico a: {{$nota->fecha}}</p>
         <p class="font-italic font-weight-bold">Folio: {{$nota->folio}}</p>
         <p class="font-italic font-weight-bold">Atencion a: {{$nota->n_cliente}}</p>
         <p class="font-italic font-weight-bold">Correo:  {{$nota->correo}}</p>
         <p class="font-italic font-weight-bold">Telefono: {{$nota->telefono}}</p>
         <p class="font-italic font-weight-bold">Asesor: {{$nota->asesor}}</p>
      </div>

<br />
<br />
<br />
<br />

     <div class="imagen">

   <img   src="{{public_path("img/".$nota->imagen)  }}" alt="" style="width: 450px; height: 250px;  border: white  solid 3px;float:right; margin-right:70; border:none;background-color: transparent;"><h3 style="margin-top: 80;font: 150% sans-serif; margin-left:10;" class="text-success font-italic font-weight-bold">{{$nota->producto}}</h3>
   </div>
   <br />
<br />
<br />
<br />
<br />


  <div>

    <b  class="terminos font-italic font-weight-bold"> *Vigencia de la Cotizacion durante 15 dias</b>
    <p  class="terminos  font-italic font-weight-bold "> *LAB Carrocerias Franco</p>
  </div>


  <div class="alerta3">
     <div class="alert alert-primary rounded-circle" role="alert">
       <h5 class="font-italic font-weight-bold">Precio</h5>
       <p>${{$nota->precio}}mxn</p>

      </div>
   </div>

  <br />
  <br />


  <div class="alerta1">
  <div>
   <h4 class="observa font-italic">Sugeridos Adicionales</h4>
   <p style="text-align: center; margin-left:2;margin-right:2;">${{$nota->sugeridos}} pesos MAS IVA</p>
</div>

  </div>

   <div class="alerta2">
   <div>
     <h4 class="observa2 font-italic">Dimensiones Exteriores</h4>
     <P style="line-height : 7px; margin-top:15;">*Largo........{{$nota->largo}}cm</P>
     <P  style="line-height: 7px;"> Ancho........{{$nota->ancho}}cm</P>
     <P  style="line-height: 7px;">*Alto ........{{$nota->alto}}cm</P>
     <P  style="line-height: 7px;">*Copete ........{{$nota->copete}}cm</P>

</div>
   </div>

  <div class="ultimo">
     <h3 class="text-success text-center font-italic" style="font-size: 25;">Caracteristicas:</h3>

      <ul class="">
         <h5 class="font-italic font-weight-bold">Estructura:</h5>
          <li>Perfil de acero de alta resistencia calibre {{$nota->calibres}} rolado en frío para uso rudo. </li>
          <li>Largueros calibre {{$nota->calibres}}</li>
          <li>Cargadores calibre {{$nota->calibres}}</li>
            <li>Piso de duela metálica calibre {{$nota->calibres}} </li>
            <li> Primer anticorrosivo y acabado final en partes metálicas con pintura en esmalte color blanco.</li>

         <h5 class="mt-2 font-italic font-weight-bold">Caracteristicas Interiores y Exteriores:</h5>
          <li>Luz blanca interior de led, conectada a los cuartos de la unidad. </li>
          <li>Forro interior con triplay de 6 milímetros en lados, frente y puertas con una capa de barniz.</li>
          <li>4 líneas de amarre de redondo de ½ pulgada por lado. </li>
          <li>Zoclo anti-impacto perimetral de {{$nota->intandext}} centímetros de altura, fabricado con lámina calibre {{$nota->calibres}}</li>
          <li>Forro exterior, de lámina de aluminio color blanco wash calibre 19 de importación con o sin
            remaches de golpe. </li>
          <li>Luz exterior, se instalan las originales de la unidad</li>
          <li>Luces de led de navegación de caja y defensa de acuerdo a la norma 068 de la Secretaría de
            Comunicaciones y Transportes. </li>


         <h5 class="mt-2 font-italic font-weight-bold">Techo:</h5>
         <li>Techo fabricado en una sola pieza de aluminio natural calibre {{$nota->techo}}, sellado y engargolado.</li>
         <li>Borda superior e inferior, totalmente de aluminio extruido. </li>
         <li>Con cascos de aluminio en el frente superior de la caja para protección. Esquineros y frente forrados con acero inoxidable calibre 26.</li>

          <div style="margin-top:100;">
         <h5 class=" mt-2 font-italic font-weight-bold" style="margin-top:50;">Puertas:</h5>
         <li>Dos puertas traseras de apertura tipo bandera con cerrojo tipo tráiler y gasket perimetral doble
          labio para el sellado. </li>
         <li>Un reten de seguridad por puerta.</li>
        </div>


         <h5 class="mt-2 font-italic font-weight-bold">Instalacion:</h5>
         <li>Dos loderas.</li>
         <li>Topes de hule. </li>
         <li>Cinta reflejante bicolor. </li>
         <li>Cinta precaución color amarillo/ negro. </li>
         <li>Dos pasamanos en marco trasero.</li>
         <li>• Huella de aluminio anti-derrapante en estribo central trasero. </li>
         <li>{{$nota->accesorios}}</li>


      </ul>


  </div>



</body>
</html>
