<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset=UTF-8 />
        <meta name=description content="Free coming soon template">
        <meta name=author content="Pawel Zuchowski">
        <meta name=viewport content="width=device-width,initial-scale=1" />
        <meta http-equiv=X-UA-Compatible content="ie=edge" />
        <link rel=stylesheet href=https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css
            integrity=sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO crossorigin=anonymous>
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel=stylesheet>
        <link href="https://fonts.googleapis.com/css2?family=Muli:wght@300;700&display=swap" rel=stylesheet>
        <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Roboto&display=swap">
        <script src=https://kit.fontawesome.com/3c09bcb51a.js></script>
        <title>Barangkas</title>
        <link rel="icon" href="{{ asset('/image/head.png') }}">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    </head>
    <body>
    <div class=container>
        <div class=row>
            <div class="left-wrap col-12 col-md-5">
                <div class=left>
                    <p><span class=days></span><span class=small> days</span></p>
                    <p><span class=hours></span><span class=small> hours</span></p>
                    <p>&nbsp;&nbsp;<span class=minutes></span><span class=small> minutes</span></p>
                    <p>&nbsp;&nbsp;<span class=seconds></span><span class=small> seconds</span></p>
                </div>
            </div>
            <div class="col-12 col-md-7 right">
                <div class=mainInfo>
                    <img src="{{ asset('/image/logo.png') }}" alt="" style="width:50%">
                    <p class=slogan>Platform investasi reksadana yang menggunakan sampah daur ulang sebagai modal transaksi masyarakat. </p>
                    <form class=form-subscribe action=#> <input type=email class=form placeholder="Your email address"
                            required> <button type=submit>Subscribe</button> </form>
                </div>
                <ul class=icon-list>
                    <li class=icon><a class=twitter href=google.com></a></li>
                    <li class=icon><a class=linkedin href=google.com></a></li>
                    <li class=icon><a class=facebook href=google.com></a></li>
                    <li class=icon><a class=instagram href=google.com></a></li>
                    <li class=icon><a class=youtube href=google.com></a></li>
                    <li class=icon><a class=github href=google.com></a></li>
                    <li class=icon><a class=stackoverflow href=google.com></a></li>
                    <li class=icon><a class=medium href=google.com></a></li>
                </ul>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/bundle.js') }}"></script>
 
</body>
</html>
