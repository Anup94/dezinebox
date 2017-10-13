$("#next_book_section").click(function()  {


	
     

 	$("#yk_button_panel_bottom_1").removeClass("active");
 	$("#yk_button_panel_bottom_1 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_2").addClass("active");
	$("#yk_button_panel_bottom_2 img").addClass("invert");

	$("#tab1").css('display','none');


	$("#tab2").css('display','block');
   
});




$("#yk_button_panel_bottom_2").click(function()  {

 	$("#yk_button_panel_bottom_1").removeClass("active");
 	$("#yk_button_panel_bottom_1 img").removeClass("invert");
 	$("#yk_button_panel_bottom_3").removeClass("active");
 	$("#yk_button_panel_bottom_3 img").removeClass("invert");
 	$("#yk_button_panel_bottom_4").removeClass("active");
 	$("#yk_button_panel_bottom_4 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_2").addClass("active");
	$("#yk_button_panel_bottom_2 img").addClass("invert");

	$("#tab1").css('display','none');
	$("#tab3").css('display','none');
	$("#tab4").css('display','none');




    
	
    var idname = $('img.bookcover.active').attr("src");
    if(!(idname)==""){
	$("#error_book_notselected").css('display','none');
	var bookname = $('img.bookcover.active').attr("src"); 

	 var newSrc= bookname ;
            $("#book_tab2_photo").attr('src', newSrc);
            $("#book_tab4_photo").attr('src', newSrc);


     }else{
     	$("#book_tab2_photo").attr('src', "aasa");
            $("#book_tab4_photo").attr('src', "asaa");
            $("#error_book_notselected").css('display','block');

     }





	$("#tab2").css('display','block');
   
});





$("#prev_book_section").click(function()  {

 	$("#yk_button_panel_bottom_2").removeClass("active");
 	$("#yk_button_panel_bottom_2 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_1").addClass("active");
	$("#yk_button_panel_bottom_1 img").addClass("invert");

	$("#tab2").css('display','none');

	
	$("#tab1").css('display','active');
   
});



$("#yk_button_panel_bottom_1").click(function()  {

 	$("#yk_button_panel_bottom_2").removeClass("active");
 	$("#yk_button_panel_bottom_2 img").removeClass("invert");
 	$("#yk_button_panel_bottom_3").removeClass("active");
 	$("#yk_button_panel_bottom_3 img").removeClass("invert");
 	$("#yk_button_panel_bottom_4").removeClass("active");
 	$("#yk_button_panel_bottom_4 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_1").addClass("active");
	$("#yk_button_panel_bottom_1 img").addClass("invert");

	$("#tab2").css('display','none');
	$("#tab3").css('display','none');
	$("#tab4").css('display','none');

	
	$("#tab1").css('display','block');
   
});





$("#yk_button_panel_bottom_3").click(function()  {

 	$("#yk_button_panel_bottom_1").removeClass("active");
 	$("#yk_button_panel_bottom_1 img").removeClass("invert");
 	$("#yk_button_panel_bottom_2").removeClass("active");
 	$("#yk_button_panel_bottom_2 img").removeClass("invert");
 	$("#yk_button_panel_bottom_4").removeClass("active");
 	$("#yk_button_panel_bottom_4 img").removeClass("invert");

 
	$("#yk_button_panel_bottom_3").addClass("active");
	$("#yk_button_panel_bottom_3 img").addClass("invert");

	$("#tab3").css('display','block');

	
	$("#tab1").css('display','none');
   	$("#tab2").css('display','none');
   	$("#tab4").css('display','none');
});




$("#prev_book_section3").click(function()  {


	
     

 	$("#yk_button_panel_bottom_3").removeClass("active");
 	$("#yk_button_panel_bottom_3 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_2").addClass("active");
	$("#yk_button_panel_bottom_2 img").addClass("invert");

	$("#tab3").css('display','none');

	
	$("#tab2").css('display','block');
   
});



$("#next_book_section1").click(function()  {

 	$("#yk_button_panel_bottom_1").removeClass("active");
 	$("#yk_button_panel_bottom_1 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_2").addClass("active");
	$("#yk_button_panel_bottom_ img").addClass("invert");

	$("#tab1").css('display','none');

	
	$("#tab2").css('display','block');
   
});



$("#prev_book_section1").click(function()  {

 	$("#yk_button_panel_bottom_2").removeClass("active");
 	$("#yk_button_panel_bottom_2 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_1").addClass("active");
	$("#yk_button_panel_bottom_1 img").addClass("invert");

	$("#tab2").css('display','none');

	
	$("#tab1").css('display','block');
   
});

$("#prev_book_section2").click(function()  {

 	$("#yk_button_panel_bottom_3").removeClass("active");
 	$("#yk_button_panel_bottom_3 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_2").addClass("active");
	$("#yk_button_panel_bottom_2 img").addClass("invert");

	$("#tab3").css('display','none');

	
	$("#tab2").css('display','block');
   
});


$("#next_book_section2").click(function()  {

 	$("#yk_button_panel_bottom_2").removeClass("active");
 	$("#yk_button_panel_bottom_2 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_3").addClass("active");
	$("#yk_button_panel_bottom_3 img").addClass("invert");

	$("#tab2").css('display','none');

	
	$("#tab3").css('display','block');
   
});

$("#next_book_section3").click(function()  {
 	$("#yk_button_panel_bottom_3").removeClass("active");
 	$("#yk_button_panel_bottom_3 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_4").addClass("active");
	$("#yk_button_panel_bottom_4 img").addClass("invert");

	$("#tab3").css('display','none');

	
	$("#tab4").css('display','block');
   
});





$("#prev_book_section4").click(function()  {

 	$("#yk_button_panel_bottom_4").removeClass("active");
 	$("#yk_button_panel_bottom_4 img").removeClass("invert");
 
	$("#yk_button_panel_bottom_3").addClass("active");
	$("#yk_button_panel_bottom_3 img").addClass("invert");

	$("#tab4").css('display','none');

	
	$("#tab3").css('display','block');
   
});
$("#yk_button_panel_bottom_4").click(function()  {

 	$("#yk_button_panel_bottom_1").removeClass("active");
 	$("#yk_button_panel_bottom_1 img").removeClass("invert");
 	$("#yk_button_panel_bottom_2").removeClass("active");
 	$("#yk_button_panel_bottom_2 img").removeClass("invert");
 	$("#yk_button_panel_bottom_3").removeClass("active");
 	$("#yk_button_panel_bottom_3 img").removeClass("invert");

 
	$("#yk_button_panel_bottom_4").addClass("active");
	$("#yk_button_panel_bottom_4 img").addClass("invert");

	$("#tab4").css('display','block');

	
	$("#tab1").css('display','none');
   	$("#tab2").css('display','none');
   	$("#tab3").css('display','none');
});
