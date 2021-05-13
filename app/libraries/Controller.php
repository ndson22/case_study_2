<?php
    //Load the model and the view
    class Controller {
        public function model($model) {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

        //Load the view (checks for the file)
        public function view($dir, $view,$data = []) {
            if (file_exists('../app/views/' . $dir . "/" .  $view . '.php')) {
                require_once '../app/views/' . $dir . "/" . $view . '.php';
            } else {
                die("View does not exists.");
            }
        }

        public function upload_file($file, $target_dir, $id)
        {
            require_once '../app/libraries/' . $file . '.php';
            return new $file($target_dir, $id);
        }
    }
