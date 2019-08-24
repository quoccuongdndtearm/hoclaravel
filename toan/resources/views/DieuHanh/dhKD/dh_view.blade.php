<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.header')
<link rel="stylesheet" href="{{ asset('/css/dieuhanh.css') }}" media="all">
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

</head>
<body id="new">
@include('includes.sideleft')
@include('DieuHanh.dhKD.get_all')

  <script type="text/javascript">

    $( function() {
      $( ".droptrue" ).sortable({
        connectWith: "#sortable1, #sortable3"
      });

    } );
</script>
   <script>
    $('.sidebar-menu').SidebarNav()
  </script>

</body>
</html>