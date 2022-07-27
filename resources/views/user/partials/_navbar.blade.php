 <!--=============== header ===============-->
 <header>
     <div class="header-inner">
         <div class="container">
             <!--navigation social links-->
             <div class="nav-social">
                 <ul>
                    <li><a href="#" target="_blank" ><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank" ><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#" target="_blank" ><i class="fab fa-tumblr"></i></a></li>
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
                         <li><a href="/" class="act-link">{{ __('home') }}</a></li>
                         <li><a href="{{ route('menu.index') }}">Menu</a></li>
                         <li><a href="{{ route('gallery.index') }}">Gallery</a></li>
                         <li><a href="{{ route('reservation.index') }}">Reservation</a></li>
                         <li><a href="{{ route('contact.index') }}">Contact</a></li>
                         <li><a href="{{ route('journal.index') }}">Journal</a></li>
                         <li class="language-nav">
                             <div class="translate_wrapper">
                                 <div class="current_lang">
                                     <div class="lang"><i
                                             class="flag-icon flag-icon-{{ app()->getLocale() == 'en' ? 'us' : app()->getLocale() }}"></i><span
                                             class="lang-txt">{{ app()->getLocale() }} </span></div>
                                 </div>
                                 <div class="more_lang">
                                     @foreach ($languages as $language)
                                         <div class="lang selected" data-value="{{ $language->code }}">
                                             <a href="{{ route('locale', $language->code) }}"><i
                                                     class="flag-icon flag-icon-{{ $language->code == 'en' ? 'us' : $language->code }}"></i><span
                                                     class="lang-txt">{{ $language->code }}</span></a>
                                         </div>
                                     @endforeach
                                 </div>
                             </div>
                         </li>
                     </ul>
                 </nav>
             </div>
         </div>
     </div>
 </header>
 <!--header end-->
