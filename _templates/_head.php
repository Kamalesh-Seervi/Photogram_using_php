<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.98.0">
<title>Login_Page</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.0/css/hover-min.css" integrity="sha512-glciccPoOqr5mfDGmlJ3bpbvomZmFK+5dRARpt62nZnlKwaYZSfFpFIgUoD8ujqBw4TmPa/F3TX28OctJzoLfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="/photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<?
//print_r($_SERVER['PHP_SELF']);
//print_r($_SERVER['DOCUMENT_ROOT']);
//calling css in single command
if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/photogram/css/' . basename($_SERVER['PHP_SELF'], ".php") . ".css")) { ?>
    <link rel="stylesheet" href="/photogram/css/<?= basename($_SERVER['PHP_SELF'], ".php") ?>.css">

<? } ?>