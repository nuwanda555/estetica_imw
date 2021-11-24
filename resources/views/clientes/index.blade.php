@extends("layouts.app2")


@section("contenido")
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            border-radius: 20px;
            padding: 50px;
            margin: 50px;
        }

    </style>


<script>
    $(document).ready(function() {
        $('#tabla_clientes').DataTable();
    } );
</script>




</head>
<body>
    <h1>Clientes</h1>

    @if(count($clientes)>0)

        <a href=" {{url('/clientes/create')}}" class="btn btn-primary">Nuevo cliente</a>
        <table id="tabla_clientes" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Empresa</th>
                    <th>Teléfeono</th>
                    <th>Contacto</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->codigo}}</td>
                        <td>{{$cliente->empresa}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->contacto}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->ciudad}}</td>
                        <td><a href="{{url('/clientes')}}/{{$cliente->id}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>
                 {{--   <td><a href="{{route("borrar_cliente",["cliente" => $cliente->id])}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>  --}}
                        <td><a href="{{url('/clientes')}}/{{$cliente->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay clientes</h1>
    @endif


@endsection




