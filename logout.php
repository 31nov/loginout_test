<?php
	// 세션 사용하기
	session start();
	// 현재 사용중인 세션 파괴하기
	session_destroy();
?>

<html>
	<head>
		<title>logout</title>
	</head>
	<body>
		<p align="center">로그아웃 되었습니다.</p>
		<p align="center"><a href="membership.php">로그인하기</a></p>	
	</body>
</html>