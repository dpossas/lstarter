@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('lstarter.home')
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('lstarter.about')</h3>
                    </div>
                    <div class="box-body">
                        <p>@lang('lstarter.about_html')</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">@lang('lstarter.permission_user')</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-borderd table-condensed">
                            <thead>
                                <tr>
                                    <th>@lang('lstarter.permission_title')</th>
                                    <th class="text-center">@lang('lstarter.permission_status')</th>
                                    <th class="text-center">@lang('lstarter.permission_info')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(\App\Models\Permission::orderBy('title')->get() as $kperm => $permission)
                                    <tr>
                                        <td>
                                            {{ $permission->title }}
                                        </td>
                                        <td class="text-center">
                                            @can($permission->name)
                                                @lang('lstarter.permission_allowed')
                                            @else
                                                @lang('lstarter.permission_denied')
                                            @endcan
                                        </td>
                                        <td class="text-center">
                                            <i class="fa fa-info" title="@lang('lstarter.permission_info_text') {{ '@' }}can('{{ $permission->name }}') todo {{ '@' }}else ... {{ '@' }}endcan"></i>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

