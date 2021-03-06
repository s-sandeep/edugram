<!DOCTYPE html>
<html>
  <head>
    <title>Edugram | Library</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="http://edugram.org/bootstrap-3.0.0/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/edugram/bootstrap/js/html5shiv.js"></script>
      <script src="/edugram/bootstrap/js/respond.min.js"></script>
    <![endif]-->
	<style>
		.nopadding {
		   padding: 0 !important;
		   margin: 0 !important;
		}
		.fb{
			background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll left top rgba(0, 0, 0, 0);
			display: inline-block;
			height: 29px;
			margin: 0px 3px 0 5px;
			width: 29px;
		}
		.fb:hover {
			background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll left -29px rgba(0, 0, 0, 0);
			transition: all 0.5s ease 0s;
		}
		
		.twitter{
			background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -106px top rgba(0, 0, 0,0);
			display: inline-block;
			height: 29px;
			margin: 0 3px 0 5px;
			width: 29px;
		}
		
		.twitter:hover {
			background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -106px -29px rgba(0, 0,0,0);
			transition: all 0.5s ease 0s;
		}
		
		.google{
			background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -70px top rgba(0, 0, 0,0);
			display: inline-block;
			height: 29px;
			margin: 0 3px 0 5px;
			width: 29px;
		}
		.google:hover {
			background: url("http://edugram.org/image/icons/social-icon.png?v=2") no-repeat scroll -70px -29px rgba(0, 0,0,0);
			transition: all 0.5s ease 0s;
		}
		.full{
			width:100%;
		}
		.set-height-500{
			height:500px;
		}
		.heading-center{
			text-align:"center";
		}
		.content{
			min-height :40px;
			max-height :50px;
		}
		.teammate{
		height:320px;
		}
		.teamsectionhgt{
		padding:20px; 
		}
	</style>
</head>

<body>
	<?php
		include'../header.php';
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h2><span>Library for students </span></h2>
				<p>	
				Edugram manages a library for students.
				We provide books for underprivileged students.
				Here are the details :
				</p>
					<ul>
						<li>Academic Books</li>
						<li>Competitive Books</li>
						<li>Magazines</li>
						<li>News Papers</li>
					</ul>
				<p>
				All of academic books can be issued to students for a year.Magazines and News Papers are available for go and read.
				</p>
				<p>
				You can donate you books at our library.It can be useful for someone.
				</p>
			</div>
			<div class="col-md-6 col-lg-6 teamsectionhgt">
				<div class="row">
					<div class="col-md-12 teammate"style="background:url(../image/theme/student-library.jpg) center center; background-size:cover;"></div>
				</div>
				<div class="row">
					<br/>
					<blockquote >
					  <p>A library of wisdom, is more precious than all wealth, and all things that are desirable cannot be compared to it. Whoever therefore claims to be zealous of truth, of happiness, of wisdom or knowledge, must become a lover of books.</p>
					  <footer>Earl Nightingale <cite title="Source Title">Source Title</cite></footer>
					</blockquote>
				</div>
			</div>
		</div>
		
	</div>
	
	<?php
		include_once '../footer.php';
	?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://edugram.org/js/jquery-1.11.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="http://edugram.org/bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
