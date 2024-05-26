<form method="post" action="/PHP_01.php">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat">
    </div>
    <div class="form-group">
        <label>No Telp</label>
        <input type="telp" name="no_telp">
    </div>
    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>

    <button type="submit">Submit</button>
</form>

<style>
    .form-group {
        margin-bottom: 10px;
    }
</style>


<?php

function required_validate($value)
{
    return !empty($value);
}

function string_validate($value)
{
    return preg_match('/^[a-zA-Z ]+$/', $value);
}

function number_validate($value)
{
    return preg_match('/^[0-9]+$/', $value);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $errors = [];
    if (!required_validate($nama) || !string_validate($nama)) {
        $errors['nama'] = 'Nama harus diisi dan hanya boleh huruf';
    }

    if (!required_validate($alamat)) {
        $errors['alamat'] = 'Alamat harus diisi';
    }

    if (!required_validate($no_telp) || !number_validate($no_telp)) {
        $errors['no_telp'] = 'No Telp harus diisi dan hanya boleh angka';
    }

    if (!required_validate($jenis_kelamin)) {
        $errors['jenis_kelamin'] = 'Jenis Kelamin harus diisi';
    }

    if (count($errors) > 0) {
        foreach ($errors as $key => $error) {
            echo $error . '<br>';
        }
    } else {
        echo 'Data berhasil disimpan';
    }
}
