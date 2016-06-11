<?php 
$sqldump =
	"# --------------------------------------------------------\n". 
	"# 数据表备份\n". 
	"#\n". 
	"# 服务器: \n". 
	"# 数据库：\n". 
	"# 备份编号: "."\n".
	"# 备份时间: "."\n". // 这里就是获取当前时间的函数 
	"#\n".
	"# 管理员：\n". // 管理员的用户名和邮箱地址 
	"# \n". 
	"# --------------------------------------------------------\n\n\n";

/*$conn = mysql_connect("127.0.0.1","root","123456");
if(!$conn)
{
	die(mysql_error()); 
}
mysql_query("set names utf8");
mysql_query("use eovip");
$table = mysql_query("SHOW TABLES"); 
$tables = array();
while($row = mysql_fetch_array($table)) 
{ 
	$tables[] = $row[0];
} 
$tableinfo = array();
foreach ($tables as $key => $val) {
	$info = mysql_fetch_row(mysql_query("show create table ".$val));
	$tableinfo[] = $info;
}
$infoo = array();
foreach ($tableinfo as $key => $val) {
	while($row = mysql_fetch_assoc(mysql_query("select * from ".$val[0])))
	{ 
		$infoo[] = $row;
	}
	//$row = mysql_fetch_assoc(mysql_query("select * from ".$val[0]));
	print_r($infoo);exit;
}

*/
//ob_end_clean(); 
header('Content-Encoding: none'); 
header('Content-Type: '.(strpos($HTTP_SERVER_VARS['HTTP_USER_AGENT'], 'MSIE') ? 'application/octetstream' : 'application/octet-stream')); 
header('Content-Disposition: '.(strpos($HTTP_SERVER_VARS['HTTP_USER_AGENT'], 'MSIE') ? 'inline; ' : 'attachment; ').'filename=123'); 
header('Content-Length: '.strlen($sqldump)); 
header('Pragma: no-cache'); 
header('Expires: 0'); 
echo $sqldump; 
?>