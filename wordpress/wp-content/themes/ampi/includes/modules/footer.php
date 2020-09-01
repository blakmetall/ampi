<!-- ================================ JQUERY =============================== -->

        <script src="<?=THEME_PATH?>/js/bootstrap.min.js"></script>
        <script src="<?=THEME_PATH?>/js/wow.js"></script>
        <script src="<?=THEME_PATH?>/js/wow-anim.js"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/assets/js/form-validator.min.js"></script>  
        <script type="text/javascript" src="<?=THEME_PATH?>/assets/js/contact-form-script.js"></script> 
        <script src="<?=THEME_PATH?>/js/main.js" type="text/javascript"></script> 
        <script src="<?=THEME_PATH?>/js/jquery.scrolly.js"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/jquery.mixitup.min.js"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/jquery.fancybox.js?v=2.1.5"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/jquery.fancybox-media.js?v=1.0.6"></script> 
        <script type="text/javascript" src="<?=THEME_PATH?>/js/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/fancybox-script.js"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/fancybox.js"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/mixitup.js"></script>
        <script type="text/javascript" src="<?=THEME_PATH?>/js/skillbar-animation.js"></script>
        <script src="<?=THEME_PATH?>/js/jquery.counterup.min.js"></script>

        <script>
            var _LIVE = <?=LIVE_SITE ? 'true': 'false'; ?>;
            var _LANG = '<?=LANG?>';
            var _CAPTCHA = '<?=CAPTCHA?>';
            var _THEME_PATH = '<?=THEME_PATH?>';
            var _LOGGED_IN = <?=is_user_logged_in() ? 'true' : 'false';?>;
        </script>

        <script src="<?=THEME_PATH?>/js/scripts.js?v=<?=THEME_VERSION?>"></script> 
    </body><!-- end body -->
</html><!-- end html -->