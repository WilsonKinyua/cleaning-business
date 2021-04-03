@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.newCompany.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-NewCompany">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.newCompany.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.newCompany.fields.business_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.newCompany.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.newCompany.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.newCompany.fields.city') }}
                        </th>
                        <th>
                            {{ trans('cruds.newCompany.fields.country') }}
                        </th>
                        <th>
                            {{ trans('cruds.newCompany.fields.services') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newCompanies as $key => $newCompany)
                        <tr data-entry-id="{{ $newCompany->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $newCompany->id ?? '' }}
                            </td>
                            <td>
                                {{ $newCompany->business_name ?? '' }}
                            </td>
                            <td>
                                {{ $newCompany->email ?? '' }}
                            </td>
                            <td>
                                {{ $newCompany->address ?? '' }}
                            </td>
                            <td>
                                {{ $newCompany->city ?? '' }}
                            </td>
                            <td>
                                {{ $newCompany->country ?? '' }}
                            </td>
                            <td>
                                {{ $newCompany->services ?? '' }}
                            </td>
                            <td>
                                @can('new_company_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.new-companies.show', $newCompany->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan


                                @can('new_company_delete')
                                    <form action="{{ route('admin.new-companies.destroy', $newCompany->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('new_company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.new-companies.massDestroy') }}",
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
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-NewCompany:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection