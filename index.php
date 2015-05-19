<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style type="text/css">
body {
margin:0px;
padding:0px;
border:0px;
font-family: 'Jacques Francois', serif;
}
#container {
width: 100%;
height: 100%;
text-align: center;
display: table;
vertical-align: middle;
}
#pootin {
position: relative;
margin: 10px;
padding: 25px;
display: table-cell;
vertical-align: middle;
}
img.background {
z-index:999;
box-shadow: 1px 1px 5px #000;
}
#pootin h1 {
font-family: 'Jacques Francois', serif;
z-index:2;
font-size:40px;
color:#000;
text-shadow: 1px 2px 2px #7C7272;
text-align:center;
margin-left: 20%;
margin-right: 20%;
}
p.bottom {
display: block;
position: absolute;
left: 15px;
bottom: 0px;
font-family: 'Jacques Francois', serif;
font-size:12px;
}

#dvLoading
{

   height: 100px;
width: 100px;
   position: fixed;
   z-index: 998;
   left: 50%;
   top: 50%;
   margin: -25px 0 0 -25px;
}


</style>
<link href='http://fonts.googleapis.com/css?family=Jacques+Francois' rel='stylesheet' type='text/css'>
</head>
<body style="background-color:#fff;">
<div id="container">
<form action="display.php" method="get">
<input type="text" name="styleurl" placeholder="Site Style">
<input type="text" name="contenturl" placeholder="Site Content">
<input type="submit">
</form>


</div>
</body>
</html>