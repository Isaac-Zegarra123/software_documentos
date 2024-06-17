<form action="{{ route('documentos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="documentoModal" tabindex="-1" aria-labelledby="documentoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="documentoModalLabel">Agregar Nuevo Documento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fecha">Fecha:</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                            <div class="mb-3">
                                <label for="nro_carta" class="form-label">Nro Carta:</label>
                                <input type="text" class="form-control" id="nro_carta" name="nro_carta" required>
                            </div>
                            <div class="mb-3">
                                <label for="procedencia" class="form-label">Procedencia:</label>
                                <select class="form-select" id="procedencia" name="procedencia" required>
                                    @include('layouts.carreras')
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombre_archivo" class="form-label">Nombre Archivo:</label>
                                <input type="text" class="form-control" id="nombre_archivo" name="nombre_archivo" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="detalle" class="form-label">Detalle:</label>
                                <textarea class="form-control" id="detalle" name="detalle"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="repositorio" class="form-label">Repositorio:</label>
                                <input type="file" class="form-control" id="repositorio" name="repositorio" accept="image/*,application/pdf" required>
                            </div>
                            <div class="mb-3">
                                <img id="imagePreview" src="#" alt="Vista previa de la imagen" style="max-width: 100%; max-height: 200px; display: none;">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</form>
