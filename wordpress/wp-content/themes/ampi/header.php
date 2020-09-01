<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <?php wp_head();?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ========== CSS ========== -->
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/animate.css">
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/site.css">
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet"> 
    <script src="https://use.fontawesome.com/1b98f46f85.js"></script>
    <link rel="stylesheet" href="<?=THEME_PATH?>/assets/css/bootstrap.min.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?=THEME_PATH?>/assets/css/animate.css" media="screen">
    <link rel="stylesheet" href="<?=THEME_PATH?>/css/style.css?v=<?=THEME_VERSION?>">

    <!-- ========== JQUERY PLUGIN ========== -->
    <script src="<?=THEME_PATH?>/js/jQuery-latest.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=THEME_PATH?>/js/ajax-jquery.min.js"></script>
    <!-- <link href="<?=THEME_PATH?>/css/styles.css?v=<?=THEME_VERSION?>" rel="stylesheet" type="text/css" /> -->

    <!-- favicon -->
    <?php include "includes/partials/favicon.php"; ?>
</head><!-- end head -->
<body>
    <?php include 'includes/modules/google-analytics.php';?>

    <div class="se-pre-con"></div><!-- ========== PRELOADER ========== -->