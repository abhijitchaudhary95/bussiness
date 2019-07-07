@extends('layouts.admin')
@section('content')


    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Order Add</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-3 col-sm-5 col-xs-12 form-group pull-right top_search">
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_content">
                            {{ Form::open(['url'=>route('order-post'),'class'=>'form','method'=>'post','enctype'=>'multipart/form-data']) }}
                            <div class="form-group row">
                                {{ Form::label('e.name','Employee Name:',['class'=>'col-sm-3']) }}
                                <div class="col sm-9">
                                    {{ Form::text('e.name','',['class'=>'form-control','id'=>'e.name','required'=>true]) }}
                                    @error('title')
                                    <span class="alert-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                {{ Form::label('batch','Batch:',['class'=>'col-sm-3']) }}
                                <div class="col sm-9">
                                    {{ Form::text('batch','',['class'=>'form-control','id'=>'batch','required'=>true]) }}
                                </div>
                            </div>

                            <div class="form-control">
                                <select name="Order:" class="form control">
                                    <option value="">Select menu</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                {{ Form::label('','',['class'=>'col-sm-3']) }}
                                <div class="col sm-9">
                                    {{ Form::button('<i class="fa fa-trash" ></i> Reset',['class'=>'btn btn-danger','type'=>'reset']) }}
                                    {{ Form::button('<i class="fa fa-paper-plane" ></i> Submit',['class'=>'btn btn-success','type'=>'submit']) }}
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->


@endsection

