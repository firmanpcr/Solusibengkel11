<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Booking extends Model
{
    use HasFactory;
    protected $primaryKey = 'booking_id';
    protected $table = 'booking';

    protected $fillable = [
        'name',
        'email',
        'pilih_service',
        'tanggal_service',
        'permintaan_khusus',

    ];

    public function scopeFilter(Builder $query, $request, array $filterableColumns, array $searchableColumns): Builder
    {
        foreach ($filterableColumns as $column) {
            if ($request->filled($column)) {
                if ($column == 'pilih_service') {
                    $query->where('pilih_service', $request->input('pilih_service'));
                } else {
                    $query->where($column, $request->input($column));
                }
            }
        }
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request, $searchableColumns) {
                foreach ($searchableColumns as $column) {
                    $q->orWhere($column, 'LIKE', '%' . $request->input('search') . '%');
                }
            });
        }
        return $query;
    }
}

