@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.commissionType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionType.fields.id') }}
                        </th>
                        <td>
                            {{ $commissionType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionType.fields.name') }}
                        </th>
                        <td>
                            {{ $commissionType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.commissionType.fields.value') }}
                        </th>
                        <td>
                            {{ $commissionType->value }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.commission-types.index') }}">
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
            <a class="nav-link" href="#commission_type_vouchers" role="tab" data-toggle="tab">
                {{ trans('cruds.voucher.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="commission_type_vouchers">
            @includeIf('admin.commissionTypes.relationships.commissionTypeVouchers', ['vouchers' => $commissionType->commissionTypeVouchers])
        </div>
    </div>
</div>

@endsection