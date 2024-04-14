@extends('layouts.admin')
@section('content')
@can('voucher_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.vouchers.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.voucher.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.voucher.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Voucher">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.guid') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.en_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.es_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.nl_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.fr_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.is_multi_use') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.is_for_group') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.group_size') }}
                        </th>
                        <th>
                            {{ trans('cruds.voucher.fields.commission_type') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Voucher::IS_MULTI_USE_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Voucher::IS_FOR_GROUP_SELECT as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <select class="search">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach($commission_types as $key => $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vouchers as $key => $voucher)
                        <tr data-entry-id="{{ $voucher->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $voucher->id ?? '' }}
                            </td>
                            <td>
                                {{ $voucher->guid ?? '' }}
                            </td>
                            <td>
                                {{ $voucher->en_description ?? '' }}
                            </td>
                            <td>
                                {{ $voucher->es_description ?? '' }}
                            </td>
                            <td>
                                {{ $voucher->nl_description ?? '' }}
                            </td>
                            <td>
                                {{ $voucher->fr_description ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Voucher::IS_MULTI_USE_SELECT[$voucher->is_multi_use] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Voucher::IS_FOR_GROUP_SELECT[$voucher->is_for_group] ?? '' }}
                            </td>
                            <td>
                                {{ $voucher->group_size ?? '' }}
                            </td>
                            <td>
                                {{ $voucher->commission_type->name ?? '' }}
                            </td>
                            <td>
                                @can('voucher_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.vouchers.show', $voucher->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('voucher_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.vouchers.edit', $voucher->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('voucher_delete')
                                    <form action="{{ route('admin.vouchers.destroy', $voucher->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('voucher_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.vouchers.massDestroy') }}",
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
  let table = $('.datatable-Voucher:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection