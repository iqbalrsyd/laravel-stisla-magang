@extends('layouts.master') {{-- Pastikan ini sesuai dengan layout utama --}}

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Cabang</h5>
            <p class="card-text">{{ $totalCabang }}</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Penjualan</h5>
            <p class="card-text">Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cabang dengan Penjualan Terbanyak</h5>
            @if ($cabangTerbanyak)
              <p class="card-text"><strong>{{ $cabangTerbanyak->nama_cabang }}</strong></p>
              <p class="card-text">Total: Rp {{ number_format($cabangTerbanyak->penjualan_sum_nominal, 0, ',', '.') }}</p>
            @else
              <p class="card-text">Belum ada data penjualan</p>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
