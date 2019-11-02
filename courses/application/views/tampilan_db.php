<!DOCTYPE html>
<html>
    <head>
        <title>Tugas WEB</title>
    </head>
    <body>
        <table border='1'>
            <tr>
                <th>ID DOSEN</th>
                <th>Nama Dosen</th>
                <th>NIP</th>
                <th>Kode Matakuliah</th>
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Status</th>
                <th>Semester</th>
            </tr>
            <?php
            foreach ($basis_data as $dosen) {
                $id_dosen = $dosen['id_dosen'];
                $nama_dosen = $dosen['nama_dosen'];
                $nip_dosen = $dosen['nip_dosen'];
                $kode_mk = $dosen['kode_mk'];
                $nama_mk = $dosen['nama_mk'];
                $sks = $dosen['sks'];
                $status_mk = $dosen['status_mk'];
                $semester = $dosen['semester'];
            
            ?>
            <tr>
                <td><?=$id_dosen; ?></td>
                <td><?=$nama_dosen; ?></td>
                <td><?=$nip_dosen; ?></td>
                <td><?=$kode_mk; ?></td>
                <td><?=$nama_mk; ?></td>
                <td><?=$sks; ?></td>
                <td><?=$status_mk; ?></td>
                <td><?=$semester; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>