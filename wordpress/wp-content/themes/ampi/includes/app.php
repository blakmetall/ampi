<?php

if(!class_exists('WpApp')) {
    class WpApp {
        public $cms = [];
        public $language = 'en';
    
        function __construct(){
            $this->language = LANG;
    
            $this->cms['home'] = $this->get_translated_id(138, 'page');
    
            $this->cms['members-login'] = $this->get_translated_id(1337, 'page');
        }
    
        public function home_url(){
            return apply_filters( 'wpml_home_url', get_option('home'));
        }
    
        public function get_translated_id($id = '', $type = 'page'){
            $id = ($id != '') ? $id : get_the_ID();
            return apply_filters( 'wpml_object_id', $id, $type, TRUE  );
        }
    
        public function prepare_menu($menu_tmp){
            $menu = array();
    
            foreach($menu_tmp as $v){
                if( $v->menu_item_parent == 0){
                    $menu[$v->ID] = $v;
                    if(!isset($menu[$v->ID]->menu_childs)){
                        $menu[$v->ID]->menu_childs = array();
                    }
                }
                if(isset($menu[$v->menu_item_parent])){
                    $menu[$v->menu_item_parent]->menu_childs[$v->ID] = $v;
                    if(!isset($menu[$v->menu_item_parent]->menu_childs[$v->ID]->menu_childs)){
                        $menu[$v->menu_item_parent]->menu_childs[$v->ID]->menu_childs = array();
                    }
                }else{
                    foreach($menu as $k_level_1 => $menu_level_1){
                        if(!empty($menu_level_1->menu_childs)){
                            foreach($menu_level_1->menu_childs as $menu_child){
                                if($v->menu_item_parent != 0 && $v->menu_item_parent == $menu_child->ID){
                                    $menu[$k_level_1]->menu_childs[$v->menu_item_parent]->menu_childs[$v->ID] = $v;
                                    $menu[$k_level_1]->menu_childs[$v->menu_item_parent]->menu_childs[$v->ID]->menu_childs = array();
                                }
                            }
                        }
                    }
                }
            }
            return $menu;
        }
    
        public function get_main_menu() {
            $menu = LANG === 'en' ? 'main-menu' : 'main-menu-es';
    
            return $this->prepare_menu(wp_get_nav_menu_items($menu));
        }
    
        public function get_members_menu() {
            $menu = LANG === 'en' ? 'members-menu' : 'members-menu-es';
            return $this->prepare_menu(wp_get_nav_menu_items($menu));
        }

        public function get_categories_menu() {
            $menu = LANG === 'en' ? 'categories-menu' : 'categories-menu-es';
            return $this->prepare_menu(wp_get_nav_menu_items($menu));
        }
    
        public function get_cms_permalink($page_slug) {
            if(isset($this->cms[$page_slug])) {
                return get_permalink($this->cms[$page_slug]);
            }
    
            return '#';
        }
    
        public function get_lang_menu($skip_current_lang = false){
            $languages = [];
            $wpml_languages = icl_get_languages('skip_missing=0');
            if(is_array($wpml_languages)){
    
                if($skip_current_lang){
    
                    foreach($wpml_languages as $site_lang){
    
                        if($site_lang['code'] !== $this->language){
                            $languages[] = $site_lang;
                        }
                    }
                }else{
                    $languages = $wpml_languages;
                }
            }
    
            return $languages;
        }
    
        public function requires_member_login($post_id = false) {
            if(!$post_id) {
                $post_id = get_the_id();
            }

            return get_field('requiresMemberLogin', $post_id);
        }
    
        public function redirect_to_members_login() {
            header('Location: ' . get_permalink($this->cms['members-login']));
            exit;
        }

        public function is_member_logged_in() {
            $user = wp_get_current_user();
            $roles = ( array ) $user->roles;
            
            if(is_array($roles) && count($roles)){
                foreach($roles as $role) {
                    if($role == 'administrator' || $role == 'member') {
                        return true;
                    }
                }
            }

            return false;
        }
    }
}

$wpApp = new WpApp();
