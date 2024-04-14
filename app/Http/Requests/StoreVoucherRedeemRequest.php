<?php

namespace App\Http\Requests;

use App\Models\VoucherRedeem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVoucherRedeemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('voucher_redeem_create');
    }

    public function rules()
    {
        return [
            'voucher_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
