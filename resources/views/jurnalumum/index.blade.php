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
                                        <li class="list-inline-item">Jurnal Umum</li>
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
                            <h1 class="title-4">Jurnal Umum </h1>
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
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Debit</th>
                                                <th>Kredit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jurnalUmum as  $row)
                                            
                                            <tr class="tr-shadow">
                                                <td>{!! $row->created_at !!}</td>
                                                <td>{!! $row->keterangan !!}</td>
                                                <td>{!! number_format($row->debit) !!}</td>
                                                <td>{!! number_format($row->kredit) !!}</td>
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
