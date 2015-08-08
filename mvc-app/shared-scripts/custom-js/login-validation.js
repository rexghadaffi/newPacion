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




/* 
function ajax()
{
	
	 $.get("demo_test.asp", function(data, status){
            alert("Data: " + data + "\nStatus: " + status);
	
}

function ajaxRedirect()
{
$.ajax({	
           type: "POST",
           url: "../../models/Login/ajaxRedirect.php",
           data: {  
		        username:	$('#username').val(),
           password: 	$('#password').val(),
           },
           dataType: "text",
           success: function(server_response){

			   if(server_response == 1)
						{
						
							alert('oops');
						}
						else if (server_response == 0)
						{
						alert('oops1');

						}


		   },
		   }); 		   		   		
} */