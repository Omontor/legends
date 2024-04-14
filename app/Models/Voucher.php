<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'vouchers';

    public const IS_FOR_GROUP_SELECT = [
        '0' => 'No',
        '1' => 'Yes',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STATUS_SELECT = [
        '0' => 'Active',
        '1' => 'Inactive',
    ];

    public const IS_MULTI_USE_SELECT = [
        '0' => 'Single Use',
        '1' => 'Multi Use',
    ];

    protected $fillable = [
        'guid',
        'en_description',
        'es_description',
        'nl_description',
        'fr_description',
        'is_multi_use',
        'is_for_group',
        'group_size',
        'commission_type_id',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function voucherVoucherRedeems()
    {
        return $this->hasMany(VoucherRedeem::class, 'voucher_id', 'id');
    }

    public function commission_type()
    {
        return $this->belongsTo(CommissionType::class, 'commission_type_id');
    }
}
