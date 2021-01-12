<table class="table mt-5" id="comp">
    <thead class="thead-dark">
      <tr>

        <th scope="col">FECHA</th>
        <th scope="col">ORDEN DE COMPRA</th>
        <th scope="col">PROVEDOR</th>
        <th scope="col">CANTIDAD</th>
        <th scope="col">PRODUCTO</th>


      </tr>
    </thead>
    <tbody>
        @foreach($rvt as $l)
      <tr>
        <th scope="row">{{$l->fechac}}</th>
        <th scope="row">{{$l->Ocompra}}</th>
        <th scope="row">{{$l->provedorc}}</th>
        <th scope="row">{{$l->cantidadM}}</th>
        <th scope="row">{{$l->nombreM}}</th>



        @endforeach







      </tr>

    </tbody>
  </table>
