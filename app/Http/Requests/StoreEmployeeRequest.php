<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('employee_create');
    }

    public function rules()
    {
        return [
            'start_rest' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'end_rest' => [
                'date_format:' . config('panel.time_format'),
                'nullable',
            ],
            'status' => [
                'string',
                'nullable',
            ],
        ];
    }
}
