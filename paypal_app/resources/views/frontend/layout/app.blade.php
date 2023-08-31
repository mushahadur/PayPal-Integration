<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Version One || limupa - Digital Products Store eCommerce Bootstrap 4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Included All Style Link --}}
        @include('frontend.layout.partials.style')
        <!-- Favicon -->
        
    </head>
    <body>   

        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            @include('frontend.layout.partials.header')
            <!-- Header Area End Here -->

            {{-- Main Containn --}}
            @yield('contain')
            
            <!-- Begin Footer Area -->
            {{-- Include Footer Section   --}}
            @include('frontend.layout.partials.footer')
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->

          {{-- Included All Style Link --}}
          @include('frontend.layout.partials.script')
        
    </body>

<!-- index30:23-->
</html>