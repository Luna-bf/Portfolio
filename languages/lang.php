<?php

#Le if() va me permettre de savoir si une session est déjà ouverte ou non et donc, dans les deux cas, m'éviter d'avoir des erreurs.
#Si une session est déjà ouverte, on ignore cette condition et on exécute le reste du code.
if(session_status() === PHP_SESSION_NONE) {
    session_start(); #Si aucune session n'est ouverte, on en ouvre une nouvelle et on exécute le reste du code.
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
