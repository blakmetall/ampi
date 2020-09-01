<?php

class WpApp {
    public $cms = [];
    public $language = 'it';

    function __construct(){
        $this->language = LANG;

        $this->cms['home'] = $this->get_translated_id(138, 'page');
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
}

$wpApp = new WpApp();
