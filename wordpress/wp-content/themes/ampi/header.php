<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php wp_head();?>

    <!-- bootstrap styles -->
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/bootstrap.css?v=<?=THEME_VERSION?>" />
    <link rel="stylesheet" href="<?=THEME_PATH?>/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" />

    <!-- fontawesome icons -->
    <link rel="stylesheet" href="<?=THEME_PATH?>/vendor/fontawesome/css/all.min.css" />

    <!-- animate css librart -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

    <!-- material design icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- app -->
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/app.css?v=<?=THEME_VERSION?>" />
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/styles.css?v=<?=THEME_VERSION?>" />

    <!-- favicon -->
    <?php include "includes/partials/favicon.php"; ?>

</head><!-- end head -->
<body>

    <!-- ga analitics: needs code  -->
    <?php include 'includes/modules/google-analytics.php';?>