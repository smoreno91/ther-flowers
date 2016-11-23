<?php
session_start();
setLanguage();
function setLanguage() {
    if(isset($_GET['lang'])){
        $lang = $_GET['lang'];
        // register the session and set the cookie
        $_SESSION['lang'] = $lang;
        setcookie('lang', $lang, time() + (3600 * 24 * 30));
    }
}
function getLanguage(){
    if(isset($_SESSION['lang'])) {
        return $_SESSION['lang'];
    } else if(isset($_COOKIE['lang'])) {
        return $_COOKIE['lang'];
    }
    return 'en';
}
function _S($setting){
    
    $_S = array(
        'LINK_FACEBOOK'     => 'https://www.facebook.com/The-R-Flowers-1401983723152773/',
        'LINK_INSTAGRAM'    => '#',
        'LINK_SKYPE'        => '#',
    );

    return (!array_key_exists($setting, $_S)) ? $setting : $_S[$setting];
}
function _L($phrase){
    
    $_L = array(
        'LANG_HOME'             => array('en' => 'Home', 'es' => 'Home'),
        'LANG_PORTFOLIO'        => array('en' => 'Portfolio', 'es' => 'Portafolio'),
        'LANG_US'               => array('en' => 'About us', 'es' => 'Nosotros'),
        'LANG_GALLERY'          => array('en' => 'Gallery', 'es' => 'Galería'),
        'LANG_CONTACT_US'       => array('en' => 'Contact us', 'es' => 'Contáctenos'),
        'MENU_US_OUR_COMPANY'   => array('en' => 'Our Company', 'es' => 'Nuestra compañia'),
        'MENU_US_WHY_PREFER_US' => array('en' => 'Why prefer us?', 'es' => '¿Por qué preferirnos?'),
        'MENU_US_SOCIAL_RESP'   => array('en' => 'Social responsability', 'es' => 'Responsabilidad social'),
        'MENU_US_OUR_FARMS'     => array('en' => 'Our farms', 'es' => 'Nuestras fincas'),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
    );
    
    $lang = getLanguage();
    //$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

    return (!array_key_exists($phrase, $_L)) ? $phrase : $_L[$phrase][$lang];
}

?>