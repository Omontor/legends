@extends('layouts.admin')
@section('content')
@can('commission_type_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.commission-types.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.commissionType.title_singular') }}
            </a>
            <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                {{ trans('global.app_csvImport') }}
            </button>
            @include('csvImport.modal', ['model' => 'CommissionType', 'route' => 'admin.commission-types.parseCsvImport'])
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.commissionType.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-CommissionType">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.commissionType.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionType.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.commissionType.fields.value') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($commissionTypes as $key => $commissionType)
                        <tr data-entry-id="{{ $commissionType->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $commissionType->id ?? '' }}
                            </td>
                            <td>
                                {{ $commissionType->name ?? '' }}
                            </td>
                            <td>
                                {{ $commissionType->value ?? '' }}
                            </td>
                            <td>
                                @can('commission_type_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.commission-types.show', $commissionType->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('commission_type_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.commission-types.edit', $commissionType->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('commission_type_delete')
                                    <form action="{{ route('admin.commission-types.destroy', $commissionType->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('commission_type_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.commission-types.massDestroy') }}",
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
  let table = $('.datatable-CommissionType:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection