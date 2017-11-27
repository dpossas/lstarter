@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">
            @lang('modules.roles.title')
        </h1>
        <h1 class="pull-right">
            @can('module_role.create')
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('roles.create') !!}">
                @lang('buttons.new')
            </a>
            @endcan
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                            @include('roles.table')
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

