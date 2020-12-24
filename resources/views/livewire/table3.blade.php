<table class="table mt-5" id="tabla800">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">FECHA </th>
        <th scope="col">ORDEN SERVICIO</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">TIPO UNIDAD</th>
        <th scope="col">TIPO PRODUCTO</th>
        <th scope="col">PRECIO</th>
        <th scope="col">ASESOR</th>
      </tr>
    </thead>
    <tbody>
        @foreach($vent as $y)
      <tr>
        <th scope="row">{{$y->id}}</th>
        <td>{{$y->fecha}}</td>
        <td>{{$y->Oservicio}}</td>
        <td>{{$y->Cliente}}</td>
        <td>{{$y->tipo_unidad}}</td>
        <td>{{$y->Tipo_Producto}}</td>
        <td>{{$y->precio}}</td>
        <td>{{$y->vendedor}}</td>


      </tr>
      @endforeach
    </tbody>
  </table>
