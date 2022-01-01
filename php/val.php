<?php

    class UserValidator{

        private $data;
        private $errors = [];
        private static $fields = ['username', 'password', 'email'];

        public function __construct($post_data){
            $this->data = $post_data;
        }

        public function validateForm(){

            foreach(self::$fields as $field){
                if(!array_key_exists($field, $this->data)){
                    trigger_error("$field is not present in data");
                    return;
                }
            }
            $this->validateUsername();
            $this->validatePassword();
            $this->validateEmail();
            return $this->errors;
        }

        private function validateUsername(){
            $var = trim($this->data['username']);

            if(empty($var)){
                $this->addError('username', 'username is empty!');
            }
            else{
                if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $var)){
                    $this->addError('username', 'invalid username!');
                }
            }
        }

        private function validatePassword(){
            $var = trim($this->data['password']);

            if(empty($var)){
                $this->addError('password', 'password is empty!');
            }
            else{
                if(!preg_match('/^[a-zA-Z0-9]{6,12}$/', $var)){
                    $this->addError('password', 'invalid password!');
                }
            }
        }

        private function validateEmail(){
            $var = trim($this->data['email']);

            if(empty($var)){
                $this->addError('email', 'email is empty!');
            }
            else{
                if(!preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/', $var)){
                    $this->addError('email', 'invalid email!');
                }
            }

        }

        private function addError($key, $var){
            $this->errors[$key] = $var;
        }
    }

?>