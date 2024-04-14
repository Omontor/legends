<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVoucherRedeemRequest;
use App\Http\Requests\StoreVoucherRedeemRequest;
use App\Http\Requests\UpdateVoucherRedeemRequest;
use App\Models\Voucher;
use App\Models\VoucherRedeem;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VoucherRedeemsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('voucher_redeem_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $voucherRedeems = VoucherRedeem::with(['voucher'])->get();

        return view('admin.voucherRedeems.index', compact('voucherRedeems'));
    }

    public function create()
    {
        abort_if(Gate::denies('voucher_redeem_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vouchers = Voucher::pluck('guid', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.voucherRedeems.create', compact('vouchers'));
    }

    public function store(StoreVoucherRedeemRequest $request)
    {
        $voucherRedeem = VoucherRedeem::create($request->all());

        return redirect()->route('admin.voucher-redeems.index');
    }

    public function edit(VoucherRedeem $voucherRedeem)
    {
        abort_if(Gate::denies('voucher_redeem_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vouchers = Voucher::pluck('guid', 'id')->prepend(trans('global.pleaseSelect'), '');

        $voucherRedeem->load('voucher');

        return view('admin.voucherRedeems.edit', compact('voucherRedeem', 'vouchers'));
    }

    public function update(UpdateVoucherRedeemRequest $request, VoucherRedeem $voucherRedeem)
    {
        $voucherRedeem->update($request->all());

        return redirect()->route('admin.voucher-redeems.index');
    }

    public function show(VoucherRedeem $voucherRedeem)
    {
        abort_if(Gate::denies('voucher_redeem_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $voucherRedeem->load('voucher');

        return view('admin.voucherRedeems.show', compact('voucherRedeem'));
    }

    public function destroy(VoucherRedeem $voucherRedeem)
    {
        abort_if(Gate::denies('voucher_redeem_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $voucherRedeem->delete();

        return back();
    }

    public function massDestroy(MassDestroyVoucherRedeemRequest $request)
    {
        $voucherRedeems = VoucherRedeem::find(request('ids'));

        foreach ($voucherRedeems as $voucherRedeem) {
            $voucherRedeem->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
