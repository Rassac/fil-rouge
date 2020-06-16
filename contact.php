<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/png" href="img/flavicon.png" />
  <title>TCOMPUTING - CONTACT</title>
</head>

<body>
  <?php include 'php/header.php'; ?>
  <div class="fond-contact">
    <div class="about-us">
      <h1>CONTACTEZ-NOUS</h1><br>
      <p>Pour satisfaire au mieux votre demande, nous nous engageons à répondre dans les meilleurs délais et aussi rapidement que possible.</p><br>
      <p>Également, nous sommes à votre écoute pour optimiser notre site web. Vous ne trouvez pas de réponse à l’une de vos question ? Vous souhaitez que l’on rajoute une documentation sur un logiciel ou une extension particulière ? Discutons-en ensemble !</p>
    </div>
  </div>
  <main>
    <section class="contact">
      <h1>Formulaire de contact</h1>
      <form name="myForm" action="/file.php" onsubmit="return validateForm()" method="post">
        <table class="form-style">
          <tr>
            <td>
              <label>
                Votre nom <span class="required">*</span>
              </label>
            </td>
            <td>
              <input type="text" name="name" class="long" />
              <span class="error" id="errorname"></span>
            </td>
          </tr>
          <tr>
            <td>
              <label>
                Votre adresse e-mail <span class="required">*</span>
              </label>
            </td>
            <td>
              <input type="email" name="email" class="long" />
              <span class="error" id="erroremail"></span>
            </td>
          </tr>
          <tr>
            <td>
              <label>
                Message <span class="required">*</span>
              </label>
            </td>
            <td>
              <textarea name="message" class="long field-textarea"></textarea>
              <span class="error" id="errormsg"></span>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Envoyer">
              <input type="reset" value="Réinitialiser">
            </td>
          </tr>
        </table>
      </form>
    </section>
  </main>
  <?php include 'php/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
</body>

</html>