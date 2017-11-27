<?php
    return [
        'home' => 'Home',
        'about' => 'About the project',
        'about_html' => '<b>Laravel Starter </b> was created to facilitate the initial development of web systems (based on the Laravel Framework) and already has some packages included to streamline basic day to day tasks.
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
        </ul>',

        'permission_user' => 'User Permissions',
        'permission_title' => 'Permission',
        'permission_status' => 'Status',
        'permission_info' => 'Info',
        'permission_allowed' => '<i class="fa fa-check-circle text-success" title="Permission granted"></i>',
        'permission_denied' => '<i class="fa fa-lock text-danger" title="Permission denied"></i>',
        'permission_info_text' => 'How to use in a view:',

        'errors' => [
            '403' => [
                'title' => 'Not authorized!',
                'message' => 'You do not have permission for this task.'
            ]
        ]

    ];
