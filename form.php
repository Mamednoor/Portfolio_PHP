<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Formulaire - Ajouter un projet</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <button onclick="window.location.href='index.php'" class="back-btn" >Retour</button>

  <form class="form-container" action="treatmentForm.php" method="post" enctype="multipart/form-data">
    <h3>formulaire :</h3>

    <div class="form-group">
      <label class="form-label" for="name">Name :</label>
      <input class="form-input" type="text" id="name" name="name">
    </div>

    <div class="form-group">
      <label class="form-label" for="picture">Image :</label>
      <input type="file" class="form-input" id="picture" name="picture">
      <div class="preview" id="preview"></div>
    </div>

    <div class="form-group">
      <label class="form-label" for="stack">Stack :</label>
      <input class="form-input" id="stack" name="stack">
    </div>

    <div class="form-group">
      <label class="form-label" for="link">Link :</label>
      <input class="form-input" id="link" name="link">
    </div>

    <div class="form-group">
      <label class="form-label" for="repo">repository url :</label>
      <input class="form-input" id="repo" name="repo">
    </div>

    <div class="form-group">
      <label class="form-label" for="description">Description :</label>
      <textarea class="form-textarea" id="description" name="description"></textarea>
    </div>

    <div class="form-group-btn">
      <button class="button" type="submit" >Enregistrer</button>
    </div>
  </form>

  
	<script src="js/script.js"></script>

</body>

</html>