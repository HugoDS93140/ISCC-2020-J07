<!DOCTYPE html>
<html>
    <head>
        <title>historique_commande</title>      
    </head>
    
    
    <body>
        <h1>Historique de vos commandes</h1>
        <?php
            $historique_commandes = array (5.49, 9.99, 5.49, 15.99, 25,);
function afficher_commandes ($historique_commandes)  
{
     foreach ($historique_commandes as $commande)  
     {      echo "Une commande de $commande euros a été reçus. " . "</br>" ;
     } 
}  afficher_commandes($historique_commandes);    
        echo "Le total des commandes est de " .array_sum($historique_commandes)."€"."\n";

//echo "valeur=" $historique_commandes(2);      
        
        ?>   
        
    </body>
    
</html>