<?php

namespace App\Models;

use App\Models\Concerns\UsesErpCoreConnection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, UsesErpCoreConnection;

    public function getTable(): string
    {
        return config('erp.core.tables.roles');
    }

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
    ];
}