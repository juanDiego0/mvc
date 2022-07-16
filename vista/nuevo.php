<?php
require_once("layouts/header.php");
?>
<h1 class="tex-center">NUEVO</h1>
<form action="" method="get" name="new" class="new">
    <input type="text" placeholder="ingrese Nombre" name="nombre"></br>
    <input type="text" placeholder="ingrese Precio" name="precio"></br>
    <input type="submit" class="btn" name="btn" value="guardar"></br>
    <input type="hidden" name="m" value="guardar">
</form>
<?php
require_once("layouts/footer.php");
