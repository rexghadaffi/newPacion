// keypress numeric validator 
function Numeric(e) {
    
    if (window.event) // IE 
    {
        if ((e.keyCode < 48 || e.keyCode > 57) & e.keyCode != 8 & e.keyCode != 45) {
             $(this).notifyMe(
        'bottom', // Position
        'error', // Type
        'Lorem Ipsum Text', // Title
        'Lorem Ipsum is simply dummy text of the printing',
		200,
		2000// Description
      
    );
            event.returnValue = false;
            return false;
        }
    }
    else { // Fire Fox
        if ((e.which < 48 || e.which > 57) & e.which != 8 & e.keyCode != 45) {
             $(this).notifyMe(
        'bottom', // Position
        'error', // Type
        'Lorem Ipsum Text', // Title
        'Lorem Ipsum is simply dummy text of the printing',
		200,
		2000// Description
      
    );
            e.preventDefault();
            return false;

        }
    }
}
// keypress numeric validator 
function Alphabet(e) {
    var regex = new RegExp("^[a-zA-Z.\b\040]+$");
    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    if (regex.test(str)) {
        return true;
    }
     $(this).notifyMe(
        'bottom', // Position
        'error', // Type
        'Lorem Ipsum Text', // Title
        'Lorem Ipsum is simply dummy text of the printing',
		200,
		2000// Description
      
    );
    e.preventDefault();
    return false;
}