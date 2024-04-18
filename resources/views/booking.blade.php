@extends('layouts.main')
@section('content')
    <main class="pt-5">
        @if (session('failed-booking')[0] ?? false)
            <div class="alert alert-danger" role="alert">
                Jadwal yang anda masukkan telah di pesan oleh seseorang, harap memasukkan jadwal booking yang lain
            </div>
        @endif
        <div class="card ">
            <div class="card-body">
                <h4>Booking Lapangan</h4>
                <form action="{{ route('booking.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="no_tlp">Nomor Telepon</label>
                                <input type="number" name="no_tlp" class="form-control" value="{{old('no_tlp')}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="lokasi">Lokasi</label>
                                <select name="lokasi" class="form-select" id="lokasi" required value="{{old('lokasi')}}">
                                    <option value="" disabled selected>--pilih lokasi lapangan--</option>
                                    <option value="indoor">Indoor</option>
                                    <option value="outdoor">Outdoor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="jenis">Jenis</label>
                                <select required name="jenis" class="form-select" id="jenis">
                                    <option value="" disabled selected>--pilih jenis lapangan--</option>
                                    <option value="reguler"  @selected(old('jenis') == 'reguler')>reguler</option>
                                    <option value="matras" @selected(old('jenis') == 'matras')>matras</option>
                                    <option value="rumput" @selected(old('jenis') == 'rumput')>rumput</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="datetime-local" class="form-control" name="date_start" value="{{old('date_start')}}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Tanggal Selesai</label>
                            <input type="datetime-local" class="form-control" name="date_end" value="{{old('date_end')}}">
                        </div>
                    </div>
                    <h5 class="mt-3">*Tambahan</h5>
                    {{-- <div class="row"> --}}
                    <div>
                        <input type="checkbox" name="sewa_sepatu" id="sewa_sepatu" @checked(old('sewa_sepatu'))>
                        <label for="sewa_sepatu">Sewa Sepatu Rp. 50.000 / jam</label>
                    </div>
                    <div>
                        <input type="checkbox" name="sewa_kostum" id="sewa_kostum">
                        <label for="sewa_kostum">Sewa Kostum Rp. 45.000 / jam</label>
                    </div>
                    {{-- </div> --}}
                    <button type="submit" class="btn btn-primary w-100 mt-4">Checkout</button>
                </form>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h4>Daftar Booking</h4>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Penyewa</th>
                            <th>No Tlp</th>
                            <th>Lokasi</th>
                            <th>Jenis</th>
                            <th>Harga Perjam</th>
                            <th>Tgl Mulai</th>
                            <th>Tgl Selesai</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (session('failed-booking')[0] ?? false)
                            @foreach (session('failed-booking') as $b)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $b->name }}</td>
                                    <td>{{ $b->no_tlp }}</td>
                                    <td>{{ $b->lapangan->lokasi }}</td>
                                    <td>{{ $b->lapangan->jenis }}</td>
                                    <td>Rp. {{ number_format($b->lapangan->price) }}</td>
                                    <td>{{ $b->getDateStart() }}</td>
                                    <td>{{ $b->getDateEnd() }}</td>
                                    <td>Rp. {{ number_format($b->total_price) }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </main>


@endsection
