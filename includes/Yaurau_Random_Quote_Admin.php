<?php


class Yaurau_Random_Quote_Admin{

    public function createMenu() {
        add_options_page(
            'Page Title',
            'Yaurau Random Quote',
            'manage_options',
            'options_page_slug',
            [
                'Yaurau_Random_Quote_Admin',
                'settings_page'
            ]
        );
    }
    public function  settings_page() {

        Yaurau_Random_Quote_Widget::adminWidgetGet();

    }
    static public function getCreateMenu() {
        add_action( 'admin_menu', ['Yaurau_Random_Quote_Admin', 'createMenu']);
    }
    static public function getSettingsLink( $actions ){


        $settings_link = '<a href="options-general.php?page=options_page_slug">Settings</a>';
        array_unshift( $actions, $settings_link );
        return $actions;
    }
}
