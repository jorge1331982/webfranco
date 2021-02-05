<table class="table mt-5" id="feder">
    <thead class="thead-dark">
      <tr>


        <th scope="col">FECHA</th>
        <th scope="col">FOLIO</th>
        <th scope="col">UNIDAD</th>
        <th scope="col">ANCHO</th>
        <th scope="col">ALTO</th>
        <th scope="col">LARGO</th>
        <th scope="col">COPETE</th>
        <th scope="col">ADICIONALES</th>


      </tr>
    </thead>
    <tbody>
        @foreach($tri as $k)
      <tr>
        <th scope="row">{{$k->fecha}}</th>
        <th scope="row">{{$k->folio}}</th>
        <th scope="row">{{$k->unidad}}</th>
        <th scope="row">{{$k->ancho}}</th>
        <th scope="row">{{$k->alto}}</th>
        <th scope="row">{{$k->largo}}</th>
        <th scope="row">{{$k->copete}}</th>
        <th scope="row">{{$k->adicionales}}</th>







        @endforeach
      </tr>

    </tbody>
  </table>
