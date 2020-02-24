{* C'est notre template mère qui contient entre autre:
Bootstrap
Lien vers le fichier CSS
Fontawesome
Jquery
Googlefont
 *}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach Sante - Accueil</title>
    <meta name="description" content="Coaching Personnel, musculation, fitness et perte de poids. Nous sommes une petite équipe de coachs passionnés proche de nos clients.">
    <link href="./css/bootstrap.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <link href="./fontawesome/css/all.css" rel="stylesheet" />
     <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>
    <script src="../js/bootstrap.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Anton%7CRoboto&display=swap" rel="stylesheet"> 
</head>

<body>
    {block name="header"}{include file="./header.tpl"}{/block}

    {block name="content"}Contenu{/block}

    {block name="footer"}{include file="./footer.tpl"}{/block}

</body>
</html>