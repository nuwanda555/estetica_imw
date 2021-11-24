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
        $('#tabla_proveedores').DataTable();
    } );
</script>




</head>
<body>
    <h1>proveedores</h1>

    @if(count($proveedores)>0)

        <a href=" {{url('/proveedores/create')}}" class="btn btn-primary">Nuevo Proveedor</a>
        <table id="tabla_proveedores" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Empresa</th>
                    <th>Contacto</th>
                    <th>Dirección</th>
                    <th>Cargo contacto</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $Proveedor)
                    <tr>
                        <td>{{$Proveedor->empresa}}</td>
                        <td>{{$Proveedor->contacto}}</td>
                        <td>{{$Proveedor->direccion}}</td>
                        <td>{{$Proveedor->cargo_contacto}}</td>
                        <td><a href="{{url('/proveedores')}}/{{$Proveedor->id}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>
                 {{--   <td><a href="{{route("borrar_Proveedor",["Proveedor" => $Proveedor->id])}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>  --}}
                        <td><a href="{{url('/proveedores')}}/{{$Proveedor->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay proveedores</h1>
    @endif


@endsection




