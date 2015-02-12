<?php
	// 세션 사용하기
	session_start();
?>

<html>
<head>
	<title>회원 페이지</title>
</head>
<body>
	<?php
		// 세션이 잘못된 경우, 세션에 id와 암호 항목이 없을 경우
		if (!isset($_SESSION["member_id"])) || !isset($_SESSION["member_password"]){
			echo "<p align=\"center\">로그인되지 않았습니다.</p>";
			echo "<p align=\"center\"><a href=\"membership.php\">로그인하기</a></p>";
			exit;			
		}
		// 세션이 올바른 경우
		else{
			echo "<p align=\"center\">환영합니다.".$_SESSION["member_id"]."님 - <a href=\"logout.php\">로그아웃</a></p>";
		}
	?>
</body>
</html>