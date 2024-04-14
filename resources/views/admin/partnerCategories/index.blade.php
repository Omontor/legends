@extends('layouts.admin')
@section('content')
<div class="content">
    @can('partner_category_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.partner-categories.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.partnerCategory.title_singular') }}
                </a>
                <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                    {{ trans('global.app_csvImport') }}
                </button>
                @include('csvImport.modal', ['model' => 'PartnerCategory', 'route' => 'admin.partner-categories.parseCsvImport'])
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.partnerCategory.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-PartnerCategory">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.en_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.spa_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.fr_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.nl_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.en_description') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.es_description') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.fr_description') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partnerCategory.fields.nl_description') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partnerCategories as $key => $partnerCategory)
                                    <tr data-entry-id="{{ $partnerCategory->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $partnerCategory->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->en_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->spa_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->fr_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->nl_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->en_description ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->es_description ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->fr_description ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partnerCategory->nl_description ?? '' }}
                                        </td>
                                        <td>
                                            @can('partner_category_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.partner-categories.show', $partnerCategory->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('partner_category_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.partner-categories.edit', $partnerCategory->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('partner_category_delete')
                                                <form action="{{ route('admin.partner-categories.destroy', $partnerCategory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('partner_category_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.partner-categories.massDestroy') }}",
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
  let table = $('.datatable-PartnerCategory:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection