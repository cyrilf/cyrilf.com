<?php
function prefered_language ($available_languages=array('en','fr')) {
    //Par défaut la langue est en anglais
    $bestlang = $available_languages[0];
    //Si on recoit une langue et qu'elle est dans les langues dispo
    if(isset($_GET['lang']) && in_array($_GET['lang'], $available_languages)) {
        $bestlang = $_GET['lang'];
    } else if ($_SERVER['HTTP_ACCEPT_LANGUAGE']) {
        //Sinon on regarde la langue navigateur/système
        $langBrowser = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if(in_array($langBrowser, $available_languages))
            $bestlang = $langBrowser;
    }
    return $bestlang;
}
?>