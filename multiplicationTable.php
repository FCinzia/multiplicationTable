<?php 
  if (isset($_GET['source'])) {
highlight_file($_SERVER['SCRIPT_FILENAME']);
exit;
  }
?>
<html>
  <head>
    <title> Multiplication Table </title>
  </head>
<body>

<form method="GET" action="assignment7form.php">
 <p>Enter Size Multiplication Table:  <input type="text" name="size"></p>
 <p><input type="submit"></p>
 </form>   

<?php 
$size = 10;
$size = $_REQUEST['size'];

$rows = $size;
$columns = $size;

//****************************************
// Check if the size of table is <= 10
// first for statement is to output rows
// second for statement for columns
//****************************************

if ($size <= 10){ 
  echo '<table border="1">';
  for ($r = 1; $r <= $rows; $r++) {
      echo '<tr>';
      echo "<th> $r </th>";
      for ($c = 1; $c <= $columns; $c++) { ;
         echo sprintf('<td>%d x %d = %d</td>', $r, $c, $c * $r);
      }
      echo '</tr>';
  }
  echo '</table>';
}

else
  echo "Please enter number <= 10"; 
?>

   </body>
 </head>   
</html>