@extends('layouts.master')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content-header')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" style="font-family:'Dancing Script', cursive;">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        @if (Auth::user()->level == 'admin')
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>#</h3>
                        <p>Orders Count</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>#</h3>
                        <p><b>Product</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>#</h3>

                        <p>Income Today</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div> 
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                         <h3>{{ $user }}</h3> 
                         <p><b>User</b></p>                    
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('User.index')}}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: chocolate;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 mb-4">
                                <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                    <div class="hero-inner" style="color: white; text-align: center"><br>
                                        <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                        <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @elseif (Auth::user()->level == 'manager')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>#</h3>
                        <p>Orders Count</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>#</h3>
                        <p><b>Product</b></p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('product.index') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: chocolate;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 mb-4">
                                <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                    <div class="hero-inner" style="color: white; text-align: center"><br>
                                        <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                        <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @else
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card" style="background-color: chocolate;">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 mb-4">
                                <div class="hero hero-bg-image hero-bg-parallax" style="font-family:'Dancing Script', cursive">
                                    <div class="hero-inner" style="color: white; text-align: center"><br>
                                        <h2>Selamat datang, di Dashboard {{ Auth::user()->name }} !</h2>
                                        <p class="lead"><b>Hak akses {{ Auth::user()->level }} telah diberikan kepada akun Anda !</b></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
@endsection