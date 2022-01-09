<?php include '../includes/header.php'  ?>



<div class="container">
    <form class="card" style="padding: 20px; margin-top: 10px;">
        <div class="mb-3">
            <label for="" class="form-label">Nombre Empresa</label>
            <input type="text" class="form-control" placeholder="Nombre Empresa">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre Vendedor</label>
            <input type="text" class="form-control" placeholder="Nombre Vendedor">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="tel" class="form-control" placeholder="Telefono">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Producto</label>
            <select class="form-select">
                <option value="">Seleccione</option>
                <option value="">dato1</option>
                <option value="">dato1</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Detalle</label>
            <textarea name="" cols="3" rows="2" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>



<?php include '../includes/footer.php' ?>