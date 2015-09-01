function inactiveStatus(){
 var message = 'Your Account is been deactivated';
        $.Notify({
            caption: 'Error',
            content: message,
            type: 'alert'
        });
		
  
}

function missingInputs(){
	
swal({   title: "Ooooops",  
 text: "Username and Password are required.",  
 type: "error",   showCancelButton: false,  
 confirmButtonColor: "#DD6B55",   
 confirmButtonText: "OK",   
 closeOnConfirm: true}, 
function(){  
  $('#loginModal').modal('toggle');
});
  
  
}

function wrongInputs(){
	
 swal({   title: "Ooooops",  
 text: "Username and Password doesnt match.",  
 type: "error",   showCancelButton: false,  
 confirmButtonColor: "#DD6B55",   
 confirmButtonText: "OK",   
 closeOnConfirm: true}, 
function(){  
   $('#loginModal').modal('toggle');
});
  
  

  
}

function wrongPasswords(){
  

swal("Ooooops!", "Password and Retype Password doesnt match.", "error")
  
}

function regisSuccess(){
  

swal("Success!", "Please check your email for confirmation.", "success")
  
}

function updateSuccess(){
  

swal("Success!", "Profile Updated.", "success")
  
}


function wronginput(){
  
 swal({   title: "Ooooops",  
 text: "Password doesnt match.",  
 type: "error",   showCancelButton: false,  
 confirmButtonColor: "#DD6B55",   
 confirmButtonText: "OK",   
 closeOnConfirm: true}, 
function(){  
   $('#changepwModal').modal('toggle');
});
  
  }

  function wronginputpass(){
  
 swal({   title: "Ooooops",  
 text: "New Password doesnt match.",  
 type: "error",   showCancelButton: false,  
 confirmButtonColor: "#DD6B55",   
 confirmButtonText: "OK",   
 closeOnConfirm: true}, 
function(){  
   $('#changepwModal').modal('toggle');
});
  
 } 

  function wrongemail(){
  
 swal({   title: "Ooooops",  
 text: "Your email is not in our database.",  
 type: "error",   showCancelButton: false,  
 confirmButtonColor: "#DD6B55",   
 confirmButtonText: "OK",   
 closeOnConfirm: true}, 
function(){  
   $('#forgotModal').modal('toggle');
});
  
  }


function imageSuccess(){
  
 swal({   title: "Success",  
 text: "Image Uploaded.",  
 type: "success",   showCancelButton: false,  
   
 confirmButtonText: "OK",   
 closeOnConfirm: true}, 
function(){  
 window.location.href="index.php";
});
  
  }

    function wrongimage(){
  
 swal({   title: "Ooooops",  
 text: "Something went wrong.",  
 type: "error",   showCancelButton: false,  
 confirmButtonColor: "#DD6B55",   
 confirmButtonText: "OK",   
 closeOnConfirm: true}, 
function(){  
     $('#uploadImage').modal('toggle');
});
  
  }