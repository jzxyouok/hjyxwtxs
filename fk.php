<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>意见反馈</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container text-center">
    <h2>黄河交通学院新闻通讯社</h2>
    <h3>意见反馈</h3>
<br/>
<br/>
<br/>
<?php 
$name = $_POST['name'];
$tel = $_POST['tel'];
$doc = $_POST['doc'];

$rname = "姓名：".$name."\r\n";
$rtel = "电话：".$tel."\r\n";
$rdoc = "意见：".$doc."\r\n";
@ $myfile = fopen("up/".$num."fk.txt", "w") or die("创建文件失败!");
@ $txt = $rname.$rtel.$rdoc;
fwrite($myfile, $txt);
fclose($myfile);
@ $file = "up/".$num."fk.txt";
if (file_exists($file)) {
	echo "<div class=\"alert alert-success\">反馈成功！</div>";
}else
 echo "<div class=\"alert alert-danger\">反馈失败！请重试！</div>";
?>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
