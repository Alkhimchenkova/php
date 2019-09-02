<?php
// $_POST, $_GET
$R=$_GET['R'];
$G=$_GET['G'];
$B=$_GET['B'];

$result='good weather';
echo $result;
echo '<form action ="#" method="get">';
echo '<input type="text" name="R">';
echo '<input type="text" name="G">';
echo '<input type="text" name="B">';
echo '<input type="submit">';
echo '</form>';
echo '<span style="background: ">'
?>

<span style="background: rgb(<?php echo "$R, $G, $B"?>); padding:40px;">Hello</span>
