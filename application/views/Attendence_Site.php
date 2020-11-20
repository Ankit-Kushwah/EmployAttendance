<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title></title>
        <style>
            body{
                padding: 0;
                margin: 0;
                background-color: darkgrey;
                }
            .nav-bg{
                width: 100%;
                height: 3.4em;
                background-color: darkslategrey;
                position: absolute;
                left:0;
                top:0;
            }
            .nav-icon{
                width: 30%;
                background-color: seagreen;
                left:0;
                height: 100%;
                position: relative;
                float: left;
                font-size: 3em;
                text-align: center;
            }
            .nav-btn{
                    width: 70%;
                    height: 100%;
                    position: relative;
                    top: 0;
                    background-color: slateblue;
                    border-bottom: transparent;
                    float: left;
            }
            .nav-btn-login{
                width: 20%;
                height: 100%;
                left:58%;
                background-color: skyblue;
                text-align: center;
                position: relative;
                border: 0;
                font-size: large;
            }
            .nav-btn-Signup{
                width: 20%;
                height: 100%;
                left:59%;
                background-color: skyblue;
                text-align: center;
                position: relative;
                border: 0;
                font-size: large;
            }

        </style>
    </head>
    <body>
        <nav class="nav-bg">
            <div class="nav-icon">Attendance</div>
            <div class="nav-btn">
                <button id="login" class="nav-btn-login">LOgIn</button>
                <button id="signup" class="nav-btn-Signup">SiGNup</button>
            </div>
        </nav>
        <section>
            <div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>
        </section>
        <script>
            $(document).ready(function(){
              $("#login").click(function(){
                $.ajax({url: "login.php", success: function(result){
                  $("#div1").html(result);
                }});
              });
              $("#signup").click(function(){
                $.ajax({url: "Emp_Reg.php", success: function(result){
                  $("#div1").html(result);
                }});
              });

            });
        </script>
    </body>
</html>