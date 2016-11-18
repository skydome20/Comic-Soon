//LOGIN//
function show_login(){
	var obj = document.getElementById('login');
	obj.style.display = 'block' ;    
	var obj1 = document.getElementById('reg');
	obj1.style.display = 'none' ;   
}

function close_login(){
	var obj = document.getElementById('login');
	obj.style.display = 'none' ;    
}

function show_member(){
	var obj = document.getElementById('data');
	obj.style.display = 'block' ;  
	var obj1 = document.getElementById('data_m');
	obj1.style.display = 'none' ;  	
}

function close_member(){
	var obj = document.getElementById('data');
	obj.style.display = 'none' ;    
}

function show_member_m(){
	var obj = document.getElementById('data_m');
	obj.style.display = 'block' ; 
	var obj1 = document.getElementById('data');
	obj1.style.display = 'none' ;   	
}

function close_member_m(){
	var obj = document.getElementById('data_m');
	obj.style.display = 'none' ;    
}

function show_reg(){
	var obj = document.getElementById('reg');
	obj.style.display = 'block' ;    
	var obj1 = document.getElementById('login');
	obj1.style.display = 'none' ;   
}

function close_reg(){
	var obj = document.getElementById('reg');
	obj.style.display = 'none' ;    
}

function success()
   {
     alert("註冊成功！");
   }
function success_l()
   {
     alert("登入成功！");
   }
function exist()
   {
     alert("帳號已存在，請重新輸入");
   }
function wrong()
   {
     alert("尚有空欄，請回頭填寫")
   }
function fail()
   {
     alert("註冊失敗，請重新一次！")
   }
function password_fail()
   {
     alert("密碼輸入不同，請重新確認！")
   }
function fail_l()
   {
     alert("登入失敗，請重新一次！")
   }
function waring()
   {
    alert("登入後才能觀看喔！")
	var obj = document.getElementById('login');
	obj.style.display = 'block' ;    
	var obj1 = document.getElementById('reg');
	obj1.style.display = 'none' ;  
   }
function thanks()
   {
     alert("感謝您更新資訊！")
   }