<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Travaux paysagiste, tonte de pelouse, élagage, entretien espaces verts en Essonne, 91370 Verrières-le-Buisson. Notre expertise à votre service pour entretenir, créer ou modifier votre jardin, espace vert à domicile, en entreprise ou à vos bureaux. Paysagiste à Verrière-le-Buisson 91370. Elagage à Verrière-le-Buisson 91370. Taille de haie à Verrière-le-Buisson 91370. Pose de gazon à Verrière-le-Buisson 91370" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Espaces verts en région parisienne</title>
  </head>
  <body>
    <header >
      <div class="contact-header">
        <h4>Verrières-le-Buisson <br>Paysagiste</h4>
        <i class="fa-solid fa-phone"> <a href="tel:0609872944">06 09 87 29 44</a></i>
        <i class="fa-solid fa-at"> <a href="mailto:info@paysagiste-verrieres-le-buisson.fr">info@paysagiste-verrieres-le-buisson.fr</a></i>
      </div>
    </header>    
    <main>
      <div class="row-desc">
        <h1>Votre entreprise de paysagiste et d'élagage situé à 91370 Verrières-le-Buisson en Essonne</h1>
        <p>Vos travaux d'élagage à proximité de votre domicile, de votre maison ou de votre bureau à un clic de souris.</p>
      </div>
      <section class="container">
        <div class="content">
          <h2>Découvrez nos services</h2>
          <div class="desc-group">
            <div class="desc">
              <div class="desc1 img1">
                <h3 class="title">Aménagement et création de jardin</h3>   
              </div>
              <p>Comme votre jardin est avant tout un lieu de bien-être, nous vous conseillons sur l'agencement et le mariage des essences végétales. Une fois votre bonheur trouvé, nous effectuons les travaux pour donner vie à vos envies. Marier les couleurs en fonction des saisons, les types de gazons, les feuillus ou les résineux.</p>
            </div>
            <div class="desc">
              <div class="desc1 img2">
                <h3 class="title">Pose de clotures</h3>   
              </div>
              <p>Les clotures sont des éléments tant décoratifs que sécuritaires. En effet, que vous vouliez juste délimiter votre jardin ou simplement enlever certains vis-a-vis gênants. La cloture doit de qualité et durable.</p>
            </div>
            <div class="desc">
              <div class="desc1 img3">
                <h3 class="title">Elagage</h3>   
              </div>
              <p>L'élagage n'est pas chose facile et peut être périlleux. C'est pourquoi, nous, professionnels,   nous avons les outils et les formations pour intervenir en sécurité. Certains élagages peuvent être dans des lieux ou des batiments sont à proximité. Nous avons le savoir-faire et l'expérience pour que ces travaux soient menés à bien.</p>
            </div>
            <div class="desc">
              <div class="desc1 img4">
                <h3 class="title">Dessouchage</h3>   
              </div>
              <p>Quoi de plus agaçant que de voir une souche au milieu de son beau gazon ? Avec la plupart du temps des racines profondes, nous avons également les compétences pour enlever les souches avec le matériel adéquat.</p>
            </div>
          </div>
        </div>
        <div class="formulaire">
          <form method="post">
            <h2>Contactez-nous</h2>
            <div class="form-group">
              <label for="name">Votre nom</label>
              <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Votre email</label>
              <input type="email" class="form-control" id="email" placeholder="Votre email" name="email" required>
            </div>
            <div class="form-group">
              <label for="city">Votre ville</label>
              <input type="text" class="form-control" id="city" placeholder="Votre ville" name="city" required>
            </div>
            <div class="form-group">
              <label for="message">Votre message</label>
              <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
            </div>
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" required>
              <label class="form-check-label form-desc" for="checkbox">J'accepte que mes informations saisies soient exploitées pour la prise de rdv et de la relation commerciale qui peut en découler avec notre paysagiste.</label>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
              <?php
                if (isset($_POST['message'])) {
                    $message = "Message envoyé via la page contact du site elagage.com
                      Nom: " . $_POST['name'] . "
                      Email: " . $_POST['email'] . "
                      Ville: " . $_POST['city'] . "
                      Message: " . $_POST['message'];

                    $retour = mail("info@paysagiste-verrieres-le-buisson.fr", $_POST["sujet"], $message,
                        "From:info@paysagiste-verrieres-le-buisson.fr" . "\r\n" . "Reply-To: " . $_POST["email"]);
                    if ($retour) {
                        echo "<p>Votre message a bien été envoyé !</p>";
                    } else {
                        echo "<p>Une erreur est survenue, veuillez réessayer plus tard.</p>";
                    }
                } 
              ?>
            </form>
        </div>
      </section>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
