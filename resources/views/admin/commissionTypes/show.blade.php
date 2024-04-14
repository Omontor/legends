@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.commissionType.title') }}
                </div>
                <div class="panel-body">
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

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.relatedData') }}
                </div>
                <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                    <li role="presentation">
                        <a href="#commission_type_vouchers" aria-controls="commission_type_vouchers" role="tab" data-toggle="tab">
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

        </div>
    </div>
</div>
@endsection