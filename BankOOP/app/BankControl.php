<?php


class BankControl implements DataBase {


    // validaciaj
    function create(array $userData) : void {
        $reInfo = $this->showAll();
        $reInfo []= $userData;

        $userData= json_encode($reInfo);
        file_put_contents(__DIR__.'/data.json',$userData);
        $this->addMassage('success', 'New account created');
    }

    // messange
    function update(int $userId, array $userData) : void {

        $accounts  = $userData;

        if ($_GET['route'] == 'add'  && is_numeric($_POST['money'])) {
            foreach ($accounts as &$account) {
                if ($account['id'] == $userId) {
                $account['balance'] += $_POST['money'];
                }
            }
        }

        if ($_GET['route'] == 'subtract' && is_numeric($_POST['money'])) {
           foreach ($accounts as  &$account) {
                if ($account['id'] == $userId) {
                $account['balance'] -= $_POST['money'];
                }
           }
        }
        $accounts = json_encode($accounts);
        file_put_contents(__DIR__.'/data.json',$accounts);
    }


// massages bug need to fix delete
    function delete(int $userId) : void {
        $accounts = $this->showAll();

        foreach ($accounts as $key => $account) {
            if ($account['balance'] == 0) {
               if ($account['id'] == $userId) {
                unset($accounts[$key]);
                $this->addMassage('success', 'god');
                break;
                }
            }
            elseif ($account['balance'] !== 0) {
                $this->addMassage('danger', 'This account cannot be deleted');
                }
            
        }
        $accounts = json_encode($accounts);
        file_put_contents(__DIR__.'/data.json',$accounts);
    }

    //+
    function show(int $userId) : array {
        $accounts = $this->showAll();
        foreach($accounts as $account) {
            if ($account['id'] == $userId) {
                return $account;
            }
        }
    }
    //+ 
    function showAll() : array {
        if (!file_exists(__DIR__.'/data.json')) {
        $data = [];
        $data = json_encode($data);
        file_put_contents(__DIR__.'/data.json', $data);
    }
    $accounts = json_decode(file_get_contents(__DIR__.'/data.json'),1);
    
    return $accounts;
      
    }

    // look to make soem changes + messages
    public function addNewAccountCintrol(): bool {
        
        if ('POST' == $_SERVER['REQUEST_METHOD']) {
            if (
            is_numeric($_POST['pesonCode']) &&
            strlen($_POST['pesonCode']) == 11 &&
            $this->nameControl($_POST['firstName'])&&
            $this->nameControl($_POST['lastName']) &&
            $this->nameNumberControl($_POST['firstName']) &&
            $this->nameNumberControl($_POST['lastName']) &&
            $this->personCodeStartControl($_POST['pesonCode'])
            ) {
            return true;
            }else {
                return false;
            }
        }
    } 
//+
    public function acountNumber() {
        $acountNumber = 'LT1873000';

        for($i =0; $i<11; $i++) {
        $number=rand(0,9); 
        $acountNumber = $acountNumber.$number;
        }
        
        return $acountNumber;
    }

    public function nameControl(string $name){
        return strlen($name) >= 3 ? true : false; 
    }

    public function nameNumberControl(string $name){
    for ($i = 0; $i< strlen($name); $i++) {
        if (
        $name[$i] == "0" || $name[$i] == "1" ||
        $name[$i] == "2" || $name[$i] == "3" ||
        $name[$i] == "4" || $name[$i] == "5" ||
        $name[$i] == "6" || $name[$i] == "7" ||
        $name[$i] == "8" || $name[$i] == "9" ||
         $name[$i] == " " 
         ) {
            return false;
        }
    }
   return true; 
    }  
    
    public function personCodeStartControl($code) {
    return ($code[0] == 3 || $code[0] == 4 || $code[0] == 5 || $code[0] == 6 ||
    count($code) <= 11 || count($code) >= 11) ? true : false;
    }

    // messages 
    function addMassage(string $type, string $msg) : void {
        $_SESSION['msg'][]= ['type' => $type, 'msg' => $msg];
    }

    function clearMessage(): void {
        $_SESSION['msg'] = [];
    }

    function showMessage(): void {
        if (isset($_SESSION['msg'])) {
        $message = $_SESSION['msg'];
        $this->clearMessage();
        require 'C:\xampp\htdocs\lape\BankOOP\views\msg.php';
        }
    }
}
    