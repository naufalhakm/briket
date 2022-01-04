@extends('home.main')
@section('css')
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/table.css">
@endsection
@section('content')

    <div class="       desktop">
        <div class="cont_or1">
            <div class="cont_or2">
                <div class="list_lf">
                    <span>
                        <div class="css-list r-1 r-br1 r-bs1 r-bw-1 r-xy r-pbt16" style="background-color: #FFFFFF;">
                            <div class="css-list r-bbw1 r-1 r-bs1 r-mb8 r-pb16 r-prl16">
                                <div class="css-list r-bwx">
                                    <div class="css-list r-jcc">
                                        <div class="r-hd" style="color: rgb(3, 18, 26);">
                                            {{ auth()->user()->name }}</div>
                                        <div class="r-hd2" style="color: rgb(104, 113, 118);">
                                            {{ auth()->user()->email }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="css-list r-pr">
                                <div class="css-list" style="transition-duration: 0s;">
                                    <h3 class="r-prl16 r-pbt8 r-hd3">Pesanan Saya</h3>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                <div class="list_rg">
                    <div class="css-list l-wsct l-fdc l-fg1 l-s1 l-ttz l-oxh l-oya">
                        <h3 class="l-hd l-hds">Daftar Pembelian Pesawat</h3>
                        {{-- <div class="list-rg">
                            <div class="list-rg l-mbt4">
                                <div class="list-rg l-bg l-bs l-ovxy l-b">

                                </div>
                            </div>
                        </div> --}}
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Dari</th>
                                    <th>Ke</th>
                                    <th>Tanggal</th>
                                    <th>Kelas</th>
                                    <th>Penumpang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($planes as $plane)
                                    <tr>
                                        <td>{{ $plane->asal }}</td>
                                        <td>{{ $plane->tujuan }}</td>
                                        <td>{{ $plane->tanggal }}</td>
                                        <td>{{ $plane->kelas }}</td>
                                        <td>{{ $plane->jumlah }}</td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger text-center">Data pesanan tidak ada.</div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="css-list l-wsct l-fdc l-fg1 l-s1 l-ttz l-oxh l-oya">
                        <h3 class="l-hd l-hds train">Daftar Pembelian Kereta</h3>
                        {{-- <div class="list-rg">
                            <div class="list-rg l-mbt4">
                                <div class="list-rg l-bg l-bs l-ovxy l-b">

                                </div>
                            </div>
                        </div> --}}
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Dari</th>
                                    <th>Ke</th>
                                    <th>Tanggal</th>
                                    <th>Kelas</th>
                                    <th>Penumpang</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($trains as $train)
                                    <tr>
                                        <td>{{ $train->asal }}</td>
                                        <td>{{ $train->tujuan }}</td>
                                        <td>{{ $train->tanggal }}</td>
                                        <td>{{ $train->kelas }}</td>
                                        <td>{{ $train->jumlah }}</td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger text-center">Data pesanan tidak ada.</div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
@endsection
