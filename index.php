<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Words</title>
<meta name="google-site-verification" content="5wi2p50NrJzl0Kr22wtbY42AGr0GdLdmsGf3Yd-rVhs" />
<link rel="shortcut icon" href="i/fav.png" />
<meta name="description" content="Words, Find Out The Great Words" />
<meta name="keywords" content="Word, Great Words, The Great Word, GreatWord, Great, Word, Words" />
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<META name="y_key" content="3e11c4dfc8f7f990">
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/faceplant.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic%7CPT+Serif:400,400italic%7CBree+Serif">
<script src="js/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="js/facebox.js" type="text/javascript"></script>
<script src="js/jparalax.js" type="text/javascript"></script>
<script src="js/jquery.watermarkinput.js" type="text/javascript"></script>
<script type="text/javascript">
var huruf = new Array("AJS","BKT","CLU","DMV","ENW","FOX","GPY","HQZ","IR");
var nilai = new Array(1,2,3,4,5,6,7,8,9);
//var p = /^[A-Za-z\d\s.@]+$/;
var str = "";
function check(word){
	word = word.toUpperCase();
	var hasil = 0;
	for(i=0; i<word.length; i++){
		var c = word.charAt(i);
		for(j=0; j<huruf.length; j++){
			if(huruf[j].indexOf(c) != -1){
				str += "<p id=res>" +c.toLowerCase() +" = " +nilai[j] +"<br />";
				hasil += nilai[j];
			}
		}
	}
	var res = convert(hasil);
	if(res > 11){
		res = convert(res);
	}
	str += "</p><br /><p>Before convert = " +hasil +"</p>";
	str += "<b>Result = " +res +"</b>";
}

function convert(value){
	var value = value + "";
	var a = 0;
	for(i=0; i<value.length; i++){
		 a += parseInt(value.charAt(i));
	}
	return a;
}
$(document).ready(function(){
	jQuery(function($){
		$("#word").Watermark("Fill in and press enter..");
	});
	
	$('a[rel*=facebox]').facebox({
        loading_image : 'loading.gif',
        close_image   : 'closelabel.gif'
     });
	 
	$("#great").submit(function(){
		str = "";
		var word = $("#word").val();
		if(word == "" || word == "Fill in and press enter.."){
			$.facebox("<center>Enter a word!</center>","facebox",true);
		}/*else if(!p.test(word)){
			$.facebox("<center>character not allowed!</center>","facebox",true);
		}*/else{
			check(word);
			$("#result").fadeTo(200,0.1,function(){ 
				$(this).html(str).fadeTo(900,1);
			});	
		}
		return false;
	});
	$("#word").blur(function(){
		$(this).trigger('button');
	});
	
	$('#parallax').jparallax({triggerExposesEdges: true}).append(corners);
	
	$('a.goto').click(function(){
		var ref=$(this).attr("href");
		// console.log(ref);
		$('#parallax').trigger("jparallax", [ref]);
		return false;
	});

});
</script>

<style type="text/css">
body{
	font-family:open sans;
	font-size:18px;
}

#t{
	font-size:54px;
	font-weight:500;
	margin: 15px 0 -5px 0;
	color:#3B5998;
}

hr.style-two {
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
}		

#title{
	font-size:16px;
	margin: 0 0 -5px 0;
	color:#3B5998;
}
#container{
	/* The main container div */
	text-align:center;
	width:620px;
	margin:27px auto 0;
}
#version{
	font-size:9px;
}
.main{
	margin: 18px 0 0 0;
}
.form{
	margin: 0 0 9px 0;
}

footer{
	font-size:14px;
	margin: 18px 0 0 0;
	color:#3B5998;
}
#didyouknow p{
	margin: 0 0 0 0;
}
hr{
	margin: 5px 0 5px 0;
}
b{
	color:#3B5998;
}
#res{
	font-size:14px;
	margin: 0 0 0 0;
}
.leftmargin{
	margin: 0 0 0 90px;
}
input{
	padding:8px; border:1px solid #CCCCCC; margin-left:10px; background:#fcfcfc; -moz-border-radius:5px; -webkit-border-radius:5px; width:450px; font-size:25px;
}
#parallax{
	margin: 10px 0 0 0; position:relative; overflow:hidden; width:27em; height:180px; -moz-border-radius:9px; -webkit-border-radius:9px; background: #fcfcfc; 
}

</style>
</head>
<body>
<div align="center">
<?php include "header.php";?>
</div>
<div id="container">
	<p id="t">Words</p>
	<p id="title">Find out the great words</p>
	<div class="main">
		<div class="form">
			<form action="#" id="great">
			<input type="text" name="word" id="word" maxlength="45" />
			</form>
		</div>
		<div id="result">
		</div>
	</div>
	<div align="center" id="about" style="display:none;">
		<h4>About</h4><hr class="style-two" />
		<p>Words</p>
		<p>Find out the great words</p>
		<p>Version 1.0</p><br />
		<p>http://words.wc.lt</p>
	</div>
	<div align="center" id="didyouknow" style="display:none;">
		<h4>Did you know?</h4><hr class="style-two" />
		<br /><h5>Operating System</h5>
		<p>windows = 8</p>
		<p>mac = 8</p>
		<p>linux = 8</p>
		<p>android = 11</p><br />
		<h5>Mobile Apps</h5>
		<p>path = 9</p>
		<p>bbm = 8</p><br />
		<h5>Website</h5>
		<p>google.com = 11</p>
		<p>facebook.com = 8</p>	
		<p>twitter.com = 11</p><br />
		<h5>Branding</h5>
		<p>microsoft = 10</p>
		<p>mercedes benz = 11</p>
		<p>bridgestone = 10</p>
		<p>goodyear = 9</p>
		<p>harry potter = 11</p>
		<p>twilight = 9</p>
		<p>louis vuitton = 8</p>
		<p>find out more...</p>
	</div>
	<div align="center" id="help" style="display:none;">
		<h4>Words</h4><hr class="style-two" />
		<div align="left" class="leftmargin">
			<p>1. Non case sensitive</p>
			<p>2. Special characters could not be counted</p>
			<p>3. Great Result = 8, 9, 10, 11</p>
		</div>
	</div>
	<div align="center" id="contact" style="display:none;">
		<h4>Contact</h4><hr class="style-two" />
		<p>Email :</p>
		<p>mail@words.wc.lt</p>
		
	</div>

	<footer>
	<a href="#about" rel="facebox">About</a> | <a href="#didyouknow" rel="facebox">Did you know?</a> | <a href="#help" rel="facebox">Help</a> | <a href="#contact" rel="facebox">Contact</a>
	<?php
	if($_GET["info"] == "ya"):
	?>
		<p><a href="http://www.mypagerank.net"><img src="http://www.mypagerank.net/services/seostats/seostats.php?s=dd4e1b5abaec7f8d158eec9f426b160d5c0a&bg=FFFFFF&textcolor=000000&bordercolor=999999&indicatorcolor=5EAA5E&ugo=1&uho=1&umo=1&amo=1&upr=1&tuv=1&tpv=1&yuv=1&ypv=1&ttuv=1&ttpv=1&uonline=1&f=447785" alt="SEO Stats powered by MyPagerank.Net" border="0" /></a></p>
	<?php endif;?>
	<p>&nbsp;</p><small>&copy; 2010-2014 words.wc.lt. All rights reserved.</small>
	</footer>
</div>
</body>
</html>
