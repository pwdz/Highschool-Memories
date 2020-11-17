<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Register</title>
	<link href="http://vcp.ir/t/pnt/default.css?v=1.0" rel="stylesheet" type="text/css" media="all" />
	<script language="javascript" type="text/javascript">
		function notEmpty(user,pass,em)
		{
			if(user.value.lenght<3)var username=false;alert(usename);
			if(pass.value.length<3)var password=false;
			if(em.value.lenght<6)var emial=false;
			if(username&&password&&email)
				return true;
			else if(!username&&!password$$!email)
			{
				alert("username باید حداقل دارای 3 حرف باشد، password باید دارای حداقل 3 حرف باشد، email نامعتبر است");
				user.focus();
				return false;
			}
			else if(!username&&!password)
			{
				alert("username باید دارای حداقل 3 حرف باشد، password باید دارای حداقل 3 حرف باشد");
				user.focus();
				return false;
			}
			else if(!password$$!email)
			{
				alert("password باید دارای حداقل 3 کاراکتر باشد، email نامعتبر است");
				password.focus();
				return false;
			}
			else if(!username&&!email)
			{
				alert("username باید دارای حداقل 3حرف باشد، email نامعتبر است");
				user.focus();
				return false;
			}
			else if(!username)
			{
				alert("usename باید دارای حداقل 3 کاراکتر باشد.");
				user.focus();
				return false;
			}
			else if(!password)
			{
				alert("password باید دارای حداقل 3 کاراکتر باشد.");
				pass.focus();
				return false;
			}
			else if(!email)
			{
				alert("email نامعتبر است.");
				em.focus();
				return false;
			}
		}
	</script>
</head>
<body>
<div id="wrapper" class="container">
	<div id="header">
		<div id="logo">
			<h1>سایت شخصی من</h1>
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
	<div id="page">
		<div id="content">
		<bgright>
		<div id="sidebar">
		<!-- ------------------------------------------------- -->
<?php
	if(isset($_POST["username"])){
		require 'Mydb.php';
		date_default_timezone_set("IRAN");
		$flag=false;
		$con=mysqli_connect($host,$username,$password,$dbname);
		if(!$con)
		{
			die('Could not connect :'.mysqli_connect_errno($con).mysqli_connect_errno($con));
		}
		//if(strlen($_POST["username"])>3 && strlen($_POST["password"])>3 && strlen($_POST["email"])>0)
		//{
			$result = mysqli_query($con,"SELECT * FROM Mysite WHERE username='{$_POST['username']}'");
			if(mysqli_fetch_array($result))
				$flag=true;
			if(!$flag)
			{
			$time=date("H:i:s");
			$date=date("Y/m/d");
			$id=0;
			$admin="no";
			$sql="INSERT INTO Mysite (id,username,password,email,timeRegister,dateRegister,firstname,lastname,passage,Admin) VALUES 
			('{$id}','{$_POST['username']}','{$_POST['password']}','{$_POST['email']}','{$time}','{$date}','{$_POST['firstname']}','{$_POST['lastname']}','{$_POST['text']}','{$admin}')";
			$res=mysqli_query($con,$sql);
			if(!$res)die('ERROR:'.mysqli_connect_errno($res).mysqli_connect_errno($res));
			else echo 'اکانت شما ساخته شد.';
			}
			else
			{
				echo'username تکراری می باشد.';
				echo "<br>";echo "<br>";echo "<br>";
				echo "<p><a href='Register.php' class='button' style='background: #ffb157;'><constant>بازگشت به صفحه قبل</constant></a></p>";
			}
			mysqli_close($con);
		//}
		/*else
		{
			if(strlen($_POST["username"])<4)
			{	
				echo("<h3 style='background: #48CFAD;'>usernameباید حداقل شامل 4 حرف باشد</h3>");
			}
			if(strlen($_POST["password"])<4)
			{	
				echo("<h3style='background: #48CFAD;'><b>passwordباید حداقل شامل 4 حرف باشد</b></h3>");
			}
			if(strlen($_POST["email"])<1)
			{
				echo("<h3 style='background: #48CFAD;'>وارد کردن ایمیل اجباری می باشد.</h3>");
			}
			echo "<br>";echo "<br>";echo "<br>";
			echo "<p><a href='Register.php' class='button' style='background: #ffb157;'><constant>بازگشت به صفحه قبل</constant></a></p>";
		}*/
		echo'<br><br><br>';
	}
	else{
		echo'<div class="block">';
			echo'<h3 align="center" style="background: #ffb157;">ساخت اکانت</h3>';
			echo'پر کردن قسمت های ستاره دار اجباری است.';
				echo'<div class="cnt">';
					echo'<form method="post">';
						echo'Username*: <div align="center"><input type="text" name="username" id="user"></div>';
						echo'Password*: <div align="center"><input type="password" name="password" id="pass"></div>';
						echo'Email*: <div align="center"><input type="text" name="email" id="email"></div><br>';
						echo'Firstname: <div align="center"><input type="text" name="firstname"></div><br>';
						echo'lastname: <div align="center"><input type="text" name="lastname"></div><br>';
						echo'Personal Information: <div align="center"><textarea rows="15" cols="15" dir="rtl" name="text"></textarea></div><br>';
						$a="document.getElementById('username')";
						$b="document.getElementById('password')";
						$c="document.getElementById('email')";
						echo'<div align="center"><input type="submit" value="Creat"
						onClick="notEmpty('.$a.','.$b.','.$c.')">
						<input type="reset" name="Reset"></div>';
					echo'</form>';
				echo'</div>';
		echo'</div>';
	}
?>
			</div>
		</bgright>
		</div>
		</div>
</dev>
</body>
</html>