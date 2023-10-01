<!DOCTYPE html>
<html lang="en">
<?php
extract( $_POST );
$competiciones = include "./atletes.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Introducció de Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<form method="post" action="271.php">
    <div class="form-group row">
        <label for="prova" class="col-4 col-form-label">Prova</label>
        <div class="col-8">
            <div class="input-group">
                <input id="prova" name="prova" placeholder="Escriu la prova" type="text" required="required"
                       class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="marca" class="col-4 col-form-label">Marca</label>
        <div class="col-8">
            <div class="input-group">
                <input id="marca" name="marca" placeholder="Marca" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="atleta" class="col-4 col-form-label">Atleta</label>
        <div class="col-8">
            <div class="input-group">
                <input id="atleta" name="atleta" placeholder="Nom de l'atleta" type="text" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="any" class="col-4 col-form-label">Any de naixement</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-birthday-cake"></i>
                    </div>
                </div>
                <input id="natalici" name="natalici" placeholder="Any de naixement" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="club" class="col-4 col-form-label">club</label>
        <div class="col-8">
            <div class="input-group">
                <input id="club" name="club" placeholder="club Atleta" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="data" class="col-4 col-form-label">Data</label>
        <div class="col-8">
            <div class="input-group">
                <input id="data" name="data" placeholder="Data prova" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="lloc" class="col-4 col-form-label">Lloc</label>
        <div class="col-8">
            <div class="input-group">
                <input id="lloc" name="lloc" placeholder="Lloc prova" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<?php
include "./270a.php";
if ( isset( $_POST["prova"] ) && isset( $_POST["marca"] ) && isset( $_POST["atleta"] ) && isset( $_POST["natalici"] ) && isset( $_POST["club"] ) && isset( $_POST["data"] ) && isset( $_POST["lloc"] ) ) {

    if ( !isProvaInArray( $competiciones ) ) {
        print "La prueba $prova no existe";
        return;
    }
    print "$prova , $marca , $atleta , $natalici , $club , $data , $lloc";
    $nuevasCompeticiones = [];
    foreach ( $competiciones as $nombreCompeticion => $competicion ) {
        if ( $nombreCompeticion == $_POST["prova"] ) {
            array_push( $nuevasCompeticiones, ["marca" => $marca, "atleta" => $atleta, "natalici" => $natalici, "club" => $club, "data" => $data, "lloc" => $lloc] );
        } else {
            array_push( $nuevasCompeticiones, $competicion );
        }
    }
    // no se como hacer para que escriba bien el fichero
    var_dump( $nuevasCompeticiones );
    $f=fopen('./atletes.php','w');
    fwrite($f,json_encode($nuevasCompeticiones));
    fclose($f);
}


function isProvaInArray( $competiciones ): bool
{
    foreach ( $competiciones as $nombreCompeticion => $competicion ) {
        if ( $nombreCompeticion == $_POST["prova"] ) {
            return true;
        }
    }
    return false;
}

?>
</body>
</html>
