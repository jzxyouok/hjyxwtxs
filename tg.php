<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
  <title>校报在线投稿</title>
</head>
<body>
    <div class="container text-center">
    <h2>黄河交通学院新闻通讯社</h2>
    <h3>校报在线投稿</h3>
<br/>
<br/>
<br/>
<div class="row">
<?php 
$name = $_POST['name'];
$sex = $_POST['sex'];
@ $college = $_POST['college'];
$class = $_POST['class'];
$num = $_POST['num'];
$tel = $_POST['tel'];
$qq = $_POST['qq'];
$doc = $_POST['doc'];
$title = $_POST['title'];

$rname = "姓名：".$name."\r\n";

$rclass = "班级：".$class."\r\n";
$rnum = "学号：".$num."\r\n";
$rtel = "电话：".$tel."\r\n";
$rtitle = "标题：".$title."\r\n";
$rqq = "qq:".$qq."\r\n";
$rcollege  = array("jd" => "学院：机电工程学院\r\n",
                   "jt" => "学院：交通工程学院\r\n",
                   "jg" => "学院：经管管理学院\r\n",
                   "qc" => "学院：汽车工程学院\r\n");

$rsex = array("man"   => "性别：男\r\n",
              "woman" => "性别：女\r\n");

$myfile = fopen("up/".$num."tg.txt", "w") or die("创建文件失败!");

@ $txt = $rname.$rsex[$sex].$rcollege[$college].$rclass.$rnum.$rtel.$rqq.$rtitle.$doc;
// $txt = "姓名:".$name."性别:".$sex."学院:".$college.;
fwrite($myfile, $txt);
$file = "up/".$num."tg.txt";
if (file_exists($file)) {
	echo "<div class=\"alert alert-success\">投稿成功！</div>";
}else
 echo "<div class=\"alert alert-danger\">投稿失败！请重试！</div>";

fclose($myfile);
?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title left">
    <?php echo "<strong>".$name."</strong> 同学，你提交信息的是：<br>" ;?>
    </h3>
  </div>
  <div class="panel-body left">
<?php
@ $pr = $rname."<br>".$rsex[$sex]."<br>".$rcollege[$college]."<br>".$rclass."<br>".$rnum."<br>".$rtel."<br>".$rqq."<br>".$rtitle."<br>".$doc."<br>";
echo $pr; 
?>
  </div>
  </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>
