@yield('content')
@extends('layouts.app')

@section('content')
<div class="main-wrapper">
    <div class="content-container">
        <div class="header-section">
            <h2 class="title">Daftar Partner Kami</h2>
            <p class="subtitle">{{ count($partners) }} Total Partner Terdaftar</p>
        </div>

        <div class="table-card">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th width="10%">ID</th>
                        <th width="60%">Nama Partner</th>
                        <th width="30%" class="text-center">Logo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($partners as $partner)
                    <tr>
                        <td>{{ $partner->id }}</td>
                        <td class="partner-name">{{ $partner->name }}</td>
                        <td class="text-center">
                            <img src="{{ $partner->logo_url }}" alt="Logo" class="partner-logo">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
        <a href="/admin/partners/create" style="background: #4e73df; color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: 600;">+ Tambah Partner</a>
        </div>
        
    </div>
</div>

<style>
    /* Wrapper untuk memposisikan konten di tengah layar */
    .main-wrapper {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 80vh;
        padding: 40px 20px;
        background-color: #f8f9fa;
    }

    /* Wadah utama berbentuk persegi panjang */
    .content-container {
        width: 100%;
        max-width: 900px; /* Lebar maksimal persegi panjang */
    }

    .header-section {
        margin-bottom: 25px;
        text-align: left;
    }

    .title {
        font-weight: 800;
        color: #333;
        margin-bottom: 5px;
    }

    .subtitle {
        color: #666;
        font-size: 0.9rem;
    }

    /* Gaya Kartu Tabel */
    .table-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        overflow: hidden; /* Agar sudut tabel tumpul mengikuti kartu */
        border: 1px solid #e0e0e0;
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
    }

    .custom-table thead {
        background-color: #f1f4f9;
    }

    .custom-table th {
        padding: 15px 20px;
        text-align: left;
        color: #444;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 1px;
    }

    .custom-table td {
        padding: 15px 20px;
        border-top: 1px solid #eee;
        vertical-align: middle;
        color: #555;
    }

    .partner-name {
        font-weight: 600;
        color: #2d3436;
    }

    .partner-logo {
        width: 50px;
        height: 50px;
        border-radius: 8px;
        object-fit: cover;
        border: 1px solid #ddd;
    }

    .text-center {
        text-align: center;
    }

    /* Efek hover saat baris disentuh */
    .custom-table tbody tr:hover {
        background-color: #fdfdfd;
    }
</style>
@endsection