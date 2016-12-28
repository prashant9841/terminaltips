<?php 
$new_general_setting = new new_general_setting();

class new_general_setting {
    function __construct( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    
    function register_fields() {
        register_setting( 'general', 'phone_1', 'esc_attr' );
        register_setting( 'general', 'phone_2', 'esc_attr' );
        register_setting( 'general', 'facebook_link', 'esc_attr' );
        register_setting( 'general', 'twitter_link', 'esc_attr' );
        register_setting( 'general', 'google_plus_link', 'esc_attr' );
        register_setting( 'general', 'rss_link', 'esc_attr' );
        register_setting( 'general', 'instagram_link', 'esc_attr' );
        register_setting( 'general', 'contact_email', 'esc_attr' );
        register_setting( 'general', 'office_location', 'esc_attr' );

        //Phone 1
        add_settings_field('phone_1', '<label for="phone_1">'.__('Phone number 1' , 'phone_1' ).'</label>' , array(&$this, 'fields_phone_1_html') , 'general' );
        //Phone2
        add_settings_field('phone_2', '<label for="phone_2">'.__('Phone number 2' , 'phone_2' ).'</label>' , array(&$this, 'fields_phone_2_html') , 'general' );
        //Facebook_link
        add_settings_field('facebook_link', '<label for="facebook_link">'.__('Facebook link' , 'facebook_link' ).'</label>' , array(&$this, 'facebook_link_html') , 'general' );

        add_settings_field('twitter_link', '<label for="twitter_link">'.__('twitter link' , 'twitter_link' ).'</label>' , array(&$this, 'twitter_link_html') , 'general' );

        add_settings_field('google_plus_link', '<label for="google_plus_link">'.__('google_plus link' , 'google_plus_link' ).'</label>' , array(&$this, 'google_plus_link_html') , 'general' );

        add_settings_field('rss_link', '<label for="rss_link">'.__('rss link' , 'rss_link' ).'</label>' , array(&$this, 'rss_link_html') , 'general' );

        add_settings_field('instagram_link', '<label for="instagram_link">'.__('instagram link' , 'instagram_link' ).'</label>' , array(&$this, 'instagram_link_html') , 'general' );
        //Emial
        add_settings_field('contact_email', '<label for="contact_email">'.__('Email to show in the contact field' , 'contact_email' ).'</label>' , array(&$this, 'contact_email_html') , 'general' );
        //Timing
   
        //Location
        add_settings_field('office_location', '<label for="office_location">'.__('Office Location' , 'office_location' ).'</label>' , array(&$this, 'office_location_html') , 'general' );
    }
    function fields_phone_1_html() {
        $value = get_option( 'phone_1', '' );
        echo '<input type="text" id="phone_1" name="phone_1" value="' . $value . '" />';
    } 
    function fields_phone_2_html() {
        $value = get_option( 'phone_2', '' );
        echo '<input type="text" id="phone_2" name="phone_2" value="' . $value . '" />';
    }
    function facebook_link_html() {
        $value = get_option( 'facebook_link', '' );
        echo '<input type="text" id="facebook_link" name="facebook_link" value="' . $value . '" />';
    }
    function twitter_link_html() {
        $value = get_option( 'twitter_link', '' );
        echo '<input type="text" id="twitter_link" name="twitter_link" value="' . $value . '" />';
    }
    function google_plus_link_html() {
        $value = get_option( 'google_plus_link', '' );
        echo '<input type="text" id="google_plus_link" name="google_plus_link" value="' . $value . '" />';
    }
    function rss_link_html() {
        $value = get_option( 'rss_link', '' );
        echo '<input type="text" id="rss_link" name="rss_link" value="' . $value . '" />';
    }
    function instagram_link_html() {
        $value = get_option( 'instagram_link', '' );
        echo '<input type="text" id="instagram_link" name="instagram_link" value="' . $value . '" />';
    }
    function contact_email_html() {
        $value = get_option( 'contact_email', '' );
        echo '<input type="text" id="contact_email" name="contact_email" value="' . $value . '" />';
    }
    function office_location_html() {
        $value = get_option( 'office_location', '' );
        echo '<input type="text" id="office_location" name="office_location" value="' . $value . '" />';
    }

}