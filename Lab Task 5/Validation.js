   function myFunction() {

      var name=document.getElementById("Name").value;
        if (name==null || name==""){  
        alert("Name can't be blank");   
        }



        //email

          
             var email=document.getElementById("Email").value;

            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email))
            {
                alert("Valid email");  
            }
            else
                alert("You have entered an invalid email address!")



        //Password

            var pass = document.getElementById("pass").value;
            var conpass = document.getElementById("conpass").value;
            
            if (pass == conpass && pass == ""){
                alert("Enter the password")
            }
            else if(pass == conpass)
                alert("password is matched")
            else
            alert("not matched")

        // Radio button


     
                var male=document.getElementById("male").value;
                var female=document.getElementById("female").value;
                var other = document.getElementById("other").value;



                if(male.checked==false && female.checked==false && other.checked==false )
                {
                        alert("You must select male or female");
                }   
           
        //Date
                date = document.getElementById("date").value;
                if(date == "")
                alert("select the date")

        }