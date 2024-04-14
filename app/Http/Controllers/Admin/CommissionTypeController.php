<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyCommissionTypeRequest;
use App\Http\Requests\StoreCommissionTypeRequest;
use App\Http\Requests\UpdateCommissionTypeRequest;
use App\Models\CommissionType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CommissionTypeController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('commission_type_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionTypes = CommissionType::all();

        return view('admin.commissionTypes.index', compact('commissionTypes'));
    }

    public function create()
    {
        abort_if(Gate::denies('commission_type_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commissionTypes.create');
    }

    public function store(StoreCommissionTypeRequest $request)
    {
        $commissionType = CommissionType::create($request->all());

        return redirect()->route('admin.commission-types.index');
    }

    public function edit(CommissionType $commissionType)
    {
        abort_if(Gate::denies('commission_type_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.commissionTypes.edit', compact('commissionType'));
    }

    public function update(UpdateCommissionTypeRequest $request, CommissionType $commissionType)
    {
        $commissionType->update($request->all());

        return redirect()->route('admin.commission-types.index');
    }

    public function show(CommissionType $commissionType)
    {
        abort_if(Gate::denies('commission_type_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionType->load('commissionTypeVouchers');

        return view('admin.commissionTypes.show', compact('commissionType'));
    }

    public function destroy(CommissionType $commissionType)
    {
        abort_if(Gate::denies('commission_type_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commissionType->delete();

        return back();
    }

    public function massDestroy(MassDestroyCommissionTypeRequest $request)
    {
        $commissionTypes = CommissionType::find(request('ids'));

        foreach ($commissionTypes as $commissionType) {
            $commissionType->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
