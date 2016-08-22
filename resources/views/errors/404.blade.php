
<!DOCTYPE html>

<html lang="en">

<head>
  <title>Jackrabbit Design | Graphic Design &amp; Web Design | Boston, MA</title>

  <link type="text/css" rel="stylesheet" media="all" href="https://www.jumpingjackrabbit.com/ui/css/plax.css" />
  <!--[if lt IE 9]>
  <style type="text/css">
    .download { background: #011A30; }
  </style>
  <![endif]-->
</head>
<body>

<div id="parallax">
  <div id="sky"><img src="https://www.jumpingjackrabbit.com/ui/images/bg_moon.gif" /></div>
  <div id="mountains"></div>
  <div id="trees"></div>
  <div id="rabbit">
  </div>
  <div id="hill"></div>
  <div id="sign"></div>
  <div id="content">
    <div id="content404">
      <h2>Whoops!</h2>
      <p style="color: #fff;">You seem to have stumbled off the beaten path.<br />
        Perhaps you should head <a href="/">home</a>?</p>
      <p><a href="#" class="downloadlink">Download image as wallpaper</a></p>
      <div class="download"><a href="https://www.jumpingjackrabbit.com/wallpapers/JRD-SnowMonster-1920x1200.jpg" target="_blank">1920x1200</a> <a href="https://www.jumpingjackrabbit.com/wallpapers/JRD-SnowMonster-1600x1200.jpg" target="_blank">1600x1200</a> <a href="https://www.jumpingjackrabbit.com/wallpapers/JRD-SnowMonster-1280x1024.jpg" target="_blank">1280x1024</a> <a href="https://www.jumpingjackrabbit.com/wallpapers/JRD-SnowMonster-1024x768.jpg" target="_blank">1024x768</a> <a href="https://www.jumpingjackrabbit.com/wallpapers/JRD-SnowMonster-iPhone.jpg" target="_blank">iPhone</a></div>
    </div>
  </div>
</div>




<script src="https://www.jumpingjackrabbit.com/ui/js/jquery.js"></script>

<script src="https://www.jumpingjackrabbit.com/ui/js/plax.js"></script>
<script type="text/javascript">

  jQuery(document).ready(function(){
    $('#sky').plaxify({"xRange":10,"yRange":0})
    $('#mountains').plaxify({"xRange":25,"yRange":2})
    $('#trees').plaxify({"xRange":40,"yRange":8})
    $('#rabbit').plaxify({"xRange":55,"yRange":14})
    $('#hill').plaxify({"xRange":90,"yRange":40})
    $('#sign').plaxify({"xRange":185,"yRange":80})
    $('#content').plaxify({"xRange":55,"yRange":14})
    $.plax.enable();
    $('.downloadlink').click(function(e){
      e.preventDefault();
      $('.download').slideDown();
    });
  });
</script>
</body>
</html>
