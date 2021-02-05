<table class="table mt-5" id="luk">
    <thead class="thead-dark">
      <tr>


        <th scope="col">FECHA</th>
        <th scope="col">EMPRESA</th>
        <th scope="col">VENDEDOR</th>
        <th scope="col">SERIE PRODUCTO</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">PRODUCTO</th>
        <th scope="col">FECHA (entrada-produccion)</th>
        <th scope="col">FECHA(entrega-cliente)</th>
        <th scope="col">FECHA(termino-produccion)</th>
        <th scope="col">ESTATUS</th>
        <th scope="col">DEFINICION</th>

      </tr>
    </thead>
    <tbody>
        @foreach($rex as $k)
      <tr>
        <th scope="row">{{$k->fecha}}</th>
        <th scope="row">{{$k->empresa}}</th>
        <th scope="row">{{$k->vendedor}}</th>
        <th scope="row">{{$k->seriep}}</th>
        <th scope="row">{{$k->cliente}}</th>
        <th scope="row">{{$k->producto}}</th>
        <th scope="row">{{$k->fechaentradaProduccion}}</th>
        <th scope="row">{{$k->fechaProgramadaEntrega}}</th>
        <th scope="row">{{$k->fechaEntrega}}</th>
        <th scope="row">{{$k->estatus}}</th>

        @if ($k->estatus =='entregado')
        <td> <span class="badge badge-warning">OK</span></td>
        @else
          <td> <span class="badge badge-primary">DEMORA</span></td>

        @endif





        @endforeach
      </tr>

    </tbody>
  </table>
