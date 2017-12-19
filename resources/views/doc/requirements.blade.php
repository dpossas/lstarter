@extends('layouts.doc')

@section('content')
    <h1>Requirements</h1>
    <p>
        The <b>Laravel Starter</b> has a few system requirements :
    </p>
    <ol>
        <li>PHP &gt;= 7.0.0</li>
        <li><a href="https://www.mysql.com/">MySQL</a> installed in your system (or your preferred SGBD)</li>
        <li>The <a href="https://getcomposer.org/">Composer</a> installed in your system</li>
        <li>The <a href="https://laravel.com/docs/5.5/installation">Laravel Framework Installer</a> installed in your system</li>
    </ol>
    <p>
        Now, you can <a href="{{ route('documentation.installation') }}">run</a> the system.
    </p>
@endsection