@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.partnerCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.partner-categories.update", [$partnerCategory->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="en_name">{{ trans('cruds.partnerCategory.fields.en_name') }}</label>
                <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ old('en_name', $partnerCategory->en_name) }}" required>
                @if($errors->has('en_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.en_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="spa_name">{{ trans('cruds.partnerCategory.fields.spa_name') }}</label>
                <input class="form-control {{ $errors->has('spa_name') ? 'is-invalid' : '' }}" type="text" name="spa_name" id="spa_name" value="{{ old('spa_name', $partnerCategory->spa_name) }}" required>
                @if($errors->has('spa_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('spa_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.spa_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="fr_name">{{ trans('cruds.partnerCategory.fields.fr_name') }}</label>
                <input class="form-control {{ $errors->has('fr_name') ? 'is-invalid' : '' }}" type="text" name="fr_name" id="fr_name" value="{{ old('fr_name', $partnerCategory->fr_name) }}" required>
                @if($errors->has('fr_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fr_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.fr_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nl_name">{{ trans('cruds.partnerCategory.fields.nl_name') }}</label>
                <input class="form-control {{ $errors->has('nl_name') ? 'is-invalid' : '' }}" type="text" name="nl_name" id="nl_name" value="{{ old('nl_name', $partnerCategory->nl_name) }}" required>
                @if($errors->has('nl_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nl_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.nl_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="en_description">{{ trans('cruds.partnerCategory.fields.en_description') }}</label>
                <input class="form-control {{ $errors->has('en_description') ? 'is-invalid' : '' }}" type="text" name="en_description" id="en_description" value="{{ old('en_description', $partnerCategory->en_description) }}">
                @if($errors->has('en_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('en_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.en_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="es_description">{{ trans('cruds.partnerCategory.fields.es_description') }}</label>
                <input class="form-control {{ $errors->has('es_description') ? 'is-invalid' : '' }}" type="text" name="es_description" id="es_description" value="{{ old('es_description', $partnerCategory->es_description) }}">
                @if($errors->has('es_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('es_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.es_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fr_description">{{ trans('cruds.partnerCategory.fields.fr_description') }}</label>
                <input class="form-control {{ $errors->has('fr_description') ? 'is-invalid' : '' }}" type="text" name="fr_description" id="fr_description" value="{{ old('fr_description', $partnerCategory->fr_description) }}">
                @if($errors->has('fr_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fr_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.fr_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nl_description">{{ trans('cruds.partnerCategory.fields.nl_description') }}</label>
                <input class="form-control {{ $errors->has('nl_description') ? 'is-invalid' : '' }}" type="text" name="nl_description" id="nl_description" value="{{ old('nl_description', $partnerCategory->nl_description) }}">
                @if($errors->has('nl_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nl_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.partnerCategory.fields.nl_description_helper') }}</span>
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