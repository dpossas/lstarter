@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('modules.roles.title')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        {!! Form::open(['route' => 'roles.store']) !!}

            @include('roles.fields')

        {!! Form::close() !!}
    </div>
@endsection
