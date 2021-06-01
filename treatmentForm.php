<?php

  try {
    require_once "config.php";
    if (isset($_POST['name']) and isset($_POST['description']) and isset($_POST['stack']) and isset($_POST['repo']) and isset($_POST['link']) and isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
      if ($_FILES['image']['size'] <= 1000000) {
        $infos_files = pathinfo($_FILES['image']['name']);
        $extension_file = $infos_files['extension'];
        $extensions_images = array('jpg', 'jpeg', 'png');
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $stack = htmlspecialchars($_POST['stack']);
        $repo = htmlspecialchars($_POST['repo']);
        $link = htmlspecialchars($_POST['link']);


        if (in_array($extension_file, $extensions_images)) {
          $filename = uniqid() . str_replace(' ', '_', $_FILES['image']['name']);
          $url_image = "images/$filename";
          if (move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $filename)) {
            $sqlCreate = "INSERT INTO projects(name, description, image, stack, link, repo) VALUES (:name, :description, :image, :stack, :link, :repo)";

            $req = $bdd->prepare($sqlCreate);
            $req->bindValue(':name', $name);
            $req->bindValue(':description', $description);
            $req->bindValue(':image', $url_image);
            $req->bindValue(':stack', $stack);
            $req->bindValue(':repo', $repo);
            $req->bindValue(':link', $link);
            $req->execute();
            $req->closeCursor();
            header("location: index.php");
            $bdd = $bdd; // pour libérer la ressource
          } else {
            echo "Probleme lors du téléchargement de l'image";
          }
        } else {
          echo "Ce fichier n'est pas une image";
        }
      } else {
        echo "Fichier trop volumineux";
      }
    } else {
      echo "Vous n'avez pas remplis tous les champs";
    }
  } catch (PDOException $err) {
    echo "Error: " . $err->getMessage();
  }

  ?>