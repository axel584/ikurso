<?
/*************************************
           UTILISATION :

$etiquettes = new EtiquettesPDF(3, 8);

$etiquettes->SetCase(2, 4); // facultatif ; si on veut commencer en milieu de page

$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);
$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);
$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);
$etiquettes->Adresse($code, $prenom, $nom, $adresse, $adresse2, $code_postal, $ville, $pays);

$etiquettes->Output();

// seb@esperanto-jeunes.org

***************************************/


define('FPDF_FONTPATH','font/');
require('pdf/fpdf.php');


class EtiquettesPDF extends FPDF
{
  var $CaseX, $CaseY;

  function EtiquettesPDF($nx, $ny, $sx=195, $sy=302, $MargeX=15, $MargeY=10)
  {
    $this->FPDF();

    $this->SetAutoPageBreak(0);
    $this->SetFont('Arial', '', 10);
    $this->SetTitle('Etiquettes');
    $this->SetAuthor('Arthur');

    $this->nx = $nx;
    $this->ny = $ny;

    $this->sx = $sx;
    $this->sy = $sy;

    $this->MargeX = $MargeX;
    $this->MargeY = $MargeY;

    $this->dx = $sx / $nx;
    $this->dy = $sy / $ny - 1;

    $this->CaseX = $nx - 1;
    $this->CaseY = $ny - 1;
    $this->ProchaineCase();
  }

  function SetCase($x, $y) {
    if (($x>$this->nx) or ($y>$this->ny)) return;
    while (($this->CaseX != $x) || ($this->CaseY != $y)) {
      $this->ProchaineCase();
    }
  }

  function ProchaineCase() {
    $this->CaseX++;
    if ($this->CaseX == $this->nx) {
      $this->CaseX = 0;
      $this->CaseY++;
    }
    if ($this->CaseY == $this->ny) {
      $this->AddPage();
      $this->CaseY=0;
    }

    $x = $this->dx * $this->CaseX + $this->MargeX;
    $y = $this->dy * $this->CaseY + $this->MargeY;

    $this->SetX($x);
    $this->SetLeftMargin($x);
    $this->SetY($y);
  }

  function Ecris($champ) {
    if ($champ) {
      $this->MultiCell($this->dx - $this->MargeX, 5, $champ, 0, 'L');
    }
  }

  function EcrisNote($champ) {
    if ($champ) {
      $this->MultiCell($this->dx - $this->MargeX - 5, 5, $champ . "  ", 0, 'R');
    }
  }

  function Adresse($note, $prenom, $nom, $adresse1, $adresse2, $codepostal, $ville, $pays)
  {
    $this->SetFont('', '', 6);
    $this->EcrisNote($note);
    $this->SetFont('', '', 12);
    $this->Ecris($prenom . ' ' . $nom);
    $this->Ecris($adresse1);
    $this->Ecris($adresse2);
    $this->SetFont('','B');
    $this->Ecris($codepostal . "  " . $ville);
    $this->Ecris($pays);
    $this->SetFont('','');
    $this->ProchaineCase();
  }

}

?>