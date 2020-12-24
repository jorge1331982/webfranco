<table class="table mt-5" id="tabla1990">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FECHA </th>
        <th scope="col">ORDEN SERVICIO</th>
        <th scope="col">TIPO UNIDAD</th>
        <th scope="col">TIPO SERVICIO</th>
        <th scope="col">TIPO TRABAJO</th>
        <th scope="col">ASESOR</th>
        <th scope="col">CLIENTE</th>
      </tr>
    </thead>
    <tbody>
        @foreach($mer as $y)
      <tr>
        <th scope="row">{{$y->id}}</th>
        <td>{{$y->fecha}}</td>
        <td>{{$y->Oservicio}}</td>
        <td>{{$y->tipo_unidad}}</td>
        <td>{{$y->tipo_servicio}}</td>
        <td>{{$y->tipo_trabajo}}</td>
        <td>{{$y->vendedor}}</td>
        <td>{{$y->Cliente}}</td>



      </tr>
      @endforeach
    </tbody>
  </table>
