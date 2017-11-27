<li class="header">
    @lang('template.main_navigation')
</li>

@can('module_role')
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}">
        <i class="fa fa-edit"></i>
        <span>@lang('modules.roles.title')</span>
    </a>
</li>
@endcan

@can('module_permission')
<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{!! route('permissions.index') !!}">
        <i class="fa fa-edit"></i>
        <span>@lang('modules.permissions.title')</span>
    </a>
</li>
@endcan

@can('module_user')
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}">
        <i class="fa fa-edit"></i>
        <span>@lang('modules.users.title')</span>
    </a>
</li>
@endcan
