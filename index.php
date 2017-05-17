<?php
error_reporting(E_ALL);

include('includes/functions.php');


// initials arrays $a and $b
$a = getMatrix2x2();
$b = getMatrix3x4();

$totalPathsA = getMatrixPaths($a);
$totalPathsB = getMatrixPaths($b);

echo "<br> This matrixA have " . $totalPathsA ." paths.";
echo "<br> This matrixB have " . $totalPathsB ." paths.";

?>


















