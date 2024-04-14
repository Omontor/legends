@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.voucher.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.vouchers.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('guid') ? 'has-error' : '' }}">
                            <label class="required" for="guid">{{ trans('cruds.voucher.fields.guid') }}</label>
                            <input class="form-control" type="text" name="guid" id="guid" value="{{ old('guid', '') }}" required>
                            @if($errors->has('guid'))
                                <span class="help-block" role="alert">{{ $errors->first('guid') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.guid_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('en_description') ? 'has-error' : '' }}">
                            <label for="en_description">{{ trans('cruds.voucher.fields.en_description') }}</label>
                            <input class="form-control" type="text" name="en_description" id="en_description" value="{{ old('en_description', '') }}">
                            @if($errors->has('en_description'))
                                <span class="help-block" role="alert">{{ $errors->first('en_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.en_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('es_description') ? 'has-error' : '' }}">
                            <label for="es_description">{{ trans('cruds.voucher.fields.es_description') }}</label>
                            <input class="form-control" type="text" name="es_description" id="es_description" value="{{ old('es_description', '') }}">
                            @if($errors->has('es_description'))
                                <span class="help-block" role="alert">{{ $errors->first('es_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.es_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('nl_description') ? 'has-error' : '' }}">
                            <label for="nl_description">{{ trans('cruds.voucher.fields.nl_description') }}</label>
                            <input class="form-control" type="text" name="nl_description" id="nl_description" value="{{ old('nl_description', '') }}">
                            @if($errors->has('nl_description'))
                                <span class="help-block" role="alert">{{ $errors->first('nl_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.nl_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('fr_description') ? 'has-error' : '' }}">
                            <label for="fr_description">{{ trans('cruds.voucher.fields.fr_description') }}</label>
                            <input class="form-control" type="text" name="fr_description" id="fr_description" value="{{ old('fr_description', '') }}">
                            @if($errors->has('fr_description'))
                                <span class="help-block" role="alert">{{ $errors->first('fr_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.fr_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('is_multi_use') ? 'has-error' : '' }}">
                            <label class="required">{{ trans('cruds.voucher.fields.is_multi_use') }}</label>
                            <select class="form-control" name="is_multi_use" id="is_multi_use" required>
                                <option value disabled {{ old('is_multi_use', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Voucher::IS_MULTI_USE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('is_multi_use', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('is_multi_use'))
                                <span class="help-block" role="alert">{{ $errors->first('is_multi_use') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.is_multi_use_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('is_for_group') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.voucher.fields.is_for_group') }}</label>
                            <select class="form-control" name="is_for_group" id="is_for_group">
                                <option value disabled {{ old('is_for_group', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Voucher::IS_FOR_GROUP_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('is_for_group', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('is_for_group'))
                                <span class="help-block" role="alert">{{ $errors->first('is_for_group') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.is_for_group_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('group_size') ? 'has-error' : '' }}">
                            <label for="group_size">{{ trans('cruds.voucher.fields.group_size') }}</label>
                            <input class="form-control" type="number" name="group_size" id="group_size" value="{{ old('group_size', '') }}" step="1">
                            @if($errors->has('group_size'))
                                <span class="help-block" role="alert">{{ $errors->first('group_size') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.group_size_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('commission_type') ? 'has-error' : '' }}">
                            <label class="required" for="commission_type_id">{{ trans('cruds.voucher.fields.commission_type') }}</label>
                            <select class="form-control select2" name="commission_type_id" id="commission_type_id" required>
                                @foreach($commission_types as $id => $entry)
                                    <option value="{{ $id }}" {{ old('commission_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('commission_type'))
                                <span class="help-block" role="alert">{{ $errors->first('commission_type') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.commission_type_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                            <label>{{ trans('cruds.voucher.fields.status') }}</label>
                            <select class="form-control" name="status" id="status">
                                <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Voucher::STATUS_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('status', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <span class="help-block" role="alert">{{ $errors->first('status') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucher.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection