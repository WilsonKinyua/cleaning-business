@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.company.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.companies.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.company.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="open_hours">{{ trans('cruds.company.fields.open_hours') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('open_hours') ? 'is-invalid' : '' }}" name="open_hours" id="open_hours">{!! old('open_hours') !!}</textarea>
                @if($errors->has('open_hours'))
                    <div class="invalid-feedback">
                        {{ $errors->first('open_hours') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.open_hours_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="city_id">{{ trans('cruds.company.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id">
                    @foreach($cities as $id => $city)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $city }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.city_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country_id">{{ trans('cruds.company.fields.country') }}</label>
                <select class="form-control select2 {{ $errors->has('country') ? 'is-invalid' : '' }}" name="country_id" id="country_id">
                    @foreach($countries as $id => $country)
                        <option value="{{ $id }}" {{ old('country_id') == $id ? 'selected' : '' }}>{{ $country }}</option>
                    @endforeach
                </select>
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="support_email_1">{{ trans('cruds.company.fields.support_email_1') }}</label>
                <input class="form-control {{ $errors->has('support_email_1') ? 'is-invalid' : '' }}" type="email" name="support_email_1" id="support_email_1" value="{{ old('support_email_1') }}" required>
                @if($errors->has('support_email_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('support_email_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.support_email_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="support_email_2">{{ trans('cruds.company.fields.support_email_2') }}</label>
                <input class="form-control {{ $errors->has('support_email_2') ? 'is-invalid' : '' }}" type="email" name="support_email_2" id="support_email_2" value="{{ old('support_email_2') }}">
                @if($errors->has('support_email_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('support_email_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.support_email_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="support_phone_1">{{ trans('cruds.company.fields.support_phone_1') }}</label>
                <input class="form-control {{ $errors->has('support_phone_1') ? 'is-invalid' : '' }}" type="number" name="support_phone_1" id="support_phone_1" value="{{ old('support_phone_1', '') }}" step="1" required>
                @if($errors->has('support_phone_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('support_phone_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.support_phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="support_phone_2">{{ trans('cruds.company.fields.support_phone_2') }}</label>
                <input class="form-control {{ $errors->has('support_phone_2') ? 'is-invalid' : '' }}" type="number" name="support_phone_2" id="support_phone_2" value="{{ old('support_phone_2', '') }}" step="1">
                @if($errors->has('support_phone_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('support_phone_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.support_phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address_line">{{ trans('cruds.company.fields.address_line') }}</label>
                <input class="form-control {{ $errors->has('address_line') ? 'is-invalid' : '' }}" type="text" name="address_line" id="address_line" value="{{ old('address_line', '') }}">
                @if($errors->has('address_line'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_line') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.address_line_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.company.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="logo">{{ trans('cruds.company.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.logo_helper') }}</span>
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

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '/admin/companies/ckmedia', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $company->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.companies.storeMedia') }}',
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
@if(isset($company) && $company->logo)
      var file = {!! json_encode($company->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
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
@endsection