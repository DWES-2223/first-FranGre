<!DOCTYPE html>
<html lang="en">
<?php
extract($_POST)
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($cantidad)) {
        ?>
        <form method="post" action="224.php">
            <?php
            for ($i = 1; $i <= $cantidad; $i++) {
                ?>
                <div class="form-group row">
                    <label for="nom" class="col-4 col-form-label">Numero</label>
                    <div class="col-8">
                        <div class="input-group">
                            <input id="cantidad" name="cantidad <?= $i ?>" placeholder="Escribe la cantidad" type="text"
                                required="required" class="form-control" />
                        </div>
                    </div>
                </div>
                <?php
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
        <?php
    } else {
        $sumaTotal = 0;
        foreach ($_POST as $numero) {
            if (is_numeric($numero)) {
                $sumaTotal += $numero;
            }

        }
        echo $sumaTotal;
    }
    ?>
</body>

</html>