<?php

require_once "bdd-connect.php";

class User extends Database{


   
    public $bdd;
   
 
    public function __construct($bdd)
    {
        // $this->bdd = $bdd; 
        $this->bdd = new PDO("mysql:host=localhost;dbname=moduleconnexionb2","root", "root");
        $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //    return $this->bdd;
    }

    public function inscription($login, $firstname, $lastname, $password, $repeatpassword)
    {
        //  $this->bdd->connectDb();
         
        
        
        if (!empty($login) && !empty($firstname) && !empty($lastname) && !empty($password) && !empty($repeatpassword)){
          
            if ($password == $repeatpassword){
            $query = $this->bdd->prepare("INSERT INTO user (login, firstname, lastname, password) VALUES (:login, :firstname, :lastname, :password)");
            
        // Liez les valeurs aux paramètres
              $query->bindParam(':login', $login);
              $query->bindParam(':firstname', $firstname);
              $query->bindParam(':lastname', $lastname);
              $query->bindParam(':password', $password);

         // Exécutez la requête d'insertion
        $query->execute();

        header('location:connexion.php');
        
       
    
      } else echo "mot de passe incorrect";
      }  
   }

   public function connexion($login, $password){
    
    if (!empty($login) && !empty($password)){
        
        $query = $this->bdd->prepare("SELECT * FROM `user` WHERE login = :login)");
          // Liez les valeurs aux paramètres
        
         $query->bindParam(':login', $login);
        //  $query->bindParam(':password', $password);
         
       
     // Exécutez la requête d'insertion
    $query->execute();
    $results = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($results); 
        
    }

   }

}







