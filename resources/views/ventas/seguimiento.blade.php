@extends('adminlte::page')

@section('title', 'Site-Ventas')


@section('content_header')
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="60" height="60"><g id="Filled_outline" data-name="Filled outline"><rect x="24" y="24" width="272" height="392" rx="24" ry="24" style="fill:#348fd9"/><path d="M88,456H312a24,24,0,0,0,24-24V88a24,24,0,0,0-24-24H136L64,136V432A24,24,0,0,0,88,456Z" style="fill:#60d1e0"/><path d="M136,112V64L64,136h48A24,24,0,0,0,136,112Z" style="fill:#8adbe6"/><path d="M435.716,432H268.284A28.284,28.284,0,0,1,240,403.716h0a28.284,28.284,0,0,1,8.284-20h0A26.342,26.342,0,0,0,256,365.088V280a64,64,0,0,1,64-64h64a64,64,0,0,1,64,64v85.088a26.342,26.342,0,0,0,7.716,18.628h0a28.284,28.284,0,0,1,8.284,20h0A28.284,28.284,0,0,1,435.716,432Z" style="fill:#ffb531"/><polygon points="400 168 304 168 320 216 384 216 400 168" style="fill:#fcac1f"/><path d="M445.762,393.175A54.621,54.621,0,0,0,415.46,384h-.833A54.626,54.626,0,0,0,376,400H308a20,20,0,0,0-20,20h0a19.915,19.915,0,0,0,1.726,8.105l-27.749-23.124a21.526,21.526,0,0,0-13.757-4.99l-3.149,0A21.048,21.048,0,0,0,224,421.036v.368a21.537,21.537,0,0,0,8.3,17.064c14.489,11.262,44.093,34.286,57.2,44.481A23.978,23.978,0,0,0,304.235,488H456V400Z" style="fill:#fec9a3"/><rect x="456" y="400" width="32" height="88" style="fill:#348fd9"/><path d="M37.333,422.175A32.058,32.058,0,0,1,16,392V88H32V392a16.033,16.033,0,0,0,10.667,15.091ZM272,16H48A32.036,32.036,0,0,0,16,48V72H32V48A16.019,16.019,0,0,1,48,32H272a16.033,16.033,0,0,1,15.091,10.667l15.084-5.334A32.058,32.058,0,0,0,272,16Zm56,128V88a16.019,16.019,0,0,0-16-16H144v40a32.036,32.036,0,0,1-32,32H72V432a16.019,16.019,0,0,0,16,16H216v16H88a32.036,32.036,0,0,1-32-32V136a8,8,0,0,1,2.343-5.657l72-72A8,8,0,0,1,136,56H312a32.036,32.036,0,0,1,32,32v56ZM128,83.313,83.313,128H112a16.019,16.019,0,0,0,16-16ZM160,176v24H264v16H160v24h72v16H160v24h72v16H160v24h72v16H160v24h72v16H160v24h40v16H120a24.028,24.028,0,0,1-24-24V184a24.028,24.028,0,0,1,24-24H280v16ZM144,376H112v16a8.009,8.009,0,0,0,8,8h24Zm0-40H112v24h32Zm0-40H112v24h32Zm0-40H112v24h32Zm0-40H112v24h32Zm0-40H120a8.009,8.009,0,0,0-8,8v16h32Zm16-48v16h72V128ZM304,96H160v16H304Zm58.053,176H360v-8H344v8h-2.053a21.948,21.948,0,0,0-6.94,42.769l28.926,9.642A5.947,5.947,0,0,1,362.053,336H341.947A5.954,5.954,0,0,1,336,330.053V328H320v2.053A21.973,21.973,0,0,0,341.947,352H344v8h16v-8h2.053a21.948,21.948,0,0,0,6.94-42.769l-28.926-9.642A5.947,5.947,0,0,1,341.947,288h20.106A5.954,5.954,0,0,1,368,293.947V296h16v-2.053A21.973,21.973,0,0,0,362.053,272Zm-76.679-12.012,13.842,8.024a24.229,24.229,0,0,1,8.8-8.8l-8.024-13.842A40.249,40.249,0,0,0,285.374,259.988ZM280,320h16V280H280Zm184.577-69.016,14.846-5.968c-9.039-22.479-24.554-40.421-43.689-50.522l-7.468,14.151C444.055,216.979,456.95,232.016,464.577,250.984ZM496,400v88a8,8,0,0,1-8,8H416V480h32V404.28l-6.68-4.455c-18.166-12.111-44.176-9.644-59.663,5.832A8,8,0,0,1,376,408H308a12.168,12.168,0,0,0-12,12,11.806,11.806,0,0,0,1.019,4.836A12.226,12.226,0,0,0,308,432h60v16H308a25.179,25.179,0,0,1-8.292-1.257A27.833,27.833,0,0,1,283.3,433.159l-26.438-22.033c-3.54-3.54-10.265-3.861-14.8-2.791-10.787,2.548-13.468,17.122-4.846,23.822,14.486,11.258,44.1,34.279,57.208,44.48A16.023,16.023,0,0,0,304.23,480H400v16H304.23a32.1,32.1,0,0,1-19.637-6.739c-13.105-10.2-42.713-33.214-57.2-44.475A29.424,29.424,0,0,1,216,421.4v-.36a28.907,28.907,0,0,1,17.187-26.517,36.078,36.078,0,0,1,9.436-16.461A18.389,18.389,0,0,0,248,365.09V280a72.113,72.113,0,0,1,61.172-71.185L296.41,170.53A8,8,0,0,1,304,160h96a8,8,0,0,1,7.59,10.53l-12.759,38.277A72,72,0,0,1,456,280v85.09a18.471,18.471,0,0,0,5.377,12.972,36.137,36.137,0,0,1,7.863,11.764c.3.716.568,1.442.818,2.174H488A8,8,0,0,1,496,400ZM315.1,176l10.666,32h52.468L388.9,176ZM445.49,383.675A34.583,34.583,0,0,1,440,365.09V280a55.983,55.983,0,0,0-56-56H320a56.063,56.063,0,0,0-56,56v85.09a34.4,34.4,0,0,1-10.062,24.287A20.216,20.216,0,0,0,251.6,392.2a28.876,28.876,0,0,1,2.911.487c.05.009.1.02.148.031a29.472,29.472,0,0,1,12.446,6.115l14.449,12.042A27.966,27.966,0,0,1,308,392h64.82a63.115,63.115,0,0,1,41.81-16h.83A62.4,62.4,0,0,1,445.49,383.675ZM480,408H464v72h16Z"/></g></svg>


@stop

@section('content')

<h1 class="text-center text-orange font-weight-bold mb-4 display-4">SEGUIMIENTO COTIZACION</h1>
<livewire:scripts>
 @livewire('seguimiento-component')





@stop

@section('css')
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

@stop

@section('js')


  <script>

    $('#tabla211').DataTable()

   </script>

@stop