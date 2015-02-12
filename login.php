<?php
	// 쿠키에서 가져온 ID와 암호 변수
	$recall_id="";
	$recall_password="";

	// 쿠키에 ID 변수가 기억되어 있는 경우 가져오기
	if (isset($_COOKIE["member_id"])) {
		$recall_id=$_COOKIE["member_id"];
	}

	// 쿠키에 암호가 기억되어 있는 경우 가져오기
	if (isset($_COOKIE["member_password"])) {
		$recall_id=$_COOKIE["member_password"];
	}	
?>
<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
		<!-- login.php에 POST 방식으로 데이터를 전달 -->
		<form id="loginForm" method="post" action="login.php">
			<table>
				<tbody>
					<!-- ID를 입력 받는다. -->
					<tr>
						<td>ID: </td>
						<td><input type="text" name="member_id" value="<?$recall_id;?>"></td>
						<td><input type="checkbox" name="remeber_id"> ID 저장</td>
					</tr>
					<!-- 암호를 입력 받는다. -->
					<tr>
						<td>P/W: </td>
						<td><input type="password" name="member_password" value="<?$recall_password;?>"></td>
						<td><input type="checkbox" name="remember_password"> 암호 저장</td>
					</tr>
				</tbody>
			</table>
			<!-- 제출 -->
			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>