<table class="table mt-5" id="derek">
    <thead class="thead-dark">
      <tr>

        <th scope="col">FECHA</th>
        <th scope="col">ORDEN DE TRABAJO</th>
        <th scope="col">SOLICITANTE</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">CLIENTE</th>
        <th scope="col">CANTIDAD (solicitada)</th>
        <th scope="col">STOCK (material)</th>
        <th scope="col">STATUS</th>



      </tr>
    </thead>
    <tbody>
        @foreach($jose as $l)
      <tr>
        <th scope="row">{{$l->fecha}}</th>
        <th scope="row">{{$l->Oservicio}}</th>
        <th scope="row">{{$l->sku}}</th>
        <th scope="row">{{$l->categoria}}</th>
        <th scope="row">{{$l->Cliente}}</th>
        <th scope="row">{{$l->cantidad}}</th>
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
