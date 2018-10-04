
  <!-- $msg='';   **イメージを入れたかったが失敗。
  //if upload button is pressed 7分目
  if(isset($_POST['gs_db'])){
    //the path to store the uploaded image 
    $target="images/".basename($FILES['image']['name']);
    //connect to the database
    $db=mysql_connect("localhost","root","","gs_db");
    //Get all the submitted data from form
    $image=$_FILES['image']['name'];
    $text=$_POST['text'];
   
    $sql='INSERT INTO images(image, text)VALUES($image, $text)';
    mysql_query($db, $sql);//stores the submitted data into the database table images

    //now, move the uploaded image into the folder images
    if(move_uploaded_file($_FILES['tmo_name']['name'],target)){
      $msg='Image uploaded successfully';
    } else{
      $msg='There was a problem uploading imagese';
    }
  
  } -->



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Travel Advisor</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Travel Advisor</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Add your comment</legend>
     <label>Name：<input type="text" name="name"></label><br>
     <!-- <label>Photo：<input type="text" name="photo"></label><br> -->
     <label>Nationality：<input type="text" name="kuni"></label><br>
     <label>Recommend Country：<input type="text" name="recom" ></label><br>
     <label>Comment：<br><textArea name="naiyou" rows="4" cols="40" placeholder="Please comment something here."></textArea></label><br>
     <!-- <label>登録日時:<input type="text" name="indate"></label><br> -->
     <input type="submit" value="Submit">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
