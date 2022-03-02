<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="SPR7, SPR777, CLYS, CLYSSPR777, 林佑賢, 佑賢, 賢, 賢哥, 賢哥SPR7, 設計, 工作室, 設計工作室, Freedom, Free, 自由, 自由工作室, Design, Designer">
<title>CLYSSPR777</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="CLYSSPR777.css" rel="stylesheet" type="text/css">
<link rel="Shortcut Icon" type="image/x-icon" href="images/Logo2.png" />
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body style="padding-top: 70px">
	<?php
	$ConChecking = @mysql_connect("localhost", "root", "SPR77745") or die("連結失敗");
	$DB_mysql_select = @mysql_select_db("clysspr777_db")or die("無此資料庫");
	
	$DB_Insert = "insert into user_suggest(name, email, suggestion, number) value('user_Name', 'user_Email', 'user_Suggestion', '')";
		
	mysql_query($DB_Insert);
	mysql_close($ConChecking);
	/*
	if($ConChecking){
		echo "連結成功";
	} else {
		echo "連結失敗";
	}
	*/
	?>
<div class="container-fluid">
	<h5 class="text-capitalize text-right">Designer: Christopher Ling</h5>
	<hr>
  <section class="p-3">
				      <div class="row">
        <div class="col-md-12">
          <div class="list-group"><a href="#" class="list-group-item active">
          <h4 class="list-group-item-heading">Contact me</h4>
          </a><a href="#" class="list-group-item">
          <p class="list-group-item-text">&nbsp;<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d857.3445560137856!2d111.8534310322019!3d2.245691376196222!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMsKwMTQnNDUuNSJOIDExMcKwNTEnMTIuNSJF!5e1!3m2!1szh-TW!2stw!4v1516310360561" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
			  
          </a>
          <div class="list-group"><a href="#" class="list-group-item active">
			  <h4 class="list-group-item-heading">
				  Adress: 96000 No:5B, Jalan Lada 8A/4, Sibu, Sarawak,Malaysia<br>
				  Mail: clys129@gmail.com<br>
				  Tel: 0905-725-941
			  </h4>
          </a><a href="#" class="list-group-item">
			  
			  <section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8">
			<h2 class="text-center mt-1"><strong>改善建議</strong></h2>
		  <form>
			  <div class = "row form-group">
				  <lable>姓名</lable>
				  <input type="text" id="FormName" placeholder="請輸入您的姓名" class="form-control is-valid" required>
			  </div>
			  <div class = "row form-group">
				  <lable>電子信箱</lable>
				  <input type="text" id="FormEmail" placeholder="請輸入您的電子信箱" class="form-control is-valid" required>
			  </div>
			  <div class = "row form-group">
				  <lable>改善建議</lable>
				  <textarea id="FormRecommend" placeholder="請輸入您寶貴的意見" class="form-control is-valid" required row="3"></textarea>
			  </div>
			  <div class = "row form-group">
				  <button type="reset" class="btn btn-defalut floa">清除</button>
				  <button type="submit" class="btn btn-success float-right">送出</button>
			  </div>
		  </form>
	  </div>
				  <div class="col-12 col-md-4 mt-70">
			 <strong> 公司</strong>：長榮大學 Chang Jung Christian University<br>
			   <strong>地址</strong>: 71101 台南市歸仁區長大路一號<br>
			   <strong>電話</strong>: (06)2785123<br>
          <strong>網站管理員</strong>: webinfo@cjcu.edu.tw<br>
		  </div>
    </div>
  </div>
</section>
            
</a></div>
          </div>
        </div>
</div>
	</section>
<header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a href="index.html" target="_self" class="navbar-brand">SPR7</a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="topFixedNavbar1">
        <ul class="nav navbar-nav">
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="main_1.html" target="_self">About me</a></li>
          <li><a href="main_2.html" target="_self">About Freedom</a></li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Album<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="main_3_1.html" target="_self">Personal</a></li>
              <li><a href="main_3_2.html" target="_self">Family</a></li>
              <li><a href="main_3_3.html" target="_self">Friends</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collections<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="main_4_1.html" target="_self">Poster Design </a></li>
              <li><a href="main_4_2.html" target="_self">2D Animation</a></li>
              <li><a href="main_4_3.html" target="_self">3D Modeling</a></li>
              <li><a href="main_4_4.html" target="_self">Video Editing</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="main_4_5.html" target="_self">Creative Design</a></li>
              <li><a href="main_4_6.html" target="_self">Physical design</a></li>
            </ul>
          </li>
          <li><a href="main_5.html" target="_self">Contact me</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
	
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
	<footer>
<div class="text-center alert-info">@ Design by SPR7 2020</div></footer>
</body>
</html>
