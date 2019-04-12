<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login Screen </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
             $(document).ready(function(){  
                let URL = window.location.href.split("=")[1]
                if(URL === 'True'){
                    $("#errorMsg").html("Wrong Login Credentials");
                }
             });
        </script>
        <style>
            #errorLogin{
                color:red;
            }
        </style>
    </head>

    <body>


        <form method="POST" action="loginProcess.php">
            
            Username: <input type="text" name="username" id="username"/> <br/>
            
            Password: <input type="password" name="password"/> <br/>
            
            <input type="submit" value="Login!" >
        </form>
        <div id="errorLogin"><h3 id="errorMsg"></h3></div>

    </body>
</html>