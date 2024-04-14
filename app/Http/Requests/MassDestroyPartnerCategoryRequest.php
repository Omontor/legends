<?php

namespace App\Http\Requests;

use App\Models\PartnerCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPartnerCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('partner_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:partner_categories,id',
        ];
    }
}
