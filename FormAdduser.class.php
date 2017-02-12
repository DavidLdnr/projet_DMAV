<?php
class FormAdduser {
    private $pseudo= "";
    private $mdp  = "";

    function __toString(){
        return ("<form action='index.php?page=adduser' method='post' enctype='multipart/form-data'>
                     <label>Pseudo</label><input type='text' name='pseudo' value='' autofocus required><br>
                     <label>Mot de passe</label><input type='password' name='mdp' value='' autofocus required>
                     <input type='hidden' name='envoie'>
                     <input type='submit' value='Valider l&#039;inscription'>
                 </form>");
	}

    // Permet de vérifier les variables $_POST et valider la methode traitement au dessous
    function check()
    {
        $ret = true;
        if(isset($_POST['pseudo']))
        {
            $this->pseudo = $_POST['pseudo'];
        }
        else
        {
            $ret = false;
        }

        if(isset($_POST['mdp']))
        {
            $this->mdp = $_POST['mdp'];
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
                	$envoie=ConnexionMediaBase::getInstance()->insert_user($_POST['pseudo'], $_POST['mdp']);
                    if($envoie)
                    {
                        echo "<p><span class='ok'>La création de votre compte est validée.</span></p>";
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