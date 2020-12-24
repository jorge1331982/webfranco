<table class="table mt-5" id="tabla33">
  <thead class="table table-striped table-hover ">
    <tr class="table-active">
      <th scope="col">ID</th>
      <th scope="col">COTIZACION</th>
      <th scope="col">EMPRESA</th>
      <th scope="col">CONTACTO</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">TIPO SERVICIO</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">ASESOR</th>
    </tr>
  </thead>
  <tbody>
      @foreach($reg as $item)
    <tr>

      <td>{{$item->id}}</td>
      <td>{{$item->cotizacion}}</td>
      <td>{{$item->empresa}}</td>
      <td>{{$item->contacto}}</td>
      <td>{{$item->telefono1}}</td>
      <td>{{$item->tipo_servicio}}</td>
      <td>{{$item->productos}}</td>
      <td>{{$item->asesor}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
