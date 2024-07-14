@extends('layouts.app')

@section('content')
    <h1 class="my-4">Data Klaim per LOB</h1>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>LOB</th>
                <th>Penyebab Klaim</th>
                <th>Jumlah Nasabah</th>
                <th>Beban Klaim</th>
            </tr>
        </thead>
        <tbody>
            @foreach($klaimPerLob as $klaim)
                <tr>
                    <td>{{ $klaim->lob }}</td>
                    <td>{{ $klaim->penyebab_klaim }}</td>
                    <td>{{ $klaim->jumlah_nasabah }}</td>
                    <td>{{ number_format($klaim->beban_klaim, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
