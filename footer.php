<?php if (!is_page_template($template = "landing-page.php")) { 
  include "partials/cip-footer.php";
}
?>
</div>
<script>
  
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25178193-2', 'auto');
  ga('require', 'linkid', 'linkid.js');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script async>
$('#pull').on('click', function() {
  ga('send', 'event', 'nav', 'open');
});
$('#pull_active').on('click', function() {
  ga('send', 'event', 'nav', 'close');
});
$('#phoneHeaderLink').on('click', function() {
  ga('send', 'event', 'call', 'callTop');
});
$('#phoneHeaderMobile').on('click', function() {
  ga('send', 'event', 'call', 'callTopMobile');
});
$('#carouselPatents').on('click', function() {
  ga('send', 'event', 'links', 'patentsCarousel');
});
$('#patentMobile').on('click', function() {
  ga('send', 'event', 'links', 'patentMobile');
});
$('#trademarkMobile').on('click', function() {
  ga('send', 'event', 'links', 'tademarkMobile');
});
$('#contactMobile').on('click', function() {
  ga('send', 'event', 'links', 'contactMobile');
});
$('#patentsSidebar').on('click', function() {
  ga('send', 'event', 'links', 'patentsSidebar');
});
$('#trademarkSidebar').on('click', function() {
  ga('send', 'event', 'links', 'trademarkSidebar');
});
$('#contactSidebar').on('click', function() {
  ga('send', 'event', 'links', 'contactSidebar');
});
$('#callContactSidebar').on('click', function() {
  ga('send', 'event', 'call', 'callContactSidebar');
});
$('#callContactMobile').on('click', function() {
  ga('send', 'event', 'call', 'callContactMobile');
});
</script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script async src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script async src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
-------------------------------------------------- -->
<script async type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1010345947;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script async type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1010345947/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
<script type="text/javascript" src="//cdn.callrail.com/companies/762212398/3c6b88816b4295c61173/12/swap.js"></script> 
</body>
</html>