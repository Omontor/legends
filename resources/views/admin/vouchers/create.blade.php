@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.voucher.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.vouchers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="guid">{{ trans('cruds.voucher.fields.guid') }}</label>
                <input class="form-control {{ $errors->has('guid') ? 'is-invalid' : '' }}" type="text" name="guid" id="guid" value="{{ old('guid', '') }}" required>
                @if($errors->has('guid'))
                    <div class="invalid-feedback">
                        {{ $errors->first('guid') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.guid_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="en_description">{{ trans('cruds.voucher.fields.en_description') }}</label>
                <input class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" type="text" name="en_description" id="en_description" value="{{ old('en_description', '') }}">
                @if($errors->has('en_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.en_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="es_description">{{ trans('cruds.voucher.fields.es_description') }}</label>
                <input class="form-control {{ $errors->has('es_description') ? 'is-invalid' : '' }}" type="text" name="es_description" id="es_description" value="{{ old('es_description', '') }}">
                @if($errors->has('es_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('es_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.es_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nl_description">{{ trans('cruds.voucher.fields.nl_description') }}</label>
                <input class="form-control {{ $errors->has('nl_description') ? 'is-invalid' : '' }}" type="text" name="nl_description" id="nl_description" value="{{ old('nl_description', '') }}">
                @if($errors->has('nl_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nl_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.nl_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fr_description">{{ trans('cruds.voucher.fields.fr_description') }}</label>
                <input class="form-control {{ $errors->has('fr_description') ? 'is-invalid' : '' }}" type="text" name="fr_description" id="fr_description" value="{{ old('fr_description', '') }}">
                @if($errors->has('fr_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fr_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.fr_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.voucher.fields.is_multi_use') }}</label>
                <select class="form-control {{ $errors->has('is_multi_use') ? 'is-invalid' : '' }}" name="is_multi_use" id="is_multi_use" required>
                    <option value disabled {{ old('is_multi_use', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Voucher::IS_MULTI_USE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('is_multi_use', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('is_multi_use'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_multi_use') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.is_multi_use_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.voucher.fields.is_for_group') }}</label>
                <select class="form-control {{ $errors->has('is_for_group') ? 'is-invalid' : '' }}" name="is_for_group" id="is_for_group">
                    <option value disabled {{ old('is_for_group', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Voucher::IS_FOR_GROUP_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('is_for_group', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('is_for_group'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_for_group') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.is_for_group_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="group_size">{{ trans('cruds.voucher.fields.group_size') }}</label>
                <input class="form-control {{ $errors->has('group_size') ? 'is-invalid' : '' }}" type="number" name="group_size" id="group_size" value="{{ old('group_size', '') }}" step="1">
                @if($errors->has('group_size'))
                    <div class="invalid-feedback">
                        {{ $errors->first('group_size') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.group_size_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="commission_type_id">{{ trans('cruds.voucher.fields.commission_type') }}</label>
                <select class="form-control select2 {{ $errors->has('commission_type') ? 'is-invalid' : '' }}" name="commission_type_id" id="commission_type_id" required>
                    @foreach($commission_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('commission_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('commission_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.voucher.fields.commission_type_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection