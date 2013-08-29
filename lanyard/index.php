<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('tcpdf/tcpdf.php');
require_once('fpdi/fpdi.php');
require_once('fpdf/fpdf.php');

class MY_PDF extends FPDI {
    
    public function __construct()
    {
        parent::__construct('P', 'mm', array(100, 150) , true, 'UTF-8', false);
        
        $this->setSourceFile('Lanyard.pdf'); 
    }
    
    public function newPage($first,$last,$twitter)
    {
        $this->addPage();
        
        $template = $this->importPage(1);

        $this->useTemplate($template, 0, 0, 0, 0, false);
        
        $html  = '<p style="font-weight:bold;font-size:115%;" >'.trim($first.' '.$last).'</p>';
        if($twitter)
        {
            if(stripos($twitter, '/'))
            {
                $twitter_array = explode('/',$twitter);
                $twitter = $twitter_array[3];
                //var_dump($twitter_array,$twitter);exit;
            }
            $twitter = preg_replace('/[@]+/','@','@'.trim($twitter));
            $html .= '<p>'.$twitter.'</p>';
        }
        $this->writeHTMLCell(0, 0, 10, 37, $html, 0, 2, 0, 0, 'C');
    }
}

$pdf = new MY_PDF();

$csv = 'attendee.csv';

if (($handle = fopen($csv, "r")) !== FALSE) {
    $first_row = true;
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if(!$first_row)
        {
            $pdf->newPage($data[3], $data[2], $data[17]);
        }
        $first_row = false;
    }
    fclose($handle);
}

$spearkers = array(
//    array('Syd','Lawrence','sydlawrence'),
//    array('Lorna','Mitchell','lornajane'),
//    array('David','Mytton','davidmytton'),
//    array('Peter','Bourgon','peterbourgon'),
//    array('Phil','Leggetter','leggetter'),
//    array('Cristiano','Betta','cbetta'),
//    array('George','Ornbo','shapeshed'),
//    array('Joe','Littlejohn','joelittlejohn'),
//    array('Mark','Godfrey','msgodf'),
//    array('Martyn','Davies','martynd'),
//    array('Andy','Piper','andypiper'),
//    array('Andy','Piper','andypiper'),
    array('Clarent','Roew',''),
    array('Mike','Elsmore','ukmadlz & @hackferencebrum'),
    array('Katy','Soon to be Elsmore','cheekybat'),
);
foreach($spearkers as $spearker)
{
    $pdf->newPage($spearker[0], $spearker[1], $spearker[2]);
}

$pdf->Output('all_the_lanyards.pdf','D');

?>
