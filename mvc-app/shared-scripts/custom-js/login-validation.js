function inactiveStatus(){
 var message = 'Your Account is been deactivated';
        $.Notify({
            caption: 'Error',
            content: message,
            type: 'alert'
        });
		
  
}

function missingInputs(){
 var message = 'This field can not be empty!';
        $.Notify({
            caption: 'Error',
            content: message,
            type: 'alert'
        });
		
  $('#username').focus();
  
  
}

function wrongInputs(){
 var message = 'Username and Password doesnt match!';
        $.Notify({
            caption: 'Error',
            content: message,
            type: 'alert'
        });

  
}


function loadingBar(){
	
	$('#loadingBar').fadeIn("milliseconds");
	
}

function stoploadingBar(){
	
	$('#loadingBar').fadeOut("milliseconds");
	
}

// function getData()
// {
	
	 // $.post("http://localhost/newPacion/mvc-app/views/backend.php",
        // {
          // username: $('username').val(),
          // city: $('password').val()
        // },
        // function(data,status){
          // alert('oops');
        // });
	
	
// }

// function ajaxRedirect()
// {
	// $.post("jquery_post.php",data,callback);

// $.ajax({	
           // type: "POST",
           // url: "http://localhost/newPacion/mvc-app/shared-scripts/custom-js/ajaxRedirect.php",
           // data: {  
		   // username :	$('#username').val(),
           // password : 	$('#password').val(),
           // },
           // dataType: "text",
           // success: function(server_response){

			   // if(server_response == 1)
						// {
						
							// alert('oops');
						// }
						// else if (server_response == 0)
						// {
						// alert('oops1');

						// }
						// else
						// {
							// alert('oops11');
							
						// }


		   // },
		   // }); 		   		   		
// } 