<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Mekanik extends Model
{
    use HasFactory;
    protected $primaryKey = 'mekanik_id';
    protected $table = 'mekanik';

    protected $fillable = [
        'name',
        'email',
        'password',
        'experience_years',
        'keahlian',
        'phone',

    ];

    public function scopeFilter(Builder $query, $request, array $filterableColumns, array $searchableColumns): Builder
    {
        foreach ($filterableColumns as $column) {
            if ($request->filled($column)) {
                if ($column == 'keahlian') {
                    $query->where('keahlian', $request->input('keahlian'));
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
