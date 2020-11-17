<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>My site</title>
	<link href="http://vcp.ir/t/pnt/default.css?v=1.0" rel="stylesheet" type="text/css" media="all" />
	<script language="javascript" type="text/javascript">
	function TaghireAks(a)
	{
		document.getElementById('pic').src=a;		
	}
	function TaghireAksR()
	{
		if(document.getElementById('pic').src==document.getElementById('0').src)document.getElementById('pic').src=document.getElementById('3').src;
		else if(document.getElementById('pic').src==document.getElementById('1').src)document.getElementById('pic').src=document.getElementById('0').src;
		else if(document.getElementById('pic').src==document.getElementById('2').src)document.getElementById('pic').src=document.getElementById('1').src;
		else if(document.getElementById('pic').src==document.getElementById('3').src)document.getElementById('pic').src=document.getElementById('2').src;
	}
	function TaghireAksL()
	{
		if(document.getElementById('pic').src==document.getElementById('0').src)document.getElementById('pic').src=document.getElementById('1').src;
		else if(document.getElementById('pic').src==document.getElementById('1').src)document.getElementById('pic').src=document.getElementById('2').src;
		else if(document.getElementById('pic').src==document.getElementById('2').src)document.getElementById('pic').src=document.getElementById('3').src;
		else if(document.getElementById('pic').src==document.getElementById('3').src)document.getElementById('pic').src=document.getElementById('0').src;
	}
	</script>
</head>
<body>
<?php
	session_start();
	$checksession=false;
	$checkadmin=false;
	require 'Mydb.php';
	$con=mysqli_connect($host,$username,$password,$dbname);
	if(!$con)
	{
		die('Could not connect :'.mysqli_connect_errno($con).mysqli_connect_errno($con));
	}
	if(isset($_POST["username"]))
	{
		$result = mysqli_query($con,"SELECT * FROM Mysite WHERE username='{$_POST['username']}' AND password='{$_POST['password']}'");
		if(mysqli_fetch_array($result)){
			$check=true;
			$_SESSION["username"]=$_POST['username'];
			$yes="yes";
			$x=mysqli_query($con,"SELECT * FROM Mysite WHERE username='{$_POST['username']}' AND password='{$_POST['password']}' AND Admin='{$yes}'");
			if(mysqli_fetch_array($x))
				$_SESSION["admin"]=$yes;
			echo"<script>location.replace('profile.php')</script>";
		}
	}
	if(isset($_SESSION['username']))
	{
		$res=mysqli_query($con,"SELECT * FROM Mysite WHERE username='{$_SESSION['username']}'");
		if(mysqli_fetch_array($res))
		{
			$checksession=true;
			$_SESSION["lastpage"]=$_SESSION["nowpage"];
			$_SESSION["nowpage"]=".php";
			if(isset($_SESSION["admin"]))
			{	
				$yes="yes";
				$x=mysqli_query($con,"SELECT * FROM Mysite WHERE username='{$_SESSION['username']}' AND Admin='{$yes}'");
				if(mysqli_fetch_array($x))
					$checkadmin=true;
			}
			else $checkadmin=false;
		}	
	}
	else {$checksession=false;$_SESSION["lastpage"]="index.php";$_SESSION["nowpage"]="index.php";}
	mysqli_close($con);
?>
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
	<table border="1" align="center">
	<tr>
		<td rowspan="2" width="30px"><input type="button" onClick="TaghireAksR()" value="R" width="100%" height="100%"></td>
		<td colspan="4" width="850px" height="350px"><img src="pictures/1.jpg" width="100%" height="100%" id="pic"></td>
		<td rowspan="2" width="30px"><input type="button" onClick="TaghireAksL()" value="L" width="100%" height="100%"></td>
	</tr>
	<tr>
		<td width="200px" height="100px"><img src="pictures/1.jpg" width="100%" height="100%" id="0" onClick="TaghireAks(this.src)"></td>
		<td width="200px" height="100px"><img src="pictures/2.jpg" width="100%" height="100%" id="1" onclick="TaghireAks(this.src)"></td>
		<td width="200px" height="100px"><img src="pictures/3.jpg" width="100%" height="100%" id="2" onclick="TaghireAks(this.src)"></td>
		<td width="200px" height="100px"><img src="pictures/4.jpg" width="100%" height="100%" id="3" onclick="TaghireAks(this.src)"></td>
	</tr>
	</table>	
	<div id="page">
		<div id="content">
			<?php
				$con=mysqli_connect($host,$username,$password,$dbname);	
				if(!$con)die('Could not connect :'.mysqli_connect_errno($con).mysqli_connect_errno($con));
				$res=mysqli_query($con,"SELECT * FROM Myposts");
				$a;
				$i=0;
				while($row=mysqli_fetch_array($res))
				{
					$a[$i]=$row;
					$i+=1;
				}
				while($i>0)
				{
					$i-=1;
					echo'<h2>'.$a[$i]["title"].'</h2>';
					echo'<p style="font-size:9pt; margin-top:0; font-family:Tahoma;">نوشته شده توسط'.$a[$i]["writer"].'در<i>'.$a[$i]["time"].','.$a[$i]["date"].'</i></p>';
					echo'<p dir="rtl">';
						echo'<h6 dir="rtl">'.$a[$i]["text"].'</h6>';
					echo'</p>';
					echo '<div class="seperator"></div>';
				}
			?>
		</div>
		<bgright>
		<div id="sidebar">
		<!-- ------------------------------------------------- -->
			<div class="block">
				<h2>منوی کاربری</h2>
					<div class="cnt">
					<?php	
						if(isset($_POST["username"]) || $checksession)
						{
							if($checksession)
							{
									echo '<h3 align="center">نام کاربری:<br><br>'.$_SESSION["username"].'</h3>'.'<br>'.'<br>';
									echo '<h4 align="center"><a href="profile.php" target="_self">پروفایل</a></h4>';
									echo '<div class="button"><a href="logout.php"><h3 align="center">خروج</h3></a></div>';
							}
							else
							{
								echo'<form  method="post">';
								echo'Username: <div align="center"><input type="text" name="username"></div>';
								echo'Password: <div align="center"><input type="password" name="password"></div><br>';
								echo'<div align="center"><input type="submit" value="Login" Onclick="CheckEnter("password");"><input type="reset" name="Reset"></div>';
								echo'</form>';
								echo '<h4 align="center"><u>username یا password اشتباه</u></h4>';
							}
							
						}
						else{
							echo'<form method="post">';
							echo'Username: <div align="center"><input type="text" name="username"></div>';
							echo'Password: <div align="center"><input type="password" name="password"></div><br>';
							echo'<div align="center"><input type="submit" value="Login" Onclick="CheckEnter("password");"><input type="reset" name="Reset"></div>';
							echo'</form>';
							echo'<a href="Register.php"><h4 align="center">Create a new account<h4></a>';
						}
				?>
					</div>
			</div>
			<!-- ------------------------------------------------- -->
			<?php
				if($checksession)
				{
					echo'<div class="block">';
					echo'<h2 style="background: #48CFAD;">تغییر پسوورد</h2>';
					echo'<div class="cnt">';
					if(isset($_POST["newpass"]))
					{
						$con=mysqli_connect($host,$username,$password,$dbname);
						if(!$con)
						{
							die('Could not connect :'.mysqli_connect_errno($con).mysqli_connect_errno($con));
						}
						$np=mysqli_query($con,"UPDATE Mysite SET password='{$_POST['newpass']}' WHERE username='{$_SESSION['username']}'");
						mysqli_close($con);
						echo'<div align="center"><h3>password شما عوض شد</h3></div><br>';
					}
						echo'<form method="post">';
							echo'New password: <br><div align="center"><input type="text" name="newpass"></div>';
							echo'<div align="center"><input type="submit" value="Change" Onclick=""><input type="reset" name="Reset"></div>';
						echo'</form>';
					echo'</div></div>';
				}
			?>
			<!-- ------------------------------------------------- -->
			<div class="block">
			<?php
				if(!$checksession)
				{
				echo'<h2 style="background: #48CFAD;">لینکدونی</h2>';
					echo'<div class="cnt">';
						echo'<a href="https://www.google.com/?gws_rd=ssl" target="_blanck"><h3>Google</h3></a><br>';
						echo'<a href="http://www.helli.ir/portal/" target="_blanck"><h3>دبیرستان علامه حلی تهران</h3></a><br>';
						echo'<a href="http://www.webook.ir/" target="_blanck"><h3>Webook</h3></a><br>';
						echo'<a href="http://www.firststep.ir/" target="_blanck"><h3>Firststep</h3></a>';
				}
				else
				{
					echo'<h2 style="background: #4FC1E9;">ارسال مطلب</h2>';
					echo'<div class="cnt">';
					echo'<div class="button"><a href="EM.php" target="_self"><h3 align="center">ورود به صفحه ی ارسال</h3></a></div>';
					echo'</div>';
				echo'</div>';
		   #<!-- ------------------------------------------------- -->
			if($checkadmin){echo'<div class="block">';
				echo'<h2 style="background: #B675E9;">لیست کاربران</h2>';
					echo'<div class="cnt" align="center">';
						echo '<div class="button"><a href="list.php"><h3 align="center" target="_blanck">مشاهده</h3></a></div>';
					echo'</div>';
			echo'</div>';}
		   #<!-- ------------------------------------------------- -->
			echo'<div class="block">';
				echo'<h2 style="background: #48CFAD;">لینکدونی</h2>';
					echo'<div class="cnt">';
						echo'<a href="https://www.google.com/?gws_rd=ssl" target="_blanck"><h3>Google</h3></a><br>';
						echo'<a href="http://www.helli.ir/portal/" target="_blanck"><h3>دبیرستان علامه حلی تهران</h3></a><br>';
						echo'<a href="http://www.webook.ir/" target="_blanck"><h3>Webook</h3></a><br>';
						echo'<a href="http://www.firststep.ir/" target="_blanck"><h3>Firststep</h3></a>';
				echo'</div>';}
			?>
			
			<!-- ------------------------------------------------- -->
			</div>
		</bgright>
</dev>
</body>
</html>