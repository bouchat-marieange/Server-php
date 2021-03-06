
    <h2>Formulaire d'inscription</h2>

        <form action="index.php?action=signupform" onsubmit="return verifForm(this)" method="post">
            <!-- permet de bloquer l'envoi du formulaire si l'un des champ n'est pas correctement rempli -->

          <div>
            <label for="pseudo">Pseudo : </label>
            <input type = "text" name="pseudo" id="pseudo" placeholder="Votre pseudo" autofocus onblur="verifPseudo(this)" />
            <!-- onBlur, déclenché lorsque le champ en question perd le focus, on utilise le mot-clé this puisque le champ à vérifier est justement celui qui vient de perdre le focus -->
          </div>
          <div id="error_pseudo"></div>

          <div>
            <label for="email">Email : </label>
            <input type = "text" name="email" size="30" id="email" placeholder="Votre email" onblur="verifMail(this)" />
          </div>
          <div id="error_mail"></div>

          <div>
            <label for="pass">Mot de passe :</label>
            <input type = "password" name="pass" id="pass" placeholder="Votre mot de passe"/>
          </div>

          <div class="button">
            <input type="submit" value="S'enregister"/>
          </div>
    </form>

    <!-- lien vers script javascript -->
    <script src="assets/js/app.js"></script>
    <!-- <script src="app.js"></script> -->

  </body>

</html>
