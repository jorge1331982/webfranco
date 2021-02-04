<table class="table mt-5" id="gas">
    <thead class="thead-dark">
      <tr>


        <th scope="col">VEHICULO</th>
        <th scope="col">MARCA</th>
        <th scope="col">MODELO</th>
        <th scope="col">AÑO</th>
        <th scope="col">PLACAS</th>




      </tr>
    </thead>
    <tbody>
        @foreach($vehi as $l)
      <tr>

        <th scope="row">{{$l->vehiculo}}</th>
        <th scope="row">{{$l->marca}}</th>
        <th scope="row">{{$l->modelo}}</th>
        <th scope="row">{{$l->year}}</th>
        <th scope="row">{{$l->placas}}</th>





        @endforeach







      </tr>

    </tbody>
  </table>
