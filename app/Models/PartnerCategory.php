<?php

namespace App\Models;

use App\Traits\Auditable;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerCategory extends Model
{
    use SoftDeletes, Auditable, HasFactory;

    public $table = 'partner_categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'en_name',
        'spa_name',
        'fr_name',
        'nl_name',
        'en_description',
        'es_description',
        'fr_description',
        'nl_description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function categoryPartners()
    {
        return $this->hasMany(Partner::class, 'category_id', 'id');
    }
}
