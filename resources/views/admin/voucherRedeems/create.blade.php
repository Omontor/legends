@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.voucherRedeem.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.voucher-redeems.store") }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('voucher') ? 'has-error' : '' }}">
                            <label class="required" for="voucher_id">{{ trans('cruds.voucherRedeem.fields.voucher') }}</label>
                            <select class="form-control select2" name="voucher_id" id="voucher_id" required>
                                @foreach($vouchers as $id => $entry)
                                    <option value="{{ $id }}" {{ old('voucher_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('voucher'))
                                <span class="help-block" role="alert">{{ $errors->first('voucher') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.voucherRedeem.fields.voucher_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection