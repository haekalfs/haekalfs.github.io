<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require FCPATH . '/vendor/autoload.php';

use Dompdf\Dompdf;

class Certification extends CI_Controller {
    public function index()
    {
       $pdf = $this->load->view("certificate01",null,true);
      
       $dompdf = new Dompdf();
       $dompdf->set_option('isRemoteEnabled', TRUE);
       $dompdf->loadHtml($pdf);
       // (Optional) Setup the paper size and orientation
       $dompdf->setPaper('A4', 'landscape');
       // Render the HTML as PDF
       $dompdf->render();
       // Output the generated PDF to Browser
       //$dompdf->stream();
       $dompdf->stream('my.pdf',array('Attachment'=>0));
    }
}