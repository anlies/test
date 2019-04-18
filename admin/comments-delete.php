<?php 

require_once '../static/function.php';

if (empty($_GET['id'])) {
	 exit('缺少必要参数');
}
$id = $_GET['id'];
// xiu_execute('delete from categories where id = {$id}');

xiu_execute('delete from comments where id='. $id);


header('Location:http://localhost/baixiu-pages-master/admin/comments.php');