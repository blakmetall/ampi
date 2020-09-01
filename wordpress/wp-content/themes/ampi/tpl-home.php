<?php /* Template Name: home - ampi */ ?>
<?php
    the_post();

    $buyingASecondHomePageID = $wpApp->cms['buying-a-second-home'];
    $sellingYourPropertyPageID = $wpApp->cms['selling-your-property'];
    $whyUseAnAmpiRealtorPageID = $wpApp->cms['why-use-an-ampi-realtor'];
?>
<?php get_header();?>
<?php include 'includes/modules/header.php'; ?>

<!-- carousel -->
<div id="appCarousel" class="carousel slide carousel-fade app-carousel" data-ride="carousel">
    <ol class="carousel-indicators d-flex justify-content-end mb-5">
        <li data-target="#appCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#appCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?=THEME_PATH?>/img/demo-slide-1.jpg" class="d-block w-100" alt="">
            <div class="app-carousel-overlay"></div>
            <div class="carousel-caption no-gutters">
                <div class="col-sm-9 col-md-8 col-lg-7 text-left">
                    <h6
                        class="text-uppercase font-weight-light mb-2 app-font-30 letter-spacing-6 d-none d-sm-block animate__animated animate__flipInX">
                        Bahía de Banderas
                    </h6>
                    <h5
                        class="app-font-weight-bolder app-font-48 mb-3 letter-spacing-3 animate__animated animate__flipInX">
                        Association of Real Estate
                        Professionals
                    </h5>
                    <div class="app-line w-80 warning mb-3 animate__animated animate__flipInX"></div>
                    <p class="app-font-weight-500 app-font-21 mb-0 d-none d-sm-block animate__animated animate__flipInX">
                        Vallarta. Nayarit. Compostela</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?=THEME_PATH?>/img/demo-slide-1.jpg" class="d-block w-100" alt="">
            <div class="app-carousel-overlay"></div>
            <div class="carousel-caption no-gutters">
                <div class="col-sm-9 col-md-8 col-lg-7 text-left">
                    <h6
                        class="text-uppercase font-weight-light mb-2 app-font-30 letter-spacing-6 d-none d-sm-block animate__animated animate__flipInX">
                        Bahía de Banderas
                    </h6>
                    <h5
                        class="app-font-weight-bolder app-font-51 mb-3 letter-spacing-3 animate__animated animate__flipInX">
                        Association of Real Estate
                        Professionals
                    </h5>
                    <div class="app-line w-80 warning mb-3 animate__animated animate__flipInX"></div>
                    <p class="app-font-weight-500 app-font-21 mb-0 d-none d-sm-block animate__animated animate__flipInX">
                        Vallarta. Nayarit. Compostela</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- separator -->
<div class="pt-5 pb-4"></div>

<!-- presentation -->
<div class="container">
    <!-- title -->
    <h1 class="mb-4 font-weight-bold app-font-41"><?=__('Real Estate in Bahía de Banderas')?></h1>
    <div class="app-line secondary xxs mb-5"></div>

    <div class="card-deck">
        <a class="home-card card border-0 app-card-1" href="<?=get_permalink($buyingASecondHomePageID)?>">
            <img src="<?=THEME_PATH?>/img/icons/home-icon-1.png" alt="" class="width-auto mb-3">
            <h2 class="font-weight-bold mb-3 app-font-24"><?=get_the_title($buyingASecondHomePageID)?></h2>
            <p class="mb-0 text-secondary app-font-16">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti aliquid provident eos pariatur est fugit molestiae laudantium magni iste alias quibusdam reprehenderit consectetur maiores facere impedit, assumenda eaque? Consequatur, alias!
            </p>
        </a>
        <a class="home-card card border-0 app-card-1" href="<?=get_permalink($buyingASecondHomePageID)?>">
            <img src="<?=THEME_PATH?>/img/icons/home-icon-2.png" alt="" class="width-auto mb-3">
            <h2 class="font-weight-bold mb-3 app-font-24"><?=get_the_title($sellingYourPropertyPageID)?></h2>
            <p class="mb-0 text-secondary app-font-16">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti aliquid provident eos pariatur est fugit molestiae laudantium magni iste alias quibusdam reprehenderit consectetur maiores facere impedit, assumenda eaque? Consequatur, alias!
            </p>
        </a>
        <a class="home-card card border-0 app-card-1" href="<?=get_permalink($buyingASecondHomePageID)?>">
            <img src="<?=THEME_PATH?>/img/icons/home-icon-3.png" alt="" class="width-auto mb-3">
            <h2 class="font-weight-bold mb-3 app-font-24"><?=get_the_title($whyUseAnAmpiRealtorPageID)?></h2>
            <p class="mb-0 text-secondary app-font-16">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti aliquid provident eos pariatur est fugit molestiae laudantium magni iste alias quibusdam reprehenderit consectetur maiores facere impedit, assumenda eaque? Consequatur, alias!
            </p>
        </a>
    </div>
</div>

<!-- separator -->
<div class="pt-5 pb-4"></div>

<!-- separator -->
<div class="pt-5 pb-4"></div>

<!-- search form -->
<div class="app-home-form">
    <div class="pt-5 pb-4"></div>
    <div class="container">
        <!-- title -->
        <h2 class="mb-4-2 font-weight-bold h1 app-font-41"><?=__('Search for a Property')?></h2>

        <form class="app-font-16">
            <!-- row 1 -->
            <div class="row">
                <div class="col-sm-6 mb-4">
                    <select name="" class="form-control form-control-lg">
                        <option value=""><?=__('Listing Status')?></option>
                        <option value="active">Active</option>
                        <option value="sold">Sold</option>
                    </select>
                </div>
                <div class="col-sm-6 mb-4">
                    <select name="" class="form-control form-control-lg">
                        <option value=""><?=__('Property Type')?></option>
                        <option value="condo">Condo</option>
                        <option value="house">House</option>
                        <option value="land">Land</option>
                    </select>
                </div>
            </div>

            <!-- row 2 -->
            <div class="row">
                <div class="col-sm-6 mb-4">
                    <input type="text" placeholder="<?=__('Property Name')?>" class="form-control form-control-lg">
                </div>
                <div class="col-sm-6 mb-4">
                    <select name="" class="form-control form-control-lg">
                        <option value=""><?=__('Location')?></option>
                        <option value="1">Vallarta Downtown</option>
                        <option value="2">Vallarta North</option>
                        <option value="3">Marina Vallarta</option>
                        <option value="4">Punta de Mita</option>
                    </select>
                </div>
            </div>

            <!-- row 3 -->
            <div class="row">
                <div class="col-sm-6 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 mr-3"><?=__('Bedrooms')?></div>
                        <input type="number" value="" class="form-control form-control-lg mr-3">
                        <div class="mr-3"><?=__('to')?></div>
                        <input type="number" value="" class="form-control form-control-lg">
                    </div>
                </div>
                <div class="col-sm-6 mb-4">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 mr-3"><?=__('Price range')?></div>
                        <input type="number" value="" class="form-control form-control-lg mr-3">
                        <div class="mr-3"><?=__('to')?></div>
                        <input type="number" value="" class="form-control form-control-lg">
                    </div>
                </div>
            </div>

            <!-- submit -->
            <div class="row">
                <div class="col text-right">
                    <button class="btn btn-primary px-5">
                        <?=__('Search')?>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="pt-5 pb-4"></div>
</div>

<!-- separator -->
<div class="pt-5 pb-4"></div>

<!-- news presentation -->
<div class="container">
    <!-- news title -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="mb-0 font-weight-bold app-font-36">
            <?=__('Latest News')?>
        </h2>
        <a href="#" class="d-flex align-items-center ml-3 text-decoration-none position-relative app-top-1">
            <div class="pr-2">
                <?=__('View All News')?>
            </div>
            <i class="fas fa-arrow-right text-warning"></i>
        </a>
    </div>
    <div class="app-line secondary xxs mb-5"></div>


    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-n4">
        <div class="col mb-5">
            <div class="card border-0 app-card-2">
                <a href="#" class="d-inline-block text-decoration-none text-dark">
                    <img src="http://via.placeholder.com/400x300" alt="" class="mb-3">
                    <div class="app-line warning w-20 sm mb-2"></div>
                    <h2 class="font-weight-500 mb-3 app-font-16 text-dark">Buying a property</h2>
                    <div class="d-flex align-items-center">
                        <div class="fas fa-clock text-warning mr-2 app-font-13"></div>
                        <span class="app-font-13 text-gray-600">Noviembre, 2020</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card border-0 app-card-2">
                <a href="#" class="d-inline-block text-decoration-none text-dark">
                    <img src="http://via.placeholder.com/400x300" alt="" class="mb-3">
                    <div class="app-line warning w-20 sm mb-2"></div>
                    <h2 class="font-weight-500 mb-3 app-font-16 text-dark">Buying a property</h2>
                    <div class="d-flex align-items-center">
                        <div class="fas fa-clock text-warning mr-2 app-font-13"></div>
                        <span class="app-font-13 text-gray-600">Noviembre, 2020</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card border-0 app-card-2">
                <a href="#" class="d-inline-block text-decoration-none text-dark">
                    <img src="http://via.placeholder.com/400x300" alt="" class="mb-3">
                    <div class="app-line warning w-20 sm mb-2"></div>
                    <h2 class="font-weight-500 mb-3 app-font-16 text-dark">Buying a property</h2>
                    <div class="d-flex align-items-center">
                        <div class="fas fa-clock text-warning mr-2 app-font-13"></div>
                        <span class="app-font-13 text-gray-600">Noviembre, 2020</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- separator -->
<div class="pt-5 pb-4"></div>

<!-- ampi counter -->
<div class="app-home-counter">
    <div class="app-overlay"></div>
    <div class="container position-relative py-4">
        <div class="pt-5 pb-4"></div>
        <h2 class="mb-5 text-white app-font-41">
            <?php if(LANG == 'en'):?>
                <span>Real Estate</span> Professionals you can trust
            <?php else: ?>
                Profesionales de confianza en <span>Bienes Raíces</span>
            <?php endif;?>
        </h2>

        <div class="row row-cols-2 row-cols-md-4 text-white">
            <div class="col mb-5">
                <div class="border-0">
                    <div class="app-home-counter-value">158</div>
                    <div class="app-home-counter-label app-font-14"><?=__('Agencies in the bay')?></div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="border-0">
                    <div class="app-home-counter-value">2056</div>
                    <div class="app-home-counter-label app-font-14"><?=__('Properties listed')?></div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="border-0">
                    <div class="app-home-counter-value">312</div>
                    <div class="app-home-counter-label app-font-14"><?=__('Affiliates')?></div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="border-0">
                    <div class="app-home-counter-value">35</div>
                    <div class="app-home-counter-label app-font-14"><?=__('Years since founded')?></div>
                </div>
            </div>
        </div>

        <div class="pt-5 pb-4"></div>
    </div>
</div>

<!-- agencies -->
<div class="container py-3">
    <div class="pt-5 pb-4"></div>

    <!-- news title -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="mb-0 font-weight-bold app-font-36"><?=__('AMPI Agencies')?></h1>
        <a href="#" class="d-flex align-items-center ml-3 text-decoration-none position-relative app-top-1">
            <div class="pr-2"><?=__('See All Agencies')?></div>
            <i class="fas fa-arrow-right text-warning"></i>
        </a>
    </div>
    <div class="pt-5 pb-3"></div>


    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 mb-n4 app-agencies">
        <div class="col mb-5">
            <div class="card border-0 app-card-2">
                <div class="d-flex align-items-center">
                    <a href="#" class="text-decoration-none">
                        <img src="<?=THEME_PATH?>/img/demo-agency-1.png" alt="" class="mb-3">
                    </a>
                    <div class="pl-3">
                        <a href="#" class="text-decoration-none text-dark">
                            <h3 class="mb-2 app-font-18 font-weight-bold">Timothy Real Estate Group</h3>
                        </a>
                        <a href="#" class="text-decoration-none text-primary">
                            <h6 class="mb-0 font-weight-normal">Broker Name</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card border-0 app-card-2">
                <div class="d-flex align-items-center">
                    <a href="#" class="text-decoration-none">
                        <img src="<?=THEME_PATH?>/img/demo-agency-1.png" alt="" class="mb-3">
                    </a>
                    <div class="pl-3">
                        <a href="#" class="text-decoration-none text-dark">
                            <h3 class="mb-2 app-font-18 font-weight-bold">Timothy Real Estate Group</h3>
                        </a>
                        <a href="#" class="text-decoration-none text-primary">
                            <h6 class="mb-0 font-weight-normal">Broker Name</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-5">
            <div class="card border-0 app-card-2">
                <div class="d-flex align-items-center">
                    <a href="#" class="text-decoration-none">
                        <img src="<?=THEME_PATH?>/img/demo-agency-1.png" alt="" class="mb-3">
                    </a>
                    <div class="pl-3">
                        <a href="#" class="text-decoration-none text-dark">
                            <h3 class="mb-2 app-font-18 font-weight-bold">Timothy Real Estate Group</h3>
                        </a>
                        <a href="#" class="text-decoration-none text-primary">
                            <h6 class="mb-0 font-weight-normal">Broker Name</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-5 d-block d-md-none">
            <div class="card border-0 app-card-2">
                <div class="d-flex align-items-center">
                    <a href="#" class="text-decoration-none">
                        <img src="<?=THEME_PATH?>/img/demo-agency-1.png" alt="" class="mb-3">
                    </a>
                    <div class="pl-3">
                        <a href="#" class="text-decoration-none text-dark">
                            <h3 class="mb-2 app-font-18 font-weight-bold">Timothy Real Estate Group</h3>
                        </a>
                        <a href="#" class="text-decoration-none text-primary">
                            <h6 class="mb-0 font-weight-normal">Broker Name</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5 pb-4"></div>
</div>

<?php get_footer();?>
<?php include 'includes/modules/footer.php'; ?>