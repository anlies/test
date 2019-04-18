<?php

require_once '../static/function.php';

if (empty($_GET['id'])) {
	 exit('缺少必要参数');
}
$id = $_GET['id'];

xiu_execute('delete from users where id in('. $id .');');

header('Location: http://localhost/baixiu-pages-master/admin/users.php');