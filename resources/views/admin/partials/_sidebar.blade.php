<div class="sidebar-wrapper">
  <div>
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                  src="{{ asset('backend') }}/assets/images/logo/logo.png" alt=""><img class="img-fluid for-dark"
                  src="{{ asset('backend') }}/assets/images/logo/logo_dark.png" alt=""></a>
          <div class="back-btn"><i class="fa fa-angle-left"></i></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
              </i></div>
      </div>
      <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                  src="{{ asset('backend') }}/assets/images/logo/logo-icon.png" alt=""></a></div>
      <nav class="sidebar-main">
          <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
          <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid"
                              src="{{ asset('backend') }}/assets/images/logo/logo-icon.png" alt=""></a>
                      <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                              aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-list">
                    <label class="badge badge-success">2</label><a class="sidebar-link sidebar-title" href="#"><i
                        data-feather="home"></i><span class="lan-3">Dashboard </span></a>
                    <ul class="sidebar-submenu">
                      <li><a class="lan-4" href="index.html">Default</a></li>
                      <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.language.index') }}">
                          <i data-feather="user-plus"> </i>
                          <span>Languages</span>
                      </a>
                  </li>
                  <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.home_image.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Home Image</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.discover_image.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Discover Image</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.our_restoran_image.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Our Restoran Image</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.our_restorant.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Our Restorant</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.our_team.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Our Team</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.discover.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Discover</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.contact_info.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Contact Info  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.home.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span> Home  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.person.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Person  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.time.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Time  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.filial.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Filial  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.gallery_category.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Gallery Categories  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.gallery_image.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Gallery Image  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.category.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Category  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.personal.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Personal  </span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.contact_image.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Contact Image</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.reservation.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Reservation</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.setting.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Setting</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.social_network.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Social Network</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.opening_hour.index') }}">
                        <i data-feather="user-plus"> </i>
                        <span>Opening Hour</span>
                    </a>
                </li>
          </div>
          <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
      </nav>
  </div>
</div>