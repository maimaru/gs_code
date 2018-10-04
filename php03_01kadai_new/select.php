<?php

//JSでドラッグ＆ドロップ
//https://q-az.net/elements-drag-and-drop/

include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_tr_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view.='<p>';
        $view.='<a href="delete.php?id='.$result["id"].' ">'; 
        $view .= "[☓]";
        $view.='</a>';

        $view.='<a href="detail.php?id='.$result["id"].' ">'; 
        //$result["id"]変数を入れたい
        //?の右側は変数(URL確認)
        $view .= $result["name"] . "," . $result["kuni"] . "<br>";
        $view.='</a>';
        $view.='</p>';
    }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Travel Advisor</title>

<link rel="stylesheet" href="css/range.css"> 
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start]-->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Travel Advisor</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div> 
    <div class="container jumbotron"><?=$view?></div>
</div> 
<!-- <script>
    <script src="../lib/sweet-alert.js"></script>
   document.querySelector('button.confirm').onclick = function(){
        swal({
            title:"Are you sure?", // タイトル文
            text:"Your will not be able to recover this imaginary file!", //説明文
            type:"warning", // default:null "warning","error","success","info"
            allowOutsideClick:false, // default:false アラートの外を画面クリックでアラート削除
            showCancelButton: true, // default:false キャンセルボタンの有無
            confirmButtonText:"オッケー", // default:"OK" 確認ボタンの文言
            confirmButtonColor: "#DD6B55", // default:"#AEDEF4" 確認ボタンの色
            cancelButtonText:"キャンセル", // キャンセルボタンの文言
            closeOnConfirm: false // default:true 確認ボタンを押したらアラートが削除される
            },
            function(){
                swal("Deleted!", "Your imaginary file has been deleted.", "success");
            }
        );
    };
</script> -->

<!-- Main[End] -->

</body>
</html>
