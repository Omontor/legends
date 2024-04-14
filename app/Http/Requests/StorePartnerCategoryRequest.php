<?php

namespace App\Http\Requests;

use App\Models\PartnerCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePartnerCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('partner_category_create');
    }

    public function rules()
    {
        return [
            'en_name' => [
                'string',
                'required',
                'unique:partner_categories',
            ],
            'spa_name' => [
                'string',
                'required',
            ],
            'fr_name' => [
                'string',
                'required',
            ],
            'nl_name' => [
                'string',
                'required',
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
