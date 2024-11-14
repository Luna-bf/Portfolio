<?php

#Pour éviter d'avoir des problèmes si une session a déjà étée ouverte
if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

require getLanguage();

function getLanguage() {
    
    $_SESSION['lang'] = $_SESSION['lang'] ?? 'fr';
    $_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'];
    
    return 'languages/'.$_SESSION['lang'].'.php';
}

#Le paramètre $str sera les éléments à traduire (voir phtml)
function __($str) {
    
    global $lang;
    
    if(!empty($lang[$str])) {
        return $lang[$str];
    }
    
    return $str;
}

?>
