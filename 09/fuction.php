<?php


function getAccount() {
    if (!file_exists(__DIR__.'/data.json')) {
        $data = [];
        $data = json_encode($data);
        file_put_contents(__DIR__.'/data.json', $data);

    }

    return json_decode(file_get_contents(__DIR__.'/data.json'),1);
}




function setAccount(array $info): void {
    $reInfo = getAccount();
    $reInfo []= $info;
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
        if ($id == $value['id']) {
          unset($accounts[$key]);
        // echo "<pre>";
        // print_r($accounts);
            break;
        }
    }
        $accounts = json_encode($accounts);
        file_put_contents(__DIR__.'/data.json',$accounts);
    header('Location: http://localhost/lape/09/sarasas.php?route=list');
    die;
}
