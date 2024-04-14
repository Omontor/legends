<?php

namespace App\Http\Requests;

use App\Models\CommissionType;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCommissionTypeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('commission_type_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'value' => [
                'numeric',
                'required',
            ],
        ];
    }
}
