<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>@yield('title')</title>

<!--STYLESHEETS-->


<!--SCRIPTS-->

<!--Slider-in icons-->
<link type="text/css" rel="stylesheet" href="/materialize-css/css/css.css"  media="screen,projection"/>
<link type="text/css" rel="stylesheet" href="/materialize-css/css/materialize.css"  media="screen,projection"/>
@yield('css')
<style media="screen">

nav
{
  background:rgba(0,0,0,0.7);
}
nav.li.tab{
        color: cornflowerblue;
}
</style>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="/main" class="brand-logo">IIITDMJ-Medi Box</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="right hide-on-med-and-down" >
           <li><a href="#" class="white-text"><tab><b>Hi ! {{ $_SESSION['firstname'] }} </b></tab> </a></li>
           <li><a href="/user_status" class="white-text"><b>History</b></li>
           <li><a href="/logout" class="white-text"><b> Logout</b></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/projects">Projects</a></li>
        <li><a href="/notessharing">Notes</a></li>
        <li><a href="/forum">Forum</a></li>
        <li><a href="#">Mobile</a></li>
      </ul>
    </div>
  </nav>
    @yield('body')
    @yield('footer')
</body>
<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/materialize.min.js"></script>

<script>
$(document).ready(function() {
  $('select').material_select();
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
$('.modal-trigger').leanModal();

});
</script>
<script type="text/javascript">
  $(document).ready(function() {
  $("#search_box").keyup(function(){
          $("#search_box").css("background","#F0F0F0");
          $.ajax({
          type: "GET",
          url: "gethint.php",
          data:'keyword='+$(this).val(),
          beforeSend: function(){

          },
          success: function(data){

            $("#suggesstion_box").show();
            $("#suggesstion_box").html(data);
          }
        });
      });
    });
</script>
<script type="text/javascript">
    $document().ready(function() {
 // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
            });
        </script>
<script type="application/javascript">
    $(document).ready(function()
                     {
        $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );
    }  );

            
            
    </script>
</html>
