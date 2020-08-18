@extends('layouts.lay_admin')
@section('page_css')
    <link href="{{ asset('global/plugins/bower_components/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('global/plugins/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">
    @endsection
@section('content')
    <!-- START @PAGE CONTENT -->
    <section id="page-content">
            <!-- Start page header -->
            <div class="header-content">
                <h2><i class="fa fa-table"></i> Catalogs<span>List</span></h2>
                <div class="breadcrumb-wrapper hidden-xs">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="{{ url('admin/dashboard') }}">Dashboard</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Catalogs</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">List</li>
                    </ol>
                </div><!-- /.breadcrumb-wrapper -->
            </div><!-- /.header-content -->
            <!--/ End page header -->

            <!-- Start body content -->
            <div class="body-content animated fadeIn">

                <div class="row">
                    <div class="col-md-12">

                        <!-- Start basic color table -->
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="pull-left">
                                    <h3 class="panel-title">Catalogs</h3>
                                </div>
                                <div class="pull-right">

                                </div>
                                <div class="clearfix"></div>
                            </div><!-- /.panel-heading -->
                            <div class="panel-body no-padding">
                                <div class="table-responsive" style="margin-top: -1px;">
                                    <table class="table table-striped table-primary">
                                        <thead>
                                        <tr>
                                            <th class="bottom-right">Catalog For</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Created By</th>
                                            <th>Pages Count</th>
                                            <th>Status</th>
                                            <th class="text-center" style="width: 12%;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(@$catalogs as $key => $catalog)
                                        <tr>
                                            <td class="bottom-right">
                                                {{ @$catalog->catalog_for }}
                                            </td>
                                            <td class=""><a href="{{ @$catalog->url }}"> {{ @$catalog->title }}</a></td>
                                            <td>{{ Str::limit(@$catalog->description,50) }}</td>
                                            <td>
                                                <a href="{{ @$catalog->admin->url }}">{{ @$catalog->admin->name }}</a><br>
                                                <small class="text-muted">{{ $catalog->created_date }}</small>
                                            </td>
                                            <td class="text-center">{{ @$catalog->page_count }}</td>
                                            <td class="text-center">
                                                {!! @$catalog->status_badge !!}
                                            </td>
                                            <td class="text-center">
                                                <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
                                                <a href="#" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                    {{ $catalogs->links() }}
                                    </div>
                                </div><!-- /.table-responsive -->
                            </div><!-- /.panel-body -->
                        </div><!-- /.panel -->
                        <!--/ End basic color table -->

                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->


            </div><!-- /.body-content -->
            <!--/ End body content -->

    @include('layouts._footer-admin')

    </section><!-- /#page-content -->
    <!--/ END PAGE CONTENT -->
@endsection
@section('page_js')
    <script src="{{ asset('js/BackEnd/apps.js') }}"></script>
    <script src="{{ asset('js/BackEnd/pages/blankon.table.color.js') }}"></script>
    <script src="{{ asset('js/BackEnd/demo.js') }}"></script>


@endsection
