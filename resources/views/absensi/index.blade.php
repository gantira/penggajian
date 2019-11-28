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
                                        <li class="list-inline-item">Data Absensi</li>
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
                            <h1 class="title-4">Data Absensi <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#largemodal"><i class="zmdi zmdi-plus"></i>tambah</button>
                            </h1>
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
                                @if (Session::has('message'))
                                    <div class="alert alert-danger">
                                        {!! Session::get('message') !!}
                                    </div>
                                @endif
                            
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nip karyawan (nama)</th>
                                                <th>tanggal</th>
                                                <th>status</th>
                                                <th>jam masuk</th>
                                                <th>jam keluar</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($absensi as $key => $row)
                                            
                                            <tr class="tr-shadow">
                                                <td>{!! $key+1 !!}</td>
                                                <td>{!! $row->user->nip !!} ({!! $row->user->name !!})</td>
                                                <td>
                                                    <span class="block-email">{!! $row->tanggal !!}</span>
                                                </td>
                                                <td class="desc">{{ $row->status }}</td>
                                                <td>{!! $row->jam_masuk !!}</td>
                                                <td>{!! $row->jam_keluar !!}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit" data-toggle="modal" data-target="#largemodal{!!$row->id!!}"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete" data-toggle="modal" data-target="#staticModal{!!$row->id!!}"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>

                                            <!-- modal large -->
                                            <div class="modal fade" id="largemodal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="largemodalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="largemodalLabel">Edit Absensi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        {!! Form::model($row, ['route' => ['absensi.update', $row->id], 'method'=>'patch', 'files'=> true, 'id'=>'update'.$row->id]) !!}
                                                            @include('absensi.form')
                                                        {!! Form::close() !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-primary" onclick="event.preventDefault();getElementById('update{!! $row->id !!}').submit()">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal large -->

                                            <!-- modal static -->
                                            <div class="modal fade" id="staticModal{!!$row->id!!}" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
                                             data-backdrop="static">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticModalLabel">Hapus Data Absensi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {!! Form::open(['route'=>['absensi.destroy', $row->id], 'method'=>'delete', 'id'=>'hapus'.$row->id]) !!}
                                                            <p>Yakin akan menghapus data absensi {!! $row->name !!} ?</p>
                                                            {!! Form::close() !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-primary" onclick="event.preventDefault();getElementById('hapus{{$row->id}}').submit();">Confirm</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal static -->

                                            @endforeach
                                            
                                            <!-- modal large -->
                                            <div class="modal fade" id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="largemodalLabel">Tambah Absensi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        {!! Form::open(['route' => 'absensi.store', 'method'=>'POST', 'files'=> true, 'id'=>'store']) !!}
                                                            @include('absensi.form')
                                                        {!! Form::close() !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                            <button type="button" class="btn btn-primary" onclick="event.preventDefault();getElementById('store').submit()">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end modal large -->
            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                        </div>
                    </div>
                </div>
            </section>

            

@endsection
