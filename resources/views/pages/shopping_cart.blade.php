@extends('master')

@section('title')
    Giỏ hàng
@endsection

@section('content')
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h3>GIỎ HÀNG TRỐNG</h3>
                <ul>
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a>Giỏ hàng</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================login Area =================-->
    <section class="emty_cart_area p_100">
        <div class="container">
            <div class="emty_cart_inner">
                <i class="icon-handbag icons"></i>
                <h3>Giỏ hàng của bạn đang trống</h3>
                <h4>back to <a href="#">shopping</a></h4>
            </div>
        </div>
    </section>
    <!--================End login Area =================-->
@endsection