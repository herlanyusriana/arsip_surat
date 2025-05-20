<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
        $this->load->helper('auth');
    }

    public function index()
    {
        $keyword = $this->input->get('q');
        $data['title'] = "Surat Masuk";
        $data['surat'] = $this->Surat_model->get_all($keyword);
        $this->load->view('template/header', $data);
        $this->load->view('surat/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (!is_admin()) show_404();

        $data['title'] = "Tambah Surat Masuk";
        $this->load->view('template/header', $data);
        $this->load->view('surat/tambah');
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        if (!is_admin()) show_404();

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_pdf')) {
            echo $this->upload->display_errors();
            return;
        }

        $file_data = $this->upload->data();

        $data = [
            'kode_klasifikasi' => $this->input->post('kode_klasifikasi'),
            'no_arsip'         => $this->input->post('no_arsip'),
            'perihal'          => $this->input->post('perihal'),
            'kurun_waktu'      => $this->input->post('kurun_waktu'),
            'asal_surat'       => $this->input->post('asal_surat'),
            'media_arsip'      => $this->input->post('media_arsip'),
            'tanggal_masuk'    => $this->input->post('tanggal_masuk'),
            'tanggal_surat'    => $this->input->post('tanggal_surat'),
            'lembar'           => $this->input->post('lembar'),
            'folder_boks'      => $this->input->post('folder_boks'),
            'file_pdf'         => $file_data['file_name'],
        ];

        $this->Surat_model->simpan($data);
        redirect('surat');
    }

    public function cetak()
    {
        $this->load->library('pdf');
        $data['title'] = "Laporan Surat Masuk";
        $data['surat'] = $this->Surat_model->get_all();

        $html = $this->load->view('surat/laporan_pdf', $data, true);
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream("laporan_surat_masuk.pdf", array("Attachment" => false));
    }

    public function cetak_by_id($id)
    {
        $data['surat'] = $this->Surat_model->get_by_id($id);
        if (!$data['surat']) show_404();

        $dompdf = new Dompdf();
        $html = $this->load->view('surat/cetak_pdf', $data, true);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("surat_masuk_$id.pdf", array("Attachment" => false));
    }

    public function edit($id)
    {
        if (!is_admin()) show_404();

        $data['title'] = "Edit Surat Masuk";
        $data['surat'] = $this->Surat_model->get_by_id($id);
        $this->load->view('template/header', $data);
        $this->load->view('surat/edit', $data);
        $this->load->view('template/footer');
    }

    public function update()
{
    $id = $this->input->post('id');
    $data = $this->input->post();
    unset($data['id']); // hilangkan ID dari update data

    // Cek apakah ada file PDF baru di-upload
    if (!empty($_FILES['file_pdf']['name'])) {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'pdf';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file_pdf')) {
            $file_data = $this->upload->data();
            $data['file_pdf'] = $file_data['file_name'];
        } else {
            echo $this->upload->display_errors();
            return;
        }
    }

    $this->Surat_model->update($id, $data);
    redirect('surat');
}

    public function hapus($id)
    {
        if (!is_admin()) show_error('Hanya admin yang boleh menghapus data!');

        $this->Surat_model->hapus($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('surat');
    }

    public function rekap()
    {
        $this->load->helper('form');

        $start = $this->input->get('start');
        $end   = $this->input->get('end');

        $data['title'] = "Rekap Surat Masuk";
        $data['page']  = "surat/rekap";
        $data['surat'] = ($start && $end) ? $this->Surat_model->get_by_date($start, $end) : [];

        $this->load->view('template/header', $data);
        $this->load->view('surat/rekap', $data);
        $this->load->view('template/footer');
    }

    public function print_rekap_all()
    {
        $start = $this->input->get('start');
        $end   = $this->input->get('end');

        if (!$start || !$end) {
            redirect('surat/rekap');
        }

        $this->load->library('pdf');
        $data['rekap'] = $this->Surat_model->get_by_date($start, $end);

        $html = $this->load->view('surat/rekap_print_all', $data, true);
        $this->pdf->loadHtml($html);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream("Rekap_Surat_{$start}_sd_{$end}.pdf", array("Attachment" => false));
    }

    public function delete($id)
    {
        if (!is_admin()) show_error('Hanya admin yang boleh menghapus data!');

        $this->Surat_model->delete($id);
        redirect('surat');
    }
}
