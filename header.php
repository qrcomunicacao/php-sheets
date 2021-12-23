<?php
$spreadsheetId = "";
$clientSecret = "";
$key = "";
$range = "A1:Z999";
?>

<!doctype html>
<html lang="pt-br">
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/tablesorter/2.17.4/js/jquery.tablesorter.min.js"></script>
		
		<script src="https://kit.fontawesome.com/e275053d67.js" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
		<title>QR | Financeiro</title>
	
	</head>
	
	<body>
		<script>
			$(function (tooltip) {
				$('[data-toggle="tooltip"]').tooltip()
			})
			
			$(function (tablesorter) {
				// call the tablesorter plugin
				$("table").tablesorter({
					theme : 'dark',
					
					// change the default sorting order from 'asc' to 'desc'
					sortInitialOrder: "asc"
				});
			});
		</script>
		
		<style>
			th {
				cursor: pointer;
			}
		</style>
