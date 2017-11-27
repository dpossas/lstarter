@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('lstarter.errors.403.title')
        </h1>
    </section>
    <div class="content">
        @lang('lstarter.errors.403.message')
        <br/><br/>
        <a href="{{URL::previous()}}" class="btn btn-default">@lang('buttons.back')</a>
    </div>
@endsection

