# ---- TASK ALLOCATION ----

# REGGIE
   - tblactivity, tbljoboffer, tbljob, tblcompanyadmin, tblusertype ADD/EDIT/FETCH

# DANIEL
   - LOGIN, HTACCESS. 

# JHUN
   - tblcompanyuser, tblpost, tbltopic, tblforumcategory ADD/EDIT/FETCH

# REX
   - UI/UX, client side validation, notify me

# PLEASE FOLLOW NAMING CONVENTION:

1.) Filename = all letters lowercase, in case of multiple words use this template
    
    user.php
    user-type.php
    user-form-validation.js
    user-model.php
    user-custom-style.css
    
2.) Variables (class members) = use camel casing 

    public $user;
    private $userType;
    constant $userFormValidation;
    public $userModel;
    public $userCustmStyle;
    
3.) Methods / Classess (class members) = every word starts with capital letters
  
    Methods :
    
    GetUser()
    SetUserType()
    
    Classes :
    
    class UserFormValidation { 
        code goes here..
    }
    
    class UserCustomStyle { 
        code goes here..
    }
    
4.) Database Naming Convention: (incase of database changes)

    For columns or fields user camel casing:
    userID -> notice that ID is 2 caps since ID is an abbreviation and compose of 2 diff words.
    userType
    userName
    
    For table name = all lowercase, since mysql does not accept capital letters in table names:
    tbluser
    tblproduct
    tblorder
    
    For stored procedures : all lowercase, use _ to separate multiple words.
    (Stored Procedure / Routine) Naming
    add_admin
    get_adminID
    add_admin_type
    
    (Stored Procedure / Routine) Parameters  all lowercaps
    id
    username
    password
    email
   
        
