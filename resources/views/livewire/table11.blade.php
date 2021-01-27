<table class="table mt-5" id="compy">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">CORREO</th>
        <th scope="col">telefono</th>
        <th scope="col">RAZON SOCIAL</th>
        <th scope="col">CIUDAD</th>


      </tr>
    </thead>
    <tbody>
        @foreach($reg as $l)
      <tr>
        <th scope="row">{{$l->id}}</th>
        <th scope="row">{{$l->nombreC}}</th>
        <th scope="row">{{$l->correo}}</th>
        <th scope="row">{{$l->telefono}}</th>
        <th scope="row">{{$l->razonsocial}}</th>
        <th scope="row">{{$l->ciudad}}</th>



        @endforeach







      </tr>

    </tbody>
  </table>
