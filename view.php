<?php
class View
{

    //----------------tabel hakakses----------------
    public function tampilkanHakAkses($data)
    {
        echo "<h2>Data Hak Akses</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID Akses</th>
                    <th>Nama Akses</th>
                    <th>Keterangan</th>
					<th>Control</th>
                </tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['idAkses']}</td>
                    <td>{$row['namaAkses']}</td>
                    <td>{$row['keterangan']}</td>
                    <td>
                    <a href='index.php?action=hakakses_edit&id={$row['idAkses']}'>Edit</a> | <a href='index.php?action=hakakses_delete&id={$row['idAkses']}'>Hapus</a>
                    </td>
                </tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<h3><a href=\"index.php?action=hakakses_add\">+ Tambah Hak Akses Baru</a></h3>";
        echo "<h3><a href=\"index.php\">Kembali ke Dashboard</a></h3>";
    }

    public function tampilkanFormTambahHakAkses($data)
    {
        echo "<h2>Formulir Tambah Hak Akses</h2>";
        echo "<form method='post' action='./index.php?action=hakakses_add' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Akses</label> <input type='text' maxlength='5' name='idAkses' class='form-input' value='" . (isset($data['idAkses']) ? $data['idAkses'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>Nama Akses</label> <input type='text' name='namaAkses' class='form-input' value='" . (isset($data['namaAkses']) ? $data['namaAkses'] : '') . "'><br>";
        echo "<label class='form-label'>Keterangan</label> <input type='text' name='keterangan' class='form-input' value='" . (isset($data['keterangan']) ? $data['keterangan'] : '') . "'><br>";
        //echo "<input type='hidden' name='idBarang' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanHakAkses\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    public function tampilkanFormEditHakAkses($data)
    {
        echo "<h2>Formulir Edit Hak Akses</h2>";
        echo "<form method='post' action='./index.php?action=hakakses_edit' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Akses</label> <input type='text' maxlength='5' name='idAkses_new' class='form-input' value='" . (isset($data['idAkses']) ? $data['idAkses'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>Nama Akses</label> <input type='text' name='namaAkses' class='form-input' value='" . (isset($data['namaAkses']) ? $data['namaAkses'] : '') . "'><br>";
        echo "<label class='form-label'>Keterangan</label> <input type='text' name='keterangan' class='form-input' value='" . (isset($data['keterangan']) ? $data['keterangan'] : '') . "'><br>";
        echo "<input type='hidden' name='idAkses' class='form-input' value='" . (isset($data['idAkses']) ? $data['idAkses'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanHakAkses\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    //----------------tabel Pengguna----------------
    public function tampilkanPengguna($data)
    {
        echo "<h2>Data Pengguna</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID Pengguna</th>
                    <th>Nama Pengguna</th>
					<th>Nama Depan</th>
					<th>Nama Belakang</th>
					<th>No HP</th>
					<th>Alamat</th>
					<th>ID Akses</th>
					<th>Control</th>
                </tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['idPengguna']}</td>
                    <td>{$row['namaPengguna']}</td>
					<td>{$row['namaDepan']}</td>
					<td>{$row['namaBelakang']}</td>
                    <td>{$row['noHp']}</td>
                    <td>{$row['alamat']}</td>
					<td>{$row['idAkses']}</td>
                    <td><a href='index.php?action=pengguna_edit&id={$row['idPengguna']}'>Edit</a> | <a href='index.php?action=pengguna_delete&id={$row['idPengguna']} '>Hapus</a></td>
                </tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<h3><a href=\"index.php?action=pengguna_add\">+ Tambah Data Pengguna Baru</a></h3>";
        echo "<h3><a href=\"index.php\">Kembali ke Dashboard</a></h3>";
    }

    public function tampilkanFormTambahPengguna($data)
    {
        echo "<h2>Formulir Tambah Data Pengguna</h2>";
        echo "<form method='post' action='./index.php?action=pengguna_add' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Pengguna</label> <input type='text' maxlength='5' name='idPengguna' class='form-input' value='" . (isset($data['idPengguna']) ? $data['idPengguna'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>Nama Pengguna</label> <input type='text' name='namaPengguna' class='form-input' value='" . (isset($data['namaPengguna']) ? $data['namaPengguna'] : '') . "'><br>";
        echo "<label class='form-label'>Password</label> <input type='text' name='password' class='form-input' value='" . (isset($data['password']) ? $data['password'] : '') . "'><br>";
        echo "<label class='form-label'>Nama Depan</label> <input type='text' name='namaDepan' class='form-input' value='" . (isset($data['namaDepan']) ? $data['namaDepan'] : '') . "'><br>";
        echo "<label class='form-label'>Nama Belakang</label> <input type='text' name='namaBelakang' class='form-input' value='" . (isset($data['namaBelakang']) ? $data['namaBelakang'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>No HP</label> <input type='text' name='noHp' class='form-input' value='" . (isset($data['noHp']) ? $data['noHp'] : '') . "'><br>";
        echo "<label class='form-label'>Alamat</label> <input type='text' name='alamat' class='form-input' value='" . (isset($data['alamat']) ? $data['alamat'] : '') . "'><br>";
        echo "<label class='form-label'>ID Akses</label> <input type='text' maxlength='5' name='idAkses' class='form-input' value='" . (isset($data['idAkses']) ? $data['idAkses'] : '') . "'><br>";
        //echo "<input type='hidden' name='idBarang' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanPengguna\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    public function tampilkanFormEditPengguna($data)
    {
        echo "<h2>Formulir Edit Data Pengguna</h2>";
        echo "<form method='post' action='./index.php?action=pengguna_edit' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Pengguna</label> <input type='text' maxlength='5' name='idPengguna_new' class='form-input' value='" . (isset($data['idPengguna']) ? $data['idPengguna'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>Nama Pengguna</label> <input type='text' name='namaPengguna' class='form-input' value='" . (isset($data['namaPengguna']) ? $data['namaPengguna'] : '') . "'><br>";
        echo "<label class='form-label'>Password</label> <input type='text' name='password' class='form-input' value='" . (isset($data['password']) ? $data['password'] : '') . "'><br>";
        echo "<label class='form-label'>Nama Depan</label> <input type='text' name='namaDepan' class='form-input' value='" . (isset($data['namaDepan']) ? $data['namaDepan'] : '') . "'><br>";
        echo "<label class='form-label'>Nama Belakang</label> <input type='text' name='namaBelakang' class='form-input' value='" . (isset($data['namaBelakang']) ? $data['namaBelakang'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>No HP</label> <input type='text' name='noHp' class='form-input' value='" . (isset($data['noHp']) ? $data['noHp'] : '') . "'><br>";
        echo "<label class='form-label'>Alamat</label> <input type='text' name='alamat' class='form-input' value='" . (isset($data['alamat']) ? $data['alamat'] : '') . "'><br>";
        echo "<label class='form-label'>ID Akses</label> <input type='text' maxlength='5' name='idAkses' class='form-input' value='" . (isset($data['idAkses']) ? $data['idAkses'] : '') . "'><br>";
        echo "<input type='hidden' name='idPengguna' class='form-input' value='" . (isset($data['idPengguna']) ? $data['idPengguna'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanPengguna\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    //----------------tabel barang----------------
    public function tampilkanBarang($data)
    {
        echo "<h2>Data Barang</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID Barang</th>
                    <th>ID Pengguna</th>
                    <th>Keterangan</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Control</th>
                </tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['idBarang']}</td>
                    <td>{$row['idPengguna']}</td>
                    <td>{$row['keterangan']}</td>
                    <td>{$row['namaBarang']}</td>
                    <td>{$row['satuan']}</td>
                    <td><a href='index.php?action=barang_edit&id={$row['idBarang']}'>Edit</a> | <a href='index.php?action=barang_delete&id={$row['idBarang']}'>Hapus</a></td>
                </tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<h3><a href=\"index.php?action=barang_add\">+ Tambah Data Barang Baru</a></h3>";
        echo "<h3><a href=\"index.php\">Kembali ke Dashboard</a></h3>";
    }

    public function tampilkanFormTambahBarang($data)
    {
        echo "<h2>Formulir Tambah Barang</h2>";
        echo "<form method='post' action='./index.php?action=barang_add' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Barang</label> <input type='text' name='idBarang' class='form-input' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>ID Pengguna</label> <input type='text' name='idPengguna' class='form-input' value='" . (isset($data['idPengguna']) ? $data['idPengguna'] : '') . "'><br>";
        echo "<label class='form-label'>Nama Barang</label> <input type='text' name='namaBarang' class='form-input' value='" . (isset($data['namaBarang']) ? $data['namaBarang'] : '') . "'><br>";
        echo "<label class='form-label'>Keterangan</label> <input type='text' name='keterangan' class='form-input' value='" . (isset($data['keterangan']) ? $data['keterangan'] : '') . "'><br>";
        echo "<label class='form-label'>Satuan</label> <input type='text' name='satuan' class='form-input' value='" . (isset($data['satuan']) ? $data['satuan'] : '') . "'><br>";
        //echo "<input type='hidden' name='idBarang' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanBarang\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    public function tampilkanFormEditBarang($data)
    {
        echo "<h2>Formulir Edit Barang</h2>";
        echo "<form method='post' action='./index.php?action=barang_edit' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Barang</label> <input type='text' maxlength='5' name='idBarang_new' class='form-input' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>Nama Barang</label> <input type='text' name='namaBarang' class='form-input' value='" . (isset($data['namaBarang']) ? $data['namaBarang'] : '') . "'><br>";
        echo "<label class='form-label'>ID Pengguna</label> <input type='text' maxlength='5' name='idPengguna' class='form-input' value='" . (isset($data['idPengguna']) ? $data['idPengguna'] : '') . "'><br>";
        echo "<label class='form-label'>Keterangan</label> <input type='text' name='keterangan' class='form-input' value='" . (isset($data['keterangan']) ? $data['keterangan'] : '') . "'><br>";
        echo "<label class='form-label'>Satuan</label> <input type='text' name='satuan' class='form-input' value='" . (isset($data['satuan']) ? $data['satuan'] : '') . "'><br>";
        echo "<input type='hidden' name='idBarang' class='form-input' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit'  value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanBarang\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    //----------------tabel penjualan----------------	
    public function tampilkanPenjualan($data)
    {
        echo "<h2>Data Penjualan</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID Penjualan</th>
                    <th>Jumlah Penjualan</th>
                    <th>Harga Jual</th>
					<th>ID Barang</th>
					<th>Control</th>
                </tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['idPenjualan']}</td>
                    <td>{$row['jumlahPenjualan']}</td>
                    <td>{$row['hargaJual']}</td>
					<td>{$row['idBarang']}</td>
                    <td><a href='index.php?action=penjualan_edit&id={$row['idPenjualan']}'>Edit</a> | <a href='index.php?action=penjualan_delete&id={$row['idPenjualan']}'>Hapus</a></td>
                </tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<h3><a href=\"index.php?action=penjualan_add\">+ Tambah Data Penjualan Baru</a></h3>";
        echo "<h3><a href=\"index.php\">Kembali ke Dashboard</a></h3>";
    }

    public function tampilkanFormTambahPenjualan($data)
    {
        echo "<h2>Formulir Tambah Data Penjualan</h2>";
        echo "<form method='post' action='./index.php?action=penjualan_add' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Penjualan</label> <input type='text' maxlength='5' name='idPenjualan' class='form-input' value='" . (isset($data['idPenjualan']) ? $data['idPenjualan'] : '') . "'><br>"; //ini debug
        //echo "<label>Jumlah Pembelian:</label> <input type='text' name='hargaBeli' step='1' value='" . (isset($data['jumlahPembelian']) ? $data['jumlahPembelian'] : '') . "' required><br>";
        echo "<label class='form-label'>Jumlah Penjualan</label> <input type='number' name='jumlahPenjualan' class='form-input' value='" . (isset($data['jumlahPenjualan']) ? $data['jumlahPenjualan'] : '') . "'><br>";
        echo "<label class='form-label'>Harga Jual</label> <input type='number' name='hargaJual' class='form-input' value='" . (isset($data['hargaJual']) ? $data['hargaJual'] : '') . "'><br>";
        echo "<label class='form-label'>ID Barang</label> <input type='text' maxlength='5' name='idBarang' class='form-input' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'><br>";
        //echo "<input type='hidden' name='idBarang' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'>";
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanPenjualan\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    public function tampilkanFormEditPenjualan($data)
    {
        echo "<h2>Formulir Edit Data Penjualan</h2>";
        echo "<form method='post' action='./index.php?action=penjualan_edit' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Penjualan</label> <input type='text' maxlength='5' name='idPenjualan_new' class='form-input' value='" . (isset($data['idPenjualan']) ? $data['idPenjualan'] : '') . "'><br>"; //ini debug
        //echo "<label>Jumlah Pembelian:</label> <input type='text' name='hargaBeli' step='1' value='" . (isset($data['jumlahPembelian']) ? $data['jumlahPembelian'] : '') . "' required><br>";
        echo "<label class='form-label'>Jumlah Penjualan</label> <input type='number' name='jumlahPenjualan' class='form-input' value='" . (isset($data['jumlahPenjualan']) ? $data['jumlahPenjualan'] : '') . "'><br>";
        echo "<label class='form-label'>Harga Jual</label> <input type='number' name='hargaJual' class='form-input' value='" . (isset($data['hargaJual']) ? $data['hargaJual'] : '') . "'><br>";
        echo "<label class='form-label'>ID Barang</label> <input type='text' maxlength='5' name='idBarang' class='form-input' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'><br>";
        echo "<input type='hidden' name='idPenjualan' class='form-input' value='" . (isset($data['idPenjualan']) ? $data['idPenjualan'] : '') . "'>";
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanPenjualan\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    //----------------tabel pembelian----------------	
    public function tampilkanPembelian($data)
    {
        echo "<h2>Data Pembelian</h2>";
        echo "<table border='1'>
                <tr>
                    <th>ID Pembelian</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga Beli</th>
					<th>ID Barang</th>
					<th>Control</th>
                </tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['idPembelian']}</td>
                    <td>{$row['jumlahPembelian']}</td>
                    <td>{$row['hargaBeli']}</td>
					<td>{$row['idBarang']}</td>
                    <td><a href='index.php?action=pembelian_edit&id={$row['idPembelian']}'>Edit</a> | <a href='index.php?action=pembelian_delete&id={$row['idPembelian']}'>Hapus</a></td>
                </tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<h3><a href=\"index.php?action=pembelian_add\">+ Tambah Data Pembelian Baru</a></h3>";
        echo "<h3><a href=\"index.php\">Kembali ke Dashboard</a></h3>";
    }

    public function tampilkanFormTambahPembelian($data)
    {
        echo "<h2>Formulir Tambah Data Pembelian</h2>";
        echo "<form method='post' action='./index.php?action=pembelian_add' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Pembelian</label> <input type='text' maxlength='5' name='idPembelian' class='form-input' value='" . (isset($data['idPembelian']) ? $data['idPembelian'] : '') . "'><br>"; //ini debug
        //echo "<label>Jumlah Pembelian:</label> <input type='text' name='hargaBeli' step='1' value='" . (isset($data['jumlahPembelian']) ? $data['jumlahPembelian'] : '') . "'><br>";
        echo "<label class='form-label'>Jumlah Pembelian</label> <input type='number' name='jumlahPembelian' class='form-input' value='" . (isset($data['jumlahPembelian']) ? $data['jumlahPembelian'] : '') . "'><br>";
        echo "<label class='form-label'>Harga Beli</label> <input type='number' name='hargaBeli' class='form-input' value='" . (isset($data['hargaBeli']) ? $data['hargaBeli'] : '') . "' required><br>";
        echo "<label class='form-label'>ID Barang</label> <input type='text' maxlength='5' name='idBarang' class='form-input' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'><br>";
        //echo "<input type='hidden' name='idBarang' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit' class='form-submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanPembelian\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    public function tampilkanFormEditPembelian($data)
    {
        echo "<h2>Formulir Edit Data Pembelian</h2>";
        echo "<form method='post' action='./index.php?action=pembelian_edit' class='form-container'>";    //ubah disini
        echo "<label class='form-label'>ID Pembelian</label> <input type='text' maxlength='5' name='idPembelian_new' class='form-input' value='" . (isset($data['idPembelian']) ? $data['idPembelian'] : '') . "'><br>"; //ini debug
        echo "<label class='form-label'>Jumlah Pembelian</label> <input type='number' name='jumlahPembelian' class='form-input' value='" . (isset($data['jumlahPembelian']) ? $data['jumlahPembelian'] : '') . "' required><br>";
        echo "<label class='form-label'>Harga Beli</label> <input type='number' name='hargaBeli' class='form-input' value='" . (isset($data['hargaBeli']) ? $data['hargaBeli'] : '') . "'><br>";
        echo "<label class='form-label'>ID Barang</label> <input type='text' maxlength='5' name='idBarang' class='form-input' value='" . (isset($data['idBarang']) ? $data['idBarang'] : '') . "'><br>";
        echo "<input type='hidden' name='idPembelian' class='form-input' value='" . (isset($data['idPembelian']) ? $data['idPembelian'] : '') . "'>";
        //echo "<input type='hidden' name='action' value='add'>";	//yang diubah
        echo "<input type='submit' value='Simpan' class='form-submit'>";
        echo "<a href=\"index.php?action=tampilkanPembelian\" class='button-outline-green'>Kembali</a>";
        echo "</form>";
    }

    public function tampilkanDashboard($data1, $data2, $data3)
{
    echo "
    <h1>DASHBOARD</h1>
    <br>
    <br>
    <div class=\"container display\">
        <div class=\"content\">
            <h2>Total Pembelian</h2>                
            <div class='dashboard_number'>Rp. " . number_format($data1[0]['totalPembelian'], 0, ',', '.') . "</div>
        </div>
        
        <div class=\"content\">
            <h2>Total Penjualan</h2>                
            <div class='dashboard_number'>Rp. " . number_format($data2[0]['totalPenjualan'], 0, ',', '.') . "</div>
        </div>
        
        <div class=\"content\">
            <h2>Total Keuntungan</h2>                
            <div class='dashboard_number'>Rp. " . number_format($data3[0]['totalKeuntungan'], 0, ',', '.') . "</div>
        </div>    
    </div>
    <br>
    <br>
    <div class=\"chart-container\" style=\"display: flex; align-items: center;\">
       <div style=\"width: 400px; height: 400px;margin-left: 200px;\">
            <canvas id=\"myChart\" width=\"400\" height=\"400\"></canvas>
        </div>
        <div class=\"container\" style=\"margin-left: 400px;\">
            <div class=\"content\">
                <h3><a href=\"index.php?action=tampilkanHakAkses\">Tampilkan Data Hak Akses</a></h3>                
            </div>
            <div class=\"content\">
                <h3><a href=\"index.php?action=tampilkanBarang\">Tampilkan Data Barang</a></h3>                
            </div>
            <div class=\"content\">
                <h3><a href=\"index.php?action=tampilkanPengguna\">Tampilkan Data Pengguna</a></h3>                
            </div>
            <div class=\"content\">
                <h3><a href=\"index.php?action=tampilkanPembelian\">Tampilkan Data Pembelian</a></h3>                
            </div>
            <div class=\"content\">
                <h3><a href=\"index.php?action=tampilkanPenjualan\">Tampilkan Data Penjualan</a></h3>                
            </div>
            <div class=\"content\">
                <h3><a href=\"index.php?action=tampilkanLabaRugiPerBarang\">Tampilkan Data Laba Rugi Per Barang</a></h3>                
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Pembelian', 'Penjualan', 'Keuntungan'],
                datasets: [{
                    label: 'Total in Rp',
                    data: [
                        " . $data1[0]['totalPembelian'] . ",
                        " . $data2[0]['totalPenjualan'] . ",
                        " . $data3[0]['totalKeuntungan'] . "
                    ],
                    backgroundColor: [
                        'rgba(212, 62, 62, 1)',
                        'rgba(62, 130, 212, 1)',
                        'rgba(229, 239, 17 , 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
    <br>
    <br>
    <div class=\"group\">
        <h2>Kelompok 5 - ITDIM</h2>
        <ul>
            <li>Febrianti Situmeang      (2702366413)</li>
            <li>Fendrina Yoarbanu Tjitra (2702468011)</li>
            <li>Nova Jatmiko             (2702467173)</li>
            <li>Yudhi Bima Alfuadi       (2702364540)</li>
            <!--li>Adityo Candra Wirawan    (2702468900)</!--li>
        </ul>
    </div>
    ";
}

    // =======================
    public function tampilkanLabaRugiPerBarang($data)
    {
        echo "<h2>Data Keuntungan dan Kerugian Per Barang</h2>";
        echo "<table border='1'>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga Beli</th>
                    <th>Jumlah Penjualan</th>
                    <th>Harga Penjualan</th>
                    <th>Sisa Barang</th> 
					<th>Total Penjualan</th>
					<th>Total Untung Per Barang</th>
                </tr>";
        foreach ($data as $row) {
            echo "<tr>
                    <td>{$row['namaBarang']}</td>
					<td>".number_format($row['jumlahSatuan'], 0, ",", ".")."</td>
                    <td>{$row['jumlahPembelian']}</td>
                    <td>".number_format($row['hargaBeli'], 0, ",", ".")."</td>
					<td>{$row['jumlahPenjualan']}</td>
					<td>".number_format($row['hargaJual'], 0, ",", ".")."</td>
					<td>{$row['sisaBarang']}</td>
					<td>".number_format($row['totalPenjualan'], 0, ",", "."). "</td> 
					<td>" . number_format($row['totalPerBarang'], 0, ",", ".") . "</td> 
                </tr>";
        }
        echo "</table>";
        echo "<br>"; 
        echo "<h3><a href=\"index.php\">Kembali ke Dashboard</a></h3>";
        echo '<div id="container" style="width: 1024px; height: 500px"></div>';
    }

}
