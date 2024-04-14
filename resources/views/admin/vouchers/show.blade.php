@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.voucher.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vouchers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.id') }}
                        </th>
                        <td>
                            {{ $voucher->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.guid') }}
                        </th>
                        <td>
                            {{ $voucher->guid }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.en_description') }}
                        </th>
                        <td>
                            {{ $voucher->en_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.es_description') }}
                        </th>
                        <td>
                            {{ $voucher->es_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.nl_description') }}
                        </th>
                        <td>
                            {{ $voucher->nl_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.fr_description') }}
                        </th>
                        <td>
                            {{ $voucher->fr_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.is_multi_use') }}
                        </th>
                        <td>
                            {{ App\Models\Voucher::IS_MULTI_USE_SELECT[$voucher->is_multi_use] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.is_for_group') }}
                        </th>
                        <td>
                            {{ App\Models\Voucher::IS_FOR_GROUP_SELECT[$voucher->is_for_group] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.group_size') }}
                        </th>
                        <td>
                            {{ $voucher->group_size }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.voucher.fields.commission_type') }}
                        </th>
                        <td>
                            {{ $voucher->commission_type->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.vouchers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#voucher_voucher_redeems" role="tab" data-toggle="tab">
                {{ trans('cruds.voucherRedeem.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="voucher_voucher_redeems">
            @includeIf('admin.vouchers.relationships.voucherVoucherRedeems', ['voucherRedeems' => $voucher->voucherVoucherRedeems])
        </div>
    </div>
</div>

@endsection