<?php

    class Mail {

        //attribut
        private $_to;
        private $_subjet;
        private $_template;

        // fonction __construct
        public function __construct($donnees = NULL){

            if(isset($donnees)){
                $this->hydrate($donnees);
            }
                
        }

        //fonction hydrate
        public function hydrate($donnees){

            foreach($donnees as $key=>$value){

                $method = 'set'.ucfirst($key);

                if(method_exists($this, $method)){

                    $this->$method($value);
                }

            }
        }

        //getters
        public function getTo(){
            return $this->_to;
        }

        public function getSubjet(){
            return $this->_subject;
        }

        public function getTemplate(){
            return $this->_template;
        }

        //setters
        public function setTo($to){
            $this->_to = $to;
        }

        public function setSubject($subject){
            $this->_subject = $subject;
        }

        public function setTemplate($template){
            $this->_template = $template;
        }

        //fonction pour envoyer des mails
        public function send(array $data){

            //la fonction getData() est utilisée plus bas
            $message = $this->getData($data);

            //envoie au format html (note: on peut envoyer des mails en version txt ou html)
            $entete = 'MIME-Version: 1.0' . "\r\n";
            $entete .= 'Content-type: text/html; charset=iso-8859-1' . "\n";

            $result = mail($this->_to, $this->_subject, $message, $entete);

            //var_dump($result);

        }

        private function getData($data){
            //ouvrir le fichier du template
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

        private function getPathTemplate(){

            return 'template/'.$this->_template.'.tpl';
        }

    }