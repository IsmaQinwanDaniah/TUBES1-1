<html>
<head>
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Web Page Annisa Dyah Fauzia</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
     <script type="text/javascript" language="javascript">
     now = new Date
    expireDate = new Date
    expireDate.setMonth(expireDate.getMonth()+6)
    hitCt = parseInt(cookieVal("pageHit"))
    hitCt++
    lastVisit = cookieVal("pageVisit")
    if (lastVisit == 0) {
    lastVisit = ""
    }

    document.cookie = "pageHit="+hitCt+";expires=" + expireDate.toGMTString()
    document.cookie = "pageVisit="+now+";expires=" + expireDate.toGMTString()
    function cookieVal(cookieName) {
        thisCookie = document.cookie.split("; ")
         for (i=0; i<thisCookie.length; i++) {
            if (cookieName == thisCookie[i].split("=")[0]) {
                return thisCookie[i].split("=")[1]
            }
       }
      return 0
    }
    </script>
</head>
<body>
<div class="top">
	<div class="header">
		<div class="left">
			
		</div>
		<div class="right">
		<img style="width:210px;height:150px;" src="img/me.jpg"></img>	
		</div>
	</div>	
</div>
<div class="container">	
	<div class="navigation">
		<a href="index.php">Home</a>
		<a href="aboutme.html">About Me</a>
		<a href="parseweb.php">Contoh Parse Web</a>
		
	<iframe src="clock.htm" style="border:0;height:30px;position:absolute;right:110px;width:400px;"></iframe>	
		<div class="clearer"><span></span></div>
	</div>
	<div class="main">		
		<div class="content">
		
		</div>
		<div class="sidenav">
<div id="catalog">
			<h2><span>Kalendar</span></h2>
			<div class="contents">
				<iframe src="kalendar.htm" style="width:202px;padding:0px;margin:0px;left:0px;height:187px;border:solid 1px red;"></iframe>
			</div>
		</div>
		<br/>
		<div id="books_search">
			<h2><span>Web Links</span></h2>
			
		</div>
		</div>
		<div class="clearer"><span></span></div>
	</div>
	<div class="footer">Annisa Dyah Fauzia  &copy;
	</div>
</div>
</body>
</html>