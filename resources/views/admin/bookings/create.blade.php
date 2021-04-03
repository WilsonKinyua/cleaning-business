@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.bookings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="company">{{ trans('cruds.booking.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', '') }}" required>
                @if($errors->has('company'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="order_type">{{ trans('cruds.booking.fields.order_type') }}</label>
                <input class="form-control {{ $errors->has('order_type') ? 'is-invalid' : '' }}" type="text" name="order_type" id="order_type" value="{{ old('order_type', '') }}">
                @if($errors->has('order_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('order_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.order_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer">{{ trans('cruds.booking.fields.customer') }}</label>
                <input class="form-control {{ $errors->has('customer') ? 'is-invalid' : '' }}" type="text" name="customer" id="customer" value="{{ old('customer', '') }}">
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_phone">{{ trans('cruds.booking.fields.customer_phone') }}</label>
                <input class="form-control {{ $errors->has('customer_phone') ? 'is-invalid' : '' }}" type="number" name="customer_phone" id="customer_phone" value="{{ old('customer_phone', '') }}" step="1">
                @if($errors->has('customer_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.customer_phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer_email">{{ trans('cruds.booking.fields.customer_email') }}</label>
                <input class="form-control {{ $errors->has('customer_email') ? 'is-invalid' : '' }}" type="email" name="customer_email" id="customer_email" value="{{ old('customer_email') }}">
                @if($errors->has('customer_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.customer_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status">{{ trans('cruds.booking.fields.status') }}</label>
                <input class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" type="number" name="status" id="status" value="{{ old('status', '0') }}" step="1" required>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.booking.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="location">{{ trans('cruds.booking.fields.location') }}</label>
                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', '') }}">
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="customer_address">{{ trans('cruds.booking.fields.customer_address') }}</label>
                <input class="form-control {{ $errors->has('customer_address') ? 'is-invalid' : '' }}" type="text" name="customer_address" id="customer_address" value="{{ old('customer_address', '') }}" required>
                @if($errors->has('customer_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.customer_address_helper') }}</span>
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