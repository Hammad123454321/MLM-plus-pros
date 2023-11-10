@extends($activeTemplate . 'layouts.frontend')
@section('content')
  
  <section class="pricing-table">
            <div class="container">
                <div class="block-heading mt-5 mb-5">
                    <h2 class="text-center">Plans</h2>
                </div>
                <div class="row justify-content-md-center">
                     @foreach ($plans as $plan)
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="item">
                            <div class="heading">
                                <h3>{{ __($plan->name) }}</h3>
                            </div>
                            <div class="features mt-4 mb-4">
                                <div class="point"><i class="bi bi-check-circle-fill"></i> @lang('Plan Details')</div>
                                <div class="point"><i class="bi bi-check-circle-fill"></i> @lang('Daily Limit') : {{ $plan->daily_limit }} @lang('PTC')</div>
                                <div class="point"><i class="bi bi-check-circle-fill"></i> @lang('Referral Bonus') : @lang('Upto') {{ $plan->ref_level }} @lang('Level')</div>
                                <div class="point"><i class="bi bi-check-circle-fill"></i>@lang('Plan Price') : {{ showAmount($plan->price) }} {{ __($general->cur_text) }}</div>
                            </div>
                             @if (@auth()->user()->runningPlan && @auth()->user()->plan_id == $plan->id)
                            <button class="btn btn-block btn-outline-primary w-100 text-center package-disabled" data-id="{{ $plan->id }}" type="submit">
                            @lang('Current Package')</button>
                             @else
                             <button class="btn btn-block btn-outline-primary w-100 text-center buyBtn" data-id="{{ $plan->id }}">@lang('Subscribe Now')</button>
                             @endif
                        </div>
                         
                    </div>
                    @endforeach
               
                </div>
            </div>
        </section>
    
    <div class="modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <form method="post" action="{{ route('user.buyPlan') }}">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-header">
                        <strong class="modal-title"> @lang('Confirmation')</strong>

                        <button type="button" class="close btn btn-sm" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        @auth
                        <strong>@lang('Are you sure to subscribe this plan')?</strong>
                            @if(auth()->user()->runningPlan)
                            <code class="d-block">@lang('If you subscribe to this one. Your old limitation will reset according to this package.')</code>
                            @endif
                        @else
                        <strong>@lang('Please login to subscribe plan')</strong>
                        @endauth
                    </div>
                    <div class="modal-footer">
                        @auth
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">@lang('No')</button>
                            <button type="submit" class="btn btn-base">@lang('Yes')</button>
                        @else
                            <a href="{{ route('user.login') }}" class="btn btn-base w-100">@lang('Login')</a>
                        @endauth
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
@push('style')
    <style>
        .package-disabled {
            opacity: 0.5;
        }
    </style>
@endpush
@push('script')
    <script type="text/javascript">
        (function($) {
            "use strict";
            $('.buyBtn').click(function() {
                var modal = $('#BuyModal');
                modal.find('input[name=id]').val($(this).data('id'));
                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush
