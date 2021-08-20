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

    
    
    //
    function update(int $userId, array $userData) : void {

        $accounts   = $userData;

         foreach ($accounts as $account) {
            if ($account['id'] == $userId) {
                $account['balance'] += $_POST['money'];
                
            }
        }
      
        $this->create($account);
  

          
    }
    //
    function delete(int $userId) : void {
        
    }
    //
    function show(int $userId) : array {

        return [];
    }
    //
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
    