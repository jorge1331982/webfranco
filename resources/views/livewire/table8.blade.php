<table class="table mt-5" id="mel">
    <thead class="thead-dark">
      <tr>

        <th scope="col">FECHA</th>
        <th scope="col">NOMBRE DEL PRODUCTO</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">SKU</th>
        <th scope="col">MEDIDA</th>
        <th scope="col">STOCK</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    <tbody>
        @foreach($fro as $l)
      <tr>
        <th scope="row">{{$l->created_at}}</th>
        <th scope="row">{{$l->nombre}}</th>
        <th scope="row">{{$l->sku}}</th>
        <th scope="row">{{$l->cate}}</th>
        <th scope="row">{{$l->medida}}</th>
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
