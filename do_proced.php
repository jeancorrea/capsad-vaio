<?php include "header.php"; ?>

<?php

//Definição de variáveis POST
$procedimento = $_POST['procedimento'];
$profissionais = $_POST['profissionais'];
$prof = implode(", ", $profissionais);
$outros = $_POST['outros'];
$dp_d = $_POST['dp_d'];
$dp_m = $_POST['dp_m'];
$dp_a = $_POST['dp_a'];
$data = $dp_a."-".$dp_m."-".$dp_d;
$membros = $_POST['membros'];
$array = explode(", ", $membros);
$size = sizeof($array) - 1;
for ($x = 0; $x<$size; $x++) {
	$membro = $array[$x];

	echo $procedimento."<br />";
	echo $prof.", ".$outros."<br />";
	echo $data."<br />";
	echo $membro."<br />";
	echo "<br /><br />";
}

?>
<?php include "footer.php"; ?>