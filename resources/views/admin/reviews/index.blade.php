@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.review.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Review">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.review.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.review.fields.company') }}
                        </th>
                        <th>
                            {{ trans('cruds.review.fields.customer') }}
                        </th>
                        <th>
                            {{ trans('cruds.review.fields.review') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reviews as $key => $review)
                        <tr data-entry-id="{{ $review->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $review->id ?? '' }}
                            </td>
                            <td>
                                {{ $review->company ?? '' }}
                            </td>
                            <td>
                                {{ $review->customer ?? '' }}
                            </td>
                            <td>
                                {{ $review->review ?? '' }}
                            </td>
                            <td>
                                @can('review_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.reviews.show', $review->id) }}">
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
  let table = $('.datatable-Review:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection