<?php



// $bank = new BankControl;

class Router {

public function roter() {
    $route = $_GET['route'] ?? '';

    if ('POST' == $_SERVER['REQUEST_METHOD'] &&  $route == 'add' && isset($_GET['id'])) {
        require 'C:\xampp\htdocs\lape\BankOOP\views/add.php';
        die;

     }   
    
    if ('GET' == $_SERVER['REQUEST_METHOD'] &&  $route == 'add' && isset($_GET['id'])) {
        require 'C:\xampp\htdocs\lape\BankOOP\views/add.php';
        die;

        
    }elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  $route == 'subtract' && isset($_GET['id'])) {
        header('Location: http://localhost/lape/BankOOP/public/');
        die;
    }

    elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  $route == 'transfer' && isset($_GET['id'])) {
    $bank = new BankControl;
    $data = $bank->showAll();
    $bank->update($_GET['id'],$data);
    
    }
}

}