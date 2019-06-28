<?php

require "fpdf.php";

class PDF_Rotate extends FPDF
{
var $angle=0;

function Rotate($angle,$x=-1,$y=-1)
{
    if($x==-1)
        $x=$this->x;
    if($y==-1)
        $y=$this->y;
    if($this->angle!=0)
        $this->_out('Q');
    $this->angle=$angle;
    if($angle!=0)
    {
        $angle*=M_PI/180;
        $c=cos($angle);
        $s=sin($angle);
        $cx=$x*$this->k;
        $cy=($this->h-$y)*$this->k;
        $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
    }
}

function _endpage()
{
    if($this->angle!=0)
    {
        $this->angle=0;
        $this->_out('Q');
    }
    parent::_endpage();
}
}


class mypdf extends PDF_Rotate{
	function header(){

		$this->SetFont('Arial','B',50);
   		$this->SetTextColor(255,192,203);
   		$this->RotatedText(45,200,'P r o v i s i o n a l',45);
   		
		$this->Image('AU.png',10,10,-300);
		$this->SetTextColor(0,0,0);
   		
		$this->SetFont('Arial','B',20);
		$this->Cell(200,5,'Department of Computer Technology',0,0,'C');
		$this->Ln();
		$this->Ln();
		$this->SetFont('Arial','B',18);
		$this->Cell(200,5,'Anna University, MIT Campus',0,0,'C');
		$this->Ln();
		$this->Ln();
		$this->SetFont('Arial','B',16);
		$this->Cell(200,5,'Chennai-44',0,0,'C');
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->SetFont('Arial','B',18);
		$this->Cell(200,10,'Academic Performance',0,0,'C');
		$this->Ln();
	}
	function RotatedText($x, $y, $txt, $angle)
		{
		    //Text rotated around its origin
		    $this->Rotate($angle,$x,$y);
		    $this->Text($x,$y,$txt);
		    $this->Rotate(0);
		}

	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',12);
		$this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
		$this->SetX(125);
		$this->Cell(0,10,date('r'),0,0,'L');
	}
	function headerTable(){
		$this->Ln();
		$this->Ln();
		$this->Ln();
		$this->SetFont('Arial','B',12);
		$this->Cell(10);
		$this->Cell(30,9,'Course Code',1,0,'C');
		$this->Cell(100,9,'Course Name',1,0,'C');
		$this->Cell(30,9,'Course Credit',1,0,'C');
		$this->Cell(15,9,'Grade',1,0,'C');
		$this->Ln();
	}
}
$reg = $_POST['reg'];
$pdf = new myPDF();
$pdf -> AliasNbPages();

$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sem_no = "SELECT * FROM `student` WHERE `regno` = $reg";
//echo "<script type='text/javascript'>alert('$sem_no');</script>";
$currSem = mysqli_query($conn,$sem_no);

$cgpa = 0;
$cgpa_total = 0;
$cgpa_credits = 0;

if(mysqli_num_rows($currSem)>0)
	{
		while($row=mysqli_fetch_array($currSem)){
				$sem = $row['sem'];
				$type = $row['type'];
				$iter = 1;
				while($iter<$sem){
					$pdf->AddPage('P','A4',0);
					$pdf->Ln();
					$pdf->Cell(10);
					$pdf->SetFont('Arial','B',12);
					$pdf->Cell(55,9,"Register Number: ",0,0,'L');
					$pdf->Cell(55,9,$reg,0,0,'L');
					$pdf->Ln();
					$pdf->SetFont('Arial','B',12);
					$pdf->Cell(10);
					$pdf->Cell(55,9,"Semester: ",0,0,'L');
					$pdf->Cell(55,9,$iter,0,0,'L');
					$pdf->Ln();
					$pdf->SetFont('Arial','B',12);
					$pdf->Cell(10);
					$pdf->Cell(55,9,"Regulation: ",0,0,'L');
					$pdf->Cell(55,9,$type,0,0,'L');
					$pdf->Ln();
					$pdf->SetFont('Arial','B',12);
					$pdf->Cell(10);
					$pdf->Cell(55,9,"Course: ",0,0,'L');
					$pdf->Cell(55,9,'B.E. Computer Science and Engineering',0,0,'L');

					$pdf -> headerTable();
					

					$array = [
					    "O" => 10,
					    "A+" => 9,
					    "A" => 8,
					    "B+" => 7,
					    "B" => 6,
					    "RA" => 0,
					    "#RA" => 0
					    
					];				
					$gpa = 0;
					$gpa_total = 0;
					$gpa_credits = 0;
					$sql = "SELECT * FROM `$reg` WHERE `sem` = $iter";
					$result = mysqli_query($conn,$sql);

					if(mysqli_num_rows($result)>0)
					{
						while($row=mysqli_fetch_array($result)){
								$pdf->SetFont('Arial','',10);
								$pdf->Cell(10);
								$pdf->Cell(30,9,$row['ccode'],1,0,'L');
								$pdf->Cell(100,9,$row['cname'],1,0,'L');
								$pdf->Cell(30,9,$row['credits'],1,0,'L');
								$pdf->Cell(15,9,$row['grade'],1,0,'L');
								$pdf->Ln();

								$gpa_total = $gpa_total +( $row['credits'] * $array[$row['grade']]);
								if($array[$row['grade']]!=0){
									$gpa_credits = $gpa_credits + $row['credits'];
								}
								

						}
					}
					$gpa = $gpa_total/$gpa_credits;

					$cgpa_total = $cgpa_total + $gpa_total;
					$cgpa_credits = $cgpa_credits + $gpa_credits;

					$cgpa = $cgpa_total/$cgpa_credits;

					$pdf->Ln();
					$pdf->Cell(60);
					$pdf->SetFont('Arial','B',12);
					$pdf->Cell(30,9,'GPA:',0,0,'L');
					$pdf->Cell(30,9,number_format((float)$gpa, 2, '.', ''),0,0,'L');
					$pdf->Ln();
					$pdf->Cell(60);
					$pdf->SetFont('Arial','B',12);
					$pdf->Cell(30,9,'CGPA:',0,0,'L');
					$pdf->Cell(30,9,number_format((float)$cgpa, 2, '.', ''),0,0,'L');
					$pdf->SetFont('Arial','',12);
					$pdf->Cell(10);
					$pdf->SetY(-35);
					$pdf->Cell(68,9,'Faculty Signature',0,0,'L');
					$pdf->Cell(68,9,'Department Seal',0,0,'L');
					$pdf->Cell(68,9,'HOD Signature',0,0,'L');
					$iter = $iter +1;
				}
											
		}
	}


$pdf->Output('I',$reg.'.pdf');
?>