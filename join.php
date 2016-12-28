<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<title>매드포갈릭</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/join.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/modernizr-custom.js"></script>
	<script type="text/javascript" src="js/effect.js"></script>

	<script type="text/javascript">
		function evalue(){
			var email2=document.getElementById('email2')
			var email3=document.getElementById('email3')
			email2.value = email3.options[email3.options.selectedIndex].value;
		}
		function check_form(frm){
			var uid=document.getElementById('uid');
			var pwd=document.getElementById('pwd');
			var r_pwd=document.getElementById('r_pwd');
			var uname=document.getElementById('uname');
			var gender=document.getElementById('gender');
			var phone=document.getElementById('phone');
			var email=document.getElementById('email');

			if(!uid.value){
				alert('아이디를 입력해주세요.');
				uid.focus();
				return false;
			}
			if(uid.value.length<6){
				alert('아이디를 6자 이상 입력해주세요.');
				uid.focus();
				return false
			}
			if(!pwd.value){
				alert('비밀번호를 입력해주세요.');
				pwd.focus();
				return false;
			}
			if(pwd.value.lengt<6){
				alert('비밀번호를 6자 이상 입력해주세요.');
				r_pwd.focus();
				return false;
			}
			if(!((pwd.value)==(r_pwd.value))){
				alert('비밀번호가 같지 않습니다.');
				r_pwd.focus();
				return false;
			}
			if(!uname.value){
				alert('이름을 입력해주세요.');
				uname.focus();
				return false;
			}
			if(!birth.value){
				alert('생년월일을 입력해주세요.');
				birth.focus();
				return false;
			}
			if(!phone.value){
				alert('연락처를 입력해주세요.');
				phone.focus();
				return false;
			}
			if(!email.value){
				alert('이메일을 입력해주세요.');
				email.focus();
				return false;
			}
			frm.submit();

		}
		function evalue(){
			var email2=document.getElementById('email2')
			var email3=document.getElementById('email3')
			email2.value = email3.options[email3.options.selectedIndex].value;
		}

	</script>
</head>
<body>
	<?php 
	include "inc/header.php"
	?>
		<main id="main">
			<section id="join">
				<article class="hello">
					<h2>JOIN MAD FOR GARLIC</h2>
					<p>MAD FOR GARLIC 회원으로 가입하시면 다양한 혜택을 제공받을 수 있습니다</p>
				</article>
				<article class="info">
					<h2>개인정보 입력(<span class="red" class="red">*</span>필수 입력사항)</h2>
					<form action="insert.php" method="post">
						<fieldset>
							<legend>필수 정보 입력</legend>
							<p>
							<label class="l_title" for="uid">
							<span class="red">*</span>아이디</label>
							<input class="br" type="text" name="uid" id="uid">
							<button class="check">중복확인</button>
							<span class="notice_info">아이디는 6-16자 사이로 입력</span>
							</p>
							<p>
							<label class="l_title" for="pwd"><span class="red">*</span>비밀번호</label>
							<input class="br" type="password" name="pwd" id="pwd" maxlength="16">
							<span class="notice_info">비밀번호는 6-16자 사이로 입력</span>
							</p>
							<p>
							<label class="l_title" for="r_pwd"><span class="red">*</span>비밀번호 확인</label>
							<input class="br" type="password" name="r_pwd" id="r_pwd" maxlength="16">
							</p>
							<p>
							<label class="l_title" for="uname"><span class="red">*</span>이름</label>
							<input class="br" type="text" name="uname" id="uname">
							</p>
							<p>
							<span class="red">*</span><span class="title1">성별</span>
							<input type="radio" name="gender" id="male" value="m">
							<label for="agree">남자</label>
							<input type="radio" name="gender" id="female" value="f">
							<label for="agree">여자</label>
							</p>
							<p>
							<label class="l_title" for="birth"><span class="red">*</span>생년월일</label>
							<input class="br" type="text" name="birth" id="birth" maxlength="8" placeholder="예)19891225">
							</p>	
							<p>
							<label class="l_title" for="phone"><span class="red">*</span>휴대폰 번호</label>
							<input class="br" type="text" name="phone" id="phone" placeholder="예)01012341234">
							</p>


							<p><span class="red">*</span><span class="title3">이메일</span>

							<input class="br" type="text" name="email" id="email"><label for="email"> @</label>
							<input class="br" type="text" name="email2" id="email2">
							<select name="email3" id="email3" onchange="evalue()">
								<option value="gmail.com">gmail.com</option>
								<option value="naver.com">naver.com</option>
								<option value="nate.com">nate.com</option>
								<option value="hanmail.net">hanmail.net</option>
							</select>
							<button class="check">중복확인</button></p>
							<p><span class="title2">마케팅 수신동의</span>
							<input type="checkbox" name="e_agree" id="e_agree" value="a">
							<label for="e_agree">이메일 수신동의</label>
							<input type="checkbox" name="p_agree" id="p_agree" value="a"><label for="p_agree">SMS 수신동의</label></p>
							<span class="agree">* 회원님께 드리는 쿠폰/이벤트/경품 등의 정보수신에 동의해 주세요.</span>
							<span class="agree">* 개인정보 처리 위탁 동의 시 이메일 수신 동의가 가능합니다. </span>
							<p class="button"><button type="reset" class="cancel">취소</button><button class="next" name="submit1" type="button" onclick="check_form(this.form)">다음</button></p>
						</fieldset>
					</form>
				</article>
			</section>
		</main>
	<?php 
	include "inc/footer.php"
	?>
</body>
</html>