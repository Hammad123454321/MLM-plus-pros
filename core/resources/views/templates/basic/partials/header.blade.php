<header class="header">

    <style>
        .header .main-menu li a {
    
    text-transform: uppercase;
 
    color: #000000;
    position: relative;
   
    padding: 25px 0;
    color: var(--dark);
    font-weight: 500;
    outline: none;
}
.navbar .navbar-nav .nav-link {
    margin-right: 30px;
    padding: 2px 0;
    color: var(--dark);
    font-weight: 500;
    outline: none;
}
.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #16D5FF;
}
.video-thumb .video-icon {
    position: absolute;
    display: none;
    background-color: #051b05;
}
    </style>
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-2 px-4 px-lg-5">
            
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}"><img
                        src="{{ asset('assets/images/logoIcon/logo.png') }}"
                        alt="site-logo" width="100px"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
        
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-4 py-lg-0">
                    <ul class="navbar-nav main-menu ms-auto">
                        <li class="nav-item nav-link "><a href="{{ route('home') }}">@lang('Home')</a></li>
                        @php
                            $pages = App\Models\Page::where('tempname',$activeTemplate)->where('is_default',0)->get();
                        @endphp
                        @foreach($pages as $page)
                            @if($page->slug != 'home' && $page->slug != 'blog' && $page->slug != 'contact')
                                <li class="nav-item nav-link "><a href="{{ route('pages',$page->slug) }}">{{ __($page->name) }}</a>
                                </li>
                            @endif
                        @endforeach
                         
                      

                         
                        
                     <li class="nav-item nav-link text-black"><a href="{{ route('blog') }}">@lang('BLOGS')</a></li>
                      <li class="nav-item nav-link text-black"><a href="{{ route('contact') }}">@lang('contact')</a></li>
                    </ul>
                   
                        </div>
                    </div>
                      @guest
                           
                     
                    <a href="{{ route('user.login') }}" class="nav-item nav-link"><span style="padding: 10px; border-radius:20px; background-color: #16D5FF; color: white;"> @lang('Login')</span></a>

                    <a href="{{ route('user.register') }}" class="nav-item nav-link"><span style="padding: 10px; border-radius:20px; background-color: #16D5FF; color: white;">  @lang('Registration')</span></a>
                           @else
                    <a href="{{ route('user.home') }}" class="nav-item nav-link"><span style="padding: 10px; border-radius:20px; background-color: #16D5FF; color: white;">  @lang('Dashboard')</span></a>
                       @endguest
                </div>
            </div>

        </nav>
      
</header>
