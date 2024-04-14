@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.partner.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.partners.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="required" for="name">{{ trans('cruds.partner.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('logo') ? 'has-error' : '' }}">
                            <label for="logo">{{ trans('cruds.partner.fields.logo') }}</label>
                            <div class="needsclick dropzone" id="logo-dropzone">
                            </div>
                            @if($errors->has('logo'))
                                <span class="help-block" role="alert">{{ $errors->first('logo') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.logo_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
                            <label for="url">{{ trans('cruds.partner.fields.url') }}</label>
                            <input class="form-control" type="text" name="url" id="url" value="{{ old('url', '') }}">
                            @if($errors->has('url'))
                                <span class="help-block" role="alert">{{ $errors->first('url') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.url_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lat') ? 'has-error' : '' }}">
                            <label for="lat">{{ trans('cruds.partner.fields.lat') }}</label>
                            <input class="form-control" type="number" name="lat" id="lat" value="{{ old('lat', '') }}" step="0.00000001">
                            @if($errors->has('lat'))
                                <span class="help-block" role="alert">{{ $errors->first('lat') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.lat_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lng') ? 'has-error' : '' }}">
                            <label for="lng">{{ trans('cruds.partner.fields.lng') }}</label>
                            <input class="form-control" type="number" name="lng" id="lng" value="{{ old('lng', '') }}" step="0.00000001">
                            @if($errors->has('lng'))
                                <span class="help-block" role="alert">{{ $errors->first('lng') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.lng_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('facebook') ? 'has-error' : '' }}">
                            <label for="facebook">{{ trans('cruds.partner.fields.facebook') }}</label>
                            <input class="form-control" type="text" name="facebook" id="facebook" value="{{ old('facebook', '') }}">
                            @if($errors->has('facebook'))
                                <span class="help-block" role="alert">{{ $errors->first('facebook') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.facebook_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('instagram') ? 'has-error' : '' }}">
                            <label for="instagram">{{ trans('cruds.partner.fields.instagram') }}</label>
                            <input class="form-control" type="text" name="instagram" id="instagram" value="{{ old('instagram', '') }}">
                            @if($errors->has('instagram'))
                                <span class="help-block" role="alert">{{ $errors->first('instagram') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.instagram_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('tiktok') ? 'has-error' : '' }}">
                            <label for="tiktok">{{ trans('cruds.partner.fields.tiktok') }}</label>
                            <input class="form-control" type="text" name="tiktok" id="tiktok" value="{{ old('tiktok', '') }}">
                            @if($errors->has('tiktok'))
                                <span class="help-block" role="alert">{{ $errors->first('tiktok') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.tiktok_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="required" for="email">{{ trans('cruds.partner.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <span class="help-block" role="alert">{{ $errors->first('email') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('gallery') ? 'has-error' : '' }}">
                            <label for="gallery">{{ trans('cruds.partner.fields.gallery') }}</label>
                            <div class="needsclick dropzone" id="gallery-dropzone">
                            </div>
                            @if($errors->has('gallery'))
                                <span class="help-block" role="alert">{{ $errors->first('gallery') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.gallery_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <label for="phone">{{ trans('cruds.partner.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                            @if($errors->has('phone'))
                                <span class="help-block" role="alert">{{ $errors->first('phone') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                            <label class="required" for="category_id">{{ trans('cruds.partner.fields.category') }}</label>
                            <select class="form-control select2" name="category_id" id="category_id" required>
                                @foreach($categories as $id => $entry)
                                    <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <span class="help-block" role="alert">{{ $errors->first('category') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.category_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('en_description') ? 'has-error' : '' }}">
                            <label for="en_description">{{ trans('cruds.partner.fields.en_description') }}</label>
                            <input class="form-control" type="text" name="en_description" id="en_description" value="{{ old('en_description', '') }}">
                            @if($errors->has('en_description'))
                                <span class="help-block" role="alert">{{ $errors->first('en_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.en_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('es_description') ? 'has-error' : '' }}">
                            <label for="es_description">{{ trans('cruds.partner.fields.es_description') }}</label>
                            <input class="form-control" type="text" name="es_description" id="es_description" value="{{ old('es_description', '') }}">
                            @if($errors->has('es_description'))
                                <span class="help-block" role="alert">{{ $errors->first('es_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.es_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('fr_description') ? 'has-error' : '' }}">
                            <label for="fr_description">{{ trans('cruds.partner.fields.fr_description') }}</label>
                            <input class="form-control" type="text" name="fr_description" id="fr_description" value="{{ old('fr_description', '') }}">
                            @if($errors->has('fr_description'))
                                <span class="help-block" role="alert">{{ $errors->first('fr_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.fr_description_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('nl_description') ? 'has-error' : '' }}">
                            <label for="nl_description">{{ trans('cruds.partner.fields.nl_description') }}</label>
                            <input class="form-control" type="text" name="nl_description" id="nl_description" value="{{ old('nl_description', '') }}">
                            @if($errors->has('nl_description'))
                                <span class="help-block" role="alert">{{ $errors->first('nl_description') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.partner.fields.nl_description_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.partners.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($partner) && $partner->logo)
      var file = {!! json_encode($partner->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    var uploadedGalleryMap = {}
Dropzone.options.galleryDropzone = {
    url: '{{ route('admin.partners.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
      uploadedGalleryMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedGalleryMap[file.name]
      }
      $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($partner) && $partner->gallery)
      var files = {!! json_encode($partner->gallery) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
@endsection