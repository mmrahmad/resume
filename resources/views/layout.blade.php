<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
@include('nav')
    <div class="content-wrapper">
@include('sidebar')

        <main>
        @yield('main')  

      @include('footer')      
</body>

</html>