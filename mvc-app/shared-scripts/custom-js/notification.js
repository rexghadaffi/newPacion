 function SuccessfulSave()
 {
  $(this).notifyMe(
        'bottom', // Position
        'success', // Type
        'Saved!', // Title
        'You have successfuly added  a record,',
    200,
    4000// Description
      
    );
 }
