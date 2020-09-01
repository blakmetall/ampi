<?php $ga_tracking_code = '';?>

<?php if($ga_tracking_code && LIVE_SITE):?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$ga_tracking_code?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?=$ga_tracking_code?>' );
    </script>

<?php endif;?>