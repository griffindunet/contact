
<?php 
if(!empty($_POST['submit'])){

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$tel = htmlspecialchars($_POST['tel']);
$email = htmlspecialchars($_POST['email']);
$sujet = htmlspecialchars($_POST['sujet']);
$msg = htmlspecialchars($_POST['msg']);

if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['tel']) AND !empty($_POST['sujet']) AND !empty($_POST['msg']))
{
	

$destinataire = 'remys95@gmail.com'; // Adresse email 
     $sujet ; // Titre de l'email

      $msg_mail = '<p> Nom : '.$nom.'</p> <p> prenom:'.$prenom.'</p> <p> tel : '.$tel.'</p> <p>email:'.$email.'</p><p> message:'.$msg.'</p> </body></html>';
    
       $html = 'MIME-Version: 1.0'."\r\n";
      $html .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";


      // Env
      // Env
      // Envoyer l'email
      mail($destinataire, $sujet, $msg_mail,$html);
  // Fonction principale qui envoi l'email
      $envoyer= '<div class="alert alert-primary" role="alert">
Message envoyé!</div>'; // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
   }
else
{
$erreur = '<div class="alert alert-danger" role="alert">merci de remplir tout les champs';
}
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <style>
  form{
  	text-align: center;
  }
    </style>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Remysimpson</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
    
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Pastebin <span class="sr-only"></span></a>
      </li>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Chrono <span class="sr-only"></span></a>
      </li>
    
    
    </ul>
    <li class="nav-item active">
        <a class="nav-link" href="#">contact <span class="sr-only"></span></a>
      </li>

  </div>

</nav>

</head>

<body>
 <form id="contact" method="post" action="contact.php">
 		<h1> Contactez le webmaster</h1>

            <p>Votre nom  <input type="text" name="nom" size="30" /></p>
   <p>Votre prenom  <input type="text" name="prenom" size="30" /></p>

     <p>Votre telephone  <input type="text" name="tel" size="30" /></p>

          <p>Votre email: <span style="color:#ff0000;">*</span>: <input type="email" name="email" size="30" /></p>
          <p> Votre sujet du mail : <input type="text" name="sujet" size="30"></p>
          <p>Message <span style="color:#ff0000;">*</span>:</p>
          <textarea name="msg" cols="60" rows="10"></textarea>

          <p><input type="submit" name="submit" value="Envoyer" /></p>
          <br>  


<?php 
echo $erreur;
echo $envoyer;
echo $sujet,$msg_mail,$headers;

?>
</div>
</form>
</body>
</html>
