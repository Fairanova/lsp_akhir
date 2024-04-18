@extends('layouts.main')
@section('content')
  <h3 class="mt-5">RIWAYAT TRANSAKSI</h3>
  <div class="">

    <table class="table table-stripped table-bordered shadow-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Penyewa</th>
          <th>No Tlp Penyewa</th>
          <th>Jenis</th>
          <th>Lokasi</th>
          <th>Harga perjam</th>
          <th>Tgl Mulai</th>
          <th>Tgl Selesai</th>
          <th>Total Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bookings as $b)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->name }}</td>
            <td>{{ $b->no_tlp }}</td>
            <td>{{ $b->lapangan->jenis }}</td>
            <td>{{ $b->lapangan->lokasi }}</td>
            <td>Rp. {{ number_format($b->lapangan->price) }}</td>
            <td>{{ $b->getDateStart() }}</td>
            <td>{{ $b->getDateEnd() }}</td>
            <td>Rp. {{ number_format($b->total_price) }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
