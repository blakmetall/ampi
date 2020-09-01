<?php 
    include 'includes/app.php';

    $showMembersSidebar = $wpApp->requires_member_login();
    $membersMenu = $wpApp->get_members_menu();
?>

<?php if($showMembersSidebar):?>
    <!-- sidebar menu -->
    <div class="col-12 col-sm-6 col-lg-12 order-1 order-sm-2 order-lg-1">
        <div class="app-sidebar-menu">
            <div class="app-sidebar-menu-title">
                <span>Menu</span>
                <img src="<?=THEME_PATH?>/img/icons/triangle-down-green.svg" alt="" class="icon-triangle">
            </div>

            <ul class="nav flex-column">
                <?php foreach($membersMenu as $index => $m): ?>
                    <?php $hasChilds = count($m->menu_childs);?>
                    <?php $dropdownMenuId = 'dropdownMembersMenu-' . $index;?>

                    <?php if($hasChilds):?>
                        <!-- dropdown item -->
                        <li class="nav-item dropdown">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link text-gray-700" href="<?=get_permalink($m->object_id)?>">
                                <span><?=$m->title?></span>
                            </a>
                        </li>
                    <?php endif;?>

                <?php endforeach;?>
            </ul>
        </div>
    </div>
<?php endif; ?>