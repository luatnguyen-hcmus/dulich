<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="js cssgradients supports no-touchevents cssanimations csspseudoanimations flexbox flexboxlegacy no-flexboxtweener flexwrap csstransforms3d csstransforms preserve3d csstransitions csspseudotransitions js-ready" lang="en-US" prefix="og: http://ogp.me/ns#" style=""> <!--<![endif]-->
<head>		<?php $this->load->view('site/head.php');?>
	</head>
	<body class=" page-template-default page page-id-85 has-fixed-head" style="background-image: url('<?php echo public_url('site/images/whyus.png') ?>')">
	  	<!-- the wraper -->
      	<div id="outer-wrap">
            <div id="inner-wrap">
    	        <!-- the header -->
    		   <header>
    		      	<?php $this->load->view('site/header.php');?>
    		    </header>
		      		<?php if(isset($message)) : ?>
		      			<p style="color:red;"><?php echo $message; ?></p>
		      		<?php endif?>
		      		<?php $this->load->view($temp, $this->data);?>
    		  	<footer class="site-footer l-section--lg">
    		   		<?php $this->load->view('site/footer.php');?>
                </footer>
    	</div>
</div>


<!-- DO NOT COPY THIS SNIPPET! &mdash; HubSpot Identification Code -->
<script type="text/javascript">
(function(d,w) {
w._hsq = w._hsq || [];
w._hsq.push(["setContentType", "standard-page"]);
})(document, window);
</script>
<!-- End of HubSpot Identification Code &mdash; DO NOT COPY THIS SNIPPET! -->

<!-- Start of Async HubSpot Analytics Code for WordPress v1.2.1 -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/1546585.js"></script>
<!-- End of Async HubSpot Analytics Code -->
<script type='text/javascript'>
/* <![CDATA[ */
var leadin_wordpress = {"userRole":"visitor","pageType":"home","leadinPluginVersion":"6.1.4"};
/* ]]> */
</script>
<script type='text/javascript' async defer src='//js.hs-scripts.com/1546585.js?ver=4.7.3'></script>
<script type='text/javascript' src='http://www.eldoradostone.com/wp-content/themes/elevator/assets/dist/js/plugins.min.js?ver=1524488438'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ELEV = {"siteUrl":"http:\/\/www.eldoradostone.com","directoryUrl":"http:\/\/www.eldoradostone.com\/wp-content\/themes\/elevator","selectorResultsUrl":"http:\/\/www.eldoradostone.com\/product-selector\/results\/"};
/* ]]> */
</script>

<script type='text/javascript' src='//s7.addthis.com/js/300/addthis_widget.js?ver=4.7.3#pubid=ra-56b4ed7e90a4d66b' async="async"></script>
<script type='text/javascript' src='http://www.eldoradostone.com/wp-includes/js/wp-embed.min.js?ver=4.7.3'></script>

<script type='text/javascript' src='<?php echo public_url('site/js/main.min.js')?>' ></script>
<script>
window.onload = function() {
    var els = document.querySelectorAll("textarea.pattern");
    Array.prototype.forEach.call(els, function(el) {
        var id = el.id;
        var editor = CodeMirror.fromTextArea(document.getElementById(id), {
            lineNumbers: true,
            lineWrapping: true,
            mode: "htmlmixed"
        });
    });
};
</script>
<script>
jQuery(document).ready(function() {
    jQuery('.ui.selection.dropdown').dropdown();
    jQuery('.ui.menu .ui.dropdown').dropdown({
        on: 'hover'
    });
});
</script>

</body>
</html>

