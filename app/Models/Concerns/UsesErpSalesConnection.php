<?php

namespace App\Models\Concerns;

trait UsesErpSalesConnection
{
    public function getConnectionName(): ?string
    {
        return config('erp.sales.connection');
    }
}