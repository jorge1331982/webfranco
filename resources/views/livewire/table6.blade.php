<table class="table mt-5" id="jort">
    <thead class="thead-dark">
      <tr>

        <th scope="col">ORDEN DE SERVICIO </th>
        <th scope="col">ASESOR</th>
        <th scope="col">FOLIO REGISTRO</th>
        <th scope="col">FECHA</th>
        <th scope="col">QUIEN ENTREGO UNIDAD</th>
        <th scope="col">QUIEN RECIBE UNIDAD</th>
        <th scope="col">REVISION CALIDAD</th>
        <th scope="col">VOBO SALIDA</th>
      </tr>
    </thead>
    <tbody>
      @foreach($jut as $d)
      <tr>
        <th scope="row">{{$d->Oservicio}}</th>
        <th scope="row">{{$d->vendedor}}</th>
        <th scope="row">{{$d->folio}}</th>
        <th scope="row">{{$d->fecha}}</th>
        <th scope="row">{{$d->quien_entrega}}</th>
        <th scope="row">{{$d->quien_recibe}}</th>
        <th scope="row">{{$d->revision_calidad}}</th>
        <th scope="row">{{$d->vobo_salida}}</th>
         @endforeach





      </tr>

    </tbody>
  </table>
