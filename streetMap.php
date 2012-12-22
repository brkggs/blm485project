<!--<!DOCTYPE html>
<html>
<head>
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <link rel="styleshhet" type="text/css" href="CSS/street.css"  ></link>
  <script>
  $(document).ready(function() {
    $("#draggable").draggable();
    //$("#draggable2").draggable();
    //$( "#draggable" ).draggable({ axis: "x" });
    $( "#draggable" ).draggable({ cursor: "crosshair" });
   $( "#draggable" ).draggable({ handle: "h2" });
//   $( "#draggable" ).draggable({ revert: true });
//   $( "#draggable" ).draggable({ revertDuration: 5000 });
   $( "#draggable" ).draggable({ scroll: false });
   $( "#draggable").draggable({ zIndex: 2700 });
   $( "#draggable2" ).slider({ disabled: true });
   
  
  });
  </script>
</head>
<body>

<div id="wrapper">
    <div id="draggable"> <img src="images/banner.jpg"></img> </div>
     <div id="draggable"><img src="images/banner.jpg"></img> </div>
     
    <div id="draggable2"><img src="images/banner.jpg"></img> </div>
        

    
</div>

</body>
</html>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
KONU:BLM 489 PROJE
BEKLENEN: HARİTA İLE SOKAK ANİMASYONU (RESİM KULLANILACAKTIR)
GELİŞTİRİCİLER: BURAK GÖGÜS
				EMRE TÜTEK
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>E&B GROUP BİLİŞİM TEKNOLJİLERİ LTD.</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" type="text/css" href="CSS/street_map.css" />
                <script type="text/javascript" src="Scripts/jquery_1.8.2.js"></script>
                <script type="text/javascript" src="Scripts/jquery-ui-1.9.1.custom.js"></script>
                <script type="text/javascript" src="Scripts/jquery.overscroll.js"></script>
                <script type="text/javascript" src="Scripts/jquery.overscroll.min.js"></script>
                <script src="http://code.jquery.com/jquery-latest.js"></script>
                
<!--                <script>
                        $(document).ready(function() {
//                          $(".col2").draggable();
//                          //$("#draggable2").draggable();
//                          //$( "#draggable" ).draggable({ axis: "x" });
//                          $( ".col2" ).draggable({ cursor: "crosshair" });
//                         $( ".col2").draggable({ handle: "h2" });
//                      //   $( "#draggable" ).draggable({ revert: true });
//                      //   $( "#draggable" ).draggable({ revertDuration: 5000 });
//                        // $( ".col2" ).draggable({ scroll: false });
//                        // $( ".col2").draggable({ zIndex: 2700 });
//                         $( "#draggable2" ).slider({ disabled: true });
                        (".col2").overscroll();


                        });
                </script>-->
<!--                <script type="text/javascript">
                    $(document).ready(function() {
                      // sets draggable the elements with id="im"
                      $('.tab1').draggable({
                      //  cursor: 'move',        // sets the cursor apperance
                        containment: 'parent',    // sets to can be dragged only within "#drg" element
                         iframeFix: true,
                         scrollSensitivity: 100,
                         scrollSpeed: 100
                      });
                       $('.tab1').draggable({ cursor: 'crosshair' });
//                       $('.tab1').overflowScrolling({
//                           wheelDirection: vertical,
//                           scrollLeft:true
//                        
//                       });
                       

                    });
                
                    </script>-->
<!--                <script type="text/javascript">
         
                    $(".tab1").bind("dragmove",function (ev,drag){
                        if(drag.location.top()<100){
                            ev.preventDefault()
                        }
                    });
                </script>-->
                
                	<script>
		$(function(o){
			o = $(".tab1").overscroll({
				cancelOn: '.no-drag',
				//hoverThumbs: true,
				//persistThumbs: true,
				//showThumbs: false,
				scrollLeft: 200,
				scrollTop: 100
			}).on('overscroll:dragstart overscroll:dragend overscroll:driftstart overscroll:driftend', function(event){
				console.log(event.type);
			});
			$("#link").click(function(){
				if(!o.data("dragging")) {
					console.log("clicked!");
				} else {
					return false;
				}
			});
		});
	</script>

                
                
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<h1>e&amp;B </h1>
				</div>
			  <div id="menu">
				<ul>
						<li class="first current_page_item"><a href="index.php">Ana sayfa</a></li>

						<li><a href="#">ÜRÜNLER</a></li>
						<li><a href="#">HABERLER</a></li>
						<li><a href="hakkimizda.php">HAKKIMIZDA</a></li>
				  </ul>
				</div>
			</div>
			<div id="inner">
			  <div id="page">
			  <div id="content">
						<div class="box">
							<h2>E&B GRUP </h2>
						  <p>
                                                        <img class="image alignleft" src="images/pic1.jpg" width="215" height="150" alt="" />
                                                        //** PHP İLE VERİLER ÇEKİLECEK **//
                                                  </p>
						
                                                        <p>
                                                            <?php echo"  //** RESİMİ DE PHP İLE ALABİLİRİZ **//" ?><br class="clearfix" />
                                                           
                                                        </p>
                        </div>
			    <div class="box col2">
					    <h3>Sokak AnİMASYONU</h3>
							
                                                        <table class ="tab1">
                                                            <tr>
                                                                <td><img class="image aligntop" src="images/banner.jpg" width="430" height="155" alt=""  /></td>
                                                                <td>asdasd</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img class="image aligntop" src="images/banner.jpg" width="430" height="155" alt=""  /></td>
                                                                <td>asdasd</td>
                                                            </tr>
                                                                                                                        <tr>
                                                                <td><img class="image aligntop" src="images/banner.jpg" width="430" height="155" alt=""  /></td>
                                                                <td>asdasd</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img class="image aligntop" src="images/banner.jpg" width="430" height="155" alt=""  /></td>
                                                                <td>asdasd</td>
                                                            </tr>
                                                        </table>
						</div>
						<br class="clearfix" />
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
		&copy; 2012 E&amp;B GROUP BİLİŞİM TEKNOLOJİLERİ LTD. | HER HAKKI SAKLIDIR.</div>
	</body>
</html>
