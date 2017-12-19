@extends('layouts.doc')

@section('content')
    <h1>Introduction</h1>
    <p>
        <b>Laravel Starter </b> was created to facilitate the initial development of web systems (based on the Laravel Framework) and already has some packages included to streamline basic day to day tasks.
        <br/><br/>
        Packages used for development: <br/>
        <ul>
            <li>InfyOm - <a href="http://labs.infyom.com/laravelgenerator/docs/5.5/introduction" target="_blank">http://labs.infyom.com/laravelgenerator/docs/5.5/introduction</a></li>
            <li>Yajra Datatables - <a href="https://datatables.yajrabox.com/" target="_blank">https://datatables.yajrabox.com/</a></li>
            <li>Front End - AdminLTE <a href="https://adminlte.io/" target="_blank">https://adminlte.io/adminlte.io</a> (free version)</li>
        </ul>
        <br/>
        Available resources: <br/>
        <ul>
            <li>
                Native ACL
                <ul>
                    <li>CRUD - Roles</li>
                    <li>CRUD - Permissions</li>
                    <li>CRUD - Users</li>
                </ul>
            </li>
            <li>Multi Languages</li>
        </ul>
        <br/>
        If you want, you can see a live preview here: <a href="{{ route('admin.home') }}">Live Preview - lStarter</a>
    </p>
    <p>
        Laravel Starter Home Page <br/></br/>
        <img src="{{ asset('/doc/images/home.png') }}" class="img-responsive" />
    </p>
@endsection