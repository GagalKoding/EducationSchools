<?php
/**
 * @Author  : David Naista<davidnaista83@gmail.com>
 * @Date    : 12/28/15 - 2:55 PM
 */
use \modules\controllers\MainController;

class TentangController extends MainController {

    public function index() {

        $this->model('tentang');

        $data = $this->tentang->get();

        if(count($data)) {

            $data = $data[0];
        }

        $this->template('tentang', array('tentang' => $data));
    }
}
?>