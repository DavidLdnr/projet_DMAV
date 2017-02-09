<?php

class ConnexionMediaBase {
private static $instance;
private $host = 'localhost';
private $user = 'root';
private $pass = '';
private $db   = 'mediabase';
private $dbh;

private function __construct() {
 $this->dbh = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->pass);
}


  public static function getInstance() {
    if (!self::$instance) self::$instance = new self();
    return self::$instance;
  }

  public function get_user($pseudo){
  	$req = "SELECT * FROM users where pseudo='$pseudo'";
	try
    {
 	    $result=$this->dbh->query($req);
        $obj=$result->fetchObject();
        return new User($obj->id,$obj->pseudo,$obj->mdp);
     }
     catch (PDOException $exception)
     {
        return null;
     }
  }

  public function insert_data($description, $file, $type)
  {
	  try
		{
    $date = date('Y-m-d-H-i-s');
    $repertoire = "./multimedia";
    $repertoire2 = "./multimedia/videos";
    $repertoire3 = "./multimedia/audio";
    $repertoire4 = "./multimedia/images";
    $type = $_POST['type'];

    if (!file_exists($repertoire))
	{
		mkdir ($repertoire,0700);
		echo " -=> Création du repertoire $repertoire réussi<br>";
	}
	if (!file_exists($repertoire2))
	{
		mkdir ($repertoire2,0700);
		echo " -=> Création du repertoire $repertoire2 réussi<br>";
	}
	if (!file_exists($repertoire3))
	{
		mkdir ($repertoire3,0700);
		echo " -=> Création du repertoire $repertoire3 réussi<br>";
	}

	if (!file_exists($repertoire4))
	{
		mkdir ($repertoire4,0700);
		echo " -=> Création du repertoire $repertoire4 réussi<br>";
	}

    if(isset($_FILES['file'])) // si formulaire soumis
    {
        if($type == 1)
        {
		    $content_dir = $repertoire2;// dossier où sera déplacé le fichier
	    }
        elseif($type == 2)
        {
		    $content_dir = $repertoire3;// dossier où sera déplacé le fichier
	    }
        elseif($type == 3)
        {
		    $content_dir = $repertoire4;// dossier où sera déplacé le fichier
	    }

        $tmp_file = $_FILES['file']['tmp_name'];

        if( !is_uploaded_file($tmp_file) )
        {
            exit("Le fichier est introuvable");
        }

        // on vérifie maintenant l'extension
        $filename = $_FILES['file']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
	    if ($type == 1)
        {
            if($ext != 'webm')
            {
                exit("Le fichier n'est pas un webm,veuillez le convertir en webm s'il vous plais!!!!!!!!!!");
            }
		}
        elseif ($type == 2)
        {
            if($ext != 'ogg')
            {
                exit("Le fichier n'est pas un ogg,veuillez le convertir en ogg s'il vous plais!!!!!!!!!!");
            }
	    }
         elseif ($type == 3)
        {
             if(!in_array(strtolower($ext), array('gif', 'svg', 'png', 'jpg', 'jpeg')))
            {
                exit("Veuillez convertir l'image en PNG,JPG/JPEG ou en GIF s'il vous plais!!!!!!!!!!");
            }
	    }

        // on copie le fichier dans le dossier de destination
        $name_file = $_FILES['file']['name'];
        $chemin = $content_dir.'/'.$name_file;
        if(preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file))
        {
            exit("Nom de fichier non valide");
        }
        else if(!move_uploaded_file($tmp_file, $chemin))
        {
            exit("Impossible de copier le fichier dans $content_dir");
        }

        echo "Le fichier a bien été uploadé</br>";

	    $nom = $name_file;

        $req="INSERT INTO DATAS (`type`, `chemin`, `mimetype`, `description`, `date`, `id_user`) VALUES ('$type', '$chemin', '".$_FILES['file']['type']."', '$description', '$date', '".$_SESSION['user_id']."')";
        echo $req;
		    $result=$this->dbh->query($req);
	    }

		}
		catch (PDOException $exception)
		{
			return null;
			exit("erreur de transfert vers le serveur");
		}
  }


  public function recherche($auteur,$description,$types)
  {
    $user  = null;
    if ($auteur!="")
    {
        $reqaut="SELECT * FROM users where pseudo='$auteur'";
        try
        {
            $result=$this->dbh->query($reqaut);
            $user=$result->fetchObject();
        }
        catch (PDOException $exception)
        {
            echo $exception->getmessage();
            return null;
        }
        if ($user == null)
            throw new Exception("Auteur inconnu");;
    }

    $withAnd = false;
    $req = "SELECT * FROM datas WHERE ";
    if($user != null)
    {
        $req.= "id_user=$user->id ";
        $withAnd = true;
    }

    if(!empty($types))
    {
        if($withAnd){
            $req .= "and "    ;
        }

        $withAnd = true;
        $req.= "(type='";
        for($i = 0; $i < count($types); $i++)
        {
            $req .= "$types[$i]'";
            if($i < count($types) - 1){
                $req .= " or type='";
            }
            else
            {
                $req .= ") ";
            }
        }
    }

    if($description != "")
    {
        if($withAnd){
            $req .= " and ";
        }

        $req .= "description like '%$description%'";
    }

    try
    {
        $result=$this->dbh->query($req);
        $i=1;
        $hasResult = false;
        while ($req=$result->fetchObject())
        {
            echo "<p>Résultat numéro $i: ";
            echo $req->description."</p>";
            $hasResult = true;
            $i++;
        }

        if(!$hasResult){
            throw new Exception("Aucun résultat ne correspond à votre recherche.");
        }
    }
    catch (PDOException $exception)
    {
        throw $exception;
    }
    }

}