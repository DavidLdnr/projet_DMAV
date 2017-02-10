<?php
class FormUpload {

    private $type= "";
    private $description  = "";
    private $file = null;

	//création du formulaire d'upload via la fonction magique __toString()
    function __toString(){

        return ("<form action='index.php?page=upload' method='post' enctype='multipart/form-data'>
                     <label>Description</label><input type='text' name='description' value='' autofocus required>
                     <input type='file' name='file' required><br> Choisissez le type de fichier que vous voulez upload<br>
                     <input type='radio' name='type' value='1'>Video
                     <input type='radio' name='type' value='2'>Audio
                     <input type='radio' name='type' value='3'>Image<br>
                     <input type='hidden' name='envoie'>
                     <input type='submit' value='Valider'>
                 </form>");

	}

    function check()
    {
        $ret = true;
        if(isset($_POST['type']))
        {
            $this->type = $_POST['type'];
        }
        else
        {
            $ret = false;
        }

        if(isset($_POST['description']))
        {
            $this->description = $_POST['description'];
        }
        else
        {
            $ret = false;
        }

        if(isset($_FILES['file']))
        {
            $this->file = $_FILES['file'];
        }
        else
        {
            $ret = false;
        }

        return $ret;
    }

    function traitement()
    {
        if(isset($_POST['envoie']))
        {
            if($this->check())
            {
                try
                {
                	$envoie=ConnexionMediaBase::getInstance()->insert_data($_POST['description'],$_FILES['file'], $_POST['type']);
                    if($envoie)
                    {
                        echo "<span class='ok'>Votre fichier est bien enregistré.</span>";
                        return;
                    }
                }
                catch (Exception $exception)
                {
                    echo "<span class='error'>".$exception->getMessage()."</span>";
                    return;
                }

            }
            else
            {
                echo "<span class='error'>Tous les champs sont nécessaires.</span>";
            }
        }
    }
}