<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Tìm số nguyên tố</title>
<style>
body{
display:flex;
justify-content:center;
font-family:Arial;
}
form{
border:1px solid black;
padding:20px 40px;
margin-top:40px;
background:#eee;
text-align:center;
}
input{
padding:5px;
margin:5px;
}
.kq{
margin-top:10px;
font-weight:bold;
}
</style>
</head>
<body>
<?php
$n="";
$ketqua="";
function kt_snt($so)
{
if($so < 2) return 0;
for($i=2;$i<=sqrt($so);$i++)
{
if($so % $i == 0)
return 0;
}
return 1;
}
if(isset($_POST["tim"]))
{
$n=$_POST["n"];
if($n < 2)
{
$ketqua="Không có số nguyên tố";
}
else
{
for($i=2;$i<=$n;$i++)
{
if(kt_snt($i)==1)
{
$ketqua .= $i." ";
}
}
}
}
?>
<form method="POST">
<h2>TÌM SỐ NGUYÊN TỐ</h2>
Nhập N:
<input type="text" name="n" value="<?php echo $n ?>" required>
<br><br>
<input type="submit" name="tim" value="Các số nguyên tố <= N">
<div class="kq">
<?php echo $ketqua ?>
</div>
</form>
</body>
</html>