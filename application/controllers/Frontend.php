<?php

class Frontend extends CI_Controller {
	function buku_tamu() {
        if (version_compare(phpversion(), '7.0.0', '<')) {
            $this->load->view( 'errors/html/error_php_v' );
        } else {
        
			if (empty($_POST)) {
				$this->load->view('errors/html/error_403');
			} else {
				$data = array(
					'id_pengunjung' 	=> 'VIS_' . rand(),
					'nama_pengunjung'	=> htmlspecialchars( $_POST['FirstName'] ) . ' ' . htmlspecialchars( $_POST['LastName'] ),
					'alamat'			=> htmlspecialchars( $_POST['alamat'] ),
					'waktu'				=> date("Y-m-d H.i.s"),
					'tujuan'			=> implode(', ', $_POST['tujuan']),
					'jk'				=> htmlspecialchars( $_POST['selectKelamin'] ),
					'alamat_ip'			=> htmlspecialchars($_POST['alamat_ip']),
				);
				$get = $this->db->insert( 'tbl_tamu', $data );
				if ($get === false) {
					echo 0;
				} else {
					echo 1;
				}
				
			}
		}
	}
	function list_buku_tamu() {
        if (version_compare(phpversion(), '7.0.0', '<')) {
            $this->load->view( 'errors/html/error_php_v' );
        } else {
        
			if (empty($_GET)) {
				$this->load->view('errors/html/error_403');
			} else {
				$this->db->select( 'nama_pengunjung, waktu, tujuan' );
				$data = $this->db->get('tbl_tamu');
				if ($data->num_rows() > 1) {
					foreach ($data->result() as $data) {
						$nenen = array(
							'wifi' 		=> 'Mengakses Internet',
							'baca' 		=> 'Baca Buku',
							'pertemuan' => 'Pertemuan Santai',
							'koran'		=> 'Baca Koran',
							'lainnya'	=> 'Lainnya',
						);

						$array[] = [
							$data->nama_pengunjung,
							date('l, j F Y h.i.s', strtotime($data->waktu)),
							"<span class=\"badge badge-primary\">" . $nenen[$data->tujuan] . "</span>",
						];
					}

					$result = array(
						'data' => $array,
					);
					echo json_encode($result);

				} else {
					$result = array(
						'data' => [],
					);
					echo json_encode($result);
					
				}
			}
		}
	}
}