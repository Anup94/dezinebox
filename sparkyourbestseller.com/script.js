	$(document).ready(function(){	   
	var element = $("#html-content-holder"); // global variable
	var getCanvas; // global variable

	   $("#btn-Convert-Html2Image").click( function () {

	        html2canvas(element, {
	        onrendered: function (canvas) {
	               $("#previewImage").append(canvas);
	               getCanvas = canvas;
		
	            }
	        });
			
			
			var imgageData = getCanvas.toDataURL("image/png");
	            
	   // Now browser starts downloading it instead of just showing it
	   var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
	   $(this).attr("download", "templates.png").attr("href", newData);
	
	   });
	     document.getElementById("btn-Convert-Html2Image").click(); 
	   });