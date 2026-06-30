<div class="row">
    <div class="col-12 mb-3">
        <div class="card card-primary card-outline">
            <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                <div>
                    <h1 class="h4 mb-1">Dashboard ERP Ecommerce</h1>
                    <p class="text-muted mb-0">Master data diambil dari ERP Core, transaksi ecommerce memakai ERP Sales.</p>
                </div>
                <button type="button" class="btn btn-primary" wire:click="previewAlert">
                    Tes SweetAlert
                </button>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Core</h3>
                <p>Koneksi: {{ $coreConnection }}</p>
            </div>
            <div class="icon"><i class="fas fa-database"></i></div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Sales</h3>
                <p>Koneksi: {{ $salesConnection }}</p>
            </div>
            <div class="icon"><i class="fas fa-shopping-bag"></i></div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>Master Data</h3>
                <p>Kategori & barang dari ERP Core</p>
            </div>
            <div class="icon"><i class="fas fa-boxes"></i></div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mapping tabel master ERP Core</h3>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>Entitas</th>
                            <th>Connection</th>
                            <th>Table</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>User</td>
                            <td>{{ $coreConnection }}</td>
                            <td>{{ $coreTables['users'] }}</td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td>{{ $coreConnection }}</td>
                            <td>{{ $coreTables['roles'] }}</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>{{ $coreConnection }}</td>
                            <td>{{ $coreTables['categories'] }}</td>
                        </tr>
                        <tr>
                            <td>Barang</td>
                            <td>{{ $coreConnection }}</td>
                            <td>{{ $coreTables['products'] }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>