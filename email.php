<?php



class email
{

    public $subject;
    public $messages;
    public $dossiers;
    public $expediteur;
    public $headers;
    public $destinataire;


    function ecrire(){
        $this->subject=$_POST['subjet'];
        $this->messages= $_POST['messages'];
        $this->destinataire=$_POST['destinataire'];
        $this->expediteur=$_POST['expediteur'];
        $to= "michelebonnet59550@gmail.com";
        $headers="From:{$_POST['messages']} " ."<{$_POST['mail']}>\r\n";
        // $mail=$_POST['mail'];
        $subject="fomulaire";
        $messages="votren message".messages."est bien envoyé";
        mail( $to,  $subject, $messages, $headers);


        //mail($to, $subject, $messages, $headers);

        if (mail($this->subject, $this->expediteur,  $this->messages, $this->destinataire)){
            echo"votre mail a été envoyé";
        }
        else{
            echo "votre mail n'a pas été envoyé";
        }
    }

    function epinglerUnDossier(){
        $this->dossiers= $_POST['dossiers'];
    }
    /*Creation d'une instance de la classe personnage*/
}