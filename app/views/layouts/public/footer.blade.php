
<footer class="footer">
<p class="text-center text-muted">
<small>{{ HTML::link('/', 'Home')}} | {{ HTML::link('about', 'About')}} | {{ HTML::link('resources', 'Resources')}}| {{ HTML::link('contact', 'Contact')}}</small><br/>
&copy; CloudCardiology <?php echo date("Y", time()); ?><br/>
Designed and Developed <span class="glyphicon glyphicon-hand-right"></span>
CloudCardiology</p>
</footer>

</section> <!-- /container -->
{{ HTML::script('assets/source-fancybox/jquery.fancybox.js?v=2.1.5') }}
{{ HTML::script('assets/source-fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/script.js') }}

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45586188-1', 'cloudcardiology.com.au');
  ga('send', 'pageview');
</script>
   

