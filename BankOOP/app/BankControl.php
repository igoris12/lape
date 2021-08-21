<?php
require __DIR__. '/Account.php';



class BankControl implements DataBase {


    // validaciaj
    function create(array $userData) : void {
        $reInfo = $this->showAll();
        $reInfo []= $userData;

        $userData= json_encode($reInfo);
        file_put_contents(__DIR__.'/data.json',$userData);
    }

    public function a($a) {
        $userData= json_encode($a);
        file_put_contents(__DIR__.'/data.json',$userData);
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


// massages
    function delete(int $userId) : void {
        $accounts = $this->showAll();

        foreach ($accounts as $key => $account) {
            if ($account['balance'] == 0) {
               if ($account['id'] == $userId) {
                unset($accounts[$key]);
                break;
                } 
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

    // creat calidation 
    public function addNewAccountCintrol(): array {
        $array = [];
        if ('POST' == $_SERVER['REQUEST_METHOD']) {
            if (
            is_numeric($_POST['pesonCode']) &&
            strlen($_POST['pesonCode']) == 11 &&
            nameControl($_POST['firstName'])&&
            nameControl($_POST['lastName']) &&
            nameNumberControl($_POST['firstName']) &&
            nameNumberControl($_POST['lastName']) &&
            personCodeStartControl($_POST['pesonCode'])
            ) {
            // accountNumberControl();
            // personCodeControl();
            $array = [
            'id' => rand(1000000000, 9999999999),
            'name' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'personCode' => $_POST['pesonCode'],
            'aNumber' => $_POST['acNumber'],
            'balance' => 0,
            ];
            return $array;
            }
        }
    } 
}
    