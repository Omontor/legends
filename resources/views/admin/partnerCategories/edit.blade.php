@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.partnerCategory.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.partner-categories.update", [$partnerCategory->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('en_name') ? 'has-error' : '' }}">
                            <label class="required" for="en_name">{{ trans('cruds.partnerCategory.fields.en_name') }}</label>
                            <input class="form-control" type="text" name="en_name" id="en_name" value="{{ old('en_name', $partnerCategory->en_name) }}" required>
                            @if($errors->has('en_name'))
                                <span class="help-block" role="alert">{{ $errors->first('en_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partnerCategory.fields.en_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('spa_name') ? 'has-error' : '' }}">
                            <label class="required" for="spa_name">{{ trans('cruds.partnerCategory.fields.spa_name') }}</label>
                            <input class="form-control" type="text" name="spa_name" id="spa_name" value="{{ old('spa_name', $partnerCategory->spa_name) }}" required>
                            @if($errors->has('spa_name'))
                                <span class="help-block" role="alert">{{ $errors->first('spa_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partnerCategory.fields.spa_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('fr_name') ? 'has-error' : '' }}">
                            <label class="required" for="fr_name">{{ trans('cruds.partnerCategory.fields.fr_name') }}</label>
                            <input class="form-control" type="text" name="fr_name" id="fr_name" value="{{ old('fr_name', $partnerCategory->fr_name) }}" required>
                            @if($errors->has('fr_name'))
                                <span class="help-block" role="alert">{{ $errors->first('fr_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partnerCategory.fields.fr_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('nl_name') ? 'has-error' : '' }}">
                            <label class="required" for="nl_name">{{ trans('cruds.partnerCategory.fields.nl_name') }}</label>
                            <input class="form-control" type="text" name="nl_name" id="nl_name" value="{{ old('nl_name', $partnerCategory->nl_name) }}" required>
                            @if($errors->has('nl_name'))
                                <span class="help-block" role="alert">{{ $errors->first('nl_name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partnerCategory.fields.nl_name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('en_description') ? 'has-error' : '' }}">
                            <label for="en_description">{{ trans('cruds.partnerCategory.fields.en_description') }}</label>
                            <input class="form-control" type="text" name="en_description" id="en_description" value="{{ old('en_description', $partnerCategory->en_description) }}">
                            @if($errors->has('en_description'))
                                <span class="help-block" role="alert">{{ $errors->first('en_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partnerCategory.fields.en_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('es_description') ? 'has-error' : '' }}">
                            <label for="es_description">{{ trans('cruds.partnerCategory.fields.es_description') }}</label>
                            <input class="form-control" type="text" name="es_description" id="es_description" value="{{ old('es_description', $partnerCategory->es_description) }}">
                            @if($errors->has('es_description'))
                                <span class="help-block" role="alert">{{ $errors->first('es_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partnerCategory.fields.es_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('fr_description') ? 'has-error' : '' }}">
                            <label for="fr_description">{{ trans('cruds.partnerCategory.fields.fr_description') }}</label>
                            <input class="form-control" type="text" name="fr_description" id="fr_description" value="{{ old('fr_description', $partnerCategory->fr_description) }}">
                            @if($errors->has('fr_description'))
                                <span class="help-block" role="alert">{{ $errors->first('fr_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partnerCategory.fields.fr_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('nl_description') ? 'has-error' : '' }}">
                            <label for="nl_description">{{ trans('cruds.partnerCategory.fields.nl_description') }}</label>
                            <input class="form-control" type="text" name="nl_description" id="nl_description" value="{{ old('nl_description', $partnerCategory->nl_description) }}">
                            @if($errors->has('nl_description'))
                                <span class="help-block" role="alert">{{ $errors->first('nl_description') }}</span>
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



        </div>
    </div>
</div>
@endsection