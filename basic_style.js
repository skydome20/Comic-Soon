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
     alert("���U���\�I");
   }
function success_l()
   {
     alert("�n�J���\�I");
   }
function exist()
   {
     alert("�b���w�s�b�A�Э��s��J");
   }
function wrong()
   {
     alert("�|������A�Ц^�Y��g")
   }
function fail()
   {
     alert("���U���ѡA�Э��s�@���I")
   }
function password_fail()
   {
     alert("�K�X��J���P�A�Э��s�T�{�I")
   }
function fail_l()
   {
     alert("�n�J���ѡA�Э��s�@���I")
   }
function waring()
   {
    alert("�n�J��~���[�ݳ�I")
	var obj = document.getElementById('login');
	obj.style.display = 'block' ;    
	var obj1 = document.getElementById('reg');
	obj1.style.display = 'none' ;  
   }
function thanks()
   {
     alert("�P�±z��s��T�I")
   }