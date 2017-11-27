@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('modules.permissions.title')
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        
        {!! Form::open(['route' => 'permissions.store']) !!}

            @include('permissions.fields')

        {!! Form::close() !!}
    </div>
@endsection
