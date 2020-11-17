<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>List users</title>
	<link href="http://vcp.ir/t/pnt/default.css?v=1.0" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="wrapper" class="container">
	<div id="header">
		<div id="logo">
			<h1><a href="<-url->">سایت شخصی من</a></h1>
			<span>خوش آمدید!</span>
		</div>
	</div>
	<div id="menu" align="center">
	<menu>
		<li><a href="index.php">صفحه اصلی</a></li>
		<li><a href="cwm.php">ارتباط با من</a></li>
		<li><a href="am.php">درباره ی من</a></li>
		<li><a href="aw.php">درباره ی وبلاگ</a></li>
	</menu>
	</div>	
	<br><br><br>	
	<div bgcolor="white" align="center">
		<h2 dir="rtl">لیست کاربران سایت</h2>
		<?php
			session_start();
			require 'Mydb.php';
			$con=mysqli_connect($host,$username,$password,$dbname);
			if(!$con)
			{
				die('Could not connect :'.mysqli_connect_errno($con).mysqli_connect_errno($con));
			}
			echo'<table border="1">';
				echo'<th>';
					echo'<td align="center"><b>نام کاربری</b></td>';
					echo'<td align="center"><b>پسوورد</b></td>';
					echo'<td align="center"><b>ایمیل</b></td>';
					echo'<td align="center"><b>ساعت عضویت</b></td>';
					echo'<td align="center"	><b>تاریخ عضویت</b></td>';
					echo'<td align="center"	><b>نام</b></td>';
					echo'<td align="center"	><b>نام خانوادگی</b></td>';
					echo'<td align="center"	><b>افزودن به ادمین ها</b></td>';
					echo'<td align="center"	><b>حذف از ادمین ها</b></td>';
				echo'</th>';
				$j=0;
				$res=mysqli_query($con,"SELECT * FROM Mysite");
				echo'<form method="post">';
				while($row=mysqli_fetch_array($res))
				{
					$j+=1;
					echo'<tr>';
					echo'<td align="center">'.$j.'</td>';
						echo'<td align="center">'.$row["username"].'</td>';
						echo'<td align="center">'.$row["password"].'</td>';
						echo'<td align="center">'.$row["email"].'</td>';
						echo'<td align="center">'.$row["timeRegister"].'</td>';
						echo'<td align="center">'.$row["dateRegister"].'</td>';
						echo'<td align="center">'.$row["firstname"].'</td>';
						echo'<td align="center">'.$row["lastname"].'</td>';
						if($row["Admin"]=="no"){echo'<td align="center"	><input type="radio" value='.$j.' name="admin"></td>';}
						else echo'<td></td>';
						if($row["Admin"]=="yes"){echo'<td align="center"><input type="radio" value='.$j*(-1).' name="admin"></td>';}
						else echo'<td></td>';
					echo'</tr>';
				}
			echo'</table><br>';
			echo'<input type="submit" value="change">';
			echo'</form>';
		
			if(isset($_POST["admin"]))
			{
				$con=mysqli_connect($host,$username,$password,$dbname);
				if(!$con)
				{
					die('Could not connect :'.mysqli_connect_errno($con).mysqli_connect_errno($con));
				}
				if($_POST["admin"]>0)
				{
					$yes="yes";
					$id=$_POST['admin'];
					$np=mysqli_query($con,"UPDATE Mysite SET Admin='{$yes}' WHERE id='{$id}'");
				}
				else
				{
					$no="no";
					$id=$_POST["admin"]*(-1);
					$np=mysqli_query($con,"UPDATE Mysite SET Admin='{$no}' WHERE id='{$id}'");
				}
				mysqli_close($con);
				echo"<script>location.replace('list.php')</script>";
			}
			echo "<br>";echo "<br>";echo "<br>";
			echo "<p><a href='lp.php' class='button' style='background: #ffb157;'><constant>بازگشت به صفحه قبل</constant></a></p>";
		?>
		</div>
	<br><br><br>
</dev>
</body>
</html>