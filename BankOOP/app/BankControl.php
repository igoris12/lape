<?php
require __DIR__. '/Account.php';



class BankControl implements DataBase {


    //
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

    
    //
    function update(int $userId, array $userData) : void {

        $accounts  = $userData;
        // if ($_GET['route'] == 'add') {
        //      foreach ($accounts as $account) {
        //     if ($account['id'] == $userId) {
        //         $account['balance'] += $_POST['money'];
        //     }
        // }
        // $accounts = json_encode($accounts);
        // file_put_contents(__DIR__.'/data.json',$accounts);
        // }
        if ($_GET['route'] == 'subtract') {
           foreach ($accounts as $key => $account) {
            if ($account['id'] == $userId) {
                $account['balance'] -= $_POST['money'];
            }
            echo '<pre>';
            print_r($account);
            echo '<br>';
            
           }
        print_r($accounts);  
        $accounts = json_encode($accounts);
        file_put_contents(__DIR__.'/data.json',$accounts);
         
        }

       
       
    }
    //+
    function delete(int $userId) : void {
        $accounts = $this->showAll();

        foreach ($accounts as $key => $account) {
            if ($account['id'] == $userId) {
                unset($accounts[$key]);
                break;
            }
        }
        $accounts = json_encode($accounts);
        file_put_contents(__DIR__.'/data.json',$accounts);
    }
    //
    function show(int $userId) : array {

        return [];
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
    
}
    