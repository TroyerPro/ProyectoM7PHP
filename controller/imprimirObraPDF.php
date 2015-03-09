<?php
include "../model/businessLayer/Class_Obra.php";
session_start();
$obra = unserialize($_SESSION["obraSel"]);

include_once("adodb/adodb.inc.php");


// Fonts
define('FPDF_FONTPATH', 'font');

// Classe pdf
include('../model/businessLayer/Class_PDFMCTable.php');

// VENIM DE TRIAR EL PETICIONARI
   //$cod = $_GET["id"]; OLGA
   $cod = $obra->getIDobra();;
   //Consultem les dades del peticionari


        $nom       = $obra->getNombre();
        $genero       = $obra->getGenero();
        $actorsP       = $obra->getActoresP();
        $actorsS       =  $obra->getActoresS();
        $fechaI       = $obra->getFechaI();
        $fechaF       =$obra->getFechaF();
        $director    =$obra->getDirector();



// Estenem les possibilitats de la classe original (fpdf) en una de nova
class PDFTableMC extends PDF_MC_Table
{

function Header(){
	$this->SetTextColor(0,0,155);
	$this->SetLineWidth(0.50);
	$this->Rect(10,10,190, 15);
        $this-> SetY(15);
        $this-> SetX(15);
	$this->SetFont('Arial','B',16);
	$this->Cell(110,5,'Obra ID',0,0,'L');
	$this->SetFont('Arial','',10);
	$this->Cell(75,5,'Data i hora: '.date("d/m/Y G:i"),0,0,'R');
  $this->Cell(75,5,'Data i hora: '.date("d/m/Y G:i"),0,0,'R');
$this->Ln(15);
$this->SetFont('Arial','B',14);
$this->Cell(0,0,'FITCHA DE LA OBRA');
$this->Ln(10);
            $this->SetFont('Arial','B',13);
            $this->SetWidths(array(15,35,15,115));            
            $this->SetAligns(array('L', 'L', 'L', 'L' ));
}	

function Footer() {
        //Go to 1.5 cm from bottom
        $this->SetY(-15);
        //Select Arial italic 8
        $this->SetFont('Arial','I',8);
        //Print centered page number
        $this->Cell(0,10,'Pàgina '.$this->PageNo().'/{nb}',0,0,'R');
    }


}

$pdf=new PDFTableMC(); // creem el pdf
$pdf->AliasNbPages();
$pdf->Open();
$pdf->AddPage();
$pdf->SetTitle('FitxaPeticionari_'.$cod);
$pdf->SetMargins(10,5,5);
$pdf->SetDisplayMode(93);
$pdf->Ln(5);


// Grup 1
  $text= 'Datos de la obra';
  $pdf->SetFont('Arial','',11);
  $pdf->SetTextColor(255,255,255);
  $pdf->SetFillColor(192,192,192);
  $pdf->Cell(190, 5, $text, 0, 1, 'L', '1');
  $pdf->Ln(3);
  $pdf->SetTextColor(255,0,0);
  $pdf->SetFont('Arial','',11);
  $pdf->SetWidths(array(60,120));            
  $pdf->SetAligns(array('L', 'L'));
  $pdf->Row(array('Nombre:', $nom));
  $pdf->Ln(2);	
  $pdf->SetTextColor(0,0,0);
  $pdf->Row(array('Genero:', $genero));	
  $pdf->Ln(2); $pdf->SetTextColor(255,0,0);
  $pdf->Row(array('Actores principales:', $actorsP));	
  $pdf->Ln(2);$pdf->SetTextColor(0,0,0);
  $pdf->Row(array('Actores secundarios:', $actorsS));	
  $pdf->Ln(2);  $pdf->SetTextColor(255,0,0);
  $pdf->Row(array('Fecha inicial:', $fechaI));	
  $pdf->Ln(2);$pdf->SetTextColor(0,0,0);
  $pdf->Row(array('Fecha final:', $fechaF));
  $pdf->Ln(2);  $pdf->SetTextColor(255,0,0);
  $pdf->Row(array('Director:', $director));


  $pdf->Output();


?>