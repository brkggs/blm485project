<!doctype html>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.mapbox.js"></script>
<script type="text/javascript" src="Scripts/jquery.mousewheel.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/mapbox.css">
</head>
<body>
    <div class="mapwrapper">
    <div id="viewport">
      <div style="background: url(images/layer9.jpg) no-repeat; width: 2592px; height: 1944px;"> 
      </div> 
      <div style="height: 2592px; width: 1944px;"> 
          <img src="images/layer10.jpg" alt="" /> 
      </div> 
      <div style="height: 2592px; width: 1944px;"> 
          <img src="images/layer11.jpg" alt="" /> 
      </div> 
      <div style="height: 2592px; width: 1944px;"> 
          <img src="images/layer12.jpg" alt="" /> 
      </div> 
    </div>
</div>
    <script type="text/javascript"> 
    $(document).ready(function() { 
        $("#viewport").mapbox({mousewheel: true});
    }); 
</script>
</body>
</html>