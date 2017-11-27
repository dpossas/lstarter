<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', trans('modules.roles.fields.name')) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Title Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('title', trans('modules.roles.fields.title')) !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4>@lang('modules.permissions.title')</h4>
                    </div>
                    @foreach( \App\Models\Permission::orderBy('title','asc')->get() as $kpermission => $permission )
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>
                                <input type="checkbox" value="{{ $permission->id }}" class="minimal" name="permissions[]"
                                @if( isset($role) && $role->permissions->contains($permission->id) )
                                checked="checked"
                                @endif
                                 /> {{ $permission->title }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="box-footer">
                <a href="{!! route('roles.index') !!}" class="btn btn-default">@lang('buttons.cancel')</a>
                @if( auth()->user()->can('module_role.create') || auth()->user()->can('module_role.edit') )
                {!! Form::submit(trans('buttons.save'), ['class' => 'btn btn-primary pull-right']) !!}
                @endif
            </div>
        </div>
    </div>
</div>