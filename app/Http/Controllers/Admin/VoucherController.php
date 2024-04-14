<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVoucherRequest;
use App\Http\Requests\StoreVoucherRequest;
use App\Http\Requests\UpdateVoucherRequest;
use App\Models\CommissionType;
use App\Models\Voucher;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoucherController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('voucher_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vouchers = Voucher::with(['commission_type'])->get();

        $commission_types = CommissionType::get();

        return view('admin.vouchers.index', compact('commission_types', 'vouchers'));
    }

    public function create()
    {
        abort_if(Gate::denies('voucher_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commission_types = CommissionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.vouchers.create', compact('commission_types'));
    }

    public function store(StoreVoucherRequest $request)
    {
        $voucher = Voucher::create($request->all());

        return redirect()->route('admin.vouchers.index');
    }

    public function edit(Voucher $voucher)
    {
        abort_if(Gate::denies('voucher_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $commission_types = CommissionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $voucher->load('commission_type');

        return view('admin.vouchers.edit', compact('commission_types', 'voucher'));
    }

    public function update(UpdateVoucherRequest $request, Voucher $voucher)
    {
        $voucher->update($request->all());

        return redirect()->route('admin.vouchers.index');
    }

    public function show(Voucher $voucher)
    {
        abort_if(Gate::denies('voucher_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $voucher->load('commission_type', 'voucherVoucherRedeems');

        return view('admin.vouchers.show', compact('voucher'));
    }

    public function destroy(Voucher $voucher)
    {
        abort_if(Gate::denies('voucher_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $voucher->delete();

        return back();
    }

    public function massDestroy(MassDestroyVoucherRequest $request)
    {
        $vouchers = Voucher::find(request('ids'));

        foreach ($vouchers as $voucher) {
            $voucher->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
