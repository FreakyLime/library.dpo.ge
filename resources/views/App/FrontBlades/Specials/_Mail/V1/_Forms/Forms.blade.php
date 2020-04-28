<form action="{{ route('cart_order') }}" method="post" class="form-inline bottom-buttons">
    {{--HERE POP--}}
    @if(session('success'))
        <h1>{{session('success')}}</h1>
    @endif
    <div aria-hidden="true" aria-labelledby="product-added" role="dialog" tabindex="-1" id="product-video-box" class="modal fade" style="display: none;">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <a aria-hidden="true" data-dismiss="modal" class="modal-close" href="#"><i class="icon_close"></i></a>
                    <h4 class="modal-title bpg_caps">{{ trans('web.order_sat') }}</h4>
                </div>
                <div class="modal-body modal-body-info">
                    {{--FORMS--}}
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <form action="#" class="personal-detail">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="type-text">
                                            <input type="text" name="order_name" placeholder="{{ trans('web.order_name') }} *" class="form-control placeholder-fix" required>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="type-text">
                                            <input type="text" name="order_lastname" placeholder="{{ trans('web.order_lastname') }} *" class="form-control placeholder-fix" required>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="type-text">
                                            <input type="text" name="order_company" placeholder="{{ trans('web.order_company') }}" class="form-control placeholder-fix"></label>
                                    </div>

                                    <div class="form-group">
                                        <label class="type-text">
                                            <input type="text" name="order_company_code" placeholder="{{ trans('web.order_company_code') }}" class="form-control placeholder-fix"></label>
                                    </div>

                                    <div class="form-group">
                                        <label class="type-text">
                                            <input type="text" name="order_email" placeholder="{{ trans('web.order_email') }} *" class="form-control placeholder-fix"></label>
                                    </div>

                                    <div class="form-group">
                                        <label class="type-text">
                                            <input type="text" name="order_phone" placeholder="{{ trans('web.order_phone') }} *" class="form-control placeholder-fix" required>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both; height: 20px"></div>
                            <div class="row">
                                {{ csrf_field() }}
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-lg btn-sec-col bpg_caps">{{ trans('web.order_send_button') }}</button>
                                </div>
                            </div>
                    </div>
                    <div style="clear: both"></div>
                    {{--FORMS--}}
                </div>
            </div>
        </div>
    </div>
    {{--HERE POP--}}
</form>