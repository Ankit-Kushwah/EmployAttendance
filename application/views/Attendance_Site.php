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
            .popup-page{
    height: 70%;
    width: 40%;
    position: absolute;
    background-color: teal;
    top:20%;
    left:30%;
    margin-right: 3%;
    z-index: 12;	
    border-radius: 25px;		
}
.tag-name{
    height:6%;
    width: 98%;
    background-color:transparent;
    text-align: center;
    font-size: 2em;
    font-family: sans-serif;
    color: rgb(92, 146, 216);
    border-radius: 15px;
    margin-top: 6%;
    transform: translate(4%,10%);

}
.box-input{
    width: 90%;
    text-align: center;
    margin-left: 5%;
    line-height: 2em;
    height: 40%;
}
.box-input input{
    border: 0;
    width: 80%;
    height: 3em;
    text-align: center;
    border-radius: 10px;       
}
.box-input h1{
    line-height: 1.5em;
}
.btn-log{
        width:98%;
        height:12%;
        margin-top:2em ;
        /* padding:10px 80px; */
        
        
}
.btn-log .Button{
    margin-left:45%;
    width: 20%;
    height: 60%;
    margin-top: 2em;
    border-radius: 10px;
    border: 0;
}
.btn-icon{
    height: 1em;
    width: 3em;
    border-radius: 5px;
    margin-left: 2em;
    margin-top: 1em;
    margin-bottom: 0.5%;
    z-index: 4;
    background-color: transparent;
    border: 0;
    display: block;
    font-size: 1.5em;
    text-align:center;
}
#popup-page{
    visibility: visible;
    }
        </style>
    </head>
    <body>
        <nav class="nav-bg">
            <div class="nav-icon">Attendance</div>
            <div class="nav-btn">
                
            </div>
        </nav>
        <section>
           
            
            
            <form method="POST" name="form1" action="http://localhost/UbiAttendance/index.php/Attendance/loginCheck">
               
                <div class="popup-page" id="popup-page">
                     <div  class="tag-name">
                  AdMIn_LOgiN
                </div>
                <hr>
                <div class="box-input">
                  <h1>UserID</h1>
                  <input type="email" name="email" required placeholder="Email">
                  <h1>Password</h1>
                  <input type="password" name="password" required placeholder="Password">
                </div>
                <div class="btn-log" >
                  <button type="submit" class="Button" name="form1">LogIn</button>
                </div>
                </div>
                </form>
            
           
        </section>
        <!--  -->
    </body>
</html>