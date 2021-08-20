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
    }
    elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  $route == 'delete' && isset($_GET['id'])) {
        $bank = new BankControl;
        $bank->delete( $_GET['id']);
        header('Location: http://localhost/lape/BankOOP/views/list.php');
        die;
    }
 //- 
    elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  $route == 'sub' && isset($_GET['id'])) {
        require 'C:\xampp\htdocs\lape\BankOOP\views/subtract.php';
        die;
    }
    elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  $route == 'subtract' && isset($_GET['id'])) {
        $bank = new BankControl;
        $data = $bank->showAll();
        $bank->update($_GET['id'], $data);

    }
    

    elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  $route == 'transfer' && isset($_GET['id'])) {
    $bank = new BankControl;
    $data = $bank->showAll();
    $id = $_GET['id'];
    $bank->update($id,$data);

    header("Location: http://localhost/lape/BankOOP/views/list.php?route=add&id=$id");
    die;
    }
}

}