<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
</head>
<body>

    <h1>Daftar Guru dan Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama Guru</th>
                <th>Mata Pelajaran</th>
                <th>Daftar Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $teacher)
            <tr>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->mapel }}</td>

                <td>
                    <ul>
                    @if($teacher->student->isNotEmpty())
                        @foreach ($teacher->student as $student)
                            <li>{{ $student->nama }}</li>
                        @endforeach
                    @else
                        <li><em>Tidak ada siswa</em></li>
                    @endif
                    </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
