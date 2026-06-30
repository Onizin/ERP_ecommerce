<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function previewAlert(): void
    {
        $this->dispatch('swal',
            title: 'Integrasi siap',
            text: 'Dashboard memakai AdminLTE3, SweetAlert, dan koneksi ERP terpisah.',
            icon: 'success',
            confirmButtonText: 'Tutup'
        );
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'coreConnection' => config('erp.core.connection'),
            'salesConnection' => config('erp.sales.connection'),
            'coreTables' => config('erp.core.tables'),
        ])->layout('layouts.app');
    }
}