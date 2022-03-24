$(function()

{
    jQuery.validator.addMethod("mail", function(value, element) {
    var re =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (re.test(value))
{
    return true;
}
else
    return false;
}, "Please enter a valid email");

        jQuery.validator.addMethod("phone", function(value, element) {
    var phoneno = /^((\d?9[1-9])|(\d?2[0-9])|(\d?5[0-9]))[\s\./0-9]{6}$/;
    if(phoneno.test(value))
        {
      return true;
        }
      else
        {
        return false;
        }
}, "Please enter a valid phone number");


     jQuery.validator.addMethod("uname", function(value, element) {
    var re =/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/;
if (re.test(value))
{
    return true;
}
else
    return false;
}, "Please enter a valid username");


    $("#form-horizontal").validate(
      {
        rules: 
        {
          nom: 
          {
            required: true
            
          },
          prenom: 
          {
            required: true,
            lettersonly: true
          },
          sexe: 
          {
            required: true,
          },
          email: 
          {
            required: true,
            mail : true
          },
          tel: 
          {
            required: true,
            phone: true
          },
          datenaiss: 
          {
            required: true,
          },
                    user: 
          {
            required: true,
          },
                    mdp: 
          {
            required: true,
          }
        },

        messages: 
        {
          nom: 
          {
            required: "enter votre nom"
          },
          prenom: 
          {
            required: "enter votre prenom"
          },
           sexe: 
          {
            required: "entre un choix"
          },
           email: 
          {
            required: "enter votre mail"
          },
           tel: 
          {
            required: "enter un numero"
          },
           datenaiss: 
          {
            required: "enter une date"
          },
           user: 
          {
            required: "enter un user"
          },
            mdp: 
          {
            required: "enter un mdp"
          }
        }
      }); 

});

 