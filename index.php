<?php

require_once('configs/config.php');
require_once('common/core.php');
include_once('CWebPage.php');
include_once('CmsLabels.php');
include_once('CmsPage.php');

require_once 'CmsLang.php';
$lang = new CmsLang();

require_once 'CmsLabels.php';
$labels = new CmsLabels();

include('common/navigations.php');
require('common/authorization.php');


require_once 'CModules.php';
$mod = new CModule();

$navigation = $mod -> checkPrivilages($navigation);
$reload=FALSE;
if(!isset($_GET["module"])) {
    $current_module = $default_module;
    $reload = TRUE;
} else {
    $current_module = $_GET["module"];
}

if(!isset($_GET["action"])) {
    $current_action = $default_action;
} else {
    $current_action = $_GET["action"];
    $reload = TRUE;
}

if (isset($_GET['ajax'])){
    $ajax = ($_GET['ajax']==1 ? TRUE : FALSE);
}
else{ 
    $ajax = false;
}

require_once 'CmsMenu.php';
$menu = new CmsMenu();

include_once('CFrontController.php');
$front = new CFrontController();
if($reload == TRUE){
    $front ->setParam('module', $current_module);
    $front ->setParam('action', $current_action);
}
$front_result = $front ->getResults();

if(!$ajax){
    ### WEB PAGE
    $strona = new CWebPage('common/main.tpl');
    
    $strona ->assign('menu', $menu -> get());
    $strona ->assign('submenu', $menu -> get('submenu'));


    $strona ->assign('modules', $modules);
    $strona ->assign('current_module', $current_module);
    $strona ->assign('current_action', $current_action);

    $strona -> assign("page", $front_result );

    $strona->assign('navigation' , $navigation );
    $strona->assign('labels' , $labels -> get());
    $strona->assign('lang_array', $lang->get_array_lang());
 
    # reszta konfiguracji strony
    $arrCss = array(

		/*
        'grid.css'
        ,'menu.css'
        ,'general.css'
        ,'messages.css'
		*/
		'carousel.css'
		,'js/bootstrap.min.css'
		,'offcanvas.css'
		,'style.css'
		,'js/engine1/style.css'
		,'http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css'
		

		/* menu */
        ,'../libs/superfish/css/superfish.css'
        ,'../libs/superfish/css/superfish-navbar.css'
        /* cwcalendar */
        ,'../libs/cwcalendar/cwcalendar.css'
        ,'../libs/validationEngine/css/validationEngine.jquery.css'
        ,'../libs/uploadify/uploadify.css'
        

    );
    $strona ->setCsses( $arrCss );

    $arrJs = array(
//         'jquery/jquery-1.4.1.min.js'
        'http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'
        ,'jquery/ui.core.js'
        ,'jquery/ui.checkbox.js'
        ,'jquery/jquery.bind.js'
        ,'jquery/custom_jquery.js'
        ,'jquery/jquery.cookie.js'
        /* tooltip */
        ,'jquery/jquery.tooltip.js'
        ,'jquery/jquery.dimensions.js'
        ,'../libs/datatables/media/js/jquery.dataTables.min.js'
        ,'functions.js'
        /* Validation forms by jquery */
        ,'../libs/validationEngine/js/languages/jquery.validationEngine-'.($_SESSION['S_LangID'] == 1 ? 'pl' : ($_SESSION['S_LangID'] == 3 ? 'fr' : 'en')).'.js'
        ,'../libs/validationEngine/js/jquery.validationEngine.js'
        /* menu */
        ,'../libs/superfish/js/hoverIntent.js'
        ,'../libs/superfish/js/superfish.js'
        /* cwcalendar */
        ,'../libs/cwcalendar/calendar-core.js'
        /* uruchomienie plikow js */
        ,'init.js'
        ,'menu.js'
        ,'ajax_menu/linked_list_menu.js'
        ,'jquery/organictabs.jquery.js'
        /* uploadify */
        ,'../libs/uploadify/jquery.uploadify-3.1.min.js'
		
		
		,'js/engine1/jquery.js'
        ,'js/script.js'
		,'js/jquery.js'
		,'js/jquery.lightbox.js'
		,'js/easySlider.js'
		,'js/js.js'
		,'js/swfobject.js'
		,'js/menu.js'
		,'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'
		,'http://maps.google.com/maps/api/js?sensor=false'
		,'js/jquery-scrolltofixed.js'
		,'http://code.jquery.com/jquery-migrate-1.2.1.min.js'
		,'http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js'
		,'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'
		,'js/bootstrap.min.js'
		,'js/engine1/wowslider.js'
		,'js/engine1/script.js'
		,'js/offcanvas.js'
    );
    $strona -> setJSScripts($arrJs);
    $strona -> setTitle ( 'Test' );
}else{
    echo $front_result;
}
 

	
?>
