<!DOCTYPE html>
<html lang="en">
<?php
extract($_POST);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST)) {
        echo 'Introdueix valors numèrics';
    } else {
        ?>
        <form method="post" action="236.php">
            <?php
            for ($i = 1; $i <= $cantidadPersonas; $i++) {
                ?>
                <div class="form-group row">
                    <label for="quantitat" class="col-4 col-form-label">Nombre</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="nombre" name="nombre" placeholder="Escriu el nombre" type="text" required="required"
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="quantitat" class="col-4 col-form-label">Altura</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="altura" name="altura" placeholder="Escriu la altura" type="text" required="required"
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="quantitat" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="email" name="email" placeholder="Escriu el email" type="text" required="required"
                                class="form-control" />
                        </div>
                    </div>
                </div>

                <?php
            }
    }
    ?>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
</body>

</html>