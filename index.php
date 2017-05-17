<?php
error_reporting(E_ALL);

/*
 * DATA 1 - EXAMPLE
 *
2
2
1 1
1 1
*/




function getMatrixPaths($a) {

    foreach ($a as $x=>$i) {

        foreach ($i as $y=>$j){

            if ($j == 1) {
                // create sub-matrix A
                $matrixA = getSubMatrix ($a, $x+1, $y);

            }
        }
    }
}

function getSubMatrix($a, $i, $j) {

    if (isset ($a[$i]) && isset($a[$j])){

        $submatrix  = array();
        $width      = count ($a);
        $height     = count ($a[$i]);

        for ($m = $i; $m < $width; $m++) {

            for ($n = $j; $n < $height; $n++) {

                $submatrix[$m][$n] = $a[$m][$n];

            }

        }

        return $submatrix;

    }else{
        return false;
    }

}

// initial array $a
$a = array();
$a[0][0] = 1;
$a[0][1] = 1;
$a[1][0] = 1;
$a[1][1] = 1;

$totalPaths = getMatrixPaths($a);

echo "This matrix have " . $totalPaths ." paths.";


?>


















