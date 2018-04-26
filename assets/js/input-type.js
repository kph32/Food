(function() {

  var pwd = document.getElementById('username');  
  var chk = document.getElementById('showPwd'); 

  chk.addEventListener('change', function(e) {  
    var target = e.target || e.srcElement;      
    try {                                       
      if (target.checked) {                   
        pwd.type = 'text';
        console.log('text');                  
      } else {                                
        pwd.type = 'password';
        console.log('password');                   
      }
    } catch(error) {                            
      alert('This browser cannot switch type'); 
    }
  },false);

}());