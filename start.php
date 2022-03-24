<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";
$utilisateur=new Utilisateur(75757575,'BEN Ahmed','Salah',50,20);
$utilisateurC=new UtilisateurC();
$utilisateurC->afficherutilisateur($utilisateur);
echo "****************";
echo "<br>";
echo "cin:".$utilisateur->getCin();
echo "<br>";
echo "nom:".$utilisateur->getNom();
echo "<br>";
echo "prenom:".$utilisateur->getPrenom();
echo "<br>";
echo "email:".$utilisateur->getEmail();
echo "<br>";
echo "adresse:".$utilisateur->getAdresse();
 


?>