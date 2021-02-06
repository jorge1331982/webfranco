<table class="table mt-5" id="luk">
    <thead class="thead-dark">
      <tr>


        <th scope="col">FECHA</th>
        <th scope="col">FOLIO</th>
        <th scope="col">UNIDAD</th>
        <th scope="col">VENDEDOR</th>
        <th scope="col">SERIE PRODUCTO</th>
        <th scope="col">PRODUCTO</th>
        <th scope="col">PRODUCTO</th>
        <th scope="col">ESTATUS</th>
        <th scope="col">DETALLE</th>

      </tr>
    </thead>
    <tbody>
        @foreach($rex as $k)
      <tr>
        <th scope="row">{{$k->fecha}}</th>
        <th scope="row">{{$k->folio}}</th>
        <th scope="row">{{$k->unidad}}</th>
        <th scope="row">{{$k->vendedor}}</th>
        <th scope="row">{{$k->seriep}}</th>
        <th scope="row">{{$k->cliente}}</th>
        <th scope="row"> {{$k->producto}} </th>
        <th scope="row">{{$k->estatus}}</th>
        <th><a href="{{route('detallado',$k->id)}}" type="button" class="btn btn-warning">detalle</a></th>
        @endforeach


      </tr>

    </tbody>
  </table>
