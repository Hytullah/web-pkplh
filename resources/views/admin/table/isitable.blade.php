@if ($dtRencana->isEmpty())
    <tbody>
        <tr>
            <td colspan="7" class="text-center">Tidak ada data</td>
        </tr>

    </tbody>
@else
    @foreach ($dtRencana as $no => $item)
        @php
            if ($item->status == '1') {
                $val = 'Ya';
            } else {
                $val = 'Tidak';
            }
        @endphp
        <tbody>
            <td>{{ $no + $dtRencana->firstItem() }}</td>
            <td>{{ $item->nama_rencana }}</td>
            <td>{{ $item->kategori_rencana }}</td>
            <td>{{ date('d-m-Y', strtotime($item->tanggal_rencana)) }}</td>
            <td>{{ $item->isi_rencana }}</td>
            <td>{{ $val }}</td>
            <td>
                <a href="{{ url('editrencana', $item->id) }}">
                    <i class="far fa-edit nav-icon"></i></a> |
                {{-- <a href="{{ url('deleterencana', $item->id) }}" class="delete" data-id="{{ $item->id }}"> --}}
                <a href="#" class="delete" data-id="{{ $item->id }}"
                    data-no="{{ $no + $dtRencana->firstItem() }}">
                    <i class="fas fa-trash nav-icon danger" style="color: rgb(182, 4, 4);"></i></a>
            </td>
        </tbody>
    @endforeach
@endif
