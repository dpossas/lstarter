<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', '#') !!}
    <p>{!! $role->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', trans('modules.roles.fields.name')) !!}
    <p>{!! $role->name !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', trans('modules.roles.fields.title')) !!}
    <p>{!! $role->title !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $role->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $role->updated_at !!}</p>
</div>

