<!DOCTYPE html>
<html lang="en">

@include('includes.header')
<body id="new">
@include('includes.sideleft')
@include('Customer.customer')
  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="Tonkho.js" type='text/javascript'></script>
  <script>
    $('.sidebar-menu').SidebarNav()
  </script>
  <script type="text/javascript">


 
// js khác

$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
  $('.nav-tabs a').on('shown.bs.tab', function(event){
    var x = $(event.target).text();         // active tab
    var y = $(event.relatedTarget).text();  // previous tab
    $(".act span").text(x);
    $(".prev span").text(y);
  });
});
</script>
</body>
</html>