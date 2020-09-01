<?php
    $languages = $wpApp->get_lang_menu( true );
?>

 <!-- ========== MENUBAR ========== -->
 <div class="menubar">
    <div class="menubar-content">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="site-title">
                            <a href="<?=$wpApp->home_url()?>">
                                <h3 class="app-logo-wrapper">
                                    <img src="<?=THEME_PATH?>/img/sibilla-logo.png" alt="" class="app-logo">
                                </h3>
                            </a>
                        </div><!-- end site-title -->
                    </div><!-- end col-md-4 -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!-- end button -->
                    </div><!-- end navbar-header -->
                    <div class="col-md-9 col-sm-9 navbar-style">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#home">Home</a>
                                </li>
                                <li>
                                    <a href="#chi-siamo"><?=__('Chi Siamo')?></a>
                                </li>
                                <li>
                                    <a href="#portfolio"><?=__('Portfolio')?></a>
                                </li>
                                <li>
                                    <a href="#contatti"><?=__('Contatti')?></a>
                                </li>
                                <li class="mr-3">
                                    <span>&nbsp;</span>
                                </li>
                                <li>
                                    <?php $underlineClass = $languages[0]['code'] == 'en' ? 'menu-underline' : ''; ?>
                                    <a href="/it" class="<?= $underlineClass; ?>">ITA</a>
                                </li>
                                <li>
                                <?php $underlineClass = $languages[0]['code'] == 'it' ? 'menu-underline' : ''; ?>
                                    <a href="/en" class="<?= $underlineClass; ?>"><b>ENG</b></a>
                                </li>
                            </ul><!-- end nav -->
                        </div><!-- end collapse navbar-collapse -->
                    </div><!-- end col-md-8 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </nav><!-- navbar -->
    </div><!-- end menubar-content -->
</div><!-- end menubar -->