<?php
require_once('./configs/database.php');
require_once('./models/User.php');

class HomeController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }
}
?>
