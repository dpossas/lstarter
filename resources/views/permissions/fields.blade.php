<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', trans('modules.permissions.fields.name')) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Title Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('title', trans('modules.permissions.fields.title')) !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4>@lang('modules.roles.title')</h4>
                    </div>
                    @foreach( \App\Models\Role::orderBy('title','asc')->get() as $krole => $role )
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" value="{{ $role->id }}" class="minimal" name="roles[]"
                                @if( isset($permission) && $permission->roles->contains($role->id) )
                                checked="checked"
                                @endif
                                 /> {{ $role->title }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="box-footer">
                <a href="{!! route('permissions.index') !!}" class="btn btn-default">@lang('buttons.cancel')</a>
                @if( auth()->user()->can('module_permission.create') || auth()->user()->can('module_permission.edit') )
                {!! Form::submit(trans('buttons.save'), ['class' => 'btn btn-primary pull-right']) !!}
                @endif
            </div>
        </div>
    </div>
</div>