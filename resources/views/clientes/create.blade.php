@extends("layouts.app2")


@section("contenido")
    <h3>Insertar cliente</h3>



    <form action="{{route('guardar_cliente')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
        </div>
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa">
        </div>
        <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Contacto">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
        </div>
        <div class="form-group">
            <label for="ciudad">Ciudad</label>
            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>


@endsection
