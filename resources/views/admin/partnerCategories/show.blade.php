@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.partnerCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.partner-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $partnerCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.en_name') }}
                        </th>
                        <td>
                            {{ $partnerCategory->en_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.spa_name') }}
                        </th>
                        <td>
                            {{ $partnerCategory->spa_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.fr_name') }}
                        </th>
                        <td>
                            {{ $partnerCategory->fr_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.nl_name') }}
                        </th>
                        <td>
                            {{ $partnerCategory->nl_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.en_description') }}
                        </th>
                        <td>
                            {{ $partnerCategory->en_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.es_description') }}
                        </th>
                        <td>
                            {{ $partnerCategory->es_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.fr_description') }}
                        </th>
                        <td>
                            {{ $partnerCategory->fr_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.partnerCategory.fields.nl_description') }}
                        </th>
                        <td>
                            {{ $partnerCategory->nl_description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.partner-categories.index') }}">
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
            <a class="nav-link" href="#category_partners" role="tab" data-toggle="tab">
                {{ trans('cruds.partner.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="category_partners">
            @includeIf('admin.partnerCategories.relationships.categoryPartners', ['partners' => $partnerCategory->categoryPartners])
        </div>
    </div>
</div>

@endsection