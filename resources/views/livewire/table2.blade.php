<table class="table mt-5" id="tabla211">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FECHA REGISTRO</th>
      <th scope="col">NUM COTIZACION</th>
      <th scope="col">EMPRESA</th>
      <th scope="col">FECHA SEGUIMIENTO</th>
      <th scope="col">STATUS</th>
      <th scope="col">ASESOR</th>
      <th scope="col">REVISION</th>
    </tr>
  </thead>
  <tbody>
      @foreach($der as $y)
    <tr>
      <th scope="row">{{$y->id}}</th>
      <td>{{$y->fecha}}</td>
      <td>{{$y->cotizacion}}</td>
      <td>{{$y->empresa}}</td>
      <td>{{$y->fech}}</td>
      <td>{{$y->status}}</td>
      <td>{{$y->asesor}}</td>
      @if($y->status == 'Seguimiento')
        <td> <span class="badge badge-warning">ok</span></td>
      @else
        <td> <span class="badge badge-danger">no seguimiento</span></td>
      @endif

    </tr>
    @endforeach
  </tbody>
</table>
