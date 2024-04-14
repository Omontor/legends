<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyPartnerCategoryRequest;
use App\Http\Requests\StorePartnerCategoryRequest;
use App\Http\Requests\UpdatePartnerCategoryRequest;
use App\Models\PartnerCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartnerCategoryController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('partner_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnerCategories = PartnerCategory::all();

        return view('admin.partnerCategories.index', compact('partnerCategories'));
    }

    public function create()
    {
        abort_if(Gate::denies('partner_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partnerCategories.create');
    }

    public function store(StorePartnerCategoryRequest $request)
    {
        $partnerCategory = PartnerCategory::create($request->all());

        return redirect()->route('admin.partner-categories.index');
    }

    public function edit(PartnerCategory $partnerCategory)
    {
        abort_if(Gate::denies('partner_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partnerCategories.edit', compact('partnerCategory'));
    }

    public function update(UpdatePartnerCategoryRequest $request, PartnerCategory $partnerCategory)
    {
        $partnerCategory->update($request->all());

        return redirect()->route('admin.partner-categories.index');
    }

    public function show(PartnerCategory $partnerCategory)
    {
        abort_if(Gate::denies('partner_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnerCategory->load('categoryPartners');

        return view('admin.partnerCategories.show', compact('partnerCategory'));
    }

    public function destroy(PartnerCategory $partnerCategory)
    {
        abort_if(Gate::denies('partner_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnerCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyPartnerCategoryRequest $request)
    {
        $partnerCategories = PartnerCategory::find(request('ids'));

        foreach ($partnerCategories as $partnerCategory) {
            $partnerCategory->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
