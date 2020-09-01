<?php
    $requiresMemberLogin = $wpApp->requires_member_login();
    $isMemberLoggedIn = $wpApp->is_member_logged_in();

    if($requiresMemberLogin && !$isMemberLoggedIn) {
        $wpApp->redirect_to_members_login();
    }
?>
<?php get_header(); ?>
<?php include 'includes/modules/header.php'; ?>

<div class="container app-page-container with-padding">
    <!-- breadcrumbs -->
    <div class="d-flex app-breadcrumbs mb-4">
        <a href="<?=$wpApp->home_url()?>" class="app-breadcrumb d-inline-block text-app-gray">Home</a>
        <div class="app-breadcrumb-separator mx-2 text-app-gray app-font-12">&gt;</div>
        <!-- <a href="/blog.html" class="app-breadcrumb text-app-gray d-inline-block">Blog</a> -->
    </div>

    <!-- layout container -->
    <div class="d-flex flex-column flex-lg-row app-page-container-inner align-items-start">
        <!-- main container -->
        <div class="app-page-content-container">
            <!-- blog title -->
            <div class="app-title-wrapper mb-4-3">
                <h1 class="app-font-39 mb-3"><?=get_the_title()?></h1>
                <div class="app-line sm warning"></div>
            </div>

            <!-- blog short description -->
            <div class="app-wp-dinamic-content">
                <?php the_content()?>
            </div>
        </div>

        <!-- main sidebar -->
        <div class="app-page-sidebar-container">
            <div class="row no-gutters">
                <?php get_sidebar('categories');?> <!-- hidden if page requires membership -->
                <?php get_sidebar('members');?> <!-- visible if page requires membership -->
                <?php get_sidebar('newsletter'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php include 'includes/modules/footer.php'; ?>