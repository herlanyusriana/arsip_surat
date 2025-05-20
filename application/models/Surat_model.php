<?php
class Surat_model extends CI_Model
{
    public function get_all($keyword = null)
{
    if ($keyword) {
        $this->db->like('no_arsip', $keyword);
        $this->db->or_like('perihal', $keyword);
        $this->db->or_like('asal_surat', $keyword);
        $this->db->or_like('kode_klasifikasi', $keyword);
    }
    return $this->db->get('surat_masuk')->result();
}

    public function simpan($data)
    {
        $this->db->insert('surat_masuk', $data);
    }
  public function get_by_id($id)
    {
        return $this->db->get_where('surat_masuk', ['id' => $id])->row();
    }

public function update($id, $data)
{
    return $this->db->where('id', $id)->update('surat_masuk', $data);
}
public function count_all()
{
    return $this->db->count_all('surat_masuk');
}

public function count_klasifikasi()
{
    $this->db->select('COUNT(DISTINCT kode_klasifikasi) as total');
    $query = $this->db->get('surat_masuk')->row();
    return $query->total;
}

public function get_terbaru($limit = 5)
{
    $this->db->order_by('tanggal_masuk', 'DESC');
    return $this->db->get('surat_masuk', $limit)->result();
}
public function delete($id)
{
    $this->db->where('id', $id);
    $this->db->delete('surat_masuk');
}
public function get_by_date($start, $end)
{
    $this->db->where('tanggal_masuk >=', $start);
    $this->db->where('tanggal_masuk <=', $end);
    return $this->db->get('surat_masuk')->result();
}
public function save($data)
{
    $this->db->insert('surat_masuk', $data);
}

}
