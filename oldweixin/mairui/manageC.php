<?php
define('IN_SYS', true);
require 'source/bootstrap.inc.php';
if(empty($_GPC['teach'])){
$data=pdo_fetchall("select * from mr_activity order by id desc");
$id=$_GET['id'];
if(!empty($id)){
$del=pdo_delete("activity",array('id'=>$id));
if($del)
{
message("删除成功",referer(),"success");
}
else
{
message("删除失败",referer(),"error");
}
}
?>
<html>
<head>
<style>
td{border:#ddd 1px solid;}
</style>
<title>培训列表管理</title>
</head>
<body>
<table  width="100%">
<tr>
<td>报名者</td>
<td>标题</td>
<td>报名日期</td>
<td>删除？</td>
</tr>
<?php
foreach($data as $row){
?>
<tr>
<td><?php echo $row['who']?></td>
<td><?php echo $row['title']?></td>
<td><?php echo date("Y-m-d",$row['date'])?></td>
<td><a href="manageC.php?id=<?php echo $row['id'] ?>">删除</a></td>
</tr>

<?php }?>
<table>
<form methord="post" action="">
<input type="text" name="teach" value="请输入姓名或者标题" /><input name="sear" type="submit" value="搜索"><input type="reset">
</form>
<body>
</html>
<?php } ?>
<?php
if(!empty($_GPC['teach'])){
$keyword=trim($_GPC['teach']);
$data=pdo_fetchall("select * from mr_activity where title like '%".$keyword."%' or who like '%".$keyword."%'");
$id=$_GET['id'];
if(!empty($id)){
$del=pdo_delete("activity",array('id'=>$id));
if($del)
{
message("删除成功",referer(),"success");
}
else
{
message("删除失败",referer(),"error");
}
}
?>
<html>
<head>
<style>
td{border:#ddd 1px solid;}
</style>
<title>培训列表管理</title>
</head>
<body>
<table  width="100%">
<tr>
<td>报名者</td>
<td>标题</td>
<td>报名日期</td>
<td>删除？</td>
</tr>
<?php
foreach($data as $row){
?>
<tr>
<td><?php echo $row['who']?></td>
<td><?php echo $row['title']?></td>
<td><?php echo date("Y-m-d",$row['date'])?></td>
<td><a href="manageC.php?id=<?php echo $row['id'] ?>">删除</a></td>
</tr>

<?php }?>
<table>
<form methord="post" action="">
<input type="text" name="teach" value="请输入姓名或者标题" /><input name="sear" type="submit" value="搜索"><input type="reset">
</form>
<body>
</html>
<?php } ?>