<?php include '../includes/header.php'  ?>

<?php include("../../Controller/proveedorController.php ")  ?>

<?php $model = new proveedor();
$rows = $model->listarProveedor();
$rowsProduct = $model->listarProductos();
?>
<div class="container">
    <table class="table">
        <?php foreach ($rows as $row) { ?>
            <tr>
                <th>Empresa</th>
                <th>Vendedor</th>
                <th>Telefono</th>
            </tr>

            <tr>
                <td><?php echo $row['nom_empresa'] ?></td>
                <td><?php echo $row['nom_vendedor'] ?></td>
                <td><?php echo $row['tel_vendedor'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <form class="card" style="padding: 20px; margin-top: 10px;" method="post" action="<?php $model->insertar(); ?>">
        <div class="mb-3">
            <label for="" class="form-label">Nombre Empresa</label>
            <input type="text" class="form-control" name="empresa" placeholder="Nombre Empresa">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre Vendedor</label>
            <input type="text" class="form-control" name="vendedor" placeholder="Nombre Vendedor">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="tel" class="form-control" name="telefono" placeholder="Telefono">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Producto</label>
            <select class="form-select" name="producto">
                <?php foreach ($rowsProduct as $row) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['nom_product'] ?></option>
                <?php } ?>
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