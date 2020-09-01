<?php
    $languages = $wpApp->get_lang_menu( true );
    $mainMenu = $wpApp->get_main_menu();
?>

<!-- top menu -->
<nav class="navbar navbar-expand navbar-light bg-white pt-lg-4 pb-1 app-navbar-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse text-uppercase font-weight-light app-font-12">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <!-- language selection -->
                <li class="nav-item active">
                    <?php if($languages[0]['code'] == 'en'):?>
                        <a class="nav-link text-primary" href="/">English</a>
                    <?php endif;?>

                    <?php if($languages[0]['code'] == 'es'):?>
                        <a class="nav-link text-primary" href="/es">Español</a>
                    <?php endif;?>
                </li>

                <!-- members login action -->
                <li class="nav-item pl-1 pl-md-3">
                    <a class="nav-link text-primary" href="<?=$wpApp->get_cms_permalink('members-login')?>">
                        <?=__('Members login') ?>
                    </a>
                </li>

                <!-- ampi socials -->
                <li class="nav-item pt-2 pl-2 pl-md-5 pr-2">
                    <div class="align-items-center app-font-14 app-top-socials">
                        <a href="https://www.facebook.com/AMPIpvnaycom/" target="_blank" class="text-primary">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <?php $twitterUrl = 'https://twitter.com/pvampi?lang=' . LANG; ?>
                        <a href="<?=$twitterUrl?>" target="_blank" class="text-primary px-2">
                            <i class="fab fa-twitter"></i>
                        </a>

                        <a href="https://www.instagram.com/ampipvnaycom/" target="_blank" class="text-primary">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- main menu -->
<nav class="navbar navbar-expand-xl navbar-light border-bottom app-navbar">
    <div class="container-fluid position-relative pb-2 pb-xl-0 px-0 pr-2 pr-xl-0">
        <!-- toggle -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#appMainNavbar"
            aria-controls="appMainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- logo -->
        <a class="navbar-brand" href="<?=$wpApp->home_url()?>">
            <img src="<?=THEME_PATH?>/img/logo-ampi-puerto-vallarta.jpg" alt="" loading="lazy">
        </a>

        <!-- menu -->
        <div class="collapse navbar-collapse text-uppercase font-weight-light app-font-12" id="appMainNavbar">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 pb-2 font-weight-normal">
                <?php foreach($mainMenu as $index => $m): ?>
                    <?php $hasChilds = count($m->menu_childs);?>
                    <?php $dropdownMenuId = 'dropdownMenu-' . $index;?>

                    <?php if($hasChilds):?>
                        <!-- dropdown item -->
                        <li class="nav-item position-relative">
                            <a class="nav-link text-gray-700 dropdown-toggle" href="#" id="<?=$dropdownMenuId?>"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><?=$m->title?></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="<?=$dropdownMenuId?>">
                                <?php foreach($m->menu_childs as $m2):?>
                                    <a class="dropdown-item" href="<?=get_permalink($m2->object_id)?>">
                                        <?=$m2->title?>
                                    </a>
                                <?php endforeach;?>
                            </div>
                        </li>
                    <?php else:?>
                        <!-- single item-->
                        <li class="nav-item">
                            <a class="nav-link text-gray-700" href="<?=get_permalink($m->object_id)?>">
                                <span><?=$m->title?></span>
                            </a>
                        </li>
                    <?php endif;?>

                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>