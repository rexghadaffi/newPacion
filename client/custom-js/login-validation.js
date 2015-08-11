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

