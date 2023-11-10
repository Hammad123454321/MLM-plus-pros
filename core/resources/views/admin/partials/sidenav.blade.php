
   

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('admin.dashboard')}}" class="brand-logo">
              <img src="{{getImage(getFilePath('logoIcon') .'/logo.png')}}" width="60%">
                <svg class="brand-title" width="124px" height="33px">
                    
                </svg>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        
       
        
       

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
                            <img src="{{ getImage('assets/admin/images/profile/'. auth()->guard('admin')->user()->image) }}" width="20" alt="">
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>{{ auth()->guard('admin')->user()->username }}</b></span>
                                <small class="text-end font-w400">{{ auth()->guard('admin')->user()->email }}</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ route('admin.profile') }}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ms-2">Profile </span>
                            </a>
                            <a href="{{ route('admin.password') }}" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span class="ms-2">Password </span>
                            </a>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.dashboard')}}">@lang('Dashboard')</a></li>
                           
                            
                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-050-info"></i>
                            <span class="nav-text">Plan Setting</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.referrals.index')}}">@lang('Referral Commissions')</a></li>
                            <li><a href="{{route('admin.plan.index')}}">@lang('Subscription Plan')</a></li>
                            
                           
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-041-graph"></i>
                            <span class="nav-text">@lang('Manage Users')</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.users.active')}}">@lang('Active Users')</a></li>
                            <li><a href="{{route('admin.users.banned')}}">@lang('Banned Users')@if($bannedUsersCount)
                            <span class="menu-badge pill bg--danger ms-auto">{{$bannedUsersCount}}</span>
                            @endif</a></li>
                             
                            <li><a href="{{route('admin.users.email.unverified')}}">@lang('Email Unverified')</a></li>
                            <li><a href="{{route('admin.users.mobile.unverified')}}">@lang('Mobile Unverified')@if($mobileUnverifiedUsersCount)
                                        
                                            <class="menu-badge pill bg--danger ms-auto">{{$mobileUnverifiedUsersCount}}
                                    @endif</a></li>
                            
                            <li><a href="{{route('admin.users.kyc.unverified')}}">@lang('KYC Unverified')</a></li>
                            <li><a href="{{route('admin.users.kyc.pending')}}">@lang('KYC Pending')</a></li>
                            <li><a href="{{route('admin.users.with.balance')}}">@lang('With Balance')</a></li>
                            <li><a href="{{route('admin.users.all')}}">@lang('All Users')</a></li>
                            <li><a href="{{route('admin.users.notification.all')}}">@lang('Notification to All')</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-086-star"></i>
                            <span class="nav-text">@lang('Payment Gateways')</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.gateway.automatic.index')}}">@lang('Automatic Gateways')</a></li>
                            <li><a href="{{route('admin.gateway.manual.index')}}">@lang('Manual Gateways')</a></li>
                           

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-045-heart"></i>
                            <span class="nav-text">@lang('Support Ticket')</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.ticket.pending')}}">@lang('Pending Ticket')</a></li>
                            <!-- <li><a href="{{route('admin.ticket.closed')}}">@lang('Closed Ticket')</a></li> -->
                            <li><a href="{{route('admin.ticket.answered')}}">@lang('Answered Ticket')</a></li>
                            <li><a href="{{route('admin.ticket')}}">@lang('All Ticket')</a></li>
                            
                        </ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-022-copy"></i>
                            <span class="nav-text">@lang('Report')</span>
                        </a>
                        <ul aria-expanded="false">
                            <!-- <li><a href="{{route('admin.report.transaction')}}">@lang('Transaction Log')</a></li> -->
                            <li><a href="{{route('admin.report.login.history')}}">@lang('Login History')</a></li>
                            <li><a href="{{route('admin.report.notification.history')}}">@lang('Notification History')</a></li>
                            <li><a href="{{route('admin.report.commissions')}}">@lang('Referral Commissions')</a></li>
                            
                        </ul>
                    </li>
                    
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-072-printer"></i>
                            <span class="nav-text">@lang('Deposits')</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.deposit.pending')}}">@lang('Pending Deposits')</a></li>
                            <li><a href="{{route('admin.deposit.approved')}}">@lang('Approved Deposits')</a></li>
                            <li><a href="{{route('admin.deposit.successful')}}">@lang('Successful Deposits')</a></li>
                            <li><a href="{{route('admin.deposit.rejected')}}">@lang('Rejected Deposits')</a></li>
                            <li><a href="{{route('admin.deposit.initiated')}}">@lang('Initiated Deposits')</a></li>
                            <li><a href="{{route('admin.deposit.list')}}">@lang('All Deposits')</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-043-menu"></i>
                            <span class="nav-text">@lang('Withdrawals')</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin.withdraw.method.index')}}">@lang('Withdrawal Methods')</a></li>
                            <li><a href="{{route('admin.withdraw.pending')}}">@lang('Pending Withdrawals')</a></li>
                            <li><a href="{{route('admin.withdraw.approved')}}">@lang('Approved Withdrawals')</a></li>
                            <li><a href="{{route('admin.withdraw.rejected')}}">@lang('Rejected Withdrawals')</a></li>
                            <li><a href="{{route('admin.withdraw.log')}}">@lang('All Withdrawals')</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-045-heart"></i>
                            <span class="nav-text">@lang('Settings')</</span>
                        </a>
                        <ul aria-expanded="false">

                           <li><a href="{{route('admin.setting.index')}}">@lang('General Setting')</a></li>

                           
                            <li><a href="{{route('admin.setting.system.configuration')}}">@lang('System Configuration')</a></li>
                            
                            <li><a href="{{route('admin.setting.logo.icon')}}">@lang('Logo & Favicon')</a></li>
                            
                            <li><a href="{{ route('admin.language.manage') }}">@lang('Language')</a></li>

                            <li><a href="{{route('admin.seo')}}">@lang('SEO Manager')</a></li>

                           

                          
                        </ul>
                    </li>


                     <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-022-copy"></i>
                            <span class="nav-text">@lang('Notification Setting')</</span>
                        </a>
                        <ul aria-expanded="false">

                           <li><a href="{{route('admin.setting.notification.email')}}">@lang('Email Setting')</a></li>

                           
                            <li><a href="{{route('admin.setting.notification.sms')}}">@lang('SMS Setting')</a></li>
                            
                       
                            
                        </ul>
                    </li>



                    



                     <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-072-printer"></i>
                            <span class="nav-text">@lang('Frontend Manager')</span>
                        </a>
                        <ul aria-expanded="false">

                           <li><a href="{{('/about')}}">@lang('About')</a></li>
                           <li><a href="{{('contact')}}">@lang('Contact')</a></li>
                           <li><a href="{{('faq')}}}">@lang('Faq')</a></li>
                           <li><a href="{{('login')}}">@lang('Login')</a></li>
                           <li><a href="{{('plan')}}">@lang('Plan')</a></li>
                           <li><a href="{{('policy_pages')}}">@lang('Policy_pages')</a></li>
                           <li><a href="{{('register')}}">@lang('Register')</a></li>
                           <li><a href="{{('testimonial')}}">@lang('Testimonial')</a></li>


                        </ul>
                    </li>
                    
                <li class="sidebar-menu-item sidebar-dropdown">
                    <a href="javascript:void(0)" class="{{menuActive('admin.frontend.sections*',3)}}">
                        <i class="menu-icon la la-html5"></i>
                        <span class="menu-title">@lang('Manage Section')</span>
                    </a>
                    <div class="sidebar-submenu {{menuActive('admin.frontend.sections*',2)}} ">
                        <ul>
                            @php
                               $lastSegment =  collect(request()->segments())->last();
                            @endphp
                            @foreach(getPageSections(true) as $k => $secs)
                                @if($secs['builder'])
                                    <li class="sidebar-menu-item  @if($lastSegment == $k) active @endif ">
                                        <a href="{{ route('admin.frontend.sections',$k) }}" class="nav-link">
                                            <i class="menu-icon las la-dot-circle"></i>
                                            <span class="menu-title">{{__($secs['name'])}}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-022-copy"></i>
                            <span class="nav-text">@lang('Extra')</span>
                        </a>
                        <ul aria-expanded="false">

                           <li><a href="{{route('admin.frontend.manage.pages')}}">@lang('Manage Pages')</a></li>
                           <li><a href="{{route('admin.maintenance.mode')}}">@lang('Maintenance Mode')</a></li>
                           
                           <li><a href="{{route('admin.system.optimize')}}">@lang('Clear Caches')</a></li>


                        </ul>
                    </li>
                </ul>
                <div class="copyright">
                    <p><strong></strong> © 2023 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by Hamaza</p>
                </div>
            </div>
        </div>


    
        <!--**********************************
            Sidebar end
        ***********************************-->
        
     