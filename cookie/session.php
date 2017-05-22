<?php
//SESSION相关

//开启session
session_start();
// 放在数组里设置name的session值为jobs
//$_SESSION['ary'] = array('name'=>'job');
//echo $_SESSION['name'];
$_SESSION['name']='job';
echo $_SESSION['name'];
echo "session id:".session_id();


  ?>