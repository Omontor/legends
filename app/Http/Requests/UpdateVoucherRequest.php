<?php

namespace App\Http\Requests;

use App\Models\Voucher;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVoucherRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('voucher_edit');
    }

    public function rules()
    {
        return [
            'guid' => [
                'string',
                'required',
                'unique:vouchers,guid,' . request()->route('voucher')->id,
            ],
            'en_description' => [
                'string',
                'nullable',
            ],
            'es_description' => [
                'string',
                'nullable',
            ],
            'nl_description' => [
                'string',
                'nullable',
            ],
            'fr_description' => [
                'string',
                'nullable',
            ],
            'is_multi_use' => [
                'required',
            ],
            'group_size' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'commission_type_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
