@yield('content')
@extends('layouts.app')

@section('content')
<div class="main-wrapper">
    <div class="content-container">
        <div class="header-section">
            <h2 class="title">Tambah Partner Baru</h2>
            <a href="/admin/partners" class="btn-back"> Kembali ke Daftar</a>
        </div>

        <div class="form-card">
            <form action="/admin/partners" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Partner</label>
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama pihak partner" required>
                </div>

                <div class="form-group">
                    <label>URL Logo</label>
                    <input type="text" name="logo_url" class="form-control" placeholder="Contoh: https://placehold.co/200x200" required>
                </div>

                <button type="submit" class="btn-submit">Simpan Partner</button>
            </form>
        </div>
    </div>
</div>

<style>
    .main-wrapper { display: flex; justify-content: center; padding: 40px 20px; background-color: #f8f9fa; min-height: 80vh; }
    .content-container { width: 100%; max-width: 600px; } /* Lebih ramping untuk form */
    .header-section { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
    .title { font-weight: 800; color: #333; margin: 0; }
    .form-card { background: white; padding: 30px; border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #e0e0e0; }
    .form-group { margin-bottom: 20px; }
    .form-group label { display: block; margin-bottom: 8px; font-weight: 600; color: #555; }
    .form-control { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; }
    .btn-submit { background-color: #4e73df; color: white; border: none; padding: 12px 20px; border-radius: 8px; cursor: pointer; width: 100%; font-weight: 600; }
    .btn-submit:hover { background-color: #2e59d9; }
    .btn-back { text-decoration: none; color: #666; font-size: 0.9rem; }
</style>
@endsection