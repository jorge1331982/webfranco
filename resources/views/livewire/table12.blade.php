<table class="table mt-5" id="llamada">
    <thead class="thead-dark">
      <tr>

        <th scope="col">FECHA</th>
        <th scope="col">EMPRESA</th>
        <th scope="col">CONTACTO</th>
        <th scope="col">TELEFONO</th>
        <th scope="col">CORREO</th>
        <th scope="col">REQUERIMIENTO</th>
        <th scope="col">ASESOR</th>



      </tr>
    </thead>
    <tbody>
        @foreach($red as $l)
      <tr>
        <th scope="row">{{$l->fecha}}</th>
        <th scope="row">{{$l->empresa}}</th>
        <th scope="row">{{$l->contacto}}</th>
        <th scope="row">{{$l->telefono}}</th>
        <th scope="row">{{$l->correo}}</th>
        <th scope="row">{{$l->requerimiento}}</th>
        <th scope="row">{{$l->asesor}}</th>




        @endforeach







      </tr>

    </tbody>
  </table>
