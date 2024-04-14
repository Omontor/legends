<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPartnerDashboardRequest;
use App\Http\Requests\StorePartnerDashboardRequest;
use App\Http\Requests\UpdatePartnerDashboardRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PartnerDashboardController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('partner_dashboard_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partnerDashboards.index');
    }

    public function create()
    {
        abort_if(Gate::denies('partner_dashboard_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partnerDashboards.create');
    }

    public function store(StorePartnerDashboardRequest $request)
    {
        $partnerDashboard = PartnerDashboard::create($request->all());

        return redirect()->route('admin.partner-dashboards.index');
    }

    public function edit(PartnerDashboard $partnerDashboard)
    {
        abort_if(Gate::denies('partner_dashboard_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partnerDashboards.edit', compact('partnerDashboard'));
    }

    public function update(UpdatePartnerDashboardRequest $request, PartnerDashboard $partnerDashboard)
    {
        $partnerDashboard->update($request->all());

        return redirect()->route('admin.partner-dashboards.index');
    }

    public function show(PartnerDashboard $partnerDashboard)
    {
        abort_if(Gate::denies('partner_dashboard_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.partnerDashboards.show', compact('partnerDashboard'));
    }

    public function destroy(PartnerDashboard $partnerDashboard)
    {
        abort_if(Gate::denies('partner_dashboard_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $partnerDashboard->delete();

        return back();
    }

    public function massDestroy(MassDestroyPartnerDashboardRequest $request)
    {
        $partnerDashboards = PartnerDashboard::find(request('ids'));

        foreach ($partnerDashboards as $partnerDashboard) {
            $partnerDashboard->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
