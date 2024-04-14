@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.partner.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.partners.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $partner->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $partner->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.logo') }}
                                    </th>
                                    <td>
                                        @if($partner->logo)
                                            <a href="{{ $partner->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $partner->logo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.url') }}
                                    </th>
                                    <td>
                                        {{ $partner->url }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.lat') }}
                                    </th>
                                    <td>
                                        {{ $partner->lat }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.lng') }}
                                    </th>
                                    <td>
                                        {{ $partner->lng }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.facebook') }}
                                    </th>
                                    <td>
                                        {{ $partner->facebook }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.instagram') }}
                                    </th>
                                    <td>
                                        {{ $partner->instagram }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.tiktok') }}
                                    </th>
                                    <td>
                                        {{ $partner->tiktok }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $partner->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.gallery') }}
                                    </th>
                                    <td>
                                        @foreach($partner->gallery as $key => $media)
                                            <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $media->getUrl('thumb') }}">
                                            </a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $partner->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.category') }}
                                    </th>
                                    <td>
                                        {{ $partner->category->en_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.en_description') }}
                                    </th>
                                    <td>
                                        {{ $partner->en_description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.es_description') }}
                                    </th>
                                    <td>
                                        {{ $partner->es_description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.fr_description') }}
                                    </th>
                                    <td>
                                        {{ $partner->fr_description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partner.fields.nl_description') }}
                                    </th>
                                    <td>
                                        {{ $partner->nl_description }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.partners.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection