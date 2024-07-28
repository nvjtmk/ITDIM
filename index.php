<?php
require_once 'js.php';
require_once 'model.php';
require_once 'view.php';
require_once 'controller.php';
require_once 'style.css';

$model = new Model();
$view = new View();
$controller = new Controller($model, $view);



$action = isset($_GET['action']) ? $_GET['action'] : '';		
switch ($action) {
	//---------------------------tabel hakakses-------------------------	
	case 'hakakses_add':
		$data = $_POST; // Data dari formulir tambah
        if (!empty($data)) {		//jika data masih kosong
			$data = $_POST;
            $controller->tambahHakAkses($data);
            $controller->tampilkanHakAkses();
            //header('Location: index.php?action=tampilkanHakAkses');
        } else {							
			$view->tampilkanFormTambahHakAkses([]);
        }
        break;

    case 'hakakses_edit':
        $id = isset($_GET['id']) ? $_GET['id'] : '';	//operator ternary, jika ada 'id' dalam $_GET, maka...
		$data = $_POST; // Data dari formulir edit	
        if (!empty($data)) {
            $controller->updateHakAkses($data);
            $controller->tampilkanHakAkses();
            //header('Location: index.php');
        } else {
            $controller->editHakAkses($id);
        }
        break;

    case 'hakakses_delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $controller->hapusHakAkses($id);
        $controller->tampilkanHakAkses();
        //header('Location: index.php');
        break;	

	//---------------------------tabel pengguna-------------------------	
	case 'pengguna_add':
		$data = $_POST; // Data dari formulir tambah
        if (!empty($data)) {		//jika data masih kosong
			$data = $_POST;
            $controller->tambahPengguna($data);
            $controller->tampilkanPengguna();
            //header('Location: index.php');
        } else {							
			$view->tampilkanFormTambahPengguna([]);
        }
        break;

    case 'pengguna_edit':
        $id = isset($_GET['id']) ? $_GET['id'] : '';	//operator ternary, jika ada 'id' dalam $_GET, maka...
		$data = $_POST; // Data dari formulir edit	
        if (!empty($data)) {
            $controller->updatePengguna($data);
			file_put_contents('cache2.php', "update barang");
            $controller->tampilkanPengguna();
            //header('Location: index.php');
        } else {
            $controller->editPengguna($id);
        }
        break;

    case 'pengguna_delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $controller->hapusPengguna($id);
        $controller->tampilkanPengguna();
        //header('Location: index.php');
        break;	

	//---------------------------tabel barang-------------------------	
    case 'barang_add':
		$data = $_POST; // Data dari formulir tambah
        if (!empty($data)) {		//jika data masih kosong
			$data = $_POST;
            $controller->tambahBarang($data);
            $controller->tampilkanBarang();
            //header('Location: index.php');
        } else {							
			$view->tampilkanFormTambahBarang([]);
        }
        break;

    case 'barang_edit':
        $id = isset($_GET['id']) ? $_GET['id'] : '';	//operator ternary, jika ada 'id' dalam $_GET, maka...
		$data = $_POST; // Data dari formulir edit		
        if (!empty($data)) {
            $controller->updateBarang($data);
			file_put_contents('cache2.php', "update barang");
            $controller->tampilkanBarang();
        } else {
            $controller->editBarang($id);
        }
        break;

    case 'barang_delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $controller->hapusBarang($id);
        $controller->tampilkanBarang();
        //header('Location: index.php');
        break;

	//---------------------------tabel penjualan-------------------------	
	case 'penjualan_add':
		$data = $_POST; // Data dari formulir tambah
        if (!empty($data)) {		//jika data masih kosong
			$data = $_POST;
            $controller->tambahPenjualan($data);
            $controller->tampilkanPenjualan();
            //header('Location: index.php');
        } else {							
			$view->tampilkanFormTambahPenjualan([]);
        }
        break;

    case 'penjualan_edit':
        $id = isset($_GET['id']) ? $_GET['id'] : '';	//operator ternary, jika ada 'id' dalam $_GET, maka...
		$data = $_POST; // Data dari formulir edit	
        if (!empty($data)) {
            $controller->updatePenjualan($data);
            $controller->tampilkanPenjualan();

        } else {
            $controller->editPenjualan($id);
        }
        break;

    case 'penjualan_delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $controller->hapusPenjualan($id);
        $controller->tampilkanPenjualan();
        //header('Location: index.php');
        break;  

	//---------------------------tabel pembelian-------------------------	
	case 'pembelian_add':
		$data = $_POST; // Data dari formulir tambah
        if (!empty($data)) {		//jika data masih kosong
			$data = $_POST;
            $controller->tambahPembelian($data);
            $controller->tampilkanPembelian();
            //header('Location: index.php');
        } else {							
			$view->tampilkanFormTambahPembelian([]);
        }
        break;

    case 'pembelian_edit':
        $id = isset($_GET['id']) ? $_GET['id'] : '';	//operator ternary, jika ada 'id' dalam $_GET, maka...
		$data = $_POST; // Data dari formulir edit	
        if (!empty($data)) {
            $controller->updatePembelian($data);
            $controller->tampilkanPembelian();
            //header('Location: index.php');
        } else {
            $controller->editPembelian($id);
        }
        break;

    case 'pembelian_delete':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $controller->hapusPembelian($id);
        $controller->tampilkanPembelian();
        //header('Location: index.php');
        break;	

	//menampilkan tabel
	case 'tampilkanHakAkses':
		$controller->tampilkanHakAkses();
		break;
	case 'tampilkanBarang':
		$controller->tampilkanBarang();
		break;
	case 'tampilkanPengguna':
		$controller->tampilkanPengguna();
		break;
	case 'tampilkanPenjualan':
		$controller->tampilkanPenjualan();
		break;
	case 'tampilkanPembelian':
		$controller->tampilkanPembelian();
		break;

    case 'tampilkanLabaRugiPerBarang':
        $controller->tampilkanLabaRugiPerBarang();
        break;

    default:
		$controller->tampilkanDashboard();
		break;

		/* $data = $_POST;
		foreach ($data as $value) {
			echo $value . "<br>";
		}  */
		
	
}	

//DEBUGING CODE AND SYNTAX	
//echo $data['idBarang'], ', ', $data['idPengguna'], ', ', $data['keterangan'], ', ', $data['namaBarang'], ', ', $data['satuan'], ', ', $data['action'];
//echo '<script>alert("['.$data['idPengguna'].', '.$data['keterangan'].', '.$data['namaBarang'].', '.$data['satuan'].']");</script>';
//require_once 'controller.php';
//file_put_contents('cache.php', "data masih kosong");
/* foreach ($data as $value) {
	echo $value . "<br>";
	} */
	
//-----------------------CODE ADD BERFUNGSI----------------
/* $data = $_POST; // Data dari formulir tambah
if ($data['idBarang'] == '') {		//jika data masih kosong
	$view->tampilkanForm([]);
} else {							
	//file_put_contents('cache.php', "data masih kosong");
	$data = $_POST;
	//require_once 'controller.php';			
	$controller->tambahBarang($data);
	file_put_contents('cache2.php', "tambah barang");
	header('Location: index.php');
} */
//-------------------------------------------------------

//-----------------------CODE ADD BERFUNGSI----------------
/* $data = $_POST; // Data dari formulir tambah
if (!empty($data)) {		//jika data masih kosong
	//file_put_contents('cache.php', "data masih kosong");
	$data = $_POST;
	//require_once 'controller.php';			
	$controller->tambahBarang($data);
	file_put_contents('cache2.php', "tambah barang");
	header('Location: index.php');
} else {							
	$view->tampilkanForm([]);
} */
//----------------------------------------------------------	

?>
