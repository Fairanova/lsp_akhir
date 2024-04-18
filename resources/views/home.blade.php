@extends('layouts.main')
@section('content')
  <section>
    <h1 class="mt-5">Daftar Lapangan</h1>
    <div class="row">
      <div class="col-lg-6 border p-4">
        <h3>Indoor</h3>
        <div class="row">
          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body">
                <h5>Reguler</h5>
                <h6>Rp. 300.000/jam</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body">
                <h5>Matras</h5>
                <h6>Rp. 250.000/jam</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body">
                <h5>Rumput</h5>
                <h6>Rp. 200.000/jam</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 border p-4">
        <h3>Outdoor</h3>
        <div class="row">
          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body">
                <h5>Reguler</h5>
                <h6>Rp. 250.000/jam</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body">
                <h5>Matras</h5>
                <h6>Rp. 200.000/jam</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card ">
              <div class="card-body">
                <h5>Rumput</h5>
                <h6>Rp. 150.000/jam</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h4>Tambahan</h4>
      <ul>
        <li>
          <h5>sewa sepatu Rp. 50.000/jam</h5>
        </li>
        <li>
          <h5>sewa kostum Rp. 45.000/jam</h5>
        </li>
      </ul>
    </div>
  </section>
  <section>
    <h1 class="mt-3">TATA CARA SEWA LAPANGAN FUTSAL</h1>
    <ol>
      <li>Klik halaman 'Booking'</li>
      <li>Isi data penyewa</li>
      <li>Pilih Jenis dan Lokasi Lapangan</li>
      <li>Masukkan tgl mulai-selesai sewa</li>
      <li>Klik checkout</li>
      <li>Bayar sesuai nominal yang tertera pada 'Detail Booking'</li>
      <li>Klik booking</li>

    </ol>
  </section>
@endsection
