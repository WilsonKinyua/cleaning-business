@extends('layouts.admin')
@section('content')
@can('site_seting_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.site-setings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.siteSeting.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.siteSeting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-SiteSeting">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.caption') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.facebook') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.twitter') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.instagram') }}
                        </th>
                        <th>
                            {{ trans('cruds.siteSeting.fields.linkedin') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($siteSetings as $key => $siteSeting)
                        <tr data-entry-id="{{ $siteSeting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $siteSeting->id ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->name ?? '' }}
                            </td>
                            <td>
                                @if($siteSeting->logo)
                                    <a href="{{ $siteSeting->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $siteSeting->logo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $siteSeting->email ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->phone ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->location ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->caption ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->facebook ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->twitter ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->instagram ?? '' }}
                            </td>
                            <td>
                                {{ $siteSeting->linkedin ?? '' }}
                            </td>
                            <td>
                                @can('site_seting_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.site-setings.show', $siteSeting->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('site_seting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.site-setings.edit', $siteSeting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('site_seting_delete')
                                    <form action="{{ route('admin.site-setings.destroy', $siteSeting->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('site_seting_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.site-setings.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-SiteSeting:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection