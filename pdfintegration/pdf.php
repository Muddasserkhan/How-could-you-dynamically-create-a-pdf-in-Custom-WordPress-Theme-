<?php
use setasign\Fpdi\Fpdi;

require_once(dirname(__FILE__) . '/fpdf/fpdf.php');
require_once(dirname(__FILE__) . '/fpdi/src/autoload.php');

// initiate FPDI
$pdf = new Fpdi();

// add a page
//$pdf->AddPage();
// set the source file
//$pdf->setSourceFile('pdf/employment_application.pdf');


/* count pages of source file */

$pageCount = $pdf->setSourceFile(dirname(__FILE__) ."/pdf/employment_application.pdf");

for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) 
{
	// import page 1
	$tplIdx = $pdf->importPage($pageNo);
	$pdf->AddPage();
	
	if($pageNo == 1)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
		//field1
		$pdf->SetXY(35, 37);
		$pdf->Write(0, $LastName);
		//field2
		$pdf->SetXY(100, 36.5);
		$pdf->Write(1, $FirstName);
		//field3
		$pdf->SetXY(145, 36);
		$pdf->Write(2, $MI);
		//field4
		$pdf->SetXY(165, 35.5);
		$pdf->Write(3, $date);

		//field5
		$pdf->SetXY(40, 42.5);
		$pdf->Write(4, $staddress);
		//field6
		$pdf->SetXY(165, 41.5);
		$pdf->Write(5, $apart);
		//field6
		$pdf->SetXY(25, 48.5);
		$pdf->Write(6, $city);
		//field7
		$pdf->SetXY(100, 48);
		$pdf->Write(7, $state);
		//field8
		$pdf->SetXY(150, 47);
		$pdf->Write(8, $zip);

		//field9
		$pdf->SetXY(30, 54);
		$pdf->Write(9, $phone);
		//field10
		$pdf->SetXY(115, 53);
		$pdf->Write(10, $email);

		//field11
		$pdf->SetXY(38.5, 59.5);
		$pdf->Write(11, $date_av);
		//field12
		$pdf->SetXY(103, 59);
		$pdf->Write(12, $ssn);
		//field13
		$pdf->SetXY(153, 59);
		$pdf->Write(13, $desiredsalary);

		//field14
		$pdf->SetXY(45, 65.7);
		//$pdf->Write(14, $worked1);


		//field14
		$pdf->SetXY(120, 80);
		$pdf->Write(14, $worked1);

		//field14
		$pdf->SetXY(120, 87.1);
		$pdf->Write(14, $worked2);


		//field14
		$pdf->SetXY(27, 111);
		$pdf->Write(15, $highschoolfrom);
		//field14
		$pdf->SetXY(48, 111);
		$pdf->Write(15, $highschoolto);
		//field14
		$pdf->SetXY(27, 118.5);
		$pdf->Write(15, $collegeschoolfrom);
		//field14
		$pdf->SetXY(48, 118.5);
		$pdf->Write(15, $collegeschoolto);
		
		$pdf->SetXY(130, 118.5);
		$pdf->Write(16, $otherdegree);

		//soon


		//field14
		/*$pdf->SetXY(130, 111);
		$pdf->Write(15, 'Inter');
		//field14
		$pdf->SetXY(130, 118.5);
		$pdf->Write(15, 'Bachelor');*/

		//field14
		$pdf->SetXY(21, 140);
		$pdf->Write(15, $hear_about);

		//sec-1

		//field14
		$pdf->SetXY(35, 170);
		$pdf->Write(15, $ref1fullname);

		//field14
		$pdf->SetXY(130, 170);
		$pdf->Write(15, $ref1relation);

		//field14
		$pdf->SetXY(35, 177.5);
		$pdf->Write(15, $ref1company);

		//field14
		$pdf->SetXY(122, 177.5);
		$pdf->Write(15, $ref1phone);

		//field14
		$pdf->SetXY(35, 184.5);
		$pdf->Write(15, $ref1address);

		//sec-1 again

		//field14
		$pdf->SetXY(35, 191.5);
		$pdf->Write(15, $ref2fullname);

		//field14
		$pdf->SetXY(130, 191.5);
		$pdf->Write(15, $ref2relation);

		//field14
		$pdf->SetXY(35, 199);
		$pdf->Write(15, $ref2company);

		//field14
		$pdf->SetXY(122, 199.5);
		$pdf->Write(15, $ref2phone);

		//field14
		$pdf->SetXY(35, 206.5);
		$pdf->Write(15, $ref2address);

		//sec-1 again

		//field14
		$pdf->SetXY(35, 213.5);
		$pdf->Write(15, $ref3fullname);

		//field14
		$pdf->SetXY(130, 213);
		$pdf->Write(15, $ref3relation);

		//field14
		$pdf->SetXY(35, 221);
		$pdf->Write(15, $ref3company);

		//field14
		$pdf->SetXY(122, 221);
		$pdf->Write(15, $ref3phone);

		//field14
		$pdf->SetXY(35, 227.5);
		$pdf->Write(15, $ref3address);
		


		//radio buttons starts

		$pdf->SetFont('Helvetica','','70');
		$pdf->SetTextColor(0, 0, 0);
		
		//field1 yes
		if($citizen == 'YES')
		{
			$pdf->SetXY(78.8, 73.5);
			$pdf->Write(0, '.');
		}
		else
		{
		//field1 no
			$pdf->SetXY(91.9, 73.5);
			$pdf->Write(0, '.');
		}
		
		if($authorized == 'YES')
		{
		//field1b yes
			$pdf->SetXY(165.2, 73.5);
			$pdf->Write(0, '.');
		}
		else
		{
		//field1b no
			$pdf->SetXY(179.8, 73.5);
			$pdf->Write(0, '.');
		}
		
		if($worked == 'YES')
		{
		//field2 yes
			$pdf->SetXY(78.8, 80.8);
			$pdf->Write(0, '.');
		}
		else
		{
		//field2 no
			$pdf->SetXY(91.8, 80.8);
			$pdf->Write(0, '.');
		}
		
		if($convicted == 'YES')
		{		
		//field3 yes
			$pdf->SetXY(78.8, 87.9);
			$pdf->Write(0, '.');
		}
		else
		{
		//field3 no
			$pdf->SetXY(91.8, 87.9);
			$pdf->Write(0, '.');
		}
		
		//field4 yes
		//$pdf->SetXY(92.3, 112.3);
		//$pdf->Write(0, '.');
		//field4 no
		// $pdf->SetXY(111.5, 132.2);
		// $pdf->Write(0, '.');
		
		if($graduate == 'YES')
		{
		//field5 yes
			$pdf->SetXY(92.3, 119.5);
			$pdf->Write(0, '.');
		}
		else
		{
		//field5 no
			$pdf->SetXY(105.5, 119.5);
			$pdf->Write(0, '.');
		}

	}
	
	if($pageNo == 2)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
		//field0
		$pdf->SetXY(35, 16.5);
		$pdf->Write(0, $prev1company);
		//field1
		$pdf->SetXY(126, 16);
		$pdf->Write(1, $prev1phone);
		//field2
		$pdf->SetXY(35, 23);
		$pdf->Write(2, $prev1address);
		//field3
		$pdf->SetXY(130, 22.7);
		$pdf->Write(3, $prev1supervisor);

		//field4
		$pdf->SetXY(35, 29.5);
		$pdf->Write(4, $prev1job);
		//field5
		$pdf->SetXY(115, 29);
		$pdf->Write(5, $prev1st_sal);
		//field6
		$pdf->SetXY(161, 29);
		$pdf->Write(6, $prev1end_sal);

		//field7
		$pdf->SetXY(43, 36);
		$pdf->Write(7, $prev1responsibility);
		//field8
		$pdf->SetXY(30, 42.5);
		$pdf->Write(8, $prev1from1);
		//field9
		$pdf->SetXY(51, 42.5);
		$pdf->Write(9, $prev1to1);
		//field10
		$pdf->SetXY(93, 42);
		$pdf->Write(10, $prev1reason);

		//soon

		//field11
		$pdf->SetXY(35, 56.5);
		$pdf->Write(11, $prev2company);
		//field12
		$pdf->SetXY(127.5, 56);
		$pdf->Write(12, $prev2phone);
		//field13
		$pdf->SetXY(35, 63);
		$pdf->Write(13, $prev2address);
		//field14
		$pdf->SetXY(127.5, 62.2);
		$pdf->Write(14, $prev2supervisor);
		//field15
		$pdf->SetXY(35, 70);
		$pdf->Write(15, $prev2job);
		//field16
		$pdf->SetXY(115, 69.5);
		$pdf->Write(16, $prev2st_sal);
		//field17
		$pdf->SetXY(161, 69);
		$pdf->Write(17, $prev2end_sal);
		//field18
		$pdf->SetXY(43, 75.7);
		$pdf->Write(18, $prev2responsibility);
		//field19
		$pdf->SetXY(30, 82);
		$pdf->Write(19, $prev2from2);
		//field20
		$pdf->SetXY(51, 81.8);
		$pdf->Write(20, $prev2to2);
		//field21
		$pdf->SetXY(93, 81.5);
		$pdf->Write(21, $prev2reason);

		//field22
		$pdf->SetXY(35, 96.5);
		$pdf->Write(22, $prev3company);
		//field23
		$pdf->SetXY(127.5, 96.3);
		$pdf->Write(23, $prev3phone);

		//field24
		$pdf->SetXY(35, 102.8);
		$pdf->Write(24, $prev3address);
		//field25
		$pdf->SetXY(127.5, 102.5);
		$pdf->Write(25, $prev3supervisor);
		//field26
		$pdf->SetXY(35, 109.2);
		$pdf->Write(26, $prev3job);
		//field27
		$pdf->SetXY(115, 109);
		$pdf->Write(27, $prev3st_sal);
		//field28
		$pdf->SetXY(161, 108.3);
		$pdf->Write(28, $prev3end_sal);
		//field29
		$pdf->SetXY(43, 115.5);
		$pdf->Write(29, $prev3responsibility);
		//field30
		$pdf->SetXY(30, 122.2);
		$pdf->Write(30, $prev3from3);
		//field31
		$pdf->SetXY(51, 122);
		$pdf->Write(31, $prev3to3);
		//field32
		$pdf->SetXY(93, 121.5);
		$pdf->Write(32, $prev3reason);


		//field33
		$pdf->SetXY(30, 147.5);
		$pdf->Write(33, $militrybranch);
		//field34
		$pdf->SetXY(138, 147);
		$pdf->Write(34, $mlfrom);
		//field35
		$pdf->SetXY(156.5, 147);
		$pdf->Write(35, $mlto);
		//field36
		$pdf->SetXY(45, 153.5);
		$pdf->Write(36,  $rank_dis);
		//field37
		$pdf->SetXY(155, 153.5);
		$pdf->Write(37, $tye_discharge);
		//field38
		$pdf->SetXY(63.5, 160.5);
		$pdf->Write(38, $honorable_explain);

		$pdf->Image($signature_url1,35,212,16,5,'PNG');

		//field39
		$pdf->SetXY(150, 196.5);
		$pdf->Write(39, '09/02/2021');

		//office use only skip

		$pdf->SetFont('Helvetica','','65');
		$pdf->SetTextColor(0, 0, 0);

		// $pdf->SetXY(102, 38.9);
		// $pdf->Write(40, '.');
		
		if($prev1con_super == 'YES')
		{
			$pdf->SetXY(102, 28.2);
			$pdf->Write(40, '.');
		}
		else
		{
			$pdf->SetXY(116.6, 27.9);
			$pdf->Write(41, '.');
		}
		
		if($prev2con_super == 'YES')
		{
			$pdf->SetXY(101.9, 72.7);
			$pdf->Write(42, '.');
		}
		else
		{
			$pdf->SetXY(116.6, 72.2);
			$pdf->Write(43, '.');
		}
		// $pdf->SetXY(116.5, 83.5);
		// $pdf->Write(43, '.');

		// $pdf->SetXY(101.5, 128.1);
		// $pdf->Write(44, '.');
		if($prev3con_super == 'YES')
		{
			$pdf->SetXY(102, 117);
			$pdf->Write(44, '.');
		}
		else
		{
			$pdf->SetXY(116.3, 116.4);
			$pdf->Write(45, '.');
		}

	}
	
	
	if($pageNo == 3)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);


		//field1
		$pdf->SetXY(72, 35.5);
		$pdf->Write(1, $vempname);
		//field2
		$pdf->SetXY(83, 45.5);
		$pdf->Write(2, $vempssn);

		//field3
		// $pdf->SetXY(65, 56.5);
		// $pdf->Write(3, '09/02/2021');
		//field4
		// $pdf->SetXY(110, 66.5);
		// $pdf->Write(4, 'Crime Department');
		//field4
		// $pdf->SetXY(45, 77.5);
		// $pdf->Write(5, 'Head of Crime Department');

		//soon

		//field4
		// $pdf->SetXY(130, 105);
		// $pdf->Write(6, 'Original site');

		//soon

		//field4
		// $pdf->SetXY(45, 126.7);
		// $pdf->Write(7, 'Crime Department');

		//field4
		// $pdf->SetXY(130, 143);
		// $pdf->Write(8, 'Original site');

		//soon

		//field4
		// $pdf->SetXY(45, 163.5);
		// $pdf->Write(9, 'Crime Department');

		//field4
		// $pdf->SetXY(133, 179.5);
		// $pdf->Write(10, 'Original site');

		//soon

		//field4
		// $pdf->SetXY(45, 202.2);
		// $pdf->Write(11, 'Crime Department');

		//field4
		// $pdf->SetXY(130, 218.5);
		// $pdf->Write(12, 'Original site');

		//soon

		//field4
		// $pdf->SetXY(45, 239.8);
		// $pdf->Write(13, 'Crime Department');

		
	}
	
	
if($pageNo == 4)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 37);
		$pdf->Write(1, $dps_emp_name);

		$pdf->Image($signature_url2,40,162,20,7,'PNG');
		
		$pdf->SetXY(30, 182);
		$pdf->Write(2, $disclaimer_date);

		// $pdf->SetXY(35, 207);
		// $pdf->Write(3, 'Author');

		// $pdf->SetXY(30, 232);
		// $pdf->Write(4, '09/02/2021');

		 $pdf->Image($signature_url3,40,214,20,7,'PNG');
			
	}
	
	if($pageNo == 5)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(30, 46.5);
		$pdf->Write(1, $statement_emp_name);
			
	}
	
	if($pageNo == 6)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
			
	}
	
	if($pageNo == 7)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->Image($signature_url3,30,235,30,10,'PNG');

		$pdf->SetXY(85, 244);
		$pdf->Write(0, $statement_emp_name);

		$pdf->SetXY(140, 244);
		$pdf->Write(1, $statement_emp_date);
			
	}
	
	if($pageNo == 8)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
		// $pdf->SetXY(33, 48);
		// $pdf->Write(0, 'is simply dummy text of the printing ');

		// $pdf->SetXY(40, 56);
		// $pdf->Write(1, '+14842989029');

		// $pdf->SetXY(40, 60);
		// $pdf->Write(2, 'Fax Name');
		
		// $pdf->SetXY(130, 55);
		// $pdf->Write(3, 'Joseph');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',120,60,30,10,'PNG');

		// $pdf->SetXY(176, 68);
		// $pdf->Write(4, '09/02/2021');

		$pdf->SetXY(25, 94);
		$pdf->Write(5, $req_emp_name);

		$pdf->SetXY(100, 94);
		$pdf->Write(6, $req_emp_ssn);

		$pdf->Image($signature_url4,50,103,20,7,'PNG');

		$pdf->Image($signature_url5,50,115,20,7,'PNG');

		$pdf->SetXY(125, 105);
		$pdf->Write(7, $req_emp_date);

		$pdf->SetXY(125, 118);
		$pdf->Write(8, $req_wit_date);



		$pdf->SetXY(65, 146);
		$pdf->Write(9, $dat_employeed_from);

		$pdf->SetXY(137, 146);
		$pdf->Write(10, $dat_employeed_to);

		$pdf->SetXY(50, 153);
		$pdf->Write(11, $dat_start_salary);

		$pdf->SetXY(110, 153);
		$pdf->Write(12, $dat_ending_salary);

		$pdf->SetXY(50, 159);
		$pdf->Write(13, $dat_position_held);


		// $pdf->SetXY(50, 213.8);
		// $pdf->Write(14, 'is simply dummy text of the printing ');

		// $pdf->SetXY(150, 234.5);
		// $pdf->Write(15, '09/02/2021');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',30,230,30,12,'PNG');





		// $pdf->SetFont('Helvetica','','50');
		// $pdf->SetTextColor(0, 0, 0);

		//r1
		// $pdf->SetXY(97.8, 167);
		// $pdf->Write(14, '.');

		// $pdf->SetXY(133.1, 166.5);
		// $pdf->Write(15, '.');

		// $pdf->SetXY(156.2, 165.8);
		// $pdf->Write(16, '.');


		//r2
		// $pdf->SetXY(97.8, 170.2);
		// $pdf->Write(17, '.');

		// $pdf->SetXY(133.3, 170.2);
		// $pdf->Write(18, '.');

		// $pdf->SetXY(156.6, 169.6);
		// $pdf->Write(19, '.');


		//r3
		// $pdf->SetXY(97.8, 174.6);
		// $pdf->Write(20, '.');

		// $pdf->SetXY(133.3, 174.5);
		// $pdf->Write(21, '.');

		// $pdf->SetXY(156.7, 173.8);
		// $pdf->Write(22, '.');

		//r4
		// $pdf->SetXY(97.8, 178.3);
		// $pdf->Write(23, '.');

		// $pdf->SetXY(133.3, 177.6);
		// $pdf->Write(24, '.');

		// $pdf->SetXY(156.7, 177.6);
		// $pdf->Write(25, '.');

		//r5
		// $pdf->SetXY(97.8, 181.8);
		// $pdf->Write(26, '.');

		// $pdf->SetXY(133.3, 181.3);
		// $pdf->Write(27, '.');

		// $pdf->SetXY(156.7, 180.8);
		// $pdf->Write(28, '.');

		//r6
		// $pdf->SetXY(97.8, 185.3);
		// $pdf->Write(29, '.');

		// $pdf->SetXY(133.3, 184.5);
		// $pdf->Write(30, '.');

		// $pdf->SetXY(156.7, 184.4);
		// $pdf->Write(31, '.');

		//r7
		// $pdf->SetXY(97.8, 188.9);
		// $pdf->Write(32, '.');

		// $pdf->SetXY(133.3, 188);
		// $pdf->Write(33, '.');

		// $pdf->SetXY(156.7, 187.6);
		// $pdf->Write(34, '.');


		//r8
		// $pdf->SetXY(97.8, 192.5);
		// $pdf->Write(35, '.');

		// $pdf->SetXY(112.6, 191.7);
		// $pdf->Write(36, '.');
			
	}
	
	if($pageNo == 9)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		// $pdf->SetXY(33, 48);
		// $pdf->Write(0, 'is simply dummy text of the printing ');

		// $pdf->SetXY(40, 56);
		// $pdf->Write(1, '+14842989029');

		// $pdf->SetXY(40, 60);
		// $pdf->Write(2, 'Fax Name');
		
		// $pdf->SetXY(130, 55);
		// $pdf->Write(3, 'Jack');

		// 

		// $pdf->SetXY(176, 68);
		// $pdf->Write(4, '09/02/2021');

		$pdf->SetXY(25, 94);
		$pdf->Write(5, $req_emp_name1);

		$pdf->SetXY(100, 94);
		$pdf->Write(6, $req_emp_ssn1);
		
		
		$pdf->Image($signature_url6,50,103,20,7,'PNG');
		//$pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/gravity_forms/signatures/61490e62dfdb26.35702706.png',120,60,30,10,'PNG');
		$pdf->Image($signature_url7,50,115,20,7,'PNG');

		$pdf->SetXY(125, 105);
		$pdf->Write(7, $req_emp_date1);

		$pdf->SetXY(125, 118);
		$pdf->Write(8, $req_wit_date1);

		$pdf->SetXY(65, 146);
		$pdf->Write(9, $dat_employeed_from1);

		$pdf->SetXY(137, 146);
		$pdf->Write(10, $dat_employeed_to1);

		$pdf->SetXY(50, 153);
		$pdf->Write(11, $dat_start_salary1);

		$pdf->SetXY(110, 153);
		$pdf->Write(11, $dat_ending_salary1);

		$pdf->SetXY(50, 159);
		$pdf->Write(11, $dat_position_held1);

		// $pdf->SetXY(50, 215);
		// $pdf->Write(12, 'is simply dummy text of the printing ');

		// $pdf->SetXY(150, 234.8);
		// $pdf->Write(13, '09/02/2021');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',30,230,30,12,'PNG');


		// $pdf->SetFont('Helvetica','','50');
		// $pdf->SetTextColor(0, 0, 0);

		//r1
		// $pdf->SetXY(98, 167);
		// $pdf->Write(14, '.');

		// $pdf->SetXY(133.5, 166.5);
		// $pdf->Write(15, '.');

		// $pdf->SetXY(156.8, 165.8);
		// $pdf->Write(16, '.');


		//r2
		// $pdf->SetXY(98, 170.8);
		// $pdf->Write(17, '.');

		// $pdf->SetXY(133.5, 170.5);
		// $pdf->Write(18, '.');

		// $pdf->SetXY(157, 169.6);
		// $pdf->Write(19, '.');


		//r3
		// $pdf->SetXY(98.2, 174.6);
		// $pdf->Write(20, '.');

		// $pdf->SetXY(133.8, 174.6);
		// $pdf->Write(21, '.');

		// $pdf->SetXY(157, 174);
		// $pdf->Write(22, '.');

		//r4
		// $pdf->SetXY(98.2, 178.3);
		// $pdf->Write(23, '.');

		// $pdf->SetXY(133.8, 177.7);
		// $pdf->Write(24, '.');

		// $pdf->SetXY(157, 177.6);
		// $pdf->Write(25, '.');

		//r5
		// $pdf->SetXY(98.4, 181.8);
		// $pdf->Write(26, '.');

		// $pdf->SetXY(133.8, 181.8);
		// $pdf->Write(27, '.');

		// $pdf->SetXY(157, 180.8);
		// $pdf->Write(28, '.');

		//r6
		// $pdf->SetXY(98.4, 185.3);
		// $pdf->Write(29, '.');

		// $pdf->SetXY(133.8, 184.8);
		// $pdf->Write(30, '.');

		// $pdf->SetXY(157, 184.4);
		// $pdf->Write(31, '.');

		//r7
		// $pdf->SetXY(98.4, 188.9);
		// $pdf->Write(32, '.');

		// $pdf->SetXY(133.8, 188.4);
		// $pdf->Write(33, '.');

		// $pdf->SetXY(157, 188);
		// $pdf->Write(34, '.');


		//r8
		// $pdf->SetXY(98.4, 192.5);
		// $pdf->Write(35, '.');

		// $pdf->SetXY(113.4, 192.5);
		// $pdf->Write(36, '.');





	}
	
	if($pageNo == 10)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
			
	}

	if($pageNo == 11)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
			
	}

	if($pageNo == 12)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
			
	}

	if($pageNo == 13)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
			
	}

	if($pageNo == 14)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
			
	}


	if($pageNo == 15)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(40, 97);
		$pdf->Write(0, $phc_employ_name);

		$pdf->Image($signature_url8,30,122,30,15,'PNG');


		$pdf->SetXY(155, 135);
		$pdf->Write(1, $phc_employ_date);
	}




	if($pageNo == 16)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);


		$pdf->Image($signature_url9,40,178,30,15,'PNG');

		$pdf->SetXY(140, 192);
		$pdf->Write(1, $phc_employ_sf_date);

			
	}
}


// writing PDF file and saved to path
echo $pdf->Output('employee_application_pdf/'.$LastName.'_'.$MI.'_'.$ssn.'.pdf','F');


// attaching pdf to mail content and sent email 


		$filename = $LastName.'_'.$MI.'_'.$ssn.'.pdf';
		$path = 'employee_application_pdf/';
		$filepath = $path . "/" . $filename;

		
		// carriage return type (RFC)
    	$separator = md5(time());
		$eol = PHP_EOL;
		
		
		$to = 'khusharperfect2018@gmail.com,hr@estrellacare.com';
    	$subject = 'Estrella Home Care Employment Application';
		
   		$message  = 'Hi Admin,'.$eol.$eol;
		$message .= 'An employment application is submitted.'.$eol.$eol;

		$message .= 'Thanks'.$eol;
		
		//attach pdf file to mail
		$attachments = array($filepath);
		
		
 		$headers = 'From: Estrellahomecare <wordpress@estrellahomecare.perfectwebsoldev.com>' . "\r\n";
 
		 
		wp_mail( $to, $subject, $message, $headers, $attachments );
		
		
?>