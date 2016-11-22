<?php

function _L($phrase){
    
    static $_L = array(
        'NO_PHOTO'  => array('en' => 'No photo', 'es' => 'sin foto')
    );
    
    $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';

    return (!array_key_exists($phrase, $_L)) ? $phrase : $_L[$phrase][$lang];
}

function _S($setting){
    
    static $_S = array(
        'LINK_FACEBOOK'     => '#',
        'LINK_INSTAGRAM'    => '#',
        'LINK_SKYPE'        => '#',
    );

    return (!array_key_exists($setting, $_S)) ? $setting : $_S[$setting];
}

?>