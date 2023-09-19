<table>
    <tr>
      <th>No</th>
      <th>NIS</th>
      <th>Nama Lengkap</th>
      <th>L/P</th>
      <th>Nilai</th>
    </tr>
    @foreach ($pesertaM as $peserta)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $peserta->nis }}</td>
        <td>{{ $peserta->namalengkap }}</td>
        <td>{{ $peserta->jk }}</td>
        <td>{{ $peserta->nilai }}</td>
      </tr>
    @endforeach
  </table>