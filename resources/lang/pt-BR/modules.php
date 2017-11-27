<?php
    return [
        'permissions' => [
            'title' => 'Permissões',

            'fields' => [
                'name' => 'Nome',
                'title' => 'Título'
            ]
        ],

        'roles' => [
            'title' => 'Papéis',

            'fields' => [
                'name' => 'Nome',
                'title' => 'Título'
            ]
        ],

        'users' => [
            'title' => 'Usuários',

            'fields' => [
                'name' => 'Nome',
                'email' => 'Email',
                'password' => 'Senha',
                'remember_token' => 'Token',
                'super_admin' => 'Super Administrador'
            ]
        ]
    ];