<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', '#') !!}
    <p>{!! $permission->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', trans('modules.permissions.fields.name')) !!}
    <p>{!! $permission->name !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', trans('modules.permissions.fields.title')) !!}
    <p>{!! $permission->title !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $permission->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $permission->updated_at !!}</p>
</div>

