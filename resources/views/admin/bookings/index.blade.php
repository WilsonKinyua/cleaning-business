@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.booking.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Booking">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.company') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.order_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.customer') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.customer_phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.location') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $key => $booking)
                        <tr data-entry-id="{{ $booking->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $booking->id ?? '' }}
                            </td>
                            <td>
                                {{ $booking->company ?? '' }}
                            </td>
                            <td>
                                {{ $booking->order_type ?? '' }}
                            </td>
                            <td>
                                {{ $booking->customer ?? '' }}
                            </td>
                            <td>
                                {{ $booking->customer_phone ?? '' }}
                            </td>
                            <td>
                                {{ $booking->status ?? '' }}
                            </td>
                            <td>
                                {{ $booking->description ?? '' }}
                            </td>
                            <td>
                                {{ $booking->location ?? '' }}
                            </td>
                            <td>
                                @can('booking_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.bookings.show', $booking->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
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
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Booking:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection