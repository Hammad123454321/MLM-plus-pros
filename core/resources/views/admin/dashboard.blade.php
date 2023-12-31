@extends('admin.layouts.app')

@section('panel')
<style type="text/css">
    thead th {
    border-top: none;
    padding-left: 25px;
    padding-right: 25px;
    background: #38bfb3;
}
</style>
@if(@json_decode($general->system_info)->version > systemDetails()['version'])
    <div class="row">
        <div class="col-md-12">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">
                    <h3 class="card-title"> @lang('New Version Available') <button
                            class="btn btn-dark float-end">@lang('Version')
                            {{ json_decode($general->system_info)->version }}</button> </h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-dark">@lang('What is the Update ?')</h5>
                    <p>
                        <pre class="f-size--24">{{ json_decode($general->system_info)->details }}</pre>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endif
@if(@json_decode($general->system_info)->message)
    <div class="row">
        @foreach(json_decode($general->system_info)->message as $msg)
            <div class="col-md-12">
                <div class="alert border border--primary" role="alert">
                    <div class="alert__icon bg--primary"><i class="far fa-bell"></i></div>
                    <p class="alert__message">@php echo $msg; @endphp</p>
                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            </div>
        @endforeach
    </div>
@endif
<style>

</style>
<div class="row gy-4">
    <div class="col-xl-3 col-xxl-3 col-sm-6">

        <div class="card bg-warning invoice-card">
                      <a href="{{ route('admin.users.all') }}">
                          
                         <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg width="33px" height="32px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M31.963,30.931 C31.818,31.160 31.609,31.342 31.363,31.455 C31.175,31.538 30.972,31.582 30.767,31.583 C30.429,31.583 30.102,31.463 29.845,31.243 L25.802,27.786 L21.758,31.243 C21.502,31.463 21.175,31.583 20.837,31.583 C20.498,31.583 20.172,31.463 19.915,31.243 L15.872,27.786 L11.829,31.243 C11.622,31.420 11.370,31.534 11.101,31.572 C10.832,31.609 10.558,31.569 10.311,31.455 C10.065,31.342 9.857,31.160 9.710,30.931 C9.565,30.703 9.488,30.437 9.488,30.167 L9.488,17.416 L2.395,17.416 C2.019,17.416 1.658,17.267 1.392,17.001 C1.126,16.736 0.976,16.375 0.976,16.000 L0.976,6.083 C0.976,4.580 1.574,3.139 2.639,2.076 C3.703,1.014 5.146,0.417 6.651,0.417 L26.511,0.417 C28.016,0.417 29.459,1.014 30.524,2.076 C31.588,3.139 32.186,4.580 32.186,6.083 L32.186,30.167 C32.186,30.437 32.109,30.703 31.963,30.931 ZM9.488,6.083 C9.488,5.332 9.189,4.611 8.657,4.080 C8.125,3.548 7.403,3.250 6.651,3.250 C5.898,3.250 5.177,3.548 4.645,4.080 C4.113,4.611 3.814,5.332 3.814,6.083 L3.814,14.583 L9.488,14.583 L9.488,6.083 ZM29.348,6.083 C29.348,5.332 29.050,4.611 28.517,4.080 C27.985,3.548 27.263,3.250 26.511,3.250 L11.559,3.250 C12.059,4.111 12.324,5.088 12.325,6.083 L12.325,27.092 L14.950,24.840 C15.207,24.620 15.534,24.500 15.872,24.500 C16.210,24.500 16.537,24.620 16.794,24.840 L20.837,28.296 L24.880,24.840 C25.137,24.620 25.463,24.500 25.802,24.500 C26.140,24.500 26.467,24.620 26.724,24.840 L29.348,27.092 L29.348,6.083 ZM25.092,20.250 L16.581,20.250 C16.205,20.250 15.844,20.101 15.578,19.835 C15.312,19.569 15.162,19.209 15.162,18.833 C15.162,18.457 15.312,18.097 15.578,17.831 C15.844,17.566 16.205,17.416 16.581,17.416 L25.092,17.416 C25.469,17.416 25.829,17.566 26.096,17.831 C26.362,18.097 26.511,18.457 26.511,18.833 C26.511,19.209 26.362,19.569 26.096,19.835 C25.829,20.101 25.469,20.250 25.092,20.250 ZM25.092,14.583 L16.581,14.583 C16.205,14.583 15.844,14.434 15.578,14.168 C15.312,13.903 15.162,13.542 15.162,13.167 C15.162,12.791 15.312,12.430 15.578,12.165 C15.844,11.899 16.205,11.750 16.581,11.750 L25.092,11.750 C25.469,11.750 25.829,11.899 26.096,12.165 C26.362,12.430 26.511,12.791 26.511,13.167 C26.511,13.542 26.362,13.903 26.096,14.168 C25.829,14.434 25.469,14.583 25.092,14.583 ZM25.092,8.916 L16.581,8.916 C16.205,8.916 15.844,8.767 15.578,8.501 C15.312,8.236 15.162,7.875 15.162,7.500 C15.162,7.124 15.312,6.764 15.578,6.498 C15.844,6.232 16.205,6.083 16.581,6.083 L25.092,6.083 C25.469,6.083 25.829,6.232 26.096,6.498 C26.362,6.764 26.511,7.124 26.511,7.500 C26.511,7.875 26.362,8.236 26.096,8.501 C25.829,8.767 25.469,8.916 25.092,8.916 Z"></path>
                                    </svg>
                                    
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">@lang('Total Users')</h2>
                                    <span class="text-white fs-18">{{ $widget['total_users'] }}</span>
                                </div>
                            </div>
                        </div>

                      </a>     


    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-3 col-sm-6">
      
         <div class="card bg-success invoice-card">
                      <a href="{{ route('admin.users.active') }}">
                          
                         <div class="card-body d-flex">
                               <div class="icon me-3">
                                    <svg width="35px" height="34px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M32.482,9.730 C31.092,6.789 28.892,4.319 26.120,2.586 C22.265,0.183 17.698,-0.580 13.271,0.442 C8.843,1.458 5.074,4.140 2.668,7.990 C0.255,11.840 -0.509,16.394 0.514,20.822 C1.538,25.244 4.224,29.008 8.072,31.411 C10.785,33.104 13.896,34.000 17.080,34.000 L17.286,34.000 C20.456,33.960 23.541,33.044 26.213,31.358 C26.991,30.866 27.217,29.844 26.725,29.067 C26.234,28.291 25.210,28.065 24.432,28.556 C22.285,29.917 19.799,30.654 17.246,30.687 C14.627,30.720 12.067,29.997 9.834,28.609 C6.730,26.671 4.569,23.644 3.752,20.085 C2.934,16.527 3.546,12.863 5.486,9.763 C9.488,3.370 17.957,1.418 24.359,5.414 C26.592,6.808 28.360,8.793 29.477,11.157 C30.568,13.460 30.993,16.016 30.707,18.539 C30.607,19.448 31.259,20.271 32.177,20.371 C33.087,20.470 33.911,19.820 34.011,18.904 C34.363,15.764 33.832,12.591 32.482,9.730 L32.482,9.730 Z"></path>
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M22.593,11.237 L14.575,19.244 L11.604,16.277 C10.952,15.626 9.902,15.626 9.250,16.277 C8.599,16.927 8.599,17.976 9.250,18.627 L13.399,22.770 C13.725,23.095 14.150,23.254 14.575,23.254 C15.001,23.254 15.427,23.095 15.753,22.770 L24.940,13.588 C25.592,12.937 25.592,11.888 24.940,11.237 C24.289,10.593 23.238,10.593 22.593,11.237 L22.593,11.237 Z"></path>
                                    </svg>
                                    
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">@lang('Active Users')</h2>
                                    <span class="text-white fs-18">{{ $widget['verified_users'] }}</span>
                                </div>
                            </div>
                        </div>

                      </a>   
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-3 col-sm-6">
        <div class="card bg-info invoice-card">
          
            <a href="{{ route('admin.users.email.unverified') }}">
                          
                         <div class="card-body d-flex">
                                <div class="icon me-3">
                                    <svg width="35px" height="34px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M33.002,9.728 C31.612,6.787 29.411,4.316 26.638,2.583 C22.781,0.179 18.219,-0.584 13.784,0.438 C9.356,1.454 5.585,4.137 3.178,7.989 C0.764,11.840 -0.000,16.396 1.023,20.825 C2.048,25.247 4.734,29.013 8.584,31.417 C11.297,33.110 14.409,34.006 17.594,34.006 L17.800,34.006 C20.973,33.967 24.058,33.050 26.731,31.363 C27.509,30.872 27.735,29.849 27.243,29.072 C26.751,28.296 25.727,28.070 24.949,28.561 C22.801,29.922 20.314,30.660 17.761,30.693 C15.141,30.726 12.581,30.002 10.346,28.614 C7.241,26.675 5.080,23.647 4.262,20.088 C3.444,16.515 4.056,12.850 5.997,9.748 C10.001,3.353 18.473,1.401 24.876,5.399 C27.110,6.793 28.879,8.779 29.996,11.143 C31.087,13.447 31.513,16.004 31.227,18.527 C31.126,19.437 31.778,20.260 32.696,20.360 C33.607,20.459 34.432,19.809 34.531,18.892 C34.884,15.765 34.352,12.591 33.002,9.728 L33.002,9.728 Z"></path>
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M23.380,11.236 C22.728,10.585 21.678,10.585 21.026,11.236 L17.608,14.656 L14.190,11.243 C13.539,10.592 12.488,10.592 11.836,11.243 C11.184,11.893 11.184,12.942 11.836,13.593 L15.254,17.006 L11.836,20.420 C11.184,21.071 11.184,22.120 11.836,22.770 C12.162,23.096 12.588,23.255 13.014,23.255 C13.438,23.255 13.864,23.096 14.190,22.770 L17.608,19.357 L21.026,22.770 C21.352,23.096 21.777,23.255 22.203,23.255 C22.629,23.255 23.054,23.096 23.380,22.770 C24.031,22.120 24.031,21.071 23.380,20.420 L19.962,17.000 L23.380,13.587 C24.031,12.936 24.031,11.887 23.380,11.236 L23.380,11.236 Z"></path>
                                    </svg>
                                    
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">@lang('Email Unverified Users')</h2>
                                    <span class="text-white fs-18">{{ $widget['email_unverified_users'] }}</span>
                                </div>
                            </div>
                        </div>

                      </a>   
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-3 col-sm-6">
        <div class="card bg-secondary invoice-card">
       
          <a href="{{ route('admin.users.mobile.unverified') }}">
                          
                         <div class="card-body d-flex">
                              <div class="icon me-3">
                                    <svg width="33px" height="32px">
                                    <path fill-rule="evenodd" fill="rgb(255, 255, 255)" d="M31.963,30.931 C31.818,31.160 31.609,31.342 31.363,31.455 C31.175,31.538 30.972,31.582 30.767,31.583 C30.429,31.583 30.102,31.463 29.845,31.243 L25.802,27.786 L21.758,31.243 C21.502,31.463 21.175,31.583 20.837,31.583 C20.498,31.583 20.172,31.463 19.915,31.243 L15.872,27.786 L11.829,31.243 C11.622,31.420 11.370,31.534 11.101,31.572 C10.832,31.609 10.558,31.569 10.311,31.455 C10.065,31.342 9.857,31.160 9.710,30.931 C9.565,30.703 9.488,30.437 9.488,30.167 L9.488,17.416 L2.395,17.416 C2.019,17.416 1.658,17.267 1.392,17.001 C1.126,16.736 0.976,16.375 0.976,16.000 L0.976,6.083 C0.976,4.580 1.574,3.139 2.639,2.076 C3.703,1.014 5.146,0.417 6.651,0.417 L26.511,0.417 C28.016,0.417 29.459,1.014 30.524,2.076 C31.588,3.139 32.186,4.580 32.186,6.083 L32.186,30.167 C32.186,30.437 32.109,30.703 31.963,30.931 ZM9.488,6.083 C9.488,5.332 9.189,4.611 8.657,4.080 C8.125,3.548 7.403,3.250 6.651,3.250 C5.898,3.250 5.177,3.548 4.645,4.080 C4.113,4.611 3.814,5.332 3.814,6.083 L3.814,14.583 L9.488,14.583 L9.488,6.083 ZM29.348,6.083 C29.348,5.332 29.050,4.611 28.517,4.080 C27.985,3.548 27.263,3.250 26.511,3.250 L11.559,3.250 C12.059,4.111 12.324,5.088 12.325,6.083 L12.325,27.092 L14.950,24.840 C15.207,24.620 15.534,24.500 15.872,24.500 C16.210,24.500 16.537,24.620 16.794,24.840 L20.837,28.296 L24.880,24.840 C25.137,24.620 25.463,24.500 25.802,24.500 C26.140,24.500 26.467,24.620 26.724,24.840 L29.348,27.092 L29.348,6.083 ZM25.092,20.250 L16.581,20.250 C16.205,20.250 15.844,20.101 15.578,19.835 C15.312,19.569 15.162,19.209 15.162,18.833 C15.162,18.457 15.312,18.097 15.578,17.831 C15.844,17.566 16.205,17.416 16.581,17.416 L25.092,17.416 C25.469,17.416 25.829,17.566 26.096,17.831 C26.362,18.097 26.511,18.457 26.511,18.833 C26.511,19.209 26.362,19.569 26.096,19.835 C25.829,20.101 25.469,20.250 25.092,20.250 ZM25.092,14.583 L16.581,14.583 C16.205,14.583 15.844,14.434 15.578,14.168 C15.312,13.903 15.162,13.542 15.162,13.167 C15.162,12.791 15.312,12.430 15.578,12.165 C15.844,11.899 16.205,11.750 16.581,11.750 L25.092,11.750 C25.469,11.750 25.829,11.899 26.096,12.165 C26.362,12.430 26.511,12.791 26.511,13.167 C26.511,13.542 26.362,13.903 26.096,14.168 C25.829,14.434 25.469,14.583 25.092,14.583 ZM25.092,8.916 L16.581,8.916 C16.205,8.916 15.844,8.767 15.578,8.501 C15.312,8.236 15.162,7.875 15.162,7.500 C15.162,7.124 15.312,6.764 15.578,6.498 C15.844,6.232 16.205,6.083 16.581,6.083 L25.092,6.083 C25.469,6.083 25.829,6.232 26.096,6.498 C26.362,6.764 26.511,7.124 26.511,7.500 C26.511,7.875 26.362,8.236 26.096,8.501 C25.829,8.767 25.469,8.916 25.092,8.916 Z"></path>
                                    </svg>
                                
                                </div>
                                <div>
                                    <h2 class="text-white invoice-num">@lang('Mobile Unverified Users')</h2>
                                    <span class="text-white fs-18">{{ $widget['mobile_unverified_users'] }}</span>
                                </div>
                            </div>
                        </div>

                      </a>  
    </div><!-- dashboard-w1 end -->


                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xl-6">
                                        <div class="card-bx bg-blue">
                                            <img class="pattern-img" src="{{asset('assets/global/dash/images/pattern/pattern6.png')}}" alt="">
                                            <div class="card-info text-white">
                                                <img src="images/pattern/circle.png" class="mb-4" alt="">
                                                <h2 class="text-white card-balance">{{ showAmount($widget['plan_purchased']) }}
                                                {{ $general->cur_text }}</h2>
                                                <p class="fs-16">Wallet Balance</p>
                                                <span>+0,8% than last week</span>
                                            </div>
                                            <a class="change-btn" href="javascript:void(0);"><i class="fa fa-caret-up up-ico"></i>Change<span class="reload-icon"><i class="fas fa-sync-alt reload active"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="row  mt-xl-0 mt-4">
                                            <div class="col-md-6">
                                                <h4 class="card-title">Card's Overview</h4>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit psu olor</span>
                                                <ul class="card-list mt-4">
                                                    <li><span class="bg-success circle"></span>Total Withdraw<span>{{ $general->cur_sym }}{{ showAmount($withdrawals['total_withdraw_amount']) }}</span></li>
                                                    <li><span class="bg-blue circle"></span>Pending Withdraw<span>{{$withdrawals['total_withdraw_pending']}}</span></li>
                                                    
                                                    <li><span class="bg-warning circle"></span>Rejected Withdraw<span>{{$withdrawals['total_withdraw_rejected']}}</span></li>
                                                    <li><span class="bg-light circle"></span>Charge<span>{{ $general->cur_sym }}{{ showAmount($withdrawals['total_withdraw_charge']) }}</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <canvas id="polarChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="col-xl-12">
                                <div class="card coin-card">
                                    <div class="card-body d-sm-flex d-block align-items-center">
                                        <span class="coin-icon">
                                            <svg width="38" height="41" viewbox="0 0 38 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g><path d="M14.0413 32.5832C15.7416 32.5934 17.4269 32.2659 18.9997 31.6199C20.5708 32.2714 22.2572 32.5991 23.958 32.5832C29.1218 32.5832 33.1663 29.8278 33.1663 26.3088V20.441C33.1663 16.922 29.1218 14.1666 23.958 14.1666C23.7186 14.1666 23.4834 14.1779 23.2497 14.1906V7.55498C23.2497 4.10823 19.2051 1.41656 14.0413 1.41656C8.87759 1.41656 4.83301 4.10823 4.83301 7.55498V26.4448C4.83301 29.8916 8.87759 32.5832 14.0413 32.5832ZM30.333 26.3088C30.333 27.9366 27.715 29.7499 23.958 29.7499C20.201 29.7499 17.583 27.9366 17.583 26.3088V24.9984C19.5015 26.1652 21.7131 26.7604 23.958 26.714C26.203 26.7604 28.4145 26.1652 30.333 24.9984V26.3088ZM23.958 16.9999C27.715 16.9999 30.333 18.8132 30.333 20.441C30.333 22.0687 27.715 23.8807 23.958 23.8807C20.201 23.8807 17.583 22.0673 17.583 20.441C17.583 18.8147 20.201 16.9999 23.958 16.9999ZM14.0413 4.2499C17.7983 4.2499 20.4163 5.9924 20.4163 7.55498C20.4163 9.11757 17.7983 10.8615 14.0413 10.8615C10.2843 10.8615 7.66634 9.11898 7.66634 7.55498C7.66634 5.99098 10.2843 4.2499 14.0413 4.2499ZM7.66634 12.0161C9.59282 13.1601 11.8012 13.7417 14.0413 13.6948C16.2814 13.7417 18.4899 13.1601 20.4163 12.0161V14.6341C18.8724 15.0232 17.4565 15.8078 16.308 16.9107C15.5631 17.0718 14.8034 17.1545 14.0413 17.1572C10.2843 17.1572 7.66634 15.4146 7.66634 13.8521V12.0161ZM7.66634 18.3132C9.59323 19.4561 11.8015 20.0371 14.0413 19.9905C14.2935 19.9905 14.5372 19.9593 14.7851 19.9466C14.764 20.1106 14.7522 20.2756 14.7497 20.441V23.3947C14.5117 23.4089 14.2822 23.4542 14.0413 23.4542C10.2843 23.4542 7.66634 21.7117 7.66634 20.1477V18.3132ZM7.66634 24.6088C9.59282 25.7529 11.8012 26.3344 14.0413 26.2876C14.2793 26.2876 14.5131 26.2692 14.7497 26.2578V26.3088C14.7699 27.5148 15.2334 28.6711 16.0516 29.5572C15.3887 29.6824 14.7159 29.7469 14.0413 29.7499C10.2843 29.7499 7.66634 28.0074 7.66634 26.4448V24.6088Z" fill="#fff"></path></g>
                                            </svg>
                                        </span>
                                        <div>
                                            <h3 class="text-white">Get managed by Dompet’s Virtual Assistant</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                            <a class="text-white" href="javascript:void(0);">Learn more >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
</div><!-- row end-->

<div class="row gy-4 mt-2">
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="fas fa-hand-holding-usd overlay-icon text--success"></i>
            <div class="widget-two__icon b-radius--5 bg--success">
                <i class="fas fa-hand-holding-usd"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{ $general->cur_sym }}{{ showAmount($deposit['total_deposit_amount']) }}
                </h3>
                <p>@lang('Total Deposited')</p>
            </div>
            <a href="{{ route('admin.deposit.list') }}"
                class="widget-two__btn border border--success btn-outline-success">@lang('View All')</a>
        </div>
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="fas fa-spinner overlay-icon text--warning"></i>
            <div class="widget-two__icon b-radius--5 bg--warning">
                <i class="fas fa-spinner"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{ $deposit['total_deposit_pending'] }}
                </h3>
                <p>@lang('Pending Deposits')</p>
            </div>
            <a href="{{ route('admin.deposit.pending') }}"
                class="widget-two__btn border border--warning btn-outline-warning">@lang('View All')</a>
        </div>
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="fas fa-ban overlay-icon text--danger"></i>
            <div class="widget-two__icon b-radius--5 bg--danger">
                <i class="fas fa-ban"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{ $deposit['total_deposit_rejected'] }}
                </h3>
                <p>@lang('Rejected Deposits')</p>
            </div>
            <a href="{{ route('admin.deposit.rejected') }}"
                class="widget-two__btn border border--danger btn-outline-danger">@lang('View All')</a>
        </div>
    </div><!-- dashboard-w1 end -->
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="fas fa-percentage overlay-icon text--primary"></i>
            <div class="widget-two__icon b-radius--5 bg--primary">
                <i class="fas fa-percentage"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{ $general->cur_sym }}{{ showAmount($deposit['total_deposit_charge']) }}
                </h3>
                <p>@lang('Deposited Charge')</p>
            </div>
            <a href="{{ route('admin.deposit.list') }}"
                class="widget-two__btn border border--primary btn-outline-primary">@lang('View All')</a>
        </div>
    </div><!-- dashboard-w1 end -->
</div><!-- row end-->

<div class="row gy-4 mt-2">
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="lar la-credit-card overlay-icon text--success"></i>
            <div class="widget-two__icon b-radius--5 border border--success text--success">
                <i class="lar la-credit-card"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{ $general->cur_sym }}{{ showAmount($withdrawals['total_withdraw_amount']) }}
                </h3>
                <p>@lang('Total Withdrawan')</p>
            </div>
            <a href="{{ route('admin.withdraw.log') }}"
                class="widget-two__btn border border--success btn-outline-success">@lang('View All')</a>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="las la-sync overlay-icon text--warning"></i>
            <div class="widget-two__icon b-radius--5 border border--warning text--warning">
                <i class="las la-sync"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{$withdrawals['total_withdraw_pending']}}</h3>
                <p>@lang('Pending Withdrawals')</p>
            </div>
            <a href="{{ route('admin.withdraw.pending') }}"
                class="widget-two__btn border border--warning btn-outline-warning">@lang('View All')</a>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="las la-times-circle overlay-icon text--danger"></i>
            <div class="widget-two__icon b-radius--5 border border--danger text--danger">
                <i class="las la-times-circle"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{$withdrawals['total_withdraw_rejected']}}</h3>
                <p>@lang('Rejected Withdrawals')</p>
            </div>
            <a href="{{ route('admin.withdraw.rejected') }}"
                class="widget-two__btn border border--danger btn-outline-danger">@lang('View All')</a>
        </div>
    </div>
    <div class="col-xxl-3 col-sm-6">
        <div class="widget-two box--shadow2 b-radius--5 bg--white">
            <i class="las la-percent overlay-icon text--primary"></i>
            <div class="widget-two__icon b-radius--5 border border--primary text--primary">
                <i class="las la-percent"></i>
            </div>
            <div class="widget-two__content">
                <h3>{{ $general->cur_sym }}{{ showAmount($withdrawals['total_withdraw_charge']) }}
                </h3>
                <p>@lang('Withdrawal Charge')</p>
            </div>
            <a href="{{ route('admin.withdraw.log') }}"
                class="widget-two__btn border border--primary btn-outline-primary">@lang('View All')</a>
        </div>
    </div>
</div><!-- row end-->


</div><!-- row end-->

<div class="row mb-none-30 mt-30">
    <div class="col-xl-6 mb-30">
        <div class="card">
            <div class="card-body" id="report">
                <h5 class="card-title">@lang('Monthly Deposit & Withdraw Report') (@lang('Last 12 Month'))</h5>
                <div id="apex-bar-chart"> </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 mb-30">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('Transactions Report') (@lang('Last 30 Days'))</h5>
                <div id="apex-line"></div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-none-30 mt-5">
    <div class="col-xl-4 col-lg-6 mb-30">
        <div class="card overflow-hidden">
            <div class="card-body">
                <h5 class="card-title">@lang('Login By Browser') (@lang('Last 30 days'))</h5>
                <canvas id="userBrowserChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 mb-30">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('Login By OS') (@lang('Last 30 days'))</h5>
                <canvas id="userOsChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 mb-30">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">@lang('Login By Country') (@lang('Last 30 days'))</h5>
                <canvas id="userCountryChart"></canvas>
            </div>
        </div>
    </div>
</div>


@endsection


@push('script')

    <script src="{{asset('assets/admin/js/vendor/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/vendor/chart.js.2.8.0.js')}}"></script>

    <script>
        "use strict";
        var options = {
            series: [{
                name: 'Total Deposit',
                data: [
                  @foreach($months as $month)
                    {{ getAmount(@$depositsMonth->where('months',$month)->first()->depositAmount) }},
                  @endforeach
                ]
            }, {
                name: 'Total Withdraw',
                data: [
                  @foreach($months as $month)
                    {{ getAmount(@$withdrawalMonth->where('months',$month)->first()->withdrawAmount) }},
                  @endforeach
                ]
            }],
            chart: {
                type: 'bar',
                height: 450,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '50%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: @json($months),
            },
            yaxis: {
                title: {
                    text: "{{__($general->cur_sym)}}",
                    style: {
                        color: '#7c97bb'
                    }
                }
            },
            grid: {
                xaxis: {
                    lines: {
                        show: false
                    }
                },
                yaxis: {
                    lines: {
                        show: false
                    }
                },
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "{{__($general->cur_sym)}}" + val + " "
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
        chart.render();
        var ctx = document.getElementById('userBrowserChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: @json($chart['user_browser_counter']->keys()),
                datasets: [{
                    data: {{ $chart['user_browser_counter']->flatten() }},
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                maintainAspectRatio: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
        var ctx = document.getElementById('userOsChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: @json($chart['user_os_counter']->keys()),
                datasets: [{
                    data: {{ $chart['user_os_counter']->flatten() }},
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(0, 0, 0, 0.05)'
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            },
        });
        // Donut chart
        var ctx = document.getElementById('userCountryChart');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: @json($chart['user_country_counter']->keys()),
                datasets: [{
                    data: {{ $chart['user_country_counter']->flatten() }},
                    backgroundColor: [
                        '#ff7675',
                        '#6c5ce7',
                        '#ffa62b',
                        '#ffeaa7',
                        '#D980FA',
                        '#fccbcb',
                        '#45aaf2',
                        '#05dfd7',
                        '#FF00F6',
                        '#1e90ff',
                        '#2ed573',
                        '#eccc68',
                        '#ff5200',
                        '#cd84f1',
                        '#7efff5',
                        '#7158e2',
                        '#fff200',
                        '#ff9ff3',
                        '#08ffc8',
                        '#3742fa',
                        '#1089ff',
                        '#70FF61',
                        '#bf9fee',
                        '#574b90'
                    ],
                    borderColor: [
                        'rgba(231, 80, 90, 0.75)'
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                aspectRatio: 1,
                responsive: true,
                elements: {
                    line: {
                        tension: 0 // disables bezier curves
                    }
                },
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });
        // apex-line chart
        var options = {
        chart: {
            height: 450,
            type: "area",
            toolbar: {
            show: false
            },
            dropShadow: {
            enabled: true,
            enabledSeries: [0],
            top: -2,
            left: 0,
            blur: 10,
            opacity: 0.08
            },
            animations: {
            enabled: true,
            easing: 'linear',
            dynamicAnimation: {
                speed: 1000
            }
            },
        },
        dataLabels: {
            enabled: false
        },
        series: [
            {
            name: "Plus Transactions",
            data: [
                @foreach($trxReport['date'] as $trxDate)
                    {{ @$plusTrx->where('date',$trxDate)->first()->amount ?? 0 }},
                @endforeach
            ]
            },
            {
            name: "Minus Transactions",
            data: [
                    @foreach($trxReport['date'] as $trxDate)
                        {{ @$minusTrx->where('date',$trxDate)->first()->amount ?? 0 }},
                    @endforeach
                ]
            }
        ],
        fill: {
            type: "gradient",
            gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.7,
            opacityTo: 0.9,
            stops: [0, 90, 100]
            }
        },
        xaxis: {
            categories: [
                @foreach($trxReport['date'] as $trxDate)
                    "{{ $trxDate }}",
                @endforeach
            ]
        },
        grid: {
            padding: {
            left: 5,
            right: 5
            },
            xaxis: {
            lines: {
                show: false
            }
            },
            yaxis: {
            lines: {
                show: false
            }
            },
        },
        };
        var chart = new ApexCharts(document.querySelector("#apex-line"), options);
        chart.render();
    </script>
@endpush
