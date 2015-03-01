<?php
// Include CForm
include('../../autoloader.php');

$array = array(0 => array(
    'titel1' => 'value1',
    'titel2' => 'value2',
    'titel3' => 'value3',
),  1 => array(
    'titel1' => 'value1',
    'titel2' => 'value2',
    'titel3' => 'value3',
));




$table = new \phpe\HTMLTable\CTable();

$res = $table->getTable($array, 'cssClass');

$table->setTableHeading(array('new title1', 'new title2', 'new title3'), 'cssClass');

$res2 = $table->getTable($array, 'cssClass');
?>


<!doctype html>
<meta charset=utf8>
<title>CTable</title>
<h1>Print table with not modification to table &lt;th&gt; </h1>
<?=$res?>
<h1>Print table with modification to table &lt;th&gt; </h1>
<?=$res2?>

