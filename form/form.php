<?php

echo "<pre>";
    print_r($_POST);
echo "</pre>";

var_dump($_POST);
    $message_sent = false; #Par défaut, le message n'est pas envoyé, il ne peut l'être que si les deux conditions if sont true
    
    #Si les une des deux conditions ne sont pas valides, alors le form ne pourra pas être validé
    if(isset($_POST['email']) && $_POST['email'] !== '') { #Si l'adresse mail est écrite et n'est pas vide, alors on peut soumettre le formulaire
    
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { #Je déclare une deuxième condition pour vérifier que l'adresse mail en est bien une (cependant ça ne veut pas dire qu'elle existe ou non)
    
            #Touts mes inputs, chacuns rangés dans leur variable respective
            $companyName = $_POST['companyName'];
            $userEmail = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
            $to = "lburattifayolle@gmail.com"; #Le destinataire du mail
            $body = ""; #Le corps du mail (vide par défaut)
            
            $body .="From :".$companyName. "\r\n"; #Le corps du mail, j'y concatène l'adresse mail de l'envoyeur
            $body .="Email :".$userEmail. "\r\n"; #(\r\n effectue un saut à la ligne)
            $body .="Message :".$message. "\r\n";
            
            mail($to, $subject, $body); #La structure du mail, rangée dans la fonction mail() de PHP
        
            $message_sent = true;

            echo("Message sent successfully !");
        }

        echo("Failed to sent the message.");
    }

?>
