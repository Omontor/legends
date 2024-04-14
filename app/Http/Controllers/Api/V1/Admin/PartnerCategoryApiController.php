<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartnerCategoryRequest;
use App\Http\Requests\UpdatePartnerCategoryRequest;
use App\Http\Resources\Admin\PartnerCategoryResource;
use App\Models\PartnerCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartnerCategoryApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('partner_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartnerCategoryResource(PartnerCategory::all());
    }

    public function store(StorePartnerCategoryRequest $request)
    {
        $partnerCategory = PartnerCategory::create($request->all());

        return (new PartnerCategoryResource($partnerCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PartnerCategory $partnerCategory)
    {
        abort_if(Gate::denies('partner_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PartnerCategoryResource($partnerCategory);
    }

    public function update(UpdatePartnerCategoryRequest $request, PartnerCategory $partnerCategory)
    {
        $partnerCategory->update($request->all());

        return (new PartnerCategoryResource($partnerCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PartnerCategory $partnerCategory)
    {
        abort_if(Gate::denies('partner_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnerCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
