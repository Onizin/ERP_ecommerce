<?php

namespace App\Models\Concerns;

trait UsesErpCoreConnection
{
    public function getConnectionName(): ?string
    {
        return config('erp.core.connection');
    }
}