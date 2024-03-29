@extends('layouts.admin')
@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Order List</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-3 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <a href="{{ route('menu-add') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            Add Banner
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Plain Page</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            Add content to the page ...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->


@endsection

