<?php
//$i = 0;
foreach ($_POST as $key => $value) {
	if (preg_match('#objet#', $key)) {
		$objet = $value;
	}
	if (preg_match('#Text1#', $key)) {
		$text = $value;
	}
	//i++;
}
echo '<body>';
echo '<button onclick="envoiMail()">Envoi des formulaires</button>';
echo '<script src="https://smtpjs.com/v2/smtp.js">';
echo '</script>';

echo '<script>function envoiMail(){ ';
echo 'var mdp = "affectopt1";';

echo 'Email.send("optionaffectation@gmail.com",';
echo '"'.$_POST['mail'].'",';
echo '"'.$objet.'","'.$text.'","smtp.gmail.com","optionaffectation@gmail.com",mdp);';

echo '}</script>';
echo '</body>';
?>