<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package peteatthestarclub
 */

get_header();
?>
	<div class="grid_8" id="blog">
		<?php include('blog.php'); ?>
	</div>
	<div class="grid_4">


	<div class="logo" style="margin-bottom:60px; margin-top:60px;">
	<img src="./pete_files/logo.png" alt="Logo">
	</div>



	<div id="social">

	<ul>
	<li><a href="https://www.facebook.com/pages/Pete-At-The-Starclub/116829165140244" target="_blank"><img src="./pete_files/icon_facebook.png" alt="Facebook" width="48" height="48" title="Facebook"></a></li>
	<li><a href="https://twitter.com/petestardust" target="_blank"><img src="./pete_files/icon_twitter.png" alt="Twitter" width="48" height="48" title="Twitter"></a></li>
	<li><a href="https://soundcloud.com/peteatthestarclub/" target="_blank"><img src="./pete_files/icon_soundcloud.png" alt="Soundcloud" width="48" height="48" title="Soundcloud"></a></li>
	<li><a href="https://peteatthestarclub.bandcamp.com/" target="_blank"><img src="./pete_files/icon_bandcamp.png" alt="Bandcamp" width="48" height="48" title="Bandcamp"></a></li>
	<li class="end"><a href="http://www.lastfm.de/music/Pete+at+the+Starclub" target="_blank"><img src="./pete_files/icon_lastfm.png" alt="Last FM" width="48" height="48" title="Last FM"></a></li>
	</ul>

	</div>

	<div class="box">
	<iframe style="border: 0; width: 100%; height: 42px;" src="./pete_files/saved_resource.html" seamless=""><a href="http://peteatthestarclub.bandcamp.com/album/error-lp">Error LP by pete at the starclub</a></iframe>
	</div>


	<div class="box">
	<iframe width="300" height="169" src="./pete_files/gaI8-dOb3o8.html" frameborder="0" allowfullscreen=""></iframe>
	</div>

	<div class="box">
	<h1>Konzerte &amp; Festivals</h1>

	<div style="margin:0; padding:0;">
	<div><iframe name="easyXDM_4340791_5554_provider" id="easyXDM_4340791_5554_provider" class="songkick-widget" src="./pete_files/songkick-widget.html" frameborder="0" style="width: 100%; height: 113px;"></iframe></div>
	<script type="text/javascript" async="" src="./pete_files/ga.js"></script><script src="./pete_files/widget.js"></script>
	</div>

	<p>Weitere Konzerte oder Festivals folgen.</p>

	</div>


	<div class="box">
	<h1>Bandinfo Download</h1>
	<p>Pete At The Starclub ist ein Post-Punk-Quintett aus Hamburg. Gegründet 2001, gemacht für die Ewigkeit.</p>
	<p>Weitere Bandinfos zum <a href="http://www.peteatthestarclub.de/download/Presskit.zip" target="_blank" title="Presskit Download">Download</a></p>
	</div>


<div class="clear"></div>


<div>
<h1>Kontakt &amp; Booking</h1>

<table width="300" border="0" cellspacing="0"><tbody><tr><td>pete at the starclub<br>
	c/o Christian Klindworth  <table width="300" border="0" cellspacing="0">
  <tbody><tr></tr>
  <tr>
    <td>E-Mail</td>
    <td>chrischi_stardust@gmx.de</td>
  </tr>
  <tr>
    <td>Tel.</td>
    <td>040.50030034</td>
  </tr>
  <tr>
    <td>Mobil</td>
    <td>0152.23058620</td>
  </tr>
</tbody></table></td>
  </tr>
</tbody></table>
</div>


<div class="box">
<h1>Bildmaterial</h1>
<p><img src="./pete_files/bandfoto_pats_tillpetersen.jpg" alt="Pete At The Starclub © Till Petersen" width="300" height="200"></p>
<p>Weitere Bilder zum <a href="http://www.peteatthestarclub.de/download/Presskit.zip" target="_blank" title="Presskit Download">Download</a></p>
</div>


</div>  
  <div class="clear"></div>


<div class="grid_12" style="padding-top:20px;">

<p style="text-align:center;"><a href="http://peteatthestarclub.de/impressum.html">Impressum</a></p>

</div>
<!-- end .grid_12 -->
<div class="clear"></div>

 
</div>
<!-- end .container_12 -->

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36385486-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- GOOGLE ANALYTICS -->


<?php
get_sidebar();
get_footer();
