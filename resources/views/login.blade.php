<!doctype html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway" rel="stylesheet">
  <title>Login</title>
	<style>
			body{
			width:auto;
			height:100%;
			margin-top:0;
			margin-left:0;
			margin-right:0;
			background: linear-gradient(294deg, #d7f4fc, white);
			background-size: 400% 400%;
			-webkit-animation: gradient 25s ease infinite;
			-moz-animation: gradient 25s ease infinite;
			animation: gradient 25s ease infinite;

			}

			.container{
			min-height:100%;
			}
      .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}
.alert-1 {
padding: 20px;
background-color: green;
color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

		@-webkit-keyframes gradient {
			0%{background-position:0% 50%}
			50%{background-position:100% 50%}
			100%{background-position:0% 50%}
		}
		@-moz-keyframes gradient {
			0%{background-position:0% 50%}
			50%{background-position:100% 50%}
			100%{background-position:0% 50%}
		}
		@keyframes gradient {
			0%{background-position:0% 50%}
			50%{background-position:100% 50%}
			100%{background-position:0% 50%}
		}
		.top-header{
		    padding:0.01vw;
			background: #7c9aa1;
			color: white;
			font-size: 30px;
			margin:0;
			box-shadow: 1px 2px 6px 0.01px gray;
		}
		.tright-content{
			margin-right:1vw;
			text-align:right;
			color:white;
		}
		.tright-content p{
			margin-left: 0.4vw;
			display:inline-block;
		font-family: "Oswald";
			font-weight:bold;
			font-size:1vw;
		}
		.selectbox{
			padding:0;
			margin:0;
			border:0px;
			background:none;
			color:white;
			font-size:1vw;
		}
		.company-info{
			width:25%;
			margin-left:20%;
			margin-top: 10%;
			display:inline-block;
		}
		.company-info img{
		 -webkit-filter: drop-shadow(1px 1px 0 white) drop-shadow(-1px -1px 0 white);
			filter: drop-shadow(1px 1px 0 white) drop-shadow(-1px -1px 0 white);
	-webkit-animation: fadein 2s;
       -moz-animation: fadein 3s;
        -ms-animation: fadein 3s;
         -o-animation: fadein 3s;
            animation: fadein 3s;

		}


	@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
	}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

			.company-caption{
			font-family:'Raleway';
			font-weight:500;
			font-size:1.5vw;
			color:#5a6666;
			}

			.cc-header{
			font-size:3vw;
			font-weight:700;
			animation: 1s ease-out 0s 1 slideFromLeft;
			}

			@keyframes slideFromLeft {
				0% {
				transform: translateX(-100%);
				opacity: 0;
					}
				100% {
				transform: translateX(0);
				opacity:1;
					}
			}
			@keyframes slideFromRight {
				0% {
				transform: translateX(100%);
				opacity: 0;
					}
					80% {
				transform: translateX(-10%);
				opacity:0.8;
					}
				100% {
				transform: translateX(0);
				opacity:1;
					}
			}

			@keyframes slideFromTop {
				0% {
				transform: translateY(-100%);
				opacity: 0;
					}
				100% {
				transform: translateY(0);
				opacity:1;
					}
			}
			.responsive{
			max-width:100%;
			height:auto;
			}
			.cc-header p{
			background: -webkit-linear-gradient(#29b9fa, #07a3e9);
			-webkit-background-clip: text;
			-webkit-text-fill-color: transparent;
			margin:0;
			padding:0;
			}
			.company-info p{
			margin:0;
			padding:0;
			animation: 1s ease-out 0s 1 slideFromTop;
			}
			.login-box{
			background:white;
			margin-right: 20%;
			margin-top:10%;
			padding: 1vw;
			float:right;
			border-radius:0.3vw;
			box-shadow: 0px 0px 20px 0.0001px #07a3e9;
			width:20%;
			-webkit-animation: fadein 3s;
       -moz-animation: fadein 3s;
        -ms-animation: fadein 3s;
         -o-animation: fadein 3s;
            animation: fadein 3s;
			}

			.content{
			width:100%;
			display:inline-block;
			margin:0;
			padding:0;
			}
			.cr{
				-webkit-animation: fadein 6s !important;
       -moz-animation: fadein 6s;
        -ms-animation: fadein 6s;
         -o-animation: fadein 6s;
            animation: fadein 6s;
			}

			.login-head{
			font-family:'Raleway';
			font-weight:700;
			font-size:1.5vw;
			color:#29b9fa;
			margin-top:1%;
			}
			.org{
			padding:0.3vw;
			padding-left:0.7vw;
			font-size:0.8vw;
			width:80%;
			border:0px;
			border-radius:0.3vw;
			box-shadow: 0px 0px 7px 0.2px #07a3e9;
			}
			.masuk{
			padding-bottom:0.4vw;
			padding-top:0.4vw;
			background:#07a3e9;
			font-size:1vw;
			font-weight:400;
			font-family:"Raleway";
			color:white;
			border:0px;
			border-radius:0.2vw;
			box-shadow: 0px 0px 4px 0.1px #07a3e9;
			width:85%;
			}
			.web-view{
			display:inline-block;
			}

			@media screen and (max-width:680px){
			.company-info{
				display:none;
			}
			.login-box{
			margin-top:10%;
			margin-left:auto;
			margin-right:auto;
			float:none;
			border-radius:0.3vw;
			box-shadow: 0px 0px 7px 0.2px #07a3e9;
			width:90%;
			}
			.top-header{
				display:none;
			}
			.login-head{
				font-size:30px;
			}
			.org{
			padding:5px;
			font-size:15px;
			width:290px;
			border:0px;
			border-radius:0.3vw;
			box-shadow: 0px 0px 7px 0.2px #07a3e9;
			}
			.masuk{
			padding-bottom:0;
			padding-top:0;
			background:#07a3e9;
			font-size:25px;
			font-weight:400;
			font-family:"Raleway";
			color:white;
			border:0px;
			border-radius:0.2vw;
			box-shadow: 0px 0px 4px 0.1px #07a3e9;
			width:90%;
			}
			.info{
				font-size:15px !important;

			}
			.sfl{
				display:none;
			}
			.responsive.sp{
				display:block !important;
				margin-top:15%;
				margin-left:auto;
				margin-right:auto;
			-webkit-animation: fadein 3s;
       -moz-animation: fadein 3s;
        -ms-animation: fadein 3s;
         -o-animation: fadein 3s;
            animation: fadein 3s;
			}
			.cc-header.sp{
				margin-top:5%;
				margin-left:auto;
				margin-right:auto;
				font-size:2em;
				text-align:center;
				display:inline-block !important;
			}
			.footer{
			display:block !important;
			position:fixed;
			font-weight:light;
			width:100%;
			bottom:3%;
			left:0;
			font-family:"Raleway";
			font-size:15px;
			text-align:center;
		-webkit-animation: fadein 4s
       -moz-animation: fadein 4s;
        -ms-animation: fadein 4s;
         -o-animation: fadein 4s;
            animation: fadein 4s;
			color:#496061;
			}
			.org.ph{
				width:76% !important;
			}
			}
			input:focus {
			animation: glow 1s ease-out infinite alternate;
			outline-width:0;
			}
			@keyframes glow {
				0% {
			box-shadow: 0px 0px 7px 0.2px #07a3e9;
				}
				100% {
			box-shadow: 0px 0px 7px 3px #07a3e9;
				}
		}
			.prepend{
			position:absolute;
			padding:0.3%;
			font-size:1em;
			}
			.form-input{
				text-align:left;
				margin-left:8%;
				margin-bottom:1%;
				font-family:"raleway";
				font-weight:500;
			}
			.form-login a{
			text-decoration:none;
			color:blue;
			}
			.form-login a:hover{
			text-decoration:none;
			color:cyan;
			}
			.form-demo a{
			text-decoration:none;
			color:blue;
			}
			.form-demo a:hover{
			text-decoration:none;
			color:cyan;
			}
			.sfl{
				animation: 2s ease-out 0s 1 slideFromRight;
			}
		</style>
	</head>

	<body>
	<div class="container">
		<div class="top-header">
    @if(session()->has('error'))
      <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Error!</strong> {{session()->get('error')}}
</div>
  @endif
  @if(session()->has('data'))
    <div class="alert-1">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
{{session()->get('data')}}
</div>
@endif
    <div class="tright-content">
				<i class="fa fa-phone"></i><p>Call Us: +62 812-1133-5608 <i class="fa fa-globe" style="margin-left:1vw;"></i>
				<select class="selectbox"><option value="id" Selected>ID</option></select>
				</p>
		</div>
		</div>
		<div class="content">
		<div class="company-info">
		<div class="web-view">
	<!--	<img class="responsive" src="https://taskdev.mile.app/69ece7b1819e760b63623e810922b59e.png"> -->
			<div class="company-caption">
				<div class="cc-header">
				<p>Platform</p>
				</div>
		<p>Untuk Test Praktek</p>
		<br>
		<p class="cr" style="font-size:0.8vw;">@Copyright Naufal Syauqi 2020</p>
			</div>

		</div>
		</div>
		<img class="responsive sp" style="display:none;" src="https://taskdev.mile.app/69ece7b1819e760b63623e810922b59e.png">
		<div class="cc-header sp" style="display:none;">
				<p>Platform Anda</p>

		<p style="font-size:20px; color:#5a6666;">Untuk mengelola semua manajemen layanan di lapangan</p>
		</div>
		<div class="login-box">
		<center>
		<div class="login-head">
          <i class="fa fa-building fa-2x"></i>
		</div>

		<br>

		<div class="form-login" style="display:inline-block;">
		<form action="/login/submit_login" method="post">
      {{ csrf_field() }}
		<input class="org" type="text" name="username" placeholder="Masukkan Username"></input>
    <br><br>
    <input class="org" type="password" name="pass" placeholder="Masukkan Password"></input>
		<br><br>
		<button class="masuk" type="submit">Masuk</button>
		<br>
		<br>
		<p class="info" style="font-weight:200; font-size:0.8vw; font-family:'raleway';">Belum terdaftar? <a href='#' onclick="register()">Klik Disini Untuk Mendaftarkan Diri</a></p>

		</form>
		</div>

		<div class="form-demo" style="display:none;">
		<form  action="/login/submit_register" method="post">
      {{ csrf_field() }}
		<p class="form-input">Username</p>
		<input class="org" type="text" placeholder="Masukkan Username" name="username"></input>
		<br>
		<p class="form-input">Password</p>
		<input class="org" type="password" placeholder="Masukkan password" name="pass"></input>
		<br><br>
		<button class="masuk" type="submit">Daftar</button>
		<br>
		<br>
		<p class="info" style="font-weight:200; font-size:0.8vw; font-family:'raleway';">Sudah punya akun? <a href='#' onclick="login()">Klik Disini</a></p>

		</form>
		</div>
		</center>
		</div>





		</div>
		<div class="footer" style="display:none">
		Copyright Naufal Syauqi @2020

		</div>

		<img class="responsive sfl" style="position:fixed; right:0; bottom:0;" src="https://taskdev.mile.app/d09f7f2de7d88fb5f1575273b8a26426.png">
		</div>
		<script>
		function register() {
		$(".form-login").fadeTo( "slow" , 0, function() {
    // Animation complete.
		$(".form-login").css('display','none');
		$(".form-demo").css('display','block');
			})
				}
				function login() {
		console.log('asa');
		$(".form-demo").fadeTo( "slow" , 0, function() {
    // Animation complete.
		$(".form-demo").css('display','none').css('opacity','1');
		$(".form-login").css('display','inline-block').css('opacity','1');
			})
				}
		</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</body>
</html>
