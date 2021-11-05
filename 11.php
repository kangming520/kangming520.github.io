<?php
private function initPostData()
    {
        if (empty($_POST) && false !== strpos($this->contentType(), 'application/json')) {
            $content = file_get_contents('php://input');
            $post    = (array)json_decode($content, true);
        } else {
            $post = $_POST;
        }
        return $post;
    }
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phonenum=$_POST['phonenum'];
			$message=$_POST['message'];

$mysql_server_name='localhost'; //改成自己的mysql数据库服务器
$mysql_username='root'; //改成自己的mysql数据库用户名
$mysql_password=''; //改成自己的mysql数据库密码
$mysql_database='htbokephp';

$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("error connecting") ; //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码 应该与你的数据库编码保持一致.南昌网站建设公司百恒网络PHP工程师建议用UTF-8 国际标准编码.
mysql_select_db($mysql_database); //打开数据库
$sql ="select * from news "; //SQL语句
$result = mysql_query($sql,$conn); //查询



while($row = mysql_fetch_array($result)){
    echo "<div style=\"height:24px; line-height:24px; font-weight:bold;\">"; //排版代码
    echo $row['name'] . "<br/>";
    echo "</div>"; //排版代码
}


$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password); //连接数据库
mysql_query("set names 'utf8'"); //数据库输出编码
mysql_select_db($mysql_database); //打开数据库
$sql = "insert into backstage (name,email,phonenum,message) values ('$name','$email','$phonenum','$message')";
mysql_query($sql);
mysql_close(); //关闭MySQL连接


			


?>