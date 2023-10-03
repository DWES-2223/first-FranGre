<?php
$records = include "atletes.php";
$clubColum = array_column_ext( $records, "club", -1 );
$atletaColum = array_column_ext( $records, "atleta", -1 );
$ciutatColum = array_column_ext( $records, "lloc", -1 );

var_dump( laureado( array_count_values( $clubColum ) ) );
var_dump( laureado( array_count_values( $atletaColum ) ) );
var_dump( laureado( array_count_values( $ciutatColum ) ) );

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