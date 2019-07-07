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
                        <a href="{{ route('order-add') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            Add Order
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                        <div class="x_content">
                            <table class="table">
                                <thead>
                                <th>S.N.</th>
                                <th>Employee-Name.</th>
                                <th>Batch:</th>
                                <th>order-list</th>
                                </thead>
                                <tbody>
                                @if($menu)
                                    @foreach($order as $key =>$order_info)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $order_info->e.name }}</td>
                                            <td>{{ $order_info->batch }}</td>
                                            <td>{{ $order_info->order }}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->


@endsection

