<?php
namespace fssr;
require_once 'settings.php';
require_once 'pars.php';
require_once 'file.php';

foreach($_REQUEST as $i=>$v) {
	global $$i;
	$$i = $v;
	//echo "$i => $v<br>";
}

?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Officium Divinum</title>
	<meta name="viewport" content="initial-scale=2"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href="/k/style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

