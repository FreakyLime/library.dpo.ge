@extends('_MasterPage')

@section('content')

    <div class="pg-body">
        <div class="container">
            <div class="row">
                <div class="gap-60"></div>
                <div class="col-md-8 col-xs-12">
                    <div class="table_block table-responsive mb-40" id="order-detail-content">
                        <table class="table table-bordered" id="cart_summary">
                            <thead>
                            <tr>
                                <th class="cart_product first_item">{{ trans('cart.surati') }}</th>
                                <th class="cart_product first_item">{{ trans('cart.produqcia') }}</th>
                                <th class="cart_unit item">{{ trans('cart.fasi') }}</th>
                                <th class="cart_quantity item">{{ trans('cart.raodenoba') }}</th>
                                <th class="cart_delete last_item">{{ trans('cart.washla') }}</th>
                            </tr>
                            </thead>
                            <tfoot class="dd-list-empty"><tr><td colspan="5">There is no product in it!</td></tr></tfoot>
                            <tbody class="dropdown-product-list">

                            @foreach($cartItems as $cartItem)
                            <tr class="cart_item first_item address_0 odd dd-product-group">
                                <td class="cart_product">
                                    <img alt="" src="{{ asset('public/'.$cartItem->options->image) }}" height="150">
                                </td>
                                <td class="cart_description">
                                    <p class="product-name">
                                        {{ $cartItem->name }}
                                    </p>
                                </td>
                                <td data-title="PRICE" class="cart_unit">
                                    <span class="price">{{ $cartItem->price }} <span class="gel">c</span> </span>
                                </td>

                                <td class="cart_quantity text-center">
                                    <div class="cart_quantity_button clrfix">
                                        <form action="{{ route('cart_update') }}" method="post">
                                            <a title="Subtract" href="#" class="cart_quantity_down btn btn-default btn-minus" rel="nofollow">-</a>
                                            <input type="text" name="qty" value="{{ $cartItem->qty }}" class="cart_quantity_input form-control grey count" autocomplete="off" size="2">
                                            <a title="Add" href="#" class="cart_quantity_up btn btn-default btn-plus" rel="nofollow">+</a>
                                            <br> <br>
                                            {!! Form::token() !!}
                                            <input type="hidden" name="rowId" value="{{ $cartItem->rowId }}">
                                            <button class="btn btn-third-col" style="max-width: 102px !important; padding: 2px 12px !important;" >{{ trans('cart.ganaxleba') }}</button>
                                        </form>
                                    </div>
                                </td>
                                <td class="subtotal text-center"  style="width: 20px">
                                    <a class="close-btn" href="{{ asset('cart/destroy/'.$cartItem->rowId) }}"><i class="icon_close"></i></a>
                                </td>
                            </tr>
                            @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 pull-right">
                    <div class="row">
                        <div class="container col-xs-12 cart-detail">
                            <h6 class="gold-header">{{ trans('cart.kalatis_detalebi') }}</h6>
                            <p class="info"><span class="pull-left col-xs-6">{{ trans('cart.nivtebis_raodenoba') }}:</span><span class="pull-right col-xs-6 text-right">{{ Cart::count() }} {{ trans('cart.nivti') }}</span></p>
                            <p class="info total"><span class="pull-left col-xs-6">{{ trans('cart.jamuri_tanxa') }}:</span><span class="col-xs-6 pull-right text-right">{{ Cart::subtotal() }} <span class="gel">c</span></span></p>

                        </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-sm-8 col-xs-12">
                                        @if(Cart::subtotal() >= 20)
                                            <h4 class="fred fs14"></h4>
                                            <button class="btn btn-md btn-third-col" id="product-video-button" data-target="#product-video-box" data-toggle="modal">
                                                {{ trans('cart.shekvetis_gagzavna') }}
                                            </button>
                                        @else
                                            <h4 class="fred fs14">*{{ trans('cart.wesebi_minimumi_tanxis') }}</h4>
                                            <a class="btn btn-md btn-third-col pasive_btn">
                                                {{ trans('cart.shekvetis_gagzavna') }}
                                            </a>
                                        @endif
                                    </div>
                                    @include('Web._Mail._Forms.Forms')
                                </div>
                            </div>
                    </div>

                </div>

                <div class="gap-70 col-xs-12"></div>
            </div>
        </div>
    </div>

@stop