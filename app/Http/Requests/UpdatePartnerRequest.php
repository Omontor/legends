<?php

namespace App\Http\Requests;

use App\Models\Partner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePartnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('partner_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'url' => [
                'string',
                'nullable',
            ],
            'lat' => [
                'numeric',
            ],
            'lng' => [
                'numeric',
            ],
            'facebook' => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'nullable',
            ],
            'tiktok' => [
                'string',
                'nullable',
            ],
            'email' => [
                'required',
                'unique:partners,email,' . request()->route('partner')->id,
            ],
            'gallery' => [
                'array',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'en_description' => [
                'string',
                'nullable',
            ],
            'es_description' => [
                'string',
                'nullable',
            ],
            'fr_description' => [
                'string',
                'nullable',
            ],
            'nl_description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
