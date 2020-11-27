<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <style>
            
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
        <form method="POST" action="http://localhost/UbiAttendance/index.php/Attendance/loginCheck">
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
                  <button type="button" class="Button" value="Log In Here" name="log" id="" >LogIn</button>
                </div>
               </div>
            </form>
    </body>
</html>