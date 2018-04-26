function checkUsername() {                        
  var username = el.value;                      
  if (username.length < 5) {                      
    elMsg.className = 'warning';                  
    elMsg.textContent = '少於五個字';
  } else {
    elMsg.className = 'pass';                                          
    elMsg.textContent = '密碼可使用';                       
  }
}
function tipUsername() {                          
  elMsg.className = 'tip';                        
  elMsg.innerHTML = '至少五個字';
}

var el = document.getElementById('username');
var elMsg = document.getElementById('feedback');


el.addEventListener('focus', tipUsername, false);
el.addEventListener('blur', checkUsername, false);



