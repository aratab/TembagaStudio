@extends('layouts.main')

@section('content')
<script>document.title = "Tambah Buku - Perpustakaan"</script>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Orders</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
      </div>
    </div>
    <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Tambah Orders</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="POST" action="/orders/addOrders/sukses" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row">
                                            <div class="col">
                                            @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" id="name" class="form-control"
                                                        placeholder="name" name="name" value="{{ old('name') }}">
                                                </div>
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" id="phone" class="form-control"
                                                    placeholder="phone" name="phone" value="{{ old('phone') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" id="email" class="form-control"
                                                    placeholder="email" name="email" value="{{ old('email') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="time">Waktu</label>
                                                <input type="datetime-local" id="time" class="form-control"
                                                    placeholder="time" name="time" value="{{ old('time') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="packet_id">Paket</label>
                                                <select class="form-control" name="packet_id" id="packet_id" value="{{ old('packet_id') }}">
                                                    <option value="">== Pilih Paket ==</option>
                                                    @foreach ($Paket as $packet_id => $name)
                                                        <option value="{{ $packet_id }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="duration">Durasi</label>
                                                <input type="number" id="duration" class="form-control"
                                                    name="duration" placeholder="duration" value="{{ old('duration') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status" id="status" value="{{ old('status') }}">
                                                    <option value="">== Pilih Paket ==</option>
                                                        <option value="Paid">Paid</option>
                                                        <option value="Unpaid">Unpaid</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-primary" name="submit" value="Simpan Data">Submit</button>
                                                    <a href="/orders" class="btn btn secondary">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
  </main>
@endsection
