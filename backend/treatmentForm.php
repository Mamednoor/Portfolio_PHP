<?php

  try {
    require_once "../config.php";
    if (isset($_POST['name']) and isset($_POST['description']) and isset($_POST['stack']) and isset($_POST['repo']) and isset($_POST['link']) and isset($_FILES['picture']) and $_FILES['picture']['error'] == 0) {
      if ($_FILES['picture']['size'] <= 1000000) {
        $infos_files = pathinfo($_FILES['picture']['name']);
        $extension_file = $infos_files['extension'];
        $extensions_images = array('jpg', 'jpeg', 'png');
        $name = htmlspecialchars($_POST['name']);
        $description = htmlspecialchars($_POST['description']);
        $stack = htmlspecialchars($_POST['stack']);
        $repo = htmlspecialchars($_POST['repo']);
        $link = htmlspecialchars($_POST['link']);


        if (in_array($extension_file, $extensions_images)) {
          $filename = uniqid() . str_replace(' ', '_', $_FILES['picture']['name']);
          $url_picture = "asset/images/$filename";
          if (move_uploaded_file($_FILES['picture']['tmp_name'], '../asset/images/' . $filename)) {
            $sqlCreate = "INSERT INTO Projects(name, description, picture, stack, link, repo) VALUES (:name, :description, :picture, :stack, :link, :repo)";

            $req = $bdd->prepare($sqlCreate);
            $req->bindValue(':name', $name);
            $req->bindValue(':description', $description);
            $req->bindValue(':picture', $url_picture);
            $req->bindValue(':stack', $stack);
            $req->bindValue(':repo', $repo);
            $req->bindValue(':link', $link);
            $req->bindValue(':link', $link);
            $req->execute();
            $req->closeCursor();
            header("location: ../index.php");
            $bdd = null;
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
