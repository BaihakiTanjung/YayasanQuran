<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>eBusiness Bootstrap Template - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    {{-- Style --}}
    @include('includes.style')

</head>

<body data-spy="scroll" data-target="#navbar-example">

  {{-- Header --}}
  @include('includes.header')

  {{-- Slider --}}
  @include('includes.slider')

    {{-- Content --}}
    @yield('content')

   {{-- Footer --}}
   @include('includes.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

{{-- Script --}}
@include('includes.script')

</body>

</html>
