@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('modules.roles.title')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}

            @include('roles.fields')

        {!! Form::close() !!}
    </div>
@endsection