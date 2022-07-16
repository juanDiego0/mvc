<?php
require_once("layouts/header.php");
?>
<a class="btn" href="index.php?m=nuevo">NUEVO</a>
<table>
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>ACCION</td>
    </tr>
    <tbody>
        <?php
        if (!empty($dato)) :
            foreach ($dato as $key => $value)
                foreach ($value as $v) : ?>
                <tr>
                    <td><?php echo $v['id'] ?> </td>
                    <td> <?php echo $v['nombre'] ?></td>
                    <td>
                        <a class="btn" href="index.php?m=editar&id=<?php echo $v['id'] ?>">EDITAR</a>
                        <a class="btn" href="index.php?m=eliminar&id=<?php echo $v['id'] ?>" onclick="return confirm('Su dato se eliminara Permanentemente, ¿Desea Continuar?'); false">ELIMINAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="3">No hay Registros</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>
<?php
require_once("layouts/footer.php");
