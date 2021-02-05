<table class="table mt-5" id="rendi">
    <thead class="thead-dark">
      <tr>


        <th scope="col">FECHA</th>
        <th scope="col">PLACAS</th>
        <th scope="col">VEHICULO</th>
        <th scope="col">EMPLEADO</th>
        <th scope="col">KM INICIAL</th>
        <th scope="col">KM FINAL</th>
        <th scope="col">DIFERENCIA (KM)</th>
        <th scope="col">COSTO GASOLINA</th>
        <th scope="col">LITROS CARGADOS</th>
        <th scope="col">GASTO</th>

      </tr>
    </thead>
    <tbody>
        @foreach($jak as $k)
      <tr>
        <th scope="row">{{$k->fecha}}</th>
        <th scope="row">{{$k->placas}}</th>
        <th scope="row">{{$k->vehiculo}}</th>
        <th scope="row">{{$k->empleado}}</th>
        <th scope="row">{{$k->kminicial}}</th>
        <th scope="row">{{$k->kmfinal}}</th>
        <th scope="row">{{$k->kmfinal - $k->kminicial}}</th>
        <th scope="row">${{$k->costogas}}</th>
        <th scope="row">{{$k->litros}}</th>
        <th scope="row">${{$k->costogas * $k->litros}}</th>




        @endforeach
      </tr>

    </tbody>
  </table>
