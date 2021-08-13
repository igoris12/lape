<?php

function getAccount() {
    if (!file_exists(__DIR__.'/data.json')) {
        $data = [];
        $data = json_encode($data);
        file_put_contents(__DIR__.'/data.json', $data);

    }
    $accounts = json_decode(file_get_contents(__DIR__.'/data.json'),1);
    usort($accounts, 'accountSort');

    return $accounts;
}

function setAccount(array $info): void {
    $reInfo = getAccount();
    $reInfo []= $info;

    usort($reInfo, 'accountSort');

    $info= json_encode($reInfo);
    file_put_contents(__DIR__.'/data.json',$info);
    
 }

function router() 
{
    $route = $_GET['route'] ?? '';
        if ('GET' == $_SERVER['REQUEST_METHOD'] &&  '' == $route) {
            require __DIR__ . '/view/center.php';
        }

        elseif ('GET' == $_SERVER['REQUEST_METHOD'] &&  'list' == $route) {
            showStartpage();
    }

            elseif ('GET' == $_SERVER['REQUEST_METHOD'] &&  'add' == $route && isset($_GET['id'])) {
          require __DIR__ . '/view/top.php';
          require __DIR__ . '/view/add.php';
          require __DIR__ . '/view/bottom.php';
    }   
              elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  'add' == $route && isset($_GET['id'])) {
          require __DIR__ . '/view/top.php';
          require __DIR__ . '/view/add.php';
          require __DIR__ . '/view/bottom.php';
    }   

            elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  'subtract' == $route && isset($_GET['id'])) {
          require __DIR__ . '/view/top.php';
          require __DIR__ . '/view/subtract.php';
          require __DIR__ . '/view/bottom.php';
    }

          elseif ('GET' == $_SERVER['REQUEST_METHOD'] &&  'subtract' == $route && isset($_GET['id'])) {
          require __DIR__ . '/view/top.php';
          require __DIR__ . '/view/subtract.php';
          require __DIR__ . '/view/bottom.php';
    }

        elseif ('POST' == $_SERVER['REQUEST_METHOD'] &&  'list' == $route && isset($_GET['id'])) {
                deleteAcount($_GET['id']);
    }
     else {
        echo 'Page not found 404';
        die;
      }
 }

function showStartpage() {
     require __DIR__ . '/view/center.php';
}

function  deleteAcount(int $id) {
    $accounts = getAccount();
    foreach($accounts as $key => &$value) {
        if ($value['balance'] == 0) {
            if ($id == $value['id']) {
                unset($accounts[$key]);
                addMassage('warning', "Account ID:$id was deleted.");
                header('Location: http://localhost/lape/09/sarasas.php?route=list');
                break;
                die;
            }

        }else {
            addMassage('warning', "Can't delete account with money on balance.");
            header('Location: http://localhost/lape/09/sarasas.php?route=list');
            die;
        }
        
    }
        $accounts = json_encode($accounts);
        file_put_contents(__DIR__.'/data.json',$accounts);
        header('Location: http://localhost/lape/09/sarasas.php?route=list');
        die;
}

function addMoney( $money, $id): void {
  
    $accounts = getAccount();
    if (is_numeric($money)) {
        foreach($accounts as &$value) {
            if ($value['id'] == $id) {
                addMassage('success', "Operation was successful you add $money EUR.");
                header('Location: http://localhost/lape/09/sarasas.php?route=add&id=3826301052');
            $value['balance'] += $money;
            break;
            }
        }
    }else {
            addMassage('danger', "Not correct input try again '$money' use jsut <b>numbers</b>.");
            header('Location: http://localhost/lape/09/sarasas.php?route=add&id=3826301052');
    }
    $accounts = json_encode($accounts);
    file_put_contents(__DIR__.'/data.json',$accounts);
}

function subtractMoney($money, $id) {
        $accounts = getAccount();
        if (is_numeric($money)) {
            foreach($accounts as &$value) {
            if ($value['id'] == $id) {
                if ($value['balance'] - $money <0 ) {
                    addMassage('danger', 'Not enough money on account.');
                    header('Location: http://localhost/lape/09/sarasas.php?route=subtract&id=3826301052');
                }else {
                    addMassage('success', "Operation was successful you take $money EUR.");
                    header('Location: http://localhost/lape/09/sarasas.php?route=subtract&id=3826301052');
                    $value['balance'] -= $money;
                    break;
                    }
                    
                }
            
            }
        } else {
            addMassage('danger', "Not correct input try again '$money' use jsut <b>numbers</b>.");
            header('Location: http://localhost/lape/09/sarasas.php?route=add&id=3826301052');
    }
    $accounts = json_encode($accounts);
    file_put_contents(__DIR__.'/data.json',$accounts);
}

function acountNumber() {
    $acountNumber = 'LT1873000';
   
    for($i =0; $i<11; $i++) {
    $number=rand(0,9); 
      $acountNumber = $acountNumber.$number;
    }
  
    return $acountNumber;
}

function accountNumberControl() :void {
     if (!getAccount() == []) {
            $accounts = getAccount();
            foreach ($accounts as $key => $value) {
                for ($i=0; $i<count($accounts); $i++) {
                if ($accounts[$key]['aNumber'] == $_POST['acNumber']) {
                    $_POST['acNumber'] = acountNumber();
                    $i=0;
                }
            }
        }    
    }
}

function personCodeControl() :void {
     if (!getAccount() == []) {
            $accounts = getAccount();
            foreach ($accounts as $key => $value) {
                for ($i=0; $i<count($accounts); $i++) {
                if ($accounts[$key]['personCode'] == $_POST['pesonCode']
                ) {
                    addMassage('danger', 'First name and last name must be longer then 3 symbols and check personal code.');
                    header('Location: http://localhost/lape/09/naujaSaskaita.php');
                    die;
                }
            }
        }    
    }
}

function personCodeStartControl($code) {
    return ($code[0] == 3 || $code[0] == 4 || $code[0] == 5 || $code[0] == 6 ) ? true : false;
}

function accountSort($a, $b) {
     return strtoupper($b['lastName']) < strtoupper($a['lastName']);
}

function nameControl(string $name){
   return strlen($name) >= 3 ? true : false; 
}

function nameNumberControl(string $name){
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

function addNewAccountCintrol(): void {
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
        accountNumberControl();
        personCodeControl();
        $array = [
        'id' => rand(1000000000, 9999999999),
        'name' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'personCode' => $_POST['pesonCode'],
        'aNumber' => $_POST['acNumber'],
        'balance' => 0,
        ];
        setAccount($array);
        
        addMassage('success', 'New account has ben created');
        }
        if ($array== []) {
            addMassage('danger', 'First name and last name must be longer then 3 symbols, first and last name must not have spaces and numbers, check personal code.');
        }
        header('Location: http://localhost/lape/09/naujaSaskaita.php');
        die;

    }
}


// NOTES

function addMassage(string $type, string $msg) : void {
    $_SESSION['msg'][]= ['type' => $type, 'msg' => $msg];
}

function clearMessage(): void {
    $_SESSION['msg'] = [];
}

function showMessage(): void {
    if (isset($_SESSION['msg'])) {
    $message = $_SESSION['msg'];
    clearMessage();
    require __DIR__.'/view/msg.php';
    }
    
}