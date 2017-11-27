{!! Form::open(['route' => ['roles.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    @can('module_role.show')
    <a href="{{ route('roles.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    @endcan
    
    @can('module_role.edit')
    <a href="{{ route('roles.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    @endcan

    @can('module_role.delete')
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('".trans('buttons.confirm_message')."')"
    ]) !!}
    @endcan
</div>
{!! Form::close() !!}
