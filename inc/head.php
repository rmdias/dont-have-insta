<?php
    include("Constants.php");
?>

<!doctype html>
<html xmlns:og="http://ogp.me/ns#" lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8" />

	<title><?php echo _TITLE ?></title>

	<!-- META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=yes">
    <meta http-equiv="cleartype" content="on">

    <!-- APPLE TOUCH ICON -->
    <link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
    <link rel="apple-touch-icon" sizes="57x57" href="./apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="./apple-touch-icon-iphone4.png" />

	<!-- CSS -->
	<link rel="stylesheet" href=" <?php echo _CSSPATH . 'owl.carousel.css'?>">
    <link rel="stylesheet" href="dist/css/styles.combined.min.css">

    <!-- OPEN GRAPH -->
    <meta property='og:title' content="DON'T HAVE INSTA" />
    <meta property='og:description' content="Instagram for those who don't have" />
    <meta property='og:url' content='http://www.catrina.com' />
    <meta property='og:image' content='http://www.catrina.com/dist/images/og-facebook.png'/>
    <meta property='og:type' content='website' />
    <meta property='og:site_name' content="DON'T HAVE INSTA" />

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="dist/css/ie.css">
        <script src="libs/js/create-elements.js"></script>
    <![endif]-->
</head>