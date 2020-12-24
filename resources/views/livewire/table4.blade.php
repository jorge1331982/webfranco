<table class="table mt-5" id="tabla199">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FECHA </th>
        <th scope="col">ORDEN SERVICIO</th>
        <th scope="col">TIPO UNIDAD</th>
        <th scope="col">TIPO PRODUCTO</th>
        <th scope="col">ASESOR</th>
        <th scope="col">FECHA SALIDA UNIDAD</th>
        <th scope="col">RESPONSABLE PROD</th>
      </tr>
    </thead>
    <tbody>
        @foreach($mer as $y)
      <tr>
        <th scope="row">{{$y->id}}</th>
        <td>{{$y->fecha}}</td>
        <td>{{$y->Oservicio}}</td>
        <td>{{$y->tipo_unidad}}</td>
        <td>{{$y->servicio}}</td>
        <td>{{$y->vendedor}}</td>
        <td>{{$y->fechasalida}}</td>
        <td>{{$y->responsable}}</td>


      </tr>
      @endforeach
    </tbody>
  </table>
