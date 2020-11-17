<?php

// isset button Commander 

if(isset($_POST['Commander'])){

    if(isset($_POST['Produit'])){
        if(!empty($_POST['Nom'] || $_POST['tel'] || $_POST['Ville'])){

        
            $message="";
            $to = "elhadkimariem3@gmail.com"; // this is your Email address
            $from = "elhadkimariem3@gmail.com"; // this is the sender's Email address
            $Nom = $_POST['Nom'];
            $tel= $_POST['tel'];
            $Ville= $_POST['Ville'];
            $Commande = implode("\n\n", $_POST['Produit']);
            $Qtne = implode("\n\n", $_POST['Quantity']);
            $subject = "Commande";
            $message = "Client: " .$Nom . "\n\n Son Numéro : " . $tel . "\n\n Sa ville: " . $Ville. "\n\n a commandé:" . "\n\n" .$Commande. "\n\n Quantité:" . "\n\n" .$Qtne;
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
        
            header('location: ThankYou.php');   
               
        }
    
        else {

            $Error="Veuillez remplir tous les champs";
        }

    }

    
    else {

        $Error="Veuillez sélectionner au moins un produit et remplir tous les champs";
    }
}

?>

<?php

// isset button send 

if(isset($_POST['send'])){

    
        if(!empty($_POST['name'] || $_POST['email'] || $_POST['comments'])){

        
            $message="";
            $to = "elhadkimariem3@gmail.com"; // this is your Email address
            $from = "elhadkimariem3@gmail.com"; // this is the sender's Email address
            $name = $_POST['name'];
            $email= $_POST['email'];
            $subject =  $_POST['subject'];
            $comments=$_POST['comments'];
            $message = "Client: " .$name . "\n\n Son Numéro : " . $email . "\n\n a dit:" . "\n\n" .$comments;
            $headers = "From:" . $from;
            mail($to,$subject,$message,$headers);
        
            header('location: ThankYou.php');   
               
        }
    
        else {

            $Error="Veuillez remplir tous les champs";
        }

    

}

?>

 