<?php
$id=$_GET["id"];
include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT *FROM gs_tr_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    // while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    //     $view.='<p>';
    //     $view.='<a href="detail.php?id='.$result["id"].' ">'; 
        //$result["id"]変数を入れたい
        //?の右側は変数(URL確認)
        // $view .= $result["name"] . "," . $result["email"] . "<br>";
        // $view.='</a>';
        // $view.='</p>';
        $row=$stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新：</legend>
    <label>Name：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <!-- <label>Photo：<input type="text" name="photo"></label><br> -->
     <label>Nationality：<input type="text" name="kuni" value="<?=$row["kuni"]?>"></label><br>
     <label>Recommend Country：<input type="text" name="recom" value="<?=$row["recom"]?>" ></label><br>
     <label>Comment：<br><textArea name="naiyou" rows="4" cols="40" value="<?=$row["naiyou"]?>" ></textArea></label><br>
     <!--テキストエリアにはvalueつけない-->
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <!--valueを入れないと飛ばない-->
     <input type="submit" value="更新"> 
     

    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
