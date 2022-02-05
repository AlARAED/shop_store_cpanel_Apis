@extends('superadmin.cpanel.layout.index')

@section('content')

    <div class="ks-content">
        <div class="ks-body" style="padding-top:0px!important;">
            <div class="ks-dashboard-tabbed-sidebar">
                <div class="ks-dashboard-tabbed-sidebar-widgets">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card ks-widget-payment-simple-amount-item ks-purple">
                                <div class="payment-simple-amount-item-icon-block">
                                    <span class="ks-icon-combo-chart ks-icon"></span>
                                </div>

                                <div class="payment-simple-amount-item-body">
                                    <div class="payment-simple-amount-item-amount">
                                        <span class="ks-amount">$9.24</span>
                                        <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                    </div>
                                    <div class="payment-simple-amount-item-description">
                                        الربح الاجمالى  <span class="ks-progress-type">(+$1.89)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card ks-widget-payment-simple-amount-item ks-green">
                                <div class="payment-simple-amount-item-icon-block">
                                    <span class="la la-pie-chart ks-icon"></span>
                                </div>

                                <div class="payment-simple-amount-item-body">
                                    <div class="payment-simple-amount-item-amount">
                                        <span class="ks-amount">$2.190</span>
                                        <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                    </div>
                                    <div class="payment-simple-amount-item-description">
                                        عدد الطلبات المستلمة  <span class="ks-progress-type">(+$1.89)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card ks-widget-payment-simple-amount-item ks-pink">
                                <div class="payment-simple-amount-item-icon-block">
                                    <span class="ks-icon-user ks-icon"></span>
                                </div>

                                <div class="payment-simple-amount-item-body">
                                    <div class="payment-simple-amount-item-amount">
                                        <span class="ks-amount">23</span>
                                        <span class="ks-amount-icon ks-icon-circled-down-left"></span>
                                    </div>
                                    <div class="payment-simple-amount-item-description">
                                        عدد المتاجر  <span class="ks-progress-type">(+$1.89)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card ks-widget-payment-simple-amount-item ks-orange">
                                <div class="payment-simple-amount-item-icon-block">
                                    <span class="la la-area-chart ks-icon"></span>
                                </div>

                                <div class="payment-simple-amount-item-body">
                                    <div class="payment-simple-amount-item-amount">
                                        <span class="ks-amount">$431.2</span>
                                        <span class="ks-amount-icon ks-icon-circled-up-right"></span>
                                    </div>
                                    <div class="payment-simple-amount-item-description">
                                        Average Profit <span class="ks-progress-type">(+$1.89)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card ks-card-widget ks-widget-chart-orders">
                                <h5 class="card-header">
                                    Orders

                                    <div class="ks-controls">
                                        <a href="#" class="ks-control-link">January 2017</a>
                                    </div>
                                </h5>
                                <div class="card-block">
                                    <div class="ks-chart-orders-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>



<script type="application/javascript">
    (function ($) {
        $(document).ready(function () {
            @if (session()->has('flash_notification.success'))
            setTimeout(function () {
                new Noty({
                    {{--                        text: '<strong>مرحباً بك يا {{Auth::user()->name}} في لوحة التحكم </strong>! <br> تم دخولك بنجاح.',--}}
                    text: '{{__('You have been successfully logged in.')}}<br>{{__('Welcome, :Name, to the control panel', ['Name' => Auth::user()->name])}}',
                    type: 'success',
                    theme: 'mint',
                    @if(App::getLocale() == 'ar')
                    layout: 'topLeft', @else layout: 'topRight',
                    @endif
                    timeout: 3000
                }).show();
            }, 1500);
            @endif


        });
    })(jQuery);
</script>
@endsection