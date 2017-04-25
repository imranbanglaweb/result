<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome To admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css">
  	<!-- this is favicon -->

<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  	<!-- end favicon -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css"> -->
	<!-- <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico"> -->
	</script>
	</script>

	<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/snap.svg-min.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <link rel="stylesheet" type="text/css" href="css/customeanimate.css">
    <link rel="stylesheet" type="text/css" href="css/animate.ss">
<!-- my css -->
 <link rel="stylesheet" href="style2.css">
 	<style type="text/css">
	h1 {
		height: 100%;
		/* The html and body elements cannot have any padding or margin. */
		margin: 0;
		font-size: 14px;
		font-family: 'Open Sans', sans-serif;
		font-size: 32px;
		margin-bottom: 3px;
	}
	.entry-header {
		text-align: left;
		margin: 0 auto 50px auto;
		width: 80%;
        max-width: 978px;
		position: relative;
		z-index: 10001;
	}
	#demo-content {
		padding-top: 100px;
	}
	.subject{}
	.subject h2{ color: green;
	text-align: center; }
	.subject ul{ list-style: none;text-align: center; }
	.subject ul li{ display: inline-block;
	padding: 5px }
	.subject ul li a{color: blue;border-right:1px solid #ddd;
		/*background: #666;
		
		border-radius: 5px;
		box-shadow: 2px 2px 3px #ccc;*/
		color: white;
		display: block;
		padding: 15px 5px;

		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#9dd53a+0,9dd53a+11,9dd53a+21,9dd53a+34,a1d54f+50,80c217+51,9dd53a+67,9dd53a+77,7cbc0a+100;Green+Gloss+%231 */
background: rgb(157,213,58); /* Old browsers */
background: -moz-linear-gradient(45deg,  rgba(157,213,58,1) 0%, rgba(157,213,58,1) 11%, rgba(157,213,58,1) 21%, rgba(157,213,58,1) 34%, rgba(161,213,79,1) 50%, rgba(128,194,23,1) 51%, rgba(157,213,58,1) 67%, rgba(157,213,58,1) 77%, rgba(124,188,10,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(45deg,  rgba(157,213,58,1) 0%,rgba(157,213,58,1) 11%,rgba(157,213,58,1) 21%,rgba(157,213,58,1) 34%,rgba(161,213,79,1) 50%,rgba(128,194,23,1) 51%,rgba(157,213,58,1) 67%,rgba(157,213,58,1) 77%,rgba(124,188,10,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(45deg,  rgba(157,213,58,1) 0%,rgba(157,213,58,1) 11%,rgba(157,213,58,1) 21%,rgba(157,213,58,1) 34%,rgba(161,213,79,1) 50%,rgba(128,194,23,1) 51%,rgba(157,213,58,1) 67%,rgba(157,213,58,1) 77%,rgba(124,188,10,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
border-radius: 5px

	}
	.subject ul li a:hover{
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#9dd53a+0,b4e23f+11,9dd53a+21,9dd53a+34,b4e23f+39,a1d54f+50,80c217+58,9dd53a+67,9dd53a+77,b4e23f+90,7cbc0a+100 */
background: rgb(157,213,58); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(157,213,58,1) 0%, rgba(180,226,63,1) 11%, rgba(157,213,58,1) 21%, rgba(157,213,58,1) 34%, rgba(180,226,63,1) 39%, rgba(161,213,79,1) 50%, rgba(128,194,23,1) 58%, rgba(157,213,58,1) 67%, rgba(157,213,58,1) 77%, rgba(180,226,63,1) 90%, rgba(124,188,10,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(157,213,58,1) 0%,rgba(180,226,63,1) 11%,rgba(157,213,58,1) 21%,rgba(157,213,58,1) 34%,rgba(180,226,63,1) 39%,rgba(161,213,79,1) 50%,rgba(128,194,23,1) 58%,rgba(157,213,58,1) 67%,rgba(157,213,58,1) 77%,rgba(180,226,63,1) 90%,rgba(124,188,10,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(157,213,58,1) 0%,rgba(180,226,63,1) 11%,rgba(157,213,58,1) 21%,rgba(157,213,58,1) 34%,rgba(180,226,63,1) 39%,rgba(161,213,79,1) 50%,rgba(128,194,23,1) 58%,rgba(157,213,58,1) 67%,rgba(157,213,58,1) 77%,rgba(180,226,63,1) 90%,rgba(124,188,10,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=0 ); /* IE6-9 */
color: #666;
	}
	.semester{}
	.semester a{ 
		color: white;float: right;padding: 15px 5px;
		border-radius: 8px;
		/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#9dd53a+0,a1d54f+50,80c217+51,7cbc0a+100;Green+Gloss+%231 */
background: rgb(157,213,58); /* Old browsers */
background: -moz-linear-gradient(45deg,  rgba(157,213,58,1) 0%, rgba(161,213,79,1) 50%, rgba(128,194,23,1) 51%, rgba(124,188,10,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(45deg,  rgba(157,213,58,1) 0%,rgba(161,213,79,1) 50%,rgba(128,194,23,1) 51%,rgba(124,188,10,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(45deg,  rgba(157,213,58,1) 0%,rgba(161,213,79,1) 50%,rgba(128,194,23,1) 51%,rgba(124,188,10,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9dd53a', endColorstr='#7cbc0a',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

margin-right: 10px
	 }
	 .allsub h2 {
	color: saddlebrown;
}
	 .allsub {
	background: whitesmoke;
	border: 2px solid #666;
	padding: 5px;
	/*width: 560px;*/
	text-align: center;
	margin: 0 auto;
}
.allsub ul{
	margin: 0;
	padding: 0;
	list-style: none;
}
.allsub ul li {
	display: inline-block;
	/*padding: 5px;*/
}
.allsub ul li a {
	color: teal;
	display: block;
	border-right: 1px solid #666;
	padding: 5px;
}
.myButton {
	-moz-box-shadow: 3px 4px 0px 0px #9fb4f2;
	-webkit-box-shadow: 3px 4px 0px 0px #9fb4f2;
	box-shadow: 3px 4px 0px 0px #9fb4f2;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #7892c2), color-stop(1, #476e9e));
	background:-moz-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-webkit-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-o-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:-ms-linear-gradient(top, #7892c2 5%, #476e9e 100%);
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#7892c2', endColorstr='#476e9e',GradientType=0);
	background-color:#7892c2;
	-moz-border-radius:18px;
	-webkit-border-radius:18px;
	border-radius:18px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:7px 25px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
	clear: both;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #476e9e), color-stop(1, #7892c2));
	background:-moz-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-webkit-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-o-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:-ms-linear-gradient(top, #476e9e 5%, #7892c2 100%);
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#476e9e', endColorstr='#7892c2',GradientType=0);
	background-color:#476e9e;
}
.myButton:active {
	position:relative;
	top:1px;
}
.ubutton {
	float: right;
	background: seagreen;
	color: white;
	display: block;
	padding: 10px;
	border-radius: 5px;
	margin-right: 30px;
	font-size: 16px;
	text-transform: uppercase;
	box-shadow: 0px 4px 1px #ccc;
	transition: 0.5s;
}
/**javascript digital clock**/

.clockStyle {
	background-color: black;
    /* border: #999 2px inset; */
    padding: 15px;
    color: white;
    font-family: "Arial Black", Gadget, sans-serif;
    font-size: 17px;
    font-weight: bold;
    letter-spacing: 3px;
    display: inline-block;
    border-radius: 8px;
    box-shadow: marr;
    margin-left: 30px;
}
table.dataTable.display tbody tr.odd > .sorting_1, table.dataTable.order-column.stripe tbody tr.odd > .sorting_1
{
	background-color: none
}




	</style>
</head>
<!-- end header -->