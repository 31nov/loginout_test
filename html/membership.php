<?php
	/* 세션 사용하기 */
	session_start();

	//POST로부터 ID가 넘어오지 않은 경우
	if (!isset($_POST["member_id"])) {
		echo "<p align=\"center\">ID가 입력되지 않았습니다.</p>";
		echo "<p align=\"center\"><a href=\"membership.php\">로그인</a></p>";
		exit;
	} 

	// POST로부터 암호가 넘어오지 않은 경우
	if (!isset($_POST["member_password"])) {
		echo "<p align=\"center\">패스워드가 입력되지 않았습니다.</p>";
		echo "<p align=\"center\"><a href=\"membershtip.php\">로그인</a></p>";
		exit;
	}

	// 회원의 id는 "user", 암호는 "password"임
	$member_id = "user";
	$member_password = "password";

	// id 불일치
	if($_POST["member_id"] != $member_id){
		echo "<p align=\"center\">아이디가 맞지 않습니다.</p>";
		echo "<p algn=\"center\"><a href=\"membership.php\">다시 로그인하기</a></p>";
		exit;
	}

	// pw 불일치
	else if($_POST["member_password"] != $member_password){
		echo "<p align\"center\">패스워드가 맞지 않습니다.</p>";
		echo "<p align=\"center\"><a href=\"membership.php\">다시 로그인하기</a></p>";
		exit;
	}

	else{
		echo "<p align=\"center\">로그인 성공</p>";
		echo "<p align=\"center\"><a href=\"page.php\">회원 페이지</a></p>";
		$_session['member_id'] = $_POST['member_id'];
		$_session['member_password'] = $_POST['member_password'];
	}
?>