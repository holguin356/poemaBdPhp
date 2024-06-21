<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 p-5">
            <form class="p-4 bg-light border border-2 rounded border-success" action="Controller/agregar_poema.php"
                method="post">
                <h1 class="d-flex justify-content-center">Agregar Poema:</h1>
                <div class="mb-3">
                    <label for="txttitulo" class="form-label">Título:</label>
                    <input type="text" class="form-control" id="txtTitulo" name="titulo"
                        placeholder="Romance de la Luna, Luna" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="txtAutor" class="form-label">Autor:</label>
                    <input type="text" class="form-control" id="txtAutor" name="autor"
                        placeholder="Federico García Lorca" required>
                </div>
                <div class="mb-3">
                    <label for="txtPoema" class="form-label">Poema:</label>
                    <textarea class="form-control" id="txtPoema" name="poema" 
                    placeholder="En la noche más oscura
un lucero se ha perdido.
La luna tiene frío." rows="4" maxlength="255" required></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Crear Poema</button>
                </div>
            </form>
        </div>
    </div>
</div>