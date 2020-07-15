<?php
require_once('conexion.php');
conectar();
$nombre = $_POST['nombre'];
$especie = $_POST['especie'];
$familia = $_POST['familia'];
$proyecto = $_POST['proyecto'];
$base = $_POST['base'];
$anio = $_POST['anio'];
$departamento = $_POST['departamentos'];
$municipio = $_POST['municipios'];
$localidad = $_POST['local'];
$latitud = $_POST['lati'];
$longitud = $_POST['longi'];
$autor = $_POST['autor'];
$fecha = $_POST['fecha'];
$eco = $_POST['eco'];

$sql = mysql_query("SELECT * FROM analisis WHERE idespecie='$especie' and idfamilia = '$familia' and nomespest = '$nombre' and idproyecto = '$proyecto'");
if(mysql_num_rows($sql)==0){
	$sql = mysql_query("INSERT INTO analisis (idespecie, idfamilia, nomespest,idproyecto, base, anio, dept, mnpio, localidad, latitud, longitud, autor, 	feccapt,ecoregion) VALUES ('$especie', '$familia', '$nombre', '$proyecto', '$base', '$anio', '$departamento', '$municipio', '$localidad', '$latitud', '$longitud', '$autor', '$fecha', '$eco')");
		echo "<script language = javascript>
							alert('Registro exitoso')
							self.location = '../index.php'
				   </script>";
}else{
	echo "<script language = javascript>
		  	  alert('Ya se ingreso la informacion de la mesa...')
			  self.location = '../IngresoE14.php'
	  	   </script>";
}




/*
$sql = mysql_query("SELECT * FROM mesas WHERE lugar = '$lugar' and numesa ='$mesa' and ente = '2'");
if(mysql_num_rows($sql)==0){
 	$sql = mysql_query("INSERT INTO mesas (dept, mun, lugar, numesa,totale11, urna, quemados, vblanco, vnulos,vnomarcados, reconteo, solicitante, 				                        representante, nfirmas, ente) VALUES('$departamento','$municipio', '$lugar','$mesa', '$e11', '$urna', '$quemados', '$vblanco',                        '$vnulos', '$vnomarcado','$recon', '$soli', '$repre', '$firmas','2')");
	$ver = mysql_query("SELECT * FROM mesas WHERE lugar = '$lugar' and numesa = '$mesa' and ente = '2'");
	$row3 = mysql_fetch_assoc($ver);
	$idmesa = $row3['idmesa'];
	$consulta = mysql_query("SELECT * FROM partidosen WHERE dep = '$departamento'");
	$candi = mysql_query("SELECT * FROM candidatos WHERE ente = '2'");
	while($row = mysql_fetch_assoc($consulta)){  	
		while($row2 = mysql_fetch_assoc($candi)){ 	
			$idpart = $row2['idpartido'];
			$idcandidato = $row2['idcandidato'];
			$nombre = $idpart."voto".$idcandidato;
			$valor = $_POST[$nombre];
			if($valor == ""){
					$valor = '0';
				}
			$sql2 = mysql_query("INSERT INTO resultados (codmesa, codcandidato,codpartido,nvotos,ente) values('$idmesa', '$idcandidato', '$idpart',                                 '$valor', '2')");
		echo "<script language = javascript>
							alert('Registro exitoso')
							self.location = '../isenado.php'
				   </script>";
			}
		}
}else{
	echo "<script language = javascript>
		  	  alert('Ya se ingreso la informacion de la mesa...')
			  self.location = '../IngresoE14.php'
	  	   </script>";
}*/
?>