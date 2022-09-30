<?php
require("head.html");
?>

<body>
    <?php
    require("header.html");
    ?>
    <div class="main">
        <div class="containerContent">
            <h2>Contactez-nous !</h2>
            <form class="formContact" action="" method="post">
                <div class="contactInfo">
                    <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->
                    <label for="lastName">NOM</label>
                    <input type="text" name="lastName" id="lastName" placeholder="NOM" />

                    <label for="firstName">Prénom</label>
                    <input type="text" name="firstName" id="firstName" placeholder="Prénom" />

                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="email" />
                </div>
                <div class="contactMsg">
                    <legend>Votre message</legend> <!-- Titre du fieldset -->
                    <p>
                        <textarea name="precisions" id="precisions" cols="100" rows="10"></textarea>
                    </p>
                </div>
                <div class="submitBtnContainer">
                <input class="submitBtn" type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
    <?php require("footer.html"); ?>
</body>