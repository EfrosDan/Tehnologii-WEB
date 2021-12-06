$('document').ready(function() {  

    /* handle form validation */  
    $("#register-form").validate({
        rules:
     {
     password: {
     required: true,
     minlength: 6,
     maxlength: 15
     },
     user_email: {
              required: true,
              email: true
              },
      },
         messages:
      {
              password:{
                        required: "please provide a password",
                        minlength: "password at least have 6 characters"
                       },
              user_email: "please enter a valid email address",
         },
      submitHandler: submitForm 
         });  
      /* handle form submit */
      function submitForm() {  
      var data = $("#register-form").serialize();    
      $.ajax({    
      type : 'POST',
      url  : 'register.php',
      data : data,
      beforeSend: function() { 
       $("#error").fadeOut();
       $("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
      },
      success :  function(response) {      
          if(response==1){         
               $("#error").fadeIn(1000, function(){
                 $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');           
                 $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Log in');          
               });                    
          } else if(response=="registered"){         
               $("#btn-submit").html('<img src="ajax-loader.gif" /> &nbsp; Signing Up ...');
               setTimeout('$(".form-signin").fadeOut(500, function(){ $(".register_container").load("welcome.php"); }); ',3000);         
          } else {          
               $("#error").fadeIn(1000, function(){           
                    $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');           
                   $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');         
               });           
             }
          }
      });
      return false;
    }
  });