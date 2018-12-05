<!doctype html>
<html lang="en">
@include('partials.header')
@include('partials.navbar')
@include('partials.message')
  <body>     
    
    @yield('content')

  </body> 
@include('partials.footer')
@include('partials.script')
</html>