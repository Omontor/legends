@extends('layouts.admin')
@section('content')
<div class="content">
    @can('company_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.companies.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.company.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.company.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Company">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.logo_color') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.logo_white') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.icon') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.favicon') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.primary_color') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.company.fields.secondary_color') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($companies as $key => $company)
                                    <tr data-entry-id="{{ $company->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $company->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $company->name ?? '' }}
                                        </td>
                                        <td>
                                            @if($company->logo_color)
                                                <a href="{{ $company->logo_color->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $company->logo_color->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($company->logo_white)
                                                <a href="{{ $company->logo_white->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $company->logo_white->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($company->icon)
                                                <a href="{{ $company->icon->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $company->icon->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($company->favicon)
                                                <a href="{{ $company->favicon->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $company->favicon->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $company->primary_color ?? '' }}
                                        </td>
                                        <td>
                                            {{ $company->secondary_color ?? '' }}
                                        </td>
                                        <td>
                                            @can('company_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.companies.show', $company->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('company_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.companies.edit', $company->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('company_delete')
                                                <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('company_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.companies.massDestroy') }}",
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
  let table = $('.datatable-Company:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection