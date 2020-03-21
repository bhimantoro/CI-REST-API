#######################
CodeIgniter RESTful API
#######################

API sederhana untuk menjalankan fungsi CRUD, silahkan gunakan software Postman.
untuk URL gunakan http://hostname/ci_rest_mahasiswa
untuk method gunakan POST untuk fungsi CREATE, GET untuk fungsi READ, PUT untuk fungsi UPDATE, dan DELETE untuk fungsi DELETE

silahkan untuk menggunakan query tabel berikut dengan database yaitu "ci_rest"

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(9) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `jurusan` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;