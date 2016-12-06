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
        'CONTACT_EMAIL'     => 'ramifloreslaceja@hotmail.com',
        'CONTACT_PHONE'     => '(+57) 300 420 8483',
        '' => '',
        '' => '',
        '' => '',
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
        'LANG_ERROR'            => array('en' => '404', 'es' => '404'),
        'LANG_OUR_COMPANY'      => array('en' => 'Our company', 'es' => 'Nuestra compañia'),
        'LANG_WHY_BUY_FROM_US'  => array('en' => 'Why buy from us?', 'es' => '¿Por qué preferirnos?'),
        'LANG_SOCIAL_RESP'      => array('en' => 'Corporate social responsability', 'es' => 'Responsabilidad social'),
        'LANG_OUR_FARMS'        => array('en' => 'Our farms', 'es' => 'Nuestras fincas'),
        'FOOTER_COPYRIGHT'      => array('en' => 'All Rights Reserved', 'es' => 'Todos los derechos reservados'),
        'HOME_DO_YOU_LIKE'      => array('en' => 'Do you like The R Flowers?', 'es' => '¿Te gusta The R Flowers?'),
        'US_OURCOMPANY_CONTENT' => array(
            'en' => 'We are a local farm located in La Ceja-Antioquia, a region with the perfect conditions to growth high quality Hydrangeas.  We specialize in growth high quality Hydrangeas in order to satisfy our clients needings.',
            'es' => 'Somos una finca productora de Hydrangeas ubicada en el municipio de La Ceja-Antioquia, el lugar perfecto para cultivar flores de excelente calidad. Nos especializamos en cultivar Hydrangeas de la mejor calidad para satisfacer las necesidades y deseos de nuestros clientes'
        ),
        'US_BUYFROMUS_CONTENT'  => array(
            'en' => 'Because what makes us different from the others is the fact that we deeply love what we do, and the quality of our Hydrangeas show that. We don´t care just about selling flowers, we care about satisfy our clients with the best quality Hydrangeas.',
            'es' => 'Porque lo que nos hace diferentes a los demás productores es el hecho de amar profundamente lo que hacemos, lo cual se ve reflejado directamente en la calidad de nuestros productos. No nos interesa vender flores, nos interesa satisfacer a nuestros clientes con la calidad de nuestras Hydrangeas.'
        ),
        'US_SOCIALRES_CONTENT'  => array(
            'en' => 'In every single activity in our company we try to protect as much as possible three things: the environment, our employees and the community. Trying to help with our community progress we also employ just head of family people, trying to give their families better opportunities in life.',
            'es' => 'En todas las actividades diarias de nuestra empresa buscamos proteger el medio ambiente, nuestros trabajadores y a la comunidad. Además solo empleamos hombres y mujeres cabeza de familia, buscando promover el desarrollo y crecimiento de nuestra comunidad.'
        ),
        'US_OURFARMS_CONTENT'   => array(
            'en' => 'We have 3 different farms of our company where we take the 100% of the Hydrangeas that we sell, for that reason we can have full control of the quality and the quantities.',
            'es' => 'Contamos con tres diferentes centros de producción o fincas propias de donde extraemos el 100% de las Hydrangeas que comercializamos, lo cual nos da un control total sobre la calidad de nuestros productos y las cantidades disponibles.'
        ),
        'CONTACT_TITLE'         => array('en' => 'Leave a message', 'es' => 'Déjanos tu mensaje'),
        'CONTACT_NAME'          => array('en' => 'Your name', 'es' => 'Tu nombre'),
        'CONTACT_EMAIL'         => array('en' => 'Your e-mail', 'es' => 'Tu correo electrónico'),
        'CONTACT_SUBJECT'       => array('en' => 'Subject', 'es' => 'Asunto'),
        'CONTACT_MESSAGE'       => array('en' => 'Message', 'es' => 'Mensaje'),
        'CONTACT_SUBMIT'        => array('en' => 'Leave a reply', 'es' => 'Enviar'),
        'CONTACT_GET_IN_TOUCH'  => array('en' => 'Get in touch', 'es' => 'Ponte en contacto'),
        'CONTACT_PHONE'         => array('en' => 'Phone', 'es' => 'Teléfono'),
        'CONTACT_EMAIL'         => array('en' => 'E-mail', 'es' => 'Email'),
        'CONTACT_ADDRESS'       => array('en' => 'Address', 'es' => 'Dirección'),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
        ''  => array('en' => '', 'es' => ''),
    );

    return (!array_key_exists($phrase, $_L)) ? $phrase : $_L[$phrase][getLanguage()];
}

?>