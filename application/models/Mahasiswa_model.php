<?php

class Mahasiswa_model extends CI_Model
{
  public function getMahasiswa($id = null)
  {
    if ($id === null) {
      $this->db->db_connect();
      $pdo_query = "SELECT * FROM mahasiswa";
      $pdo_stmt = $this->db->conn_id->prepare($pdo_query);
      $pdo_stmt->execute();
      return $pdo_stmt->fetchAll(PDO::FETCH_ASSOC);
      $this->db->_close();
    } else {
      $this->db->db_connect();
      $pdo_query = "SELECT * FROM mahasiswa where id = ?";
      $pdo_stmt = $this->db->conn_id->prepare($pdo_query);
      $pdo_stmt->execute([$id]);
      return $pdo_stmt->fetchAll(PDO::FETCH_ASSOC);
      $this->db->_close();
    }
  }

  public function deleteMahasiswa($id)
  {
    $this->db->db_connect();
    $pdo_query = "DELETE FROM mahasiswa WHERE id = ?";
    $pdo_stmt = $this->db->conn_id->prepare($pdo_query);
    $pdo_stmt->execute([$id]);
    return $pdo_stmt->rowCount();
  }

  public function createMahasiswa($data)
  {
    $this->db->db_connect();
    $pdo_query = "INSERT INTO mahasiswa (nrp, nama, email, jurusan) VALUES (:nrp, :nama, :email, :jurusan)";
    $pdo_stmt = $this->db->conn_id->prepare($pdo_query);
    $pdo_stmt->execute($data);
    return $pdo_stmt->rowCount();
    $this->db->close();
  }

  public function updateMahasiswa($data, $id)
  {
    $this->db->db_connect();
    $pdo_query = "UPDATE mahasiswa SET nrp = :nrp, nama = :nama, email = :email, jurusan = :jurusan WHERE id = $id";
    $pdo_stmt = $this->db->conn_id->prepare($pdo_query);
    $pdo_stmt->execute($data);
    return $pdo_stmt->rowCount();
    $this->db->close;
  }
}
