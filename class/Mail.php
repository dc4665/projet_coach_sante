<?php
/**
*\brief Cette classe gère les envoies de mails sur le site.. 
 */
    class Mail {

        /**  
        * Attributs de la classe
        */
        private $_to;
        private $_subjet;
        private $_template;

        /** fonction __construct qui s'active lors de l'instanciation. 
         * @param array $donnees 
        */
        public function __construct(array $donnees = NULL){

            if(isset($donnees)){
                $this->hydrate($donnees);
            }
                
        }

        //fonction hydrate
        public function hydrate(array $donnees){

            foreach($donnees as $key=>$value){

                $method = 'set'.ucfirst($key);

                if(method_exists($this, $method)){

                    $this->$method($value);
                }

            }
        }

        /** Les méthodes getters pour récupérer les attributs de l'objet instancié.
        */
        public function getTo(){
            return $this->_to;
        }

        public function getSubjet(){
            return $this->_subject;
        }

        public function getTemplate(){
            return $this->_template;
        }

        /** Les méthodes setters pour affecter les attributs de l'objet instancié. Principalement activé par la fonction hydrate() de la classe parent Objet.
        */
        public function setTo($to){
            $this->_to = $to;
        }

        public function setSubject($subject){
            $this->_subject = $subject;
        }

        public function setTemplate($template){
            $this->_template = $template;
        }

        /** Méthode pour envoyer des mails.  */
        public function send(array $data){

            /** Appel à la méthode getData() contenu dans la classe */
            $message = $this->getData($data);

            /** envoie au format html du mail (note: on peut envoyer des mails en version txt ou html) */
            $entete = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=charset=UTF-8\r\n' . "\n";

            /** exécutin de la fonction mail() propre à PHP */
            $result = mail($this->_to, $this->_subject, $message, $entete);

        }

        /** Fonction pour récupérer le bon template lors de l'envoie de l'email. Les termes entre accolades dans les fichiers tpl sont remplacés par les valeurs des variables.  */
        private function getData(array $data){
            /** Appel à la méthode getPathTemplate dans la classe pour récupérer le template et le lire. */
            $ressource = fopen($this->getPathTemplate(), 'rb');
            
            //on lit le fichier
            $ressource = fread($ressource, filesize($this->getPathTemplate()));

            $cherche = [];
            $remplacement = [];

            foreach($data as $key=>$value){

                $cherche[] =  '{'.$key.'}';
                $remplacement[] = $value; 
            }

            $ressource = str_replace($cherche, $remplacement, $ressource);
            return $ressource; 

        }

        /** Méthode pour récupérer le bon template */
        private function getPathTemplate(){

            return 'template/'.$this->_template.'.tpl';
        }

    }