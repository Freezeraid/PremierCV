<div id="contact-form">
    <form method="post" action="src/php/sendmail.php">
        <label for="nom">Nom :
        <input type="text" id="nom" name="lastname" placeholder="Votre nom ..."></label>

        <label for="fname">Prénom :
        <input type="text" id="fname" name="firstname" placeholder="Votre prénom ..."></label>

        <label for="lname">E-mail :
        <input type="text" id="email" name="youremail" placeholder="Votre e-mail ..."></label>

        <label for="msg">Message :
        <textarea id="msg" name="user_message" placeholder="Votre message ..."></textarea></label>

        <input type="submit" value="Envoyer">
    </form>
</div>