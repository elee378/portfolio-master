<?php
	//Open connection to our database
	include('connect.php');

	//condition
	if(isset($_GET['filter'])){
		//1. Select all portfolio where title = filter
		$filter = $_GET['filter'];
		$filterQuery = "SELECT portfolio_title, portfolio_images, portfolio_imageDescription, portfolio_imagesLightbox FROM tbl_portfolio WHERE portfolio_title = '{$filter}'";

		//cho $filterQuery
		$getPort = mysqli_query($link, $filterQuery);
	}else{
		//SELECT ALL PORTFOLIO, GROUP BY TITLE
	$portQuery = "SELECT portfolio_title, portfolio_images, portfolio_imageDescription, portfolio_imagesLightbox FROM tbl_portfolio GROUP BY portfolio_title";
	$getPort = mysqli_query($link, $portQuery);
	}

	$grpResult="";

	echo "[";

	while($portResult = mysqli_fetch_assoc($getPort)); {
		  $jsonResult = json_encode($portResult)
		  $grpResult .= $jsonResult.",";
		  echo $grpResult;
	}

	echo substr($grpResult, 0, -1);

	echo "]";
	//close connection to our database
	mysqli_close($link);

?>