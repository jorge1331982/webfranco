<table class="table mt-5"  id="derek">
    <thead class="thead-dark">
      <tr>

        <th scope="col">FECHA</th>
        <th scope="col">ORDEN DE TRABAJO</th>
        <th scope="col">SKU</th>
        <th scope="col">CATEGORIA</th>
        <th scope="col">NOMBRE PRODUCTO</th>
        <th scope="col">CANTIDAD</th>
        <th scope="col">TIPO UNIDAD</th>
        <th scope="col">CLIENTE</th>
      </tr>
    </thead>
    <tbody>
        @foreach($ger as $l)
      <tr>
        <th scope="row">{{$l->fecha}}</th>
        <th scope="row">{{$l->Oservicio}}</th>
        <th scope="row">{{$l->sku}}</th>
        <th scope="row">{{$l->categoria}}</th>
        <th scope="row">{{$l->nombreP}}</th>
        <th scope="row">{{$l->cantidad}}</th>
        <th scope="row">{{$l->tipo_unidad}}</th>
        <th scope="row">{{$l->Cliente}}</th>
        @endforeach







      </tr>

    </tbody>
  </table>
