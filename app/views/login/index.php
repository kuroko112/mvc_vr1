<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"crossorigin="anonymous"/>
      
    <title>Document</title>

    <style>
        @import"https://fontawesome.com/v4.7/whats-new/";
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background-color:#232525;
}
.login-box{
	width: 280px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	color: white;


}
.login-box h1{
	font-size: 40px;
	border-bottom: 6px solid #009688;
	margin-bottom: 50px;
	padding: 13px 0;

}
.textbox{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	border-bottom: 1px solid #009688;

}
.textbox i{
	width: 26px;
	float: left;
	text-align: center;

}
.textbox input{
	border: none;
	outline: none;
	background: none;
	color:white;
	font-size: 18px;
	width: 200px;/*The display size has been enlarged to show all the words we want to write
Sorry this is google translate
If there are any spelling errors in the comment*/
	float: left;
	margin: 0 10px;


}
/*.but{
	/*width: 100%;
	background: none;
	border: 2px solid #009688;
	color: white;
	padding: 5px;
	font-size: 18px;
	cursor: pointer;
	margin: 12px 0;
	border-radius: 25px;
	font-weight: bold;
	border: 2px solid #009688;
	background: transparent;
	color: #fff;
	cursor: pointer;
	position: relative;
	overflow: hidden;

width: 200px;
	padding: 15PX 0;
	text-align: center;
	margin: 20px 10px;
	border-radius: 25px;
	font-weight: bold;
	border: 2px solid #009688;
	background: transparent;
	color: #fff;
	cursor: pointer;
	position: relative;
	overflow: hidden;

}*/
 button{
	width: 200px;
	padding: 15PX 0;
	text-align: center;
	margin: 20px 10px;
	border-radius: 25px;
	font-weight: bold;
	border: 2px solid #009688;
	background: transparent;
	color: #fff;
	cursor: pointer;
	position: relative;
	overflow: hidden;
	font-size: 20px;

}
span{
	background: #009688;
	height: 100%;
	width: 0;
	border-radius: 25px;
	position: absolute;
	left: 0;
	bottom: 0;
	z-index: -1;
	transition: 0.5s;
}
 button:hover span{
	width: 100%;
}
  button:hover{
	border: none;
}
 
    </style>

</head>
<body>
<div class="login-box"> 
    <h1>login</h1>
    <form action="postlogin" method="post">
    <div class="textbox">
        <i class="fa fa-user" aria-hidden="true"></i>
        <input type="text" name="email" placeholder="Email :">
    </div>
    <div class="textbox">
    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
        <input type="password" name="password" placeholder="password : " >
    </div>
       <button type="submit"><span></span>sigin</button>
    </form>
</div>
</body>
</html>

