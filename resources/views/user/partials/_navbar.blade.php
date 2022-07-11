 <!--=============== header ===============-->	
 <header>
    <div class="header-inner">
        <div class="container">
            <!--navigation social links-->
            <div class="nav-social">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                </ul>
            </div>
            <!--logo-->             
            <div class="logo-holder">
                <a href="index.html">
                <img src="{{ asset('frontend/images/logo.png') }}" class="respimg logo-vis" alt="">
                <img src="{{ asset('frontend/images/logo2.png') }}" class="respimg logo-notvis" alt="">
                </a>
            </div>
            <!--Navigation -->
            <div class="nav-holder">
                <nav>
                    <ul>
                        <li><a href="/" class="act-link">Home</a></li>
                        <li><a href="{{ route('menu.index') }}">Menu</a></li>
                        <li><a href="{{ route('gallery.index') }}">Gallery</a></li>
                        <li><a href="{{ route('reservation.index') }}">Reservation</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        <li><a href="{{ route('journal.index') }}">Journal</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--header end-->