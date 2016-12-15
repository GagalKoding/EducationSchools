<?php
/**
 * @Author  : David Naista<davidnaista83@gmail.com>
 * @Date    : 12/28/15 - 11:46 AM
 */

use \modules\controllers\MainController;

class GuruController extends MainController {


    public function index() {

        $this->model('guru');

        $data = $this->guru->get();

        $this->template('guru', array('guru' => $data));
    }

}
?>