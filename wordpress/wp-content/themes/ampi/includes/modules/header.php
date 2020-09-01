<?php
    $languages = $wpApp->get_lang_menu( true );
?>

<!-- top menu -->
<nav class="navbar navbar-expand navbar-light bg-white pt-lg-4 pb-1 app-navbar-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse text-uppercase font-weight-light app-font-12">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-primary" href="#">English</a>
                </li>
                <li class="nav-item pl-1 pl-md-3">
                    <a class="nav-link text-primary" href="/members.html">Members login</a>
                </li>
                <li class="nav-item pt-2 pl-2 pl-md-5 pr-2">
                    <div class="align-items-center app-font-14 app-top-socials">
                        <a href="https://facebook.com" target="_blank" class="text-primary">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="text-primary px-2">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="text-primary">
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
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#appMainNavbar"
            aria-controls="appMainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
            <img src="<?=THEME_PATH?>/img/logo-ampi-puerto-vallarta.jpg" alt="" loading="lazy">
        </a>
        <div class="collapse navbar-collapse text-uppercase font-weight-light app-font-12" id="appMainNavbar">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 pb-2 font-weight-normal">
                <li class="nav-item active">
                    <a class="nav-link text-gray-700" href="#">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link text-gray-700 dropdown-toggle" href="#" id="dropdownMenu1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Real Estate in the Bay</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="#">Buying a second home</a>
                        <a class="dropdown-item" href="#">Retiring to the Bay</a>
                        <a class="dropdown-item" href="#">Buying pre-construction</a>
                        <a class="dropdown-item" href="#">Buying rental property</a>
                        <a class="dropdown-item" href="#">Selling your property</a>
                        <a class="dropdown-item" href="#">Why use an AMPI realtor</a>
                        <a class="dropdown-item" href="#">Real Estate FAQs</a>
                    </div>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link text-gray-700 dropdown-toggle" href="#" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Living in the Bay</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <a class="dropdown-item" href="#">Activities in the Bay</a>
                        <a class="dropdown-item" href="#">Restaurant Guide</a>
                        <a class="dropdown-item" href="#">Medical Services</a>
                        <a class="dropdown-item" href="#">LGBT Lifestyle</a>
                        <a class="dropdown-item" href="#">Local News</a>
                        <a class="dropdown-item" href="#">Organizations to join</a>
                    </div>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link text-gray-700 dropdown-toggle" href="#" id="dropdownMenu3"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>About AMPI</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                        <a class="dropdown-item" href="#">What is AMPI</a>
                        <a class="dropdown-item" href="#">Code of ethics</a>
                        <a class="dropdown-item" href="#">Benefits of being a member</a>
                        <a class="dropdown-item" href="#">Membership Requirements</a>
                        <a class="dropdown-item" href="#">Forms</a>
                    </div>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link text-gray-700 dropdown-toggle" href="#" id="dropdownMenu4"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>AMPI Professionals</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
                        <a class="dropdown-item" href="#">Agencies</a>
                        <a class="dropdown-item" href="#">Agents</a>
                        <a class="dropdown-item" href="#">Featured Propfessionals</a>
                        <a class="dropdown-item" href="#">Search by Name</a>
                    </div>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link text-gray-700 dropdown-toggle" href="#" id="dropdownMenu5"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Search for Properties</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu5">
                        <a class="dropdown-item" href="#">By map</a>
                        <a class="dropdown-item" href="#">By area</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-gray-700" href="#">
                        <span>Blog / News</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-gray-700" href="#">
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<?php if(0): ?>

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

<?php endif; ?>

