@extends("layouts.app2")


@section("contenido")
    <h3>Editar cliente </h3>
    <form action="{{url('/clientes/')}}/{{$cliente->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código" value="{{$cliente->codigo}}">
        </div>
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" value="{{$cliente->empresa}}">
        </div>
        <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Contacto" value="{{$cliente->contacto}}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" value="{{$cliente->direccion}}">
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" value="{{$cliente->ciudad}}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" value="{{$cliente->telefono}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/clientes')}}" class="btn btn-secondary">Cancelar</a>
@endsection
