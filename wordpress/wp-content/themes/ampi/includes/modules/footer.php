<!-- footer -->
<div class="app-footer pt-5">
    <div class="container">
        <div class="row app-footer-row">
            <!-- column 1 -->
            <div class="col-sm-6 col-lg-3 mb-4">
                <h4 class="pb-2 mb-5 border-bottom border-primary font-weight-normal">
                    <?=__('Latest Tweets')?>
                </h4>

                <ul class="list-unstyled font-weight-light">
                    <li class="mb-2">
                        <a href="#" class="d-flex text-decoration-none">
                            <div class="fab fa-twitter text-warning pt-2"></div>
                            <div class="pl-3">
                                <p class="mb-2 text-white">
                                    Lorem ipsum dolor sit amet, consectetur adpipiscing elit.
                                </p>
                                <span class="text-success">2 days ago</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="d-flex text-decoration-none">
                            <div class="fab fa-twitter text-warning pt-2"></div>
                            <div class="pl-3">
                                <p class="mb-2 text-white">
                                    Lorem ipsum dolor sit amet, consectetur adpipiscing elit.
                                </p>
                                <span class="text-success">5 days ago</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- column 2 -->
            <div class="col-sm-6 col-lg-3 mb-4">
                <h4 class="pb-2 mb-5 border-bottom border-primary font-weight-normal">
                    <?=__('On the Blog')?>
                </h4>

                <ul class="list-unstyled font-weight-light">
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none">
                            <p class="mb-2 text-white">
                                Lorem ipsum dolor sit amet, consectetur adpipiscing elit.
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="fas fa-clock text-warning mr-2 app-font-13"></div>
                                <span class="text-success">Agosto, 2020</span>
                            </div>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="text-decoration-none">
                            <p class="mb-2 text-white">
                                Lorem ipsum dolor sit amet, consectetur adpipiscing elit.
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="fas fa-clock text-warning mr-2 app-font-13"></div>
                                <span class="text-success">Diciembre, 2020</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- column 3 -->
            <div class="col-sm-6 col-lg-3 mb-4">
                <h4 class="pb-2 mb-5 border-bottom border-primary font-weight-normal">
                    <?=__('Get in touch')?>
                </h4>

                <ul class="list-unstyled font-weight-light">
                    <li class="mb-2">
                        <a href="tel:3221234567" class="text-decoration-none">
                            <p class="mb-1 text-white">
                                AMPI Puerto Vallarta
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="fas fa-phone text-success ml-1 mr-2 app-font-12"></div>
                                <span class="text-white">322 123 4567</span>
                            </div>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="tel:3221234567" class="text-decoration-none">
                            <p class="mb-1 text-white">
                                AMPI Nayarit
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="fas fa-phone text-success ml-1 mr-2 app-font-12"></div>
                                <span class="text-white">322 123 4567</span>
                            </div>
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="tel:3221234567" class="text-decoration-none">
                            <p class="mb-1 text-white">
                                AMPI Compostela
                            </p>
                            <div class="d-flex align-items-center">
                                <div class="fas fa-phone text-success ml-1 mr-2 app-font-12"></div>
                                <span class="text-white">322 123 4567</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- column 4 -->
            <div class="col-sm-6 col-lg-3 mb-4">
                <h4 class="pb-2 mb-5 border-bottom border-primary font-weight-normal">
                    <?=__('Social Networks')?>
                </h4>

                <ul class="list-unstyled font-weight-light">
                    <li class="mb-4 d-flex">
                        <div class="app-footer-social facebook">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="app-footer-social twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="app-footer-social linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </li>
                    <li class="mb-2">
                        <!-- newsletter -->
                        <div class="text-uppercase font-weight-light mb-3">
                            <?=__('Sign up for email alerts')?>
                        </div>

                        <form class="form-inline app-footer-form mb-3">
                            <div class="form-group w-75">
                                <input type="email" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-warning w-25">
                                <i class="far fa-envelope"></i>
                            </button>
                        </form>

                        <div class="font-weight-light">
                            <?=__('Get latest updates and useful info.')?>
                        </div>

                        <!-- newsletter register response -->
                        <div class="text-warning">
                            <?=__('Thanks for subscribing.')?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="app-footer-line"></div>

    <!-- rights -->
    <div class="container">
        <p class="mb-0 text-center py-4">
            AMPI MLS Vallarta-Nayarit-Compostela <?=__('All rights reserved.')?>
        </p>
    </div>
</div>

<!-- external scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<!-- bootstrap scripts -->
<script src="<?=THEME_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=THEME_PATH?>/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- wp data -->
<script>
    var _LIVE = <?=LIVE_SITE ? 'true': 'false'; ?>;
    var _LANG = '<?=LANG?>';
    var _CAPTCHA = '<?=CAPTCHA?>';
    var _THEME_PATH = '<?=THEME_PATH?>';
    var _LOGGED_IN = <?=is_user_logged_in() ? 'true' : 'false';?>;
</script>

<!-- app -->
<script src="<?=THEME_PATH?>/js/app.js?v=<?=THEME_VERSION?>"></script>

<?php echo '</body></html>';?>