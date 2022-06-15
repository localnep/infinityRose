<?php session_start();

	if(isset($_SESSION["dil"]))
	{
		include "dil/".$_SESSION["dil"].".php";
	}
	else
	{
		$_SESSION["dil"] = "tr";
		include "dil/tr.php";
	}


	if (isset($_GET["d"])) {
		if($_GET["d"] == $_SESSION["dil"])
		{
			echo $dil["secilidilsecme"];
			header("Refresh: 2; url=filmfiltesi.php");
		}
		else
		{
			$_SESSION["dil"] = $_GET["d"];
			header("location:filmfiltesi.php");
		}
	}
	else
		header("location:filmfiltesi.php");

 ?>