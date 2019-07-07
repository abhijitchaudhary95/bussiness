@extends('layouts.admin')
@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Menu List</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-3 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <a href="{{ route('menu-add') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>
                            Add Menu
                        </a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <table class="table">
                            <thead>
                                <th>S.N.</th>
                                <th>Food-Name.</th>
                                <th>Day</th>
                            </thead>
                            <tbody>
                                @if($menu)
                                    @foreach($menu as $key =>$menu_info)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $menu_info->name }}</td>
                                            <td>{{ $menu_info->day }}</td>
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
    <!-- /page content -->


@endsection

