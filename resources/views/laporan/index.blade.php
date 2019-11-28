@extends('layouts.app')

@section('content')
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="{{ url('home') }}">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Laporan Penggajian</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Laporan Penggajian </h1>
                        </div>
                    </div>
                </div>
            <hr class="line-seprate">
            </section>
            <!-- END WELCOME-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="">
                                <form action="{{ route('laporan.create') }}" method="get">
                                    <label for="tanggal_awal">Tanggal Awal</label>
                                    <input type="date" name="tanggal_awal" class="">
                                    <label for="tanggal_akhir">Tanggal Akhir</label>
                                    <input type="date" name="tanggal_akhir" class="">
                                    <input type="submit" value="Cetak">
                                </form>
                                </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>tanggal</th>
                                            <th>gaji bersih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($laporan as $key => $row)
                                        
                                        <tr class="tr-shadow">
                                            <td>{!! $loop->iteration !!}</td>
                                            <td>{!! $row->user->name !!}</td>
                                            <td>{!! $row->created_at !!}</td>
                                            <td>{!! number_format($row->gaji_bersih) !!}</td>
                                            {{--  <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largemodal{!!$row->id!!}"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete" data-toggle="modal" data-target="#staticModal{!!$row->id!!}"></i>
                                                    </button>
                                                </div>
                                            </td> --}}
                                        </tr>
                                        <tr class="spacer"></tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </section>

            

@endsection
