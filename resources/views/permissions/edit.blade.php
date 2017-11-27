@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('modules.permissions.title')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
       
        {!! Form::model($permission, ['route' => ['permissions.update', $permission->id], 'method' => 'patch']) !!}

            @include('permissions.fields')

        {!! Form::close() !!}
    </div>
@endsection