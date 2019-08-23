<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.header')
<link rel="stylesheet" href="{{ asset('/css/dieuhanh.css') }}" media="all">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="{{ asset('/js/jquery-ui.js') }}"></script>
</head>
<body id="new">
@include('includes.sideleft')
@include('DieuHanh.get_all')

</body>
</html>