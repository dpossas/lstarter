<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('name', trans('modules.users.fields.name')) !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Email Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('email', trans('modules.users.fields.email')) !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Password Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('password', trans('modules.users.fields.password')) !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    @if ( auth()->user()->isSuperAdmin() )
                    <!-- Remember Token Field -->
                    <div class="form-group col-sm-1">
                        {!! Form::label('super_admin', trans('modules.users.fields.super_admin')) !!}
                        {!! Form::checkbox('super_admin', 1, null, ['class' => '']) !!}
                    </div>
                    @endif
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
                                @if( isset($user) && $user->roles->contains($role->id) )
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
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    <a href="{!! route('users.index') !!}" class="btn btn-default">@lang('buttons.cancel')</a>
                    @if( auth()->user()->can('module_user.create') || auth()->user()->can('module_user.edit') )
                    {!! Form::submit(trans('buttons.save'), ['class' => 'btn btn-primary pull-right']) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>