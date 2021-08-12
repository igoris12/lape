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
        if ($id == $value['id'] && $value['balance'] == 0) {
            unset($accounts[$key]);
            break;
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
            $value['balance'] += $money;
            break;
            }
        }
    }else {
            echo "<h1>aaaaaaaaaaaaaaaaaa</h1>";
        }
    $accounts = json_encode($accounts);
    file_put_contents(__DIR__.'/data.json',$accounts);
}

function subtractMoney($money, $id) {
        $accounts = getAccount();
        if (is_numeric($money)) {
            foreach($accounts as &$value) {
            if ($value['id'] == $id) {
            $value['balance'] -= $money;

                if ($value['balance'] < 0) {
                $value['balance'] = 0;
                }
            break;
            }
            
         }
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

function accountSort($a, $b) {
     return strtoupper($b['lastName']) < strtoupper($a['lastName']);
}
