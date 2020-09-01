<?php /* Template Name: home - sibilla */ ?>
<?php
    the_post();

    // portfolio
    $portfolioItems = get_field('portfolioItems');

    if(count($_POST)) {
        require_once 'includes/form-processes/contact.php'; exit;
    }

    // echo '<pre>', print_r($portfolioItems), '</pre>'; exit;
?>
<?php get_header();?>
<?php include 'includes/modules/header.php'; ?>

<div class="main-page-content">

    <!-- ================================ INTRO =============================== -->

    <div id="home">
        <div class="home-default">
            <div class="home-content-main">
                <div class="table-cell">
                    <div class="container visible-container">
                        <div class="row home-row">
                            <div class="col-md-12 col-sm-12">
                                <div class="home-text text-left">

                                    <!-- <h3>The Best Creative Agency HTML5 Template.</h3>
                                    <h2>Welcome To Divine</h2>
                                    <a class="home-contact1" href="#contact">Learn More</a> -->

                                </div><!-- end home-text  -->
                            </div><!-- end col-md-8 -->
                        </div><!-- end row  -->
                    </div><!-- end container -->
                </div><!-- end table-cell -->
            </div><!-- end home-content-main -->
        </div><!-- end home-default  -->
    </div><!-- end home  -->

    <!-- ================================ ABOUT =============================== -->

    <div id="chi-siamo" class="about-anchor">&nbsp;</div>
    <div>
        <div class="about-content">
            <div class="us-grid">
                <div class="container-fluid">
                    <div class="row us-row">
                        <div class="col-md-6 col-sm-6 col-xs-12 about-col">
                            <div class="about-image"></div><!-- end about-image  -->
                        </div><!-- end col-md-6  -->
                        <div class="col-md-6 col-sm-6 col-xs-12 about-col">
                            <div class="table-cell">
                                <div class="about-details wow fadeIn">
                                    <h3 class="wow fadeIn app-main-title"><?=__('Sibilla Film')?></h3>
                                    <p class="wow fadeIn">
                                        <?php the_content(); ?>
                                    </p>
                                </div><!-- end about-details  -->
                            </div><!-- end table-cell  -->
                        </div><!-- end col-md-6  -->
                    </div><!-- end row  -->
                </div><!-- end container  -->
            </div><!-- end me-grid  -->
        </div><!-- end about-content  -->
    </div><!-- end about  -->

    <!-- ================================ WORK =============================== -->

    <div id="portfolio">
        <div class="work-content">
            <div class="work-grid">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="work-title text-left wow fadeIn">
                                <h3 class="app-portfolio-title"><?=__('Portfolio');?></h3>
                            </div><!-- end work-title  -->
                        </div><!-- end col-md-12  -->
                    </div><!-- end row  -->
                </div><!-- end container  -->
            </div><!-- end work-grid  -->
            <div class="work-details">
                <div class="container">
                    <ul id="filters" class="clearfix app-portfolio-filter">
                        <li><span class="filter active" data-filter=".filter1">All</span></li>
                    </ul>
                    <div id="portfoliolist">	

                        <?php foreach($portfolioItems as $index => $item): ?>
                            <div class="portfolio filter1" data-cat="filter1">
                                <a href="#" class="portfolio-wrapper wow fadeIn" data-wow-delay=".4s" data-toggle="modal" data-target="#modal-<?=$index?>">

                                    <?php $hasOverlay = $item['overlayTitle'] || $item['overlayYear'] || $item['overlayDescription']; ?>

                                    <?php if($hasOverlay):?>
                                        <div class="overlay text-center">
                                            <div class="overlay-main">
                                                <div class="table-cell">
                                                    <div class="portfolio-overlay">
                                                        <?php if($item['overlayTitle']):?>
                                                            <span class="featured">
                                                                <?= $item['overlayTitle'] ?>     
                                                            </span>
                                                            <br>
                                                        <?php endif; ?>

                                                        <?php if($item['overlayYear']):?>
                                                            <span class="featured">
                                                                <?=__('Year')?>: <?= $item['overlayYear'] ?>     
                                                            </span>
                                                            <br>
                                                        <?php endif; ?>

                                                        <?php if($item['overlayDescription']):?>
                                                            <span>
                                                                <?= $item['overlayDescription'] ?>     
                                                            </span>
                                                            <br>
                                                        <?php endif; ?>
                                                    </div>
                                                </div><!-- end table-cell  -->
                                            </div><!-- end overlay-main  -->
                                        </div><!-- end overlay  -->
                                    <?php endif; ?>

                                    <img src="<?=$item['overlayImage']['sizes']['portfolio-sm']?>" alt="" />
                                </a><!-- end portfolio-wrapper  -->
                            </div><!-- end portfolio-web  -->	
                        <?php endforeach; ?>
                        										
                    </div><!-- end portfoliolist  -->
                </div><!-- container -->
            </div><!-- end work-details  -->
        </div><!-- end work-content  -->
    </div><!-- end work  --> 

    <!-- Modal -->
    <?php foreach($portfolioItems as $index => $item): ?>
        <div class="modal fade" id="modal-<?=$index?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">

                        <!-- gallery -->
                        <div>
                            <?php $gallery = $item['portfolioGallery']; ?>
                            <?php if($gallery): ?>

                                <div id="carousel-example-generic-<?=$index?>" class="carousel slide" data-ride="carousel" data-interval="6500">

                                    <!-- Indicators -->
                                    <?php if(count($gallery) > 1): ?>
                                        <ol class="carousel-indicators">
                                            <?php foreach($gallery as $index2 => $img): ?>
                                                <li data-target="#carousel-example-generic-<?=$index?>" data-slide-to="<?=$index2?>" class="<?=($index2 == 0) ? 'active' : '';?>"></li>
                                            <?php endforeach; ?>
                                        </ol>
                                    <?php endif; ?>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?php foreach($gallery as $index2 => $img): ?>
                                            <div class="item <?=($index2 == 0) ? 'active' : '';?>">
                                                <img src="<?=$img['sizes']['portfolio-lg']?>" alt="">
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                </div>

                            <?php endif; ?>
                        </div>


                        <button type="button" class="portfolio-close" data-dismiss="modal" aria-label="Close">
                            X
                        </button>

                        <div class="portfolio-modal">
                            <?= apply_filters( 'the_content', $item['portfolioContent'] ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- ================================ CONTACT =============================== -->

    <div id="contatti">
        <div class="contact-content">
            <div class="contact-grid">
                <div class="contact-form-details">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-title text-left wow fadeIn">
                                    <h3><?=__('CONTACT US')?></h3>
                                </div><!-- end contact-title -->
                            </div><!-- end col-md-12  -->
                        </div><!-- end row  -->
                        <div class="row about-row">
                            <div class="col-md-8 col-sm-6 wow fadeIn">
                                <div class="contact-form">
                                    <form id="contact-form" action="" class="contact-form shake" method="POST">
                                        <input type="hidden" name="_captcha" class="form-captcha">

                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" name="_name" class="form-control" placeholder="<?=__('Name')?> *" required>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->

                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="email" name="_email" class="email form-control" id="email" placeholder="Email *" required>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->

                                        <div class="form-group">
                                            <div class="controls">
                                                <input type="text" name="_subject" class="form-control" placeholder="<?=__('Subject')?> *" required>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->

                                        <div class="form-group">
                                            <div class="controls">
                                                <textarea name="_message" rows="7" placeholder="<?=__('Message')?> *" class="form-control" required></textarea>
                                            </div><!-- end controls -->
                                        </div><!-- end form-group -->

                                        <button type="submit" id="submit" class="btn btn-success btn-contact"><?=__('Send')?></button>
                                        <div class="clearfix"></div> 
                                        <div class="app-msg-success"><?=__('Your message has been sent.')?></div>  
                                    </form> 
                                </div><!-- end contact-form -->
                            </div><!-- end col-md-8 -->
                            <div class="col-md-4 col-sm-6 contact-colamn wow fadeIn">

                                <div class="contact-col" data-wow-delay=".2s">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>
                                        </div><!-- end media-left  -->
                                        <div class="media-body">
                                            <p>Piazza San Giovanni in Laterano 40 Roma</p>
                                        </div><!-- end media-body  -->
                                    </div><!-- end media  -->
                                </div><!-- end contact-col  -->

                                <div class="contact-col" data-wow-delay=".4s">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
                                        </div><!-- end media-left  -->
                                        <div class="media-body">
                                            <p>sibillafilm@gmail.com</p>
                                        </div><!-- end media-body  -->
                                    </div><!-- end media  -->
                                </div><!-- end contact-col  -->

                            </div><!-- end col-md-4  -->
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div><!-- end contact-form-details -->
                <div class="copyright-details">
                    <div class="copyright">
                        <h3><?=__('copyright and design')?>: <a href="https://9doigtsdesign.com" target="_blank">9doigtsdesign</a></h3>
                    </div><!-- end copyright -->
                </div><!-- end copyright-details -->
            </div><!-- end contact-grid -->
        </div><!-- end contact-content -->
    </div><!-- end contact -->
</div><!-- end main-page -->

<?php get_footer();?>
<?php include 'includes/modules/footer.php'; ?>

        

<?php if(0):?>
    <!-- <form action="<?=get_permalink($wpApp->cms['home'])?>" >
        <input type="hidden" name="_captcha" value="" class="form-captcha">
        <input type="hidden" value="" id="_form_name">
        <input type="text" class="form-input w-input" name="_phone" placeholder="<?=__('Teléfono')?>" required="">

        <div class="form-success w-form-done">
            <div class="form-success-inner">
                <?=__('Message sent.')?>
            </div>
        </div>
    </form> -->
<?php endif; ?>