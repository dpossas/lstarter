<?php
    return [
        'home' => 'Página Inicial',
        'about' => 'Sobre o projeto',
        'about_html' => 'O <b>Laravel Starter</b> foi criado para facilitar o desenvolvimento inicial de sistemas web (baseados no Framework Laravel) e já possui alguns pacotes inclusos para agilizar as tarefas básicas do dia a dia.
        <br/><br/>
        Pacotes utilizados para o desenvolvimento: <br/>
        <ul>
            <li>InfyOm - <a href="http://labs.infyom.com/laravelgenerator/docs/5.5/introduction" target="_blank">http://labs.infyom.com/laravelgenerator/docs/5.5/introduction</a></li>
            <li>Yajra Datatables - <a href="https://datatables.yajrabox.com/" target="_blank">https://datatables.yajrabox.com/</a></li>
            <li>Front End - AdminLTE <a href="https://adminlte.io/" target="_blank">https://adminlte.io/adminlte.io</a> (Versão básica e gratuita)</li>
        </ul>
        <br/>
        Recursos disponíveis: <br/>
        <ul>
            <li>
                ACL Nativa
                <ul>
                    <li>CRUD - Papéis</li>
                    <li>CRUD - Permissões</li>
                    <li>CRUD - Usuários</li>
                </ul>
            </li>
            <li>Multi Idiomas</li>
        </ul>',

        'permission_user' => 'Permissões do Usuário',
        'permission_title' => 'Permissão',
        'permission_status' => 'Status',
        'permission_info' => 'Info',
        'permission_allowed' => '<i class="fa fa-check-circle text-success" title="Permissão Concedida"></i>',
        'permission_denied' => '<i class="fa fa-lock text-danger" title="Permissão Negada"></i>',
        'permission_info_text' => 'Como usar em uma view:',

        'errors' => [
            '403' => [
                'title' => 'Não autorizado!',
                'message' => 'Você não posui permissão para esta tarefa.'
            ]
        ]

    ];
