{config_load file="me.conf" section="setup"}
{include file="_files/_header_default.tpl" title=foo}
<div id="container"> 
	<div id="content" style="position: relative" class="clearfix"> 
    <div id="column1" class="column"> 
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix default "> 
	
							<h2 class="title">News
							</h2> 
						<div id="article-archive"> 
 
 
<h2>Last week</h2> 
<ul> 
{$ARTICLE_LIST} 
</ul> 
 
<a href="/articles/archive">More news &raquo;</a> 
</div> 
	
						
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
</div> 
<div id="column2" class="column"> 
			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix notitle "> 
	
							
						<div id="article-wrapper"> 
	<h2>{$A_ARTICLE_TITLE}</h2> 
	<div class="article-meta">Posted Aug 12, 2011 
		<a href="/articles/category/competitions">Category</a></div> 
	
			<img src="{$A_ARTICLE_IMAGE}" class="article-image"/> 
	<p class="summary">{$A_SUMMARY}</p> 
	
	<div class="article-body"> 
<p>{$A_ARTICLE_CONTENT}</p>	
	
	
	<div class="article-images clearfix"> 
	</div> 
 
	    <div class="article-body"><!-- Facebook Like, Send and Comments code BEGIN -->

<div style="position: absolute; top:40px; left:610px;">

<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" ></script>

<fb:like href="http://www.habbo.com/articles/2570-this-way-to-new-friends" layout="button_count" send="true" width="450" show_faces="false" font=""></fb:like>

</div>







<p><img alt="comHeads" border="0" width="126" height="47" src="http://images.habbo.com/c_images/article_images_us/article_staffHeads_00.gif" align="right" hspace="4"><font face="Verdana" size="1"><b>- {$A_AUTHOR}</b></p><br><br>













<!--     <fb:comments href="http://www.habbo.com/articles/2570-this-way-to-new-friends" num_posts="2" width="500"></fb:comments> <br>   -->



<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fapps%2Fapplication.php%3Fid%3D183096284873&amp;width=500&amp;colorscheme=light&amp;show_faces=false&amp;border_color&amp;stream=false&amp;header=true&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:62px;" allowTransparency="true"></iframe>



<!-- Facebook Like, Send and Comments code END --></div> 

 
 
 
	<script type="text/javascript" language="Javascript"> 
		document.observe("dom:loaded", function() {
			$$('.article-images a').each(function(a) {
				Event.observe(a, 'click', function(e) {
					Event.stop(e);
					Overlay.lightbox(a.href, "Image is loading");
				});
			});
			
			$$('a.article-{$A_ID}').each(function(a) {
				a.replace(a.innerHTML);
			});
		});
	</script> 
	</div> 
</div> 
	
							
						
							
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
</div> 
<script type="text/javascript"> 
HabboView.run();
</script> 
<div id="column3" class="column"> 
			     		
				<div class="habblet-container ">		
	
						
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
			     		
				<div class="habblet-container ">		
	
						<div class="ad-container"> 
<!-- Ad Container --> 
</div> 
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
</div> 
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]--> 
    </div>


{include file="_files/_footer_default.tpl" title=foo}