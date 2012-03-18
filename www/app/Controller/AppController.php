<?php
class AppController extends Controller {
    function beforeFilter(){
        if (!empty($this->params['admin'])) {
            $this->layout = "admin";
        }else{
            $this->layout = "default";
        }
    }
}

?>

