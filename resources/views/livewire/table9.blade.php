<table class="table mt-5" id="entra">
    <thead class="thead-dark">
      <tr>

        <th scope="col">FECHA</th>
        <th scope="col">ORDEN DE COMPRA</th>
        <th scope="col">PROVEDOR</th>
        <th scope="col">CANTIDAD (arribo)</th>
        <th scope="col">PRODUCTO</th>
        <th scope="col">STOCK ALMACEN</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($rox as $l)
      <tr>
        <th scope="row">{{$l->fecha}}</th>
        <th scope="row">{{$l->Ocompra}}</th>
        <th scope="row">{{$l->provedor}}</th>
        <th scope="row">{{$l->cantida}}</th>
        <th scope="row">{{$l->nombre}}</th>
        <th scope="row">{{$l->stock}}</th>
        @if ($l->stock <=10)
        <td> <span class="badge badge-warning">SUMINISTRAR</span></td>
        @else
          <td> <span class="badge badge-primary">EN RANGO</span></td>
        @endif

        @endforeach







      </tr>

    </tbody>
  </table>
