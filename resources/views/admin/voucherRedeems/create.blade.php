@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.voucherRedeem.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.voucher-redeems.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="voucher_id">{{ trans('cruds.voucherRedeem.fields.voucher') }}</label>
                <select class="form-control select2 {{ $errors->has('voucher') ? 'is-invalid' : '' }}" name="voucher_id" id="voucher_id" required>
                    @foreach($vouchers as $id => $entry)
                        <option value="{{ $id }}" {{ old('voucher_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('voucher'))
                    <div class="invalid-feedback">
                        {{ $errors->first('voucher') }}
                    </div>
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



@endsection