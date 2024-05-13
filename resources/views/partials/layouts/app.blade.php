<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', ' - Coffe App')</title>
    <!-- Link Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    
    <header id="header">
        <img src="./assets/images/logo.png" class="image-logo" alt="logo">
        <ul class="menu-list">
            {{-- @dd(request()->path()) --}}
            <li class="{{ request()->path() == '/' ? 'active' : '' }}">
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="#">Our Product</a>
            </li>
            <li class="{{ request()->path() == 'delivery' ? 'active' : '' }}">
                <a href="/delivery">Delivery</a>
            </li>
        </ul>
        <div class="menu-actions">
            <div class="menu-search">
                <img src="./assets/icons/search-icon.svg" width="18" height="18" alt="search-icon">
                <input type="search" name="search" id="search" placeholder="Search your coffee...">
            </div>
            <button class="menu-cart">
                <span></span>
                <img src="./assets/icons/cart-icon.svg" width="25" height="25" alt="cart">
            </button>
        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <script type="text/javascript">
        function toggleHeaderClass() {
            var header = document.getElementById('header');
            var scrollPosition = window.pageYOffset;

            if (scrollPosition > 0) {
                header.classList.add('active');
            } else {
                header.classList.remove('active');
            }
        }

        window.addEventListener('scroll', function() {
            toggleHeaderClass();
        });
    </script>

</body>
</html>