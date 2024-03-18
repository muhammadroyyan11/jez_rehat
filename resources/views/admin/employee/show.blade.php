@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.attendance.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.attendances.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.id') }}
                        </th>
                        <td>
                            {{ $attendance->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.user') }}
                        </th>
                        <td>
                            {{ $attendance->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.start_rest') }}
                        </th>
                        <td>
                            {{ $attendance->start_rest }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.end_rest') }}
                        </th>
                        <td>
                            {{ $attendance->end_rest }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.attendance.fields.status') }}
                        </th>
                        <td>
                            {{ $attendance->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.attendances.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection