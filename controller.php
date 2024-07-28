<?php

class Controller {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }
	
//------------tabel hakakses-----------------------------	
	public function tampilkanHakAkses() {
        $data = $this->model->getHakAkses();
        $this->view->tampilkanHakAkses($data);
    }

    public function tambahHakAkses($data) {
        $this->model->insertHakAkses($data);
    }

    public function editHakAkses($id) {
        $data = $this->model->getHakAksesById($id);
        $this->view->tampilkanFormEditHakAkses($data);
    }

    public function updateHakAkses($data) {
        $this->model->updateHakAkses($data);
        //header('Location: index.php');
    }

    public function hapusHakAkses($id) {
        $this->model->deleteHakAkses($id);
        //header('Location: index.php');
    }

//------------tabel pengguna-----------------------------	
	public function tampilkanPengguna() {
        $data = $this->model->getPengguna();
        $this->view->tampilkanPengguna($data);
    }

    public function tambahPengguna($data) {
        $this->model->insertPengguna($data);
    }

    public function editPengguna($id) {
        $data = $this->model->getPenggunaById($id);
        $this->view->tampilkanFormEditPengguna($data);
    }

    public function updatePengguna($data) {
        $this->model->updatePengguna($data);
    }

    public function hapusPengguna($id) {
        $this->model->deletePengguna($id);
    }	
	
//------------tabel Barang-----------------------------
    public function tampilkanBarang() {
        $data = $this->model->getBarang();
        $this->view->tampilkanBarang($data);
    }

    public function tambahBarang($data) {
        $this->model->insertBarang($data);
    }

    public function editBarang($id) {
        $data = $this->model->getBarangById($id);
        $this->view->tampilkanFormEditBarang($data);
    }

    public function updateBarang($data) {
        $this->model->updateBarang($data);
        //header('Location: index.php');
    }

    public function hapusBarang($id) {
        $this->model->deleteBarang($id);
        //header('Location: index.php');
    }


    //------------tabel penjualan-----------------------------

    public function tampilkanLabaRugiPerBarang()
    {
        $data = $this->model->getLabaPenjualan(); 
        $this->view->tampilkanLabaRugiPerBarang($data);
    }

	public function tampilkanPenjualan() {
        $data = $this->model->getPenjualan();
        $this->view->tampilkanPenjualan($data);
    }

    public function tambahPenjualan($data) {
        $this->model->insertPenjualan($data);
    }

    public function editPenjualan($id) {
        $data = $this->model->getPenjualanById($id);
        $this->view->tampilkanFormEditPenjualan($data);
    }

    public function updatePenjualan($data) {
        $this->model->updatePenjualan($data);
        //header('Location: index.php');
    }

    public function hapusPenjualan($id) {
        $this->model->deletePenjualan($id);
        //header('Location: index.php');
    }	

//------------tabel pembelian-----------------------------
	
	public function tampilkanPembelian() {
        $data = $this->model->getPembelian();
        $this->view->tampilkanPembelian($data);
    }

    public function tambahPembelian($data) {
        $this->model->insertPembelian($data);
    }

    public function editPembelian($id) {
        $data = $this->model->getPembelianById($id);
        $this->view->tampilkanFormEditPembelian($data);
    }

    public function updatePembelian($data) {
        $this->model->updatePembelian($data);
        //header('Location: index.php');
    }

    public function hapusPembelian($id) {
        $this->model->deletePembelian($id);
        //header('Location: index.php');
    }		

//------------DASHBOARD-----------------------------	
	public function tampilkanDashboard() {
		
		$data1 = $this->model->calculateTotalPurchase();
		$data2 = $this->model->calculateTotalSelling();
		$data3 = $this->model->calculateProfit();
        $this->view->tampilkanDashboard($data1, $data2, $data3);
	}
	
}
?>
