<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

    </style>
</head>

<body>
    <h2 align="center">Tabel Pengaduan Publik</h2>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Kontak</th>
                <th>Bagian</th>
                <th>Isi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        @foreach ($dtPengaduan as $no => $item)
            @php
                if ($item->bagian == '1') {
                    $val = 'Kepala Bidang Perumahan';
                } elseif ($item->bagian == '2') {
                    $val = 'Kepala Bidang Kawasan Pemukiman';
                } elseif ($item->bagian == '3') {
                    $val = 'Kepala Bidang Kelembagaan Lingkungan hidup';
                } elseif ($item->bagian == '4') {
                    $val = 'Kepala Bidang Pengelolaan Lingkungan Hidup';
                }
            @endphp
            <tbody>
                <td>{{ $no + 1 }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->kontak }}</td>
                <td>{{ $val }}</td>
                <td>{{ $item->isi }}</td>
                <td>{{ date('d-m-Y', strtotime($item->tanggal)) }}</td>
            </tbody>
        @endforeach
        </tr>
    </table>
</body>

</html>
