@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.create') }} {{ trans('cruds.employee.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.employee.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="user_id">{{ trans('cruds.employee.fields.user') }}</label>
                    <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id"
                        id="user_id">
                        @foreach ($users as $id => $entry)
                            <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>
                                {{ $entry }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('user'))
                        <div class="invalid-feedback">
                            {{ $errors->first('user') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employee.fields.user_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="start_rest">{{ trans('cruds.employee.fields.start_rest') }}</label>
                    <input class="form-control timepicker {{ $errors->has('start_rest') ? 'is-invalid' : '' }}"
                        type="text" name="start_rest" id="start_rest" value="{{ old('start_rest') }}">
                    @if ($errors->has('start_rest'))
                        <div class="invalid-feedback">
                            {{ $errors->first('start_rest') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employee.fields.start_rest_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="end_rest">{{ trans('cruds.employee.fields.end_rest') }}</label>
                    <input class="form-control timepicker {{ $errors->has('end_rest') ? 'is-invalid' : '' }}"
                        type="text" name="end_rest" id="end_rest" value="{{ old('end_rest') }}">
                    @if ($errors->has('end_rest'))
                        <div class="invalid-feedback">
                            {{ $errors->first('end_rest') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employee.fields.end_rest_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="status">{{ trans('cruds.employee.fields.status') }}</label>
                    <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="text"
                        name="status" id="status" value="{{ old('status', '') }}">
                    @if ($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.employee.fields.status_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
