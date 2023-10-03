<?php
$records = include "atletes.php";
$clubColum = array_column_ext( $records, "club", -1 );
$atletaColum = array_column_ext( $records, "atleta", -1 );
$ciutatColum = array_column_ext( $records, "lloc", -1 );
?>
    <h3>El club que más se repite</h3>
<?php
print_r( laureado( array_count_values( $clubColum ) ) );
?>
    <br>
    <h3>El atelta que más se repite</h3>
<?php
print_r( laureado( array_count_values( $atletaColum ) ) );
?>
    <br>
    <h3>El lloc que más se repite</h3>
<?php
print_r( laureado( array_count_values( $ciutatColum ) ) );

$dataColum = array_column_ext( $records, "data", -1 );
var_dump( $dataColum );
?>
    <br>
    <h3>La data más antigua es </h3>
<?php
print_r( vell( $dataColum ) );


function laureado( $array )
{
    $max = 0;
    foreach ( $array as $nombrePropiedad => $vecesRepetidas ) {
        if ( $max <= $vecesRepetidas ) {
            $max = $vecesRepetidas;
        }
    }

    foreach ( $array as $nombrePropiedad => $vecesRepetidas ) {
        if ( $max == $vecesRepetidas ) {
            return [$nombrePropiedad => $max];
        }
    }
}

function vell( $array )
{
    $soloDates = [];

    foreach ( $array as $nombre => $valor ) {
        array_push( $soloDates, fecha_inglesa( $valor ) );
    }
    return min( $soloDates );
}

function any( $date )
{
    return substr( $date, 0, 4 );
}

function fecha_inglesa( $fecha ): string
{
    return join( "/", array_reverse( explode( ".", $fecha ), true ) );
}


function array_column_ext( $array, $columnkey, $indexkey = null )
{
    $result = array();
    foreach ( $array as $subarray => $value ) {
        if ( array_key_exists( $columnkey, $value ) ) {
            $val = $array[$subarray][$columnkey];
        } else if ( $columnkey === null ) {
            $val = $value;
        } else {
            continue;
        }

        if ( $indexkey === null ) {
            $result[] = $val;
        } elseif ( $indexkey == -1 || array_key_exists( $indexkey, $value ) ) {
            $result[($indexkey == -1) ? $subarray : $array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}