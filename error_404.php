<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>Error 404 - page not found!</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="<?php echo PATH_JS ?>jquery-2.1.4.js"></script>
<script src="<?php echo PATH_CSS ?>style.css"></script>
<script type="text/javascript">


$(document).ready(function() {
	
	var img = $('.image');
if (img.length > 0) {
    var offset = img.offset();

    function mouse(evt) {
        var center_x = (offset.left) + (img.width() / 2);
        var center_y = (offset.top) + (img.height() / 2);
        var mouse_x = evt.pageX;
        var mouse_y = 1;

        var radians = Math.atan2(center_x - mouse_x, center_y - mouse_y);
        var degree = ((radians * (180 / Math.PI) * -1));
        degree = degree / 2.5;

        img.css('-moz-transform', 'rotate(' + degree + 'deg)');
        img.css('-webkit-transform', 'rotate(' + degree + 'deg)');
        img.css('-o-transform', 'rotate(' + degree + 'deg)');
        img.css('-ms-transform', 'rotate(' + degree + 'deg)');


    }
    $(document).mousemove(mouse);
}
     
});




</script>
<style type="text/css">
html,body {
}
@font-face {
  font-family: 'Oxygen';
  font-style: normal;
  font-weight: 400;
  src: local('Oxygen'), local('Oxygen-Regular'), url(http://fonts.gstatic.com/s/oxygen/v5/78wGxsHfFBzG7bRkpfRnCQ.woff2) format('woff2'), url(http://fonts.gstatic.com/s/oxygen/v5/RzoNiRR1p2Mqyyz2RwqSMw.woff) format('woff');
}
#apDiv1 {
    position:absolute;
    width:99%;
    height:500px;
    z-index:1;
    text-align:center;	
	background-image:url(assets/img/404_bg.jpg);
	background-repeat:no-repeat;
	background-position:50% 0;
	margin:60px 0 0 0;
	padding-top:60px;
}
.text { font-family: 'Oxygen', sans-serif; font-size:34px; padding:100px 0 0 0;}
.text a { text-decoration: none; }
</style>
</head>



<script type="text/javascript">
    function goback() {
        history.back(-1)
    }
</script>


<body>
<div id="apDiv1">
    <img style="transform: rotate(-19.6677deg);" src="<?php echo PATH_IMAGE?>hkopf.png" class="image">
    <div class="text"><a href="javascript:goback()">Page not found ... click to go back</a></div>
</div>



</body></html>