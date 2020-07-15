<?php
	require_once('conexion.php');
	conectar();

function departamentos(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql = mysql_query("SELECT * FROM departamentos");
	while($row = mysql_fetch_assoc($sql)){
	  	echo "<option value = '".$row["IdDepart"]."'>".$row["NomDep"]."</option> \n";
		}
}

function especie(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql3 = mysql_query("SELECT * FROM especies");
	while($row3 = mysql_fetch_assoc($sql3)){
	  	echo "<option value = '".$row3["idespecie"]."'>".$row3["nomespecie"]."</option> \n";
	}
}


function familia(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql2 = mysql_query("SELECT * FROM familia");
	while($row2 = mysql_fetch_assoc($sql2)){
	  	echo "<option value = '".$row2["idfamilia"]."'>".$row2["nomfamilia"]."</option> \n";
	}
}

function proyecto(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql = mysql_query("SELECT * FROM proyecto");
	while($row = mysql_fetch_assoc($sql)){
	  	echo "<option value = '".$row["idproyecto"]."'>".$row["nomproyecto"]."</option> \n";
	}
}

function ecoregion(){
	echo "<option value = ''>Seleccione...</option> \n";
	$sql = mysql_query("SELECT * FROM ecorregion");
	while($row = mysql_fetch_assoc($sql)){
	  	echo "<option value = '".$row["idecoregion"]."'>".$row["nomecoregion"]."</option> \n";
	}
}
?>
