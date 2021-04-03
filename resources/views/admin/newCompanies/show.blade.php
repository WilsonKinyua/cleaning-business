@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.newCompany.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.new-companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newCompany.fields.id') }}
                        </th>
                        <td>
                            {{ $newCompany->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newCompany.fields.business_name') }}
                        </th>
                        <td>
                            {{ $newCompany->business_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newCompany.fields.email') }}
                        </th>
                        <td>
                            {{ $newCompany->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newCompany.fields.address') }}
                        </th>
                        <td>
                            {{ $newCompany->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newCompany.fields.city') }}
                        </th>
                        <td>
                            {{ $newCompany->city }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newCompany.fields.country') }}
                        </th>
                        <td>
                            {{ $newCompany->country }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newCompany.fields.services') }}
                        </th>
                        <td>
                            {{ $newCompany->services }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.new-companies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection