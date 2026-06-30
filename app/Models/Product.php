<?php

namespace App\Models;

use App\Models\Concerns\UsesErpCoreConnection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, UsesErpCoreConnection;

    public function getTable(): string
    {
        return config('erp.core.tables.products');
    }

    protected $fillable = [
        'name',
        'sku',
        'category_id',
        'price',
        'stock',
        'description',
        'is_active',
    ];
}