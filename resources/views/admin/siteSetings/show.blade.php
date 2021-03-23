@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.siteSeting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.site-setings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.id') }}
                        </th>
                        <td>
                            {{ $siteSeting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.name') }}
                        </th>
                        <td>
                            {{ $siteSeting->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.logo') }}
                        </th>
                        <td>
                            @if($siteSeting->logo)
                                <a href="{{ $siteSeting->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $siteSeting->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.email') }}
                        </th>
                        <td>
                            {{ $siteSeting->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.phone') }}
                        </th>
                        <td>
                            {{ $siteSeting->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.location') }}
                        </th>
                        <td>
                            {{ $siteSeting->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.caption') }}
                        </th>
                        <td>
                            {{ $siteSeting->caption }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.facebook') }}
                        </th>
                        <td>
                            {{ $siteSeting->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.twitter') }}
                        </th>
                        <td>
                            {{ $siteSeting->twitter }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.instagram') }}
                        </th>
                        <td>
                            {{ $siteSeting->instagram }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.siteSeting.fields.linkedin') }}
                        </th>
                        <td>
                            {{ $siteSeting->linkedin }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.site-setings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection