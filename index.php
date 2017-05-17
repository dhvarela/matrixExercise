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

function getMatrix2x2 () {
    $a = array();
    $a[0][0] = 1;
    $a[0][1] = 1;
    $a[1][0] = 1;
    $a[1][1] = 1;

    return $a;
}

/*
 * DATA 2 - EXAMPLE
 *
3
4
1 1 1
1 1 1
1 1 1
1 1 1
*/

function getMatrix3x4 () {
    $a = array();
    $a[0][0] = 1;
    $a[0][1] = 1;
    $a[0][2] = 0;
    $a[1][0] = 1;
    $a[1][1] = 1;
    $a[1][2] = 1;
    $a[2][0] = 0;
    $a[2][1] = 1;
    $a[2][2] = 1;
    $a[3][0] = 0;
    $a[3][1] = 1;
    $a[3][2] = 1;

    return $a;
}

function getMatrixPaths($a) {

    $paths = 0;

    if (count($a) == 1 && count ($a[0]) == 1){
        $paths++;
        //return $paths;
    }

    $x = 0;
    $y = 0;

    if ($a[0][0] == 1) {
        // create sub-matrix A (turn x right) and sub-matrix B (turn y bottom)
        $subMatrixA = getSubMatrix ($a, $x+1, $y);
        $subMatrixB = getSubMatrix ($a, $x, $y+1);

        if($subMatrixA) {
            $paths += getMatrixPaths($subMatrixA);
        }

        if($subMatrixB) {
            $paths += getMatrixPaths($subMatrixB);
        }

    }



    return $paths;
}

function getSubMatrix($a, $i, $j) {

    if (isset($a[$i][$j])) {

        $submatrix  = array();
        $width      = count ($a);
        $height     = count ($a[$i]);

        $ii = 0;


        for ($m = $i; $m < $width; $m++) {

            $jj = 0;
            for ($n = $j; $n < $height; $n++) {

                $submatrix[$ii][$jj] = $a[$m][$n];
                $jj++;

            }

            $ii++;

        }

        return $submatrix;

    } else {
        return false;
    }
}


// initial array $a
$a = getMatrix2x2();
$b = getMatrix3x4();

$totalPathsA = getMatrixPaths($a);
$totalPathsB = getMatrixPaths($b);

echo "<br> This matrixA have " . $totalPathsA ." paths.";
echo "<br> This matrixB have " . $totalPathsB ." paths.";

?>


















