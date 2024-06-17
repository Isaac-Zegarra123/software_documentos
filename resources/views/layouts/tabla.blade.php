<!-- resources/views/layouts/tabla.blade.php -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div style="overflow-x:auto;">
    <table class="table table-striped table-hover">
        <thead>
            <tr class="table-title">
                <th>ID</th>
                <th>Fecha</th>
                <th>Nro Carta</th>
                <th>Procedencia</th>
                <th>Detalle</th>
                <th>Nombre Archivo</th>
                <th>Repositorio</th>
                <th>Acción</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($documentos as $documento)
                <tr>
                    <td>{{ $documento->id }}</td>
                    <td>{{ $documento->fecha }}</td>
                    <td>{{ $documento->nro_carta }}</td>
                    <td>{{ $documento->procedencia }}</td>
                    <td>{{ $documento->detalle }}</td>
                    <td>{{ $documento->nombre_archivo }}</td>
                    <td><a href="{{ Storage::url($documento->repositorio) }}" target="_blank">Ver archivo</a></td>
                </tr>
            @endforeach
            <!-- Más filas aquí -->
        </tbody>
    </table>
</div>

