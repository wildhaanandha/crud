<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" style="border-collapse: collapse;"> 
            <tr style="background: plum">
                <td>No Induk</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td colspan="2"></td>
            </tr>
        <?php foreach ($data as $mahasiswa) {?>
            <tr>
                <td><?php echo $mahasiswa['no_induk']; ?></td>
                <td><?php echo $mahasiswa['nama']; ?></td>
                <td><?php echo $mahasiswa['alamat']; ?></td>
                <td><a href="<?php echo base_url()."index.php/helloworld/edit/".$mahasiswa['no_induk']; ?>">Edit</a></td>
                <td><a href="<?php echo base_url()."index.php/helloworld/delete/".$mahasiswa['no_induk']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <a href="<?php echo base_url()."index.php/helloworld/add_data";?>">Tambah Data</a>
</body>
</html>


