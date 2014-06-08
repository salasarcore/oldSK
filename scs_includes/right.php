
 <script type="text/javascript" src="js/cycle-plugin.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	
	$('#fade').cycle();
	});

</script>
<div class="five columns">
<script>
 var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 80,
                max_rows: 3,
                duration: 4000,
                prevButton: $('#nt-example1-prev'),
                nextButton: $('#nt-example1-next')
            });
			</script>

	<div class='block clearfix'>
		<div class="block_head_blue"> <h2>News / Announcement</h2></div>
<marquee behavior="scroll" direction="up">
	    <div class="block-text">
		
			<i class="fa fa-arrow-up" id="nt-example1-prev"></i>
		                <ul id="nt-example1">
		                </ul>
		                <i class="fa fa-arrow-down" id="nt-example1-next"></i>
		</div>
</marquee>
	

	</div>
	<div class='block clearfix'>
		<div class="block_head_orange"> <h2>Image Gallery</h2></div>
	    <div class="block-text">
		  <div id="fade">
	<div>	
<a href="gallery.php"><img src="gallery/a/2278t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/a/2466t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/a/2466t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/a/2559t.jpg" width="145" height="93"/></a>

</div>
<div>	
<a href="gallery.php"><img src="gallery/b/2503t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/b/2515t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/b/2546t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/b/2580t.jpg" width="145" height="93"/></a>

</div>
<div>	
<a href="gallery.php"><img src="gallery/c/2292t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/c/2298t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/c/2312t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/c/2322t.jpg" width="145" height="93"/></a>

</div>
<div>	
<a href="gallery.php"><img src="gallery/d/2368t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/d/2382t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/d/2397t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/d/2417t.jpg" width="145" height="93"/></a>

</div>
<div>	
<a href="gallery.php"><img src="gallery/d/2368t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/d/2382t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/d/2397t.jpg" width="145" height="93"/></a>
<a href="gallery.php"><img src="gallery/d/2417t.jpg" width="145" height="93"/></a>
</div>
</div>
			<div class="img_gallery" id="img_gallery1" ></div>
		</div>
	
	</div>
</div><!-- container-->
<script>
	/*	$.ajaxSetup({async: false});
	    $.ajax({
		    
	    	type: "GET",
	    	async: false, 
	    	url:"http://skt.salasaredu.com/api/galleryfront.php",
	    	dataType: 'json',

		    success: function(html){
		    	if(html.count==0)
		    	{
		    		$("#img_gallery1").append("<div style='text-align:center;padding-top:3px;padding-bottom:3px;'>No Images Found</div>");
		    	}
		    	else {
		    	for(i=0;i<html.count;i++){
		    	$("#img_gallery1").append("<a title='"+html.gallery_name[i]+"' href='http://skt.salasaredu.com/gallery_show.php?gallery="+html.gallery_id[i]+"'><img width='50px' height='50px'  title='"+html.gallery_name[i]+"' src='http://"+html.imgPath[i]+"'></a>");
		    	}
		    	}
		    	
			}
   		});*/

		var countrec=0;
	    $.ajax({
	    	type: "GET",
	    	async: false, 
	    	url:"http://skt.salasaredu.com/api/news_listfrntend.php",
	    	dataType:"JSON",
		    success: function(html){

		    	if(html.count==0)
		    	{
		    		$("#nt-example1").append("<div style='text-align:center;padding-top:3px;padding-bottom:3px;'>No News Found</div>");
		    	}
		    	else {
			    if(html.count>5)
				    countrec=5;
			    else
				    countrec=html.count;
			    
		    	for(i=0;i<countrec;i++){
		    		
		    	$("#nt-example1").append("<li><a title='"+html.subject[i]+"' href='http://skt.salasaredu.com/news.php'>"+html.subject[i]+"</a></li>");
		    	}
		    	}
			}
   		});
			 
		</script>