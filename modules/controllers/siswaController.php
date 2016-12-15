<?php
/**
 * @Author  : David Naista<davidnaista83@gmail.com>
 * @Date    : 12/17/15 - 1:06 AM
 */

use \modules\controllers\MainController;

class SiswaController extends MainController {


    public function index() {

        $this->model('siswa');

        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'status' => "Siswa"
            )
        );

        $this->template('siswa', array('siswa' => $data));
    }

    // untuk halaman detail dari siswa

    public function detail() {

        $id = isset($_GET["id"]) ? $_GET["id"] : "0";

        $this->model('siswa');

        $data = $this->siswa->getJoin('jurusan',
            array(
                'jurusan.id_jurusan' => 'siswa.id_jurusan'
            ),
            'JOIN',
            array(
                'id_siswa' => $id
            )
        );

        $this->template('detailsiswa', array('siswa' => $data));
    }

}
?>