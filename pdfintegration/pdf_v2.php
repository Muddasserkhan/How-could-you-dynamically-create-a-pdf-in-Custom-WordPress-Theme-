<?php
use setasign\Fpdi\Fpdi;

require_once(dirname(__FILE__) . '/fpdf/fpdf.php');
require_once(dirname(__FILE__) . '/fpdi/src/autoload.php');



// initiate FPDI
$pdf = new Fpdi();

// $pdf1 = new Fpdf();
// $pdf1 = new FPDF_CellFit();
// add a page
//$pdf->AddPage();
// set the source file
//$pdf->setSourceFile('pdf/employment_application.pdf');


/* count pages of source file */
$pageCount = $pdf->setSourceFile(dirname(__FILE__) ."/orientation_v2_50_pages/Orientation_Packet_Final_v2.pdf");

for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) 
{
	// import page 1
	$tplIdx = $pdf->importPage($pageNo);
	$pdf->AddPage();
	

	// $pdf1 = new FPDF_CellFit();
	// $tplIdx1 = $pdf1->importPage($pageNo);
	// $pdf1->AddPage();

	if($pageNo == 1)
	{
			
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		


	}
	
	if($pageNo == 2)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',50,223,18,6,'PNG');

	}
	
	
	if($pageNo == 3)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);


		//field1
		$pdf->SetXY(55, 69.5);
		$pdf->Write(1, $personal_emp_name);
		
	}

	if($pageNo == 4)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->Image($phy_sign,30,193,30,12,'PNG');

		$pdf->SetXY(140, 202.5);
		$pdf->Write(2, $phy_date);
			
	}





	if($pageNo == 5)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(39, 69.5);
		$pdf->Write(1, $attendant_date);

		$pdf->SetXY(30, 85);
		$pdf->Write(2, $attendant_emp_name);

		

		$pdf->Image($attendant_emp_sign,30,146,30,12,'PNG');

		$pdf->Image($attendant_sup_sign,30,176,30,12,'PNG');

		$pdf->SetXY(30, 130);
		$pdf->Write(5, $attendant_hr_clreck);
			
	}


	if($pageNo == 6)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(30, 130.5);
		$pdf->Write(1, $emp_misconduct_name);

		$pdf->Image($emp_misconduct_sign,30,155,30,10,'PNG');

		$pdf->SetXY(140, 163.5);
		$pdf->Write(2, $emp_misconduct_date);
			
	}


	if($pageNo == 7)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(30, 135);
		$pdf->Write(1, $quality_care_name);

		$pdf->Image($quality_care_sign,30,147,30,12,'PNG');

		$pdf->SetXY(142, 156);
		$pdf->Write(2, $quality_care_date);
			
	}




	if($pageNo == 8)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
		$pdf->SetXY(60, 79);
		$pdf->Write(1, $emp_risk_cat_name);

		$pdf->SetXY(70, 86.5);
		$pdf->Write(2, $emp_risk_cat_ssn);

		
		// =======================================
		$pdf->SetXY(45, 94.5);
		$pdf->Write(3, $emp_risk_cat_job_title);

		$pdf->SetXY(127, 94.5);
		$pdf->Write(4, $emp_risk_cat_hire_date);
// ====================================================
		$pdf->SetXY(26, 126);
		$pdf->Write(5, $emp_risk_cat_initial_text);

		$pdf->SetXY(26, 141.5);
		$pdf->Write(6, $emp_risk_cat_initial_text1);

		$pdf->Image($emp_risk_cat_sign,30,201,30,10,'PNG');

		$pdf->SetXY(130, 206.5);
		$pdf->Write(8, $emp_risk_cat_date);

	}



	if($pageNo == 9)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->Image($reporting_sign,30,200,30,12,'PNG');

		$pdf->SetXY(140, 209);
		$pdf->Write(2, $reporting_date);

		// ====================================================
		$pdf->Image($reporting_trainer_sign,30,222,30,12,'PNG');


		// $pdf->SetXY(45, 222.5);
		// $pdf->Write(2, 'admin');


		$pdf->SetXY(140, 230.5);
		$pdf->Write(2, $reporting_date2);
		// ==========================================================

	}





	if($pageNo == 10)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(65, 41);
		$pdf->Write(1, $abu_neg_emp_name);

		$pdf->SetXY(156, 41);
		$pdf->Write(1, $abu_neg_emp_training_date);


		



	// =============================================

	$pdf->SetXY(30, 192.5);
	$pdf->Write(1, $abu_neg_emp_note);

	// $pdf->SetXY(30, 215);
	$pdf->Image($abu_neg_emp_sign,30, 215.5,30,10,'PNG');


	$pdf->SetXY(140, 223.5);
	$pdf->Write(1, $abu_neg_emp_date);

	$pdf->Image($abu_neg_emp_trainer_sign,30, 230.5,30,8,'PNG');


	$pdf->SetXY(140, 236);
	$pdf->Write(1, $abu_neg_emp_date2);

	// ==============================================



		

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32,79,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32,84.5,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32,89.5,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32,94.8,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32,100,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32,109.5,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32,115,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32.3,124.5,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32.3,130,7.5,4.5,'PNG');
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/wp-content/uploads/2021/10/name.png',32.3,135.4,7.5,4.5,'PNG');


		$pdf->SetFont('Helvetica','','75');
		$pdf->SetTextColor(0, 0, 0);

		if($abu_neg_emp_check1 == 'What is Abuse'){
			$pdf->SetXY(23, 49.6);
			$pdf->Write(5, '.');
		}
		if($abu_neg_emp_check2 == 'What is Neglect'){
			$pdf->SetXY(23, 55.3);
			$pdf->Write(5, '.');
		}
		
		
		if($abu_neg_emp_check3 == 'What is Exploitation'){
			$pdf->SetXY(23, 61.2);
			$pdf->Write(5, '.');
		}
		
		if($abu_neg_emp_check4 == 'How to report ANE'){
			$pdf->SetXY(23, 66.8);
			$pdf->Write(5, '.');
		}

		
		if($abu_neg_emp_check5 == 'La Estrella Home Care Policy on Investigation Reports of ANE'){
			$pdf->SetXY(23, 72.6);
			$pdf->Write(5, '.');
		}
		



		if($abu_neg_emp_check6 == 'TAC Rule  §49.17 (Compliant Procedure)'){
			$pdf->SetXY(23, 89);
			$pdf->Write(5, '.');
		}
		if($abu_neg_emp_check7 == 'La Estrella Home Care Compliant Procedure & La Estrella Compliant Form'){
			$pdf->SetXY(23, 95.7);
			$pdf->Write(5, '.');
		}
		


		if($abu_neg_emp_check8 == 'TAC Rule §97.249 (Self-reported Incidents of ANE)'){
			$pdf->SetXY(23, 112.5);
			$pdf->Write(5, '.');
		}
		
		if($abu_neg_emp_check9 == 'TAC Rule §97.250 (Agency Investigations)'){
			$pdf->SetXY(23, 119);
			$pdf->Write(5, '.');
		}
		
		if($abu_neg_emp_check10 == 'How to report ANE by an agency employee'){
			$pdf->SetXY(23, 125.8);
			$pdf->Write(5, '.');
		}
	
	}





	if($pageNo == 11)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		// ==================================================

		$pdf->SetXY(30, 157);
		$pdf->Write(1, $personal_attendant_print_name);

		$pdf->SetXY(140, 157);
		$pdf->Write(1, $personal_attendant_date);

		$pdf->Image($personal_attendant_sign,30, 170,30,10,'PNG');
		

		// ======================================================
			
	}





	if($pageNo == 12)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(55, 71);
		$pdf->Write(1, $payroll_emp_name);

		$pdf->SetXY(151, 71);
		$pdf->Write(1, $payroll_Phone);

		$pdf->SetXY(45, 79);
		$pdf->Write(1, $payroll_address);

// // ===========================================================
			$pdf->SetXY(50.5, 87);
			$pdf->Write(1, $payroll_hire_date);	

			$pdf->SetXY(120, 87);
			$pdf->Write(1, $payroll_job_title);

			$pdf->SetXY(50, 95.5);
			$pdf->Write(1, $payroll_date_birth);
// // ================================================================
		
		$pdf->SetXY(135, 95.5);
		$pdf->Write(1, $payroll_ssn);

		$pdf->SetXY(55, 103.5);
		$pdf->Write(1, $payroll_marital);


		$pdf->SetXY(140, 103.5);
		$pdf->Write(1, $payroll_dependents);

// 		// ==============================================================
		$pdf->SetXY(135, 118.5);
		$pdf->Write(5, $payroll_anu_salaried);



		$pdf->SetXY(100, 127);
		$pdf->Write(5, $payroll_orientation);
		$pdf->SetXY(100, 132.5);
		$pdf->Write(5, $payroll_regular_rate);
		$pdf->SetXY(100, 137.5);
		$pdf->Write(5, $payroll_overtime);
		$pdf->SetXY(100, 143.5);
		$pdf->Write(5, $payroll_meetings);
		$pdf->SetXY(100, 148.5);
		$pdf->Write(5, $payroll_mileage);

		$pdf->SetXY(55, 165.5);
		$pdf->Write(5, $payroll_approved_by);

		



		$pdf->SetXY(30, 201);
		$pdf->Write(5, $payroll_change_date);
		$pdf->SetXY(60, 201);
		$pdf->Write(5, $payroll_change_current_rate);
		$pdf->SetXY(90, 201);
		$pdf->Write(5, $payroll_change_inc_rate);
		$pdf->SetXY(125, 201);
		$pdf->Write(5, $payroll_change_eff_date);
		$pdf->SetXY(160, 201);
		$pdf->Write(5, $payroll_change_approved);


		$pdf->SetXY(30, 207);
		$pdf->Write(5, $payroll_change_date1);
		$pdf->SetXY(60, 207);
		$pdf->Write(5, $payroll_change_current_rate1);
		$pdf->SetXY(90, 207);
		$pdf->Write(5, $payroll_change_inc_rate1);
		$pdf->SetXY(125, 207);
		$pdf->Write(5, $payroll_change_eff_date1);
		$pdf->SetXY(160, 207);
		$pdf->Write(5, $payroll_change_approved1);



		$pdf->SetXY(30, 212);
		$pdf->Write(5, $payroll_change_date2);
		$pdf->SetXY(60, 212);
		$pdf->Write(5, $payroll_change_current_rate2);
		$pdf->SetXY(90, 212);
		$pdf->Write(5, $payroll_change_inc_rate2);
		$pdf->SetXY(125, 212);
		$pdf->Write(5, $payroll_change_eff_date2);
		$pdf->SetXY(160, 212);
		$pdf->Write(5, $payroll_change_approved2);





		$pdf->SetXY(30, 217);
		$pdf->Write(5, $payroll_change_date_3);
		$pdf->SetXY(60, 217);
		$pdf->Write(5, $payroll_change_current_rate3);
		$pdf->SetXY(90, 217);
		$pdf->Write(5, $payroll_change_inc_rate3);
		$pdf->SetXY(125, 217);
		$pdf->Write(5, $payroll_change_eff_date3);
		$pdf->SetXY(160, 217);
		$pdf->Write(5, $payroll_change_approved3);




		$pdf->SetXY(30, 222);
		$pdf->Write(5, $payroll_change_date4);
		$pdf->SetXY(60, 222);
		$pdf->Write(5, $payroll_change_current_rate4);
		$pdf->SetXY(90, 222);
		$pdf->Write(5, $payroll_change_inc_rate4);
		$pdf->SetXY(125, 222);
		$pdf->Write(5, $payroll_change_eff_date4);
		$pdf->SetXY(160, 222);
		$pdf->Write(5, $payroll_change_approved4);


		$pdf->SetXY(30, 227);
		$pdf->Write(5, $payroll_change_date_5);
		$pdf->SetXY(60, 227);
		$pdf->Write(5, $payroll_change_current_rate_5);
		$pdf->SetXY(90, 227);
		$pdf->Write(5, $payroll_change_inc_rate_5);
		$pdf->SetXY(125, 227);
		$pdf->Write(5, $payroll_change_eff_date_5);
		$pdf->SetXY(160, 227);
		$pdf->Write(5, $payroll_change_approved_5);



		$pdf->SetXY(30, 232);
		$pdf->Write(5, $payroll_change_date6);
		$pdf->SetXY(60, 232);
		$pdf->Write(5, $payroll_change_current_rate6);
		$pdf->SetXY(90, 232);
		$pdf->Write(5, $payroll_change_inc_rate6);
		$pdf->SetXY(125, 232);
		$pdf->Write(5, $payroll_change_eff_date6);
		$pdf->SetXY(160, 232);
		$pdf->Write(5, $payroll_change_approved6);



		$pdf->SetFont('Helvetica','','75');
		$pdf->SetTextColor(0, 0, 0);

		if($payroll_exempt_emp_yes == 'YES'){
			$pdf->SetXY(58, 103.8);
			$pdf->Write(5, '.');
		}
		
		if($payroll_exempt_emp_no == 'NO'){
			$pdf->SetXY(73.4, 103.8);
			$pdf->Write(5, '.');
		}



		
		if($payroll_contractor_yes == 'YES'){
			$pdf->SetXY(121, 103.8);
			$pdf->Write(5, '.');
		}
		
		if($payroll_contractor_no == 'NO'){
			$pdf->SetXY(136.6, 103.8);
			$pdf->Write(5, '.');
		}




		if($payroll_salaried_yes == 'YES'){
			$pdf->SetXY(41.3, 112.4);
			$pdf->Write(5, '.');
		}
		if($payroll_salaried_no == 'NO'){
			$pdf->SetXY(56.7, 112.4);
			$pdf->Write(5, '.');
		}
		

		// ================================================================
			
	}



	if($pageNo == 13)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->Image($pickup_sign,30,117,30,10,'PNG');

		$pdf->SetXY(140, 125.5);
		$pdf->Write(2, $pickup_date);

		// =======================================================
		
		$pdf->SetFont('Helvetica','','75');
		$pdf->SetTextColor(0, 0, 0);

		if($pickup_text_1 == 'YES'){
			$pdf->SetXY(25.8, 91.8);
			$pdf->Write(5, '.');
		}
		
		if($pickup_text_2 == 'YES'){
			$pdf->SetXY(25.8, 100.3);
			$pdf->Write(5, '.');
		}


		// =========================================================
	}





	if($pageNo == 14)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 69);
		$pdf->Write(1, $check_mailing_emp_name);

		$pdf->SetXY(35, 113);
		$pdf->Write(1, $check_mailing_print_name);

		$pdf->SetXY(145, 113);
		$pdf->Write(1, $check_mailing_ss);

		$pdf->Image($check_mailing_sign,30,132,30,10,'PNG');

		$pdf->SetXY(142, 139);
		$pdf->Write(2, $check_mailing_date);
			
	}




	if($pageNo == 15)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		// $pdf->SetXY(35, 42.5);
		// $pdf->Write(1, 'Joseph Lee');

	}




	if($pageNo == 16)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 34);
		$pdf->Write(1, $with_cert_emp_fname);

		$pdf->SetXY(50, 34);
		$pdf->Write(1, $with_cert_mname);


		$pdf->SetXY(100, 34);
		$pdf->Write(1, $with_cert_lname);

		$pdf->SetXY(165, 34);
		$pdf->Write(1, $with_cert_ssn);


		$pdf->SetXY(35, 42);
		$pdf->Write(1, $with_cert_address);



		$pdf->SetXY(35, 51);
		$pdf->Write(1, $with_cert_city);

		$pdf->SetXY(53, 51);
		$pdf->Write(1, $with_cert_state);

		$pdf->SetXY(70, 51);
		$pdf->Write(1, $with_cert_zipc);




		$pdf->SetXY(140, 144.5);
		$pdf->Write(1, $with_cert_claim_amount1);
		$pdf->SetXY(140, 153);
		$pdf->Write(1, $with_cert_claim_amount2);
		$pdf->SetXY(175, 161);
		$pdf->Write(1, $with_cert_claim_amount3);




		$pdf->SetXY(175, 173);
		$pdf->Write(1, $with_cert_other_adj_amount1);
		$pdf->SetXY(175, 189.5);
		$pdf->Write(1, $with_cert_other_adj_amount2);
		$pdf->SetXY(175, 198);
		$pdf->Write(1, $with_cert_other_adj_amount3);




		$pdf->Image($with_cert_sign,50,213,30,9,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',50,213,30,9,'PNG');

		$pdf->SetXY(165, 220);
		$pdf->Write(1, $with_cert_date);




		$pdf->SetXY(40,243);
		$pdf->Write(1, $with_cert_emp_name);
		$pdf->SetXY(60,243);
		$pdf->Write(1, $with_cert_emp_add);
		$pdf->SetXY(140, 243);
		$pdf->Write(1, $with_cert_fdate_emp);
		$pdf->SetXY(165, 243);
		$pdf->Write(1, $with_cert_ein);






		$pdf->SetFont('Helvetica','','70');
		$pdf->SetTextColor(0, 0, 0);


		if($with_cert_marital_status == 'Single Married filling Separately'){
			$pdf->SetXY(34.5, 46.6);
			$pdf->Write(5, '.');
		}
		if($with_cert_marital_status_c1 == 'Married filling jointly or Qualifying widow(er)'){
			$pdf->SetXY(34.5, 50.5);
			$pdf->Write(5, '.');
		}
		if($with_cert_marital_status_c2 == 'Third Choice'){
			$pdf->SetXY(34.5, 55);
			$pdf->Write(5, '.');
		}
		
		
		
		if($with_cert_check == 'if there are only two jobs total, you may check box, Do the same on Form W-4 for the other job. This option is accurate for jobs with similar pay; otherwise more tax than necessary may be withheld.')
		{
			$pdf->SetXY(190.5, 99.5);
			$pdf->Write(5, '.');
		}
		
				

	}





	if($pageNo == 17)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

	}



	if($pageNo == 18)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);


		$pdf->SetXY(175, 58.5);
		$pdf->Write(1, $mul_job_work_salry1);

		$pdf->SetXY(175, 89.5);
		$pdf->Write(1, $mul_job_work_salary2);

		$pdf->SetXY(175, 107.5);
		$pdf->Write(1, $mul_job_work_salary3);

		$pdf->SetXY(175, 115.5);
		$pdf->Write(1, $mul_job_work_salary4);

		$pdf->SetXY(175, 127.5);
		$pdf->Write(1, $mul_job_work_salary5);

		$pdf->SetXY(175, 144);
		$pdf->Write(1, $mul_job_work_salary6);



		$pdf->SetXY(175, 165);
		$pdf->Write(1, $ded_work_salary1);

		$pdf->SetXY(175, 177);
		$pdf->Write(1, $ded_work_salary2);

		$pdf->SetXY(175, 193.5);
		$pdf->Write(1, $ded_work_salary3);

		$pdf->SetXY(175, 206);
		$pdf->Write(1, $ded_work_salary4);

		$pdf->SetXY(175, 214);
		$pdf->Write(1, $ded_work_salary5);

	}





	if($pageNo == 19)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

	}







	if($pageNo == 20)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(20, 70);
		$pdf->Write(1, $emp_eligibility_lname);
		$pdf->SetXY(75, 70);
		$pdf->Write(1, $emp_eligibility_fname);
		$pdf->SetXY(125, 70);
		$pdf->Write(1, $emp_eligibility_mname);
		$pdf->SetXY(145, 70);
		$pdf->Write(1, $emp_eligibility_other);



		$pdf->SetXY(20, 80);
		$pdf->Write(1, $emp_eligibility_address);
		$pdf->SetXY(84, 80);
		$pdf->Write(1, $emp_eligibility_apt_no);
		$pdf->SetXY(105, 80);
		$pdf->Write(1, $emp_eligibility_town);
		$pdf->SetXY(154, 80);
		$pdf->Write(1, $emp_eligibility_state);
		$pdf->SetXY(170, 80);
		$pdf->Write(1, $emp_eligibility_zip_no);



		$pdf->SetXY(20, 91);
		$pdf->Write(1, $emp_eligibility_birth_date);
		// $pdf->SetXY(55, 91);
		// $pdf->Write(1, $emp_eligibility_ssn);
		$pdf->SetXY(95, 91);
		$pdf->Write(1, $emp_eligibility_email_add);
		$pdf->SetXY(154, 91);
		$pdf->Write(1, $emp_eligibility_tel_no);



		$pdf->SetXY(87, 146.5);
		$pdf->Write(1, $emp_eligibility_reg_no);
		$pdf->SetXY(70, 154.5);
		$pdf->Write(1, $emp_eligibility_adm_no);
		$pdf->SetXY(60, 162.5);
		$pdf->Write(1, $emp_eligibility_pass_no);
		$pdf->SetXY(60, 168.5);
		$pdf->Write(1, $emp_eligibility_coun_issu);


		$pdf->Image($emp_eligibility_sign,50,175.5,20,6,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',50,175.5,20,6,'PNG');

		$pdf->SetXY(140, 180);
		$pdf->Write(1, $emp_eligibility_todate);




		
		$pdf->Image($emp_eligibility_tran_sign ,60, 207,20,6,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',60, 207,20,6,'PNG');


		$pdf->SetXY(150, 211);
		$pdf->Write(1, $emp_eligibility_tran_date);



		$pdf->SetXY(30, 221.5);
		$pdf->Write(1, $emp_eligibility_tran_fam_name);
		$pdf->SetXY(135, 221.5);
		$pdf->Write(1, $emp_eligibility_tran_fname);




		$pdf->SetXY(30, 231);
		$pdf->Write(1, $emp_eligibility_tran_add);
		$pdf->SetXY(110, 231);
		$pdf->Write(1, $emp_eligibility_tran_city);
		$pdf->SetXY(155, 231);
		$pdf->Write(1, $emp_eligibility_tran_state);
		$pdf->SetXY(172, 231);
		$pdf->Write(1, $emp_eligibility_tran_zip);





		$pdf->SetFont('Helvetica','','75');
		$pdf->SetTextColor(0, 0, 0);



		if($emp_eligibility_check1 = '1. A citizen of the United States'){
			$pdf->SetXY(13.6, 103.3);
			$pdf->Write(5, '.');
		}

		if($emp_eligibility_check2 == '2. A noncitizen of the United States (See instructions)'){
			$pdf->SetXY(13.6, 108.7);
			$pdf->Write(5, '.');
		}



		if($emp_eligibility_check3 == '3. A lawful permanent resident (Alien Registration Number/USCIC Number)'){
			$pdf->SetXY(13.6, 114);
			$pdf->Write(5, '.');
		}
		
		
		
		if($emp_eligibility_check4 == '4. An alien Authorized to work until (expiration date, if applicable, mm/dd/yyyy) Some alien may wire "N/A" in the expiration date expiration date field (See instruction)')
		{
			$pdf->SetXY(13.6, 119.7);
			$pdf->Write(5, '.');
		}
		



		if($emp_eligibility_tran_cert == 'I did not use a preparer or translator.'){
			$pdf->SetXY(14.3, 182.4);
			$pdf->Write(5, '.');
		}
		
		if($emp_eligibility_tran_cert1 == 'A preparer(s) and/or translator(s) assisted the employee in completing section 1.'){
			$pdf->SetXY(66.2, 182.2);
			$pdf->Write(5, '.');
		}
		

	}




	if($pageNo == 21)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(60, 52);
		$pdf->Write(1, $vari_homeland_lname);
		$pdf->SetXY(110, 53);
		$pdf->Write(1, $vari_homeland_fname);
		$pdf->SetXY(145, 53);
		$pdf->Write(1, $vari_homeland_mi);
		$pdf->SetXY(160, 53);
		$pdf->Write(1, $vari_homeland_citizen);




		$pdf->SetXY(20, 67);
		$pdf->Write(1, $vari_homeland_la_dtitle);

		$pdf->SetXY(80, 68);
		$pdf->Write(1, $vari_homeland_lb_dtitle);

		// $pdf->SetXY(140, 68);
		// $pdf->Write(1, $vari_homeland_lc_ssc);



		$pdf->SetXY(20, 74);
		$pdf->Write(1, $vari_homeland_la_athu);

		// $pdf->SetXY(80, 75);
		// $pdf->Write(1, $vari_homeland_lb_safety);

		// $pdf->SetXY(140, 76);
		// $pdf->Write(1, $vari_homeland_lc_ssa );


		$pdf->SetXY(20, 81);
		$pdf->Write(1, $vari_homeland_la_dno);
		$pdf->SetXY(80, 82);
		$pdf->Write(1, $vari_homeland_lb_dno);
		$pdf->SetXY(140, 83);
		$pdf->Write(1, $vari_homeland_lc_dno);



		$pdf->SetXY(20, 89);
		$pdf->Write(1, $vari_homeland_la_exp_no);
		$pdf->SetXY(80, 90);
		$pdf->Write(1, $vari_homeland_lb_exp_no);
		$pdf->SetXY(140, 91);
		$pdf->Write(1, $vari_homeland_lc_exp_no);



		$pdf->SetXY(20, 97);
		$pdf->Write(1, $vari_homeland_lmore_dtitle);
		$pdf->SetXY(20, 104);
		$pdf->Write(1, $vari_homeland_lmore_athu);
		$pdf->SetXY(20, 111);
		$pdf->Write(1, $vari_homeland_lmore_dno);
		$pdf->SetXY(20, 119);
		$pdf->Write(1, $vari_homeland_lmore_exp_no);

		$pdf->SetXY(78, 105);
		$pdf->Write(1, $vari_homeland_add_info);

		$pdf->SetXY(20, 127);
		$pdf->Write(1, $vari_homeland_lmore_dtitle_1);
		$pdf->SetXY(20, 134);
		$pdf->Write(1, $vari_homeland_lmore_athu_1);
		$pdf->SetXY(20, 142);
		$pdf->Write(1, $vari_homeland_lmore_dno_1);
		$pdf->SetXY(20, 150);
		$pdf->Write(1, $vari_homeland_lmore_exp_date_1);




		$pdf->SetXY(100, 167);
		$pdf->Write(1, $vari_homeland_fday_emp);

		// $pdf->Image($vari_homeland_sign ,60,207,20,6,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',30, 174,20,5,'PNG');


		$pdf->SetXY(100, 178);
		$pdf->Write(1, $vari_homeland_today);


		$pdf->SetXY(20, 215);
		$pdf->Write(1, $revari_rehires_lname);
		$pdf->SetXY(70, 215);
		$pdf->Write(1, $revari_rehires_fname);
		$pdf->SetXY(115, 216);
		$pdf->Write(1, $revari_rehires_mname);
		$pdf->SetXY(140, 216);
		$pdf->Write(1, $revari_rehires_date);



		$pdf->SetXY(20, 232);
		$pdf->Write(1, $vari_homeland_dtitle_1);
		$pdf->SetXY(105, 233);
		$pdf->Write(1, $vari_homeland_dno_1);
		$pdf->SetXY(150, 234);
		$pdf->Write(1, $vari_homeland_exp_1);




		// $pdf->Image($vari_homeland_auth_sign ,60, 207,20,6,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',20, 247,20,5,'PNG');

		$pdf->SetXY(90, 250);
		$pdf->Write(1, $vari_homeland_tdate);
		$pdf->SetXY(140, 250);
		$pdf->Write(1, $vari_homeland_name_auth);

	}






	if($pageNo == 22)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 42.5);
		$pdf->Write(1, $pre_scr_certi_name);

		$pdf->SetXY(157, 42.5);
		$pdf->Write(2, $pre_scr_certi_ssn);

		$pdf->SetXY(60, 50);
		$pdf->Write(3, $pre_scr_certi_add);


		$pdf->SetXY(70, 56.5);
		$pdf->Write(4, $pre_scr_certi_city);

		$pdf->SetXY(90, 56.5);
		$pdf->Write(4, $pre_scr_certi_state);

		$pdf->SetXY(120, 56.5);
		$pdf->Write(4, $pre_scr_certi_zip);



		$pdf->SetXY(30, 64.8);
		$pdf->Write(5, $pre_scr_certi_country);

		$pdf->SetXY(145, 64.8);
		$pdf->Write(6, $pre_scr_certi_tel_no);


		$pdf->SetXY(110, 72);
		$pdf->Write(6, $pre_scr_certi_birth_date);


		$pdf->Image($pre_scr_certi_sign ,60,240.5,30,12,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',60,240.5,30,12,'PNG');

		$pdf->SetXY(170, 248.5);
		$pdf->Write(8, $pre_scr_certi_date);


		$pdf->SetFont('Helvetica','','70');
		$pdf->SetTextColor(0, 0, 0);

		if($pre_scr_certi_check_1 == 1)
		{
			$pdf->SetXY(22.5, 78);
			$pdf->Write(5, '.');
		}

		if($pre_scr_certi_check_2 == 2)
		{
			$pdf->SetXY(22.5, 89.5);
			$pdf->Write(5, '.');
		}
		
		if($pre_scr_certi_check_3 == 3)
		{
			$pdf->SetXY(23.5, 148.5);
			$pdf->Write(5, '.');
		}
		if($pre_scr_certi_check_4 == 4)
		{
			$pdf->SetXY(23.5, 160.5);
			$pdf->Write(5, '.');
		}

		if($pre_scr_certi_check_5 == 5)
		{
			$pdf->SetXY(23.5, 172.5);
			$pdf->Write(5, '.');
		}
		
		if($pre_scr_certi_check_6 == 6)
		{
			$pdf->SetXY(24, 184);
			$pdf->Write(5, '.');
		}
		if($pre_scr_certi_check_7 == 7)
		{
			$pdf->SetXY(24, 212);
			$pdf->Write(5, '.');
		}
	}





	if($pageNo == 23)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);


		$pdf->SetXY(178, 80);
		$pdf->Write(6, $for_emp_use_tar_group);

		$pdf->SetXY(40, 95);
		$pdf->Write(6, $for_emp_use_date_app_info);

		$pdf->SetXY(83, 95);
		$pdf->Write(6, $for_emp_use_offer_job );

		$pdf->SetXY(125, 96);
		$pdf->Write(6, $for_emp_use_hired);

		$pdf->SetXY(170, 96);
		$pdf->Write(6, $for_emp_use_sta_job);

		$pdf->Image($for_emp_use_sign,50,115.5,30,12,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',50,115.5,30,12,'PNG');

		$pdf->SetXY(170, 123);
		$pdf->Write(6, $for_emp_use_ldate);

	}




	if($pageNo == 24)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(20, 28);
		$pdf->Write(6, $ind_char__control_no);

		$pdf->SetXY(140, 28);
		$pdf->Write(6, $ind_char_drecived);

		$pdf->SetXY(20, 61);
		$pdf->Write(6, $ind_char_app_info_emp_name);

		$pdf->SetXY(75, 45);
		$pdf->Write(6, $ind_char_emp_add);

		$pdf->SetXY(75, 61);
		$pdf->Write(6, $ind_char_emp_tel);

		$pdf->SetXY(140, 61);
		$pdf->Write(6, $ind_char_emp_id);

		$pdf->SetXY(20, 93);
		$pdf->Write(6, $applicant_info_name);

		$pdf->SetXY(75, 93);
		$pdf->Write(6, $applicant_info_ssn);



		$pdf->SetXY(160, 89);
		$pdf->Write(6, $ind_char_ldate_emp);

		$pdf->SetXY(20, 120);
		$pdf->Write(6, $group_certi_emp_sdate);
		$pdf->SetXY(75, 120);
		$pdf->Write(6, $group_certi_star_wage);
		$pdf->SetXY(140, 120);
		$pdf->Write(6, $group_certi_position);

		$pdf->SetXY(75, 130);
		$pdf->Write(6, $group_certi_birt_date);


		$pdf->SetXY(85, 160);
		$pdf->Write(6, $group_certi_pname);

		$pdf->SetXY(90, 165);
		$pdf->Write(6, $group_certi_rcity_name);


		$pdf->SetXY(115, 210);
		$pdf->Write(6, $group_certi_nutrition_pname);

		$pdf->SetXY(88, 215);
		$pdf->Write(6, $group_certi_nutrition_rcity);


			$pdf->SetFont('Helvetica','','117');
			$pdf->SetTextColor(0, 0, 0);

			if($applicant_info_emp_work_before == 'YES'){

				$pdf->SetXY(156.1, 67.4);
				$pdf->Write(5, '.');

			}
			else{
				$pdf->SetXY(171.4, 67);
				$pdf->Write(5, '.');
			}



			$pdf->SetFont('Helvetica','','120');

			if($group_certi_atleast_age == 'YES'){

				$pdf->SetXY(166.5, 115.3);
				$pdf->Write(5, '.');
			}
			else
			{
				$pdf->SetXY(178.5, 115.4);
				$pdf->Write(5, '.');
			
			}

			
			
			if($group_certi_arm_force == 'YES'){

				$pdf->SetXY(166.5, 125.3);
				$pdf->Write(5, '.');
			}
			else
			{
				$pdf->SetXY(179, 125.3);
				$pdf->Write(5, '.');
			
			}


			
			// if($group_certi_snap == 'YES'){

			// 	$pdf->SetXY(167, 123);
			// 	$pdf->Write(5, '.');
			// }
			// else
			// {
			// 	$pdf->SetXY(179, 123);
			// 	$pdf->Write(5, '.');
			
			// }



			if($group_certi_snap == 'YES'){
				$pdf->SetXY(169, 144);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(181.8, 144);
				$pdf->Write(5, '.');
			}


			
			if($group_certi_service_con == 'YES'){
				$pdf->SetXY(169.5, 158);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(182, 158);
				$pdf->Write(5, '.');
			}




			if($group_certi_disc == 'YES'){
				$pdf->SetXY(169.3, 164.5);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(181.8, 164.7);
				$pdf->Write(5, '.');
			}




			if($group_certi_unemp == 'YES'){
				$pdf->SetXY(168.5, 173.5);
				$pdf->Write(5, '.');	
			}
			else{
				$pdf->SetXY(182, 173);
				$pdf->Write(5, '.');
			}


			if($group_certi_nutrition_ass == 'YES'){
				$pdf->SetXY(68.8, 184);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(181.5, 184);
				$pdf->Write(5, '.');
			}


			if($group_certi_bene_snap == 'YES'){
				$pdf->SetXY(169, 192.5);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(180.5, 193);
				$pdf->Write(5, '.');
			}


			if($group_certi_rehab_appr == 'YES'){
				$pdf->SetXY(171, 213);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(182.5, 212.8);
				$pdf->Write(5, '.');
			}
			
			


			if($group_certi_emp_net == 'YES'){
				$pdf->SetXY(170.8, 219.7);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(182.8, 219.7);
				$pdf->Write(5, '.');
			}
			
			


			if($group_certi_vet_aff == 'YES'){
				$pdf->SetXY(171, 225);
				$pdf->Write(5, '.');
			}
			else{
				$pdf->SetXY(171, 225);
				$pdf->Write(5, '.');		
			}
			
			
			
			

	}





	if($pageNo == 25)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);


		$pdf->SetXY(110.7, 48.5);
		$pdf->Write(1, $group_certi_tnaf_name);

		$pdf->SetXY(95.7, 52.9);
		$pdf->Write(1, $group_certi_tanf_rcity);


		$pdf->SetXY(70.7, 67.9);
		$pdf->Write(1, $group_certi_17_conviction_date);

		$pdf->SetXY(128, 67.9);
		$pdf->Write(1, $group_certi_17_rel_date);

		$pdf->SetXY(50, 72.9);
		$pdf->Write(1, $group_certi_17_fedr);

		$pdf->SetXY(88.5, 72.9);
		$pdf->Write(1, $group_certi_17_conviction_state);


		$pdf->SetXY(123.5, 136);
		$pdf->Write(1, $group_certi_23_rstate_unemp);

		$pdf->SetXY(30.5, 158);
		$pdf->Write(1, $group_certi_24_doc_eligi);

		$pdf->Image($group_certi_25_ins_sign,30,198.9,22,8,'PNG');

		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',30,198.9,22,8,'PNG');


		$pdf->SetXY(158.5,195.9);
		$pdf->Write(3, $group_certi_26_date);



		$pdf->SetFont('Helvetica','','120');
		$pdf->SetTextColor(0, 0, 0);

		if($group_certi_mem_fam == 'YES'){
			$pdf->SetXY(164.7, 0);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(176.7, 0);
			$pdf->Write(2, '.');
		}
		

		

		/////


		if($group_certi_rtanf == 'YES'){
			$pdf->SetXY(166, 12);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(177.4, 12);
			$pdf->Write(2, '.');
		}
		

		

		/////



		if($group_certi_eli_tanf == 'YES'){
			$pdf->SetXY(166, 22.9);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(177, 22);
			$pdf->Write(2, '.');
		}

		

		

		/////




		if($group_certi_tanf_ass == 'YES'){
			$pdf->SetXY(166, 31.9);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(176.6, 31);
			$pdf->Write(2, '.');
		}
		

		if($group_certi_17_convicted == 'YES'){
			$pdf->SetXY(166.5, 51.9);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(177, 51);
			$pdf->Write(2, '.');
		}
		

		

		/////



		if($group_certi_18__live_rrc == 'YES')
		{
			$pdf->SetXY(164.5, 66.8);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(175.65, 65.8);
			$pdf->Write(2, '.');
		}
		

		

		//////



		if($group_certi_19_empor_zone == 'YES'){
			$pdf->SetXY(167.2, 73.2);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(178.2, 72.8);
			$pdf->Write(2, '.');
		}
		

		

		//////


		if($group_certi_20_ssi == 'YES'){
			$pdf->SetXY(168.4, 92.3);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(178.1, 91.8);
			$pdf->Write(2, '.');
		}
		

		

		/////;



		if($group_certi_21_unemp_consec = 'YES'){
			$pdf->SetXY(169.5, 101.7);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(179.1, 101.5);
			$pdf->Write(2, '.');
		}
		

		

		//////



		if($group_certi_22_unemp_l4w == 'YES'){
			$pdf->SetXY(170.4, 110.8);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(179.7, 110.5);
			$pdf->Write(2, '.');
		}
		

		

		///



		if($group_certi_23_period_unemp == 'YES'){
			$pdf->SetXY(170.3, 120.5);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(179.7, 120.5);
			$pdf->Write(2, '.');
		}



		$pdf->SetFont('Helvetica','','50');
		$pdf->SetTextColor(0, 0, 0);

		if($group_certi_25_employer == 'Employer'){
			$pdf->SetXY(103.4, 194.5);
			$pdf->Write(1, '.');
		}

		elseif($group_certi_25_employer == 'Consultant'){
			$pdf->SetXY(120.4, 194.3);
			$pdf->Write(2, '.');
		}
		elseif($group_certi_25_employer == 'SWA'){
			$pdf->SetXY(138.4, 193.8);
			$pdf->Write(3, '.');
		}
		elseif($group_certi_25_employer == 'Participating Agency'){
			$pdf->SetXY(103.4, 198.5);
			$pdf->Write(1, '.');
		}
		elseif($group_certi_25_employer == 'Applicant, or'){
			$pdf->SetXY(132.5, 197.5);
			$pdf->Write(3, '.');
		}
		elseif($group_certi_25_employer == 'Parent/Guardian (if applicant is a minor)'){
			$pdf->SetXY(103.4, 203);
			$pdf->Write(1, '.');
		}

		
	}




	if($pageNo == 26)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(30, 169.5);
		$pdf->Write(1, $emp_ackno_name);

		$pdf->Image($emp_ackno_sign,30,186,30,12,'PNG');

		$pdf->SetXY(140, 168.5);
		$pdf->Write(3, $emp_ackno_date);

	}




	if($pageNo == 27)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->Image($consent_hep_rec_sign,30,181,30,12,'PNG');

		$pdf->SetXY(30, 212);
		$pdf->Write(2, $consent_hep_rec_name);

		$pdf->SetXY(145, 189);
		$pdf->Write(5, $consent_hep_rec_date);

		$pdf->Image($consent_hep_agen_sign,30,225,30,12,'PNG');


		$pdf->SetXY(145, 232.5);
		$pdf->Write(3, $consent_hep_agen_date);

		/////// dots start

		$pdf->SetFont('Helvetica','','75');
		$pdf->SetTextColor(0, 0, 0);

		if($consent_hep_dovaccine == 'I DO want the Vaccine'){
			$pdf->SetXY(23, 113);
			$pdf->Write(1, '.');
		}
		
		if($consent_hep_dontvaccine == 'I DO NOT want the Vaccine'){
			$pdf->SetXY(109.5, 112);
			$pdf->Write(2, '.');
		}
		
		if($consent_hep_havevaccine == 'I have received the Hepatitis B Vaccination series but am unable to provide documentation of the vaccination series.'){
			$pdf->SetXY(23, 120.9);
			$pdf->Write(1, '.');
		}
		

	}







	if($pageNo == 28)
	{
		
		// use the imported page and place it at position 10,10 with a width of 100 mm
		$pdf->useTemplate($tplIdx, 1, 1, 210);
		
		// now write some text above the imported page
		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->Image($ans_que_emp_sign,30,162.5,30,10,'PNG');

		$pdf->SetXY(140, 169);
		$pdf->Write(2, $ans_que_8_date);

		$pdf->SetXY(55, 189.5);
		$pdf->Write(2, $ans_que_d1_manuf);

		$pdf->SetXY(140, 189.7);
		$pdf->Write(2, $ans_que_d1_lotno);

		$pdf->SetXY(55, 195);
		$pdf->Write(2, $ans_que_d1_exp);

		$pdf->SetXY(125, 195);
		$pdf->Write(2, $ans_que_d1_site);

		$pdf->SetXY(50, 200.5);
		$pdf->Write(2, $ans_que_d1_givenby);

		$pdf->SetXY(125, 200.5);
		$pdf->Write(2, $ans_que_d1_date);

		// //date1
		$pdf->SetXY(40, 209);
		$pdf->Write(2, $ans_que_d1_reasult);

		// //date2
		$pdf->SetXY(100, 209);
		$pdf->Write(2, $ans_que_d1_nreact);

		// //date3
		$pdf->SetXY(150, 209);
		$pdf->Write(2, $ans_que_d1_react);

		// //date4
		$pdf->SetXY(42, 214);
		$pdf->Write(2, $ans_que_d1_allergic);

		$pdf->SetXY(100, 214);
		$pdf->Write(2, $ans_que_d1_induration);



		$pdf->SetXY(62, 222.5);
		$pdf->Write(2, $ans_que_d2_ref);

		$pdf->SetXY(107, 222);
		$pdf->Write(2, $ans_que_d2_whom);

		$pdf->SetXY(147, 222);
		$pdf->Write(2, $ans_que_d2_date);

		$pdf->SetXY(50, 228.5);
		$pdf->Write(2, $ans_que_d2_reasult);

		$pdf->SetXY(50, 233);
		$pdf->Write(2, $ans_que_d2_referred);

		$pdf->SetXY(134, 233);
		$pdf->Write(2, $ans_que_d2_where);

		$pdf->SetXY(50, 239);
		$pdf->Write(2, $ans_que_d2_follow);





		////// Dots Starting Point

		$pdf->SetFont('Helvetica','','75');
		$pdf->SetTextColor(0, 0, 0);

		//yes1
		if($ans_que_1_dise_yes == 'YES'){
			$pdf->SetXY(154.8, 85);
			$pdf->Write(1, '.');
		}
		if($ans_que_1_dise_no == 'NO'){
			$pdf->SetXY(166, 84.5);
			$pdf->Write(2, '.');
		}
		


		//yes2
		if($ans_que_2_tb_skin_yes == 'YES'){
			$pdf->SetXY(154.8, 90.8);
			$pdf->Write(1, '.');
		}
		if($ans_que_2_tb_skin_no == 'NO'){
			$pdf->SetXY(166, 90.3);
			$pdf->Write(2, '.');
		}
		




		
		//yes3
		if($ans_que_3_allergic_reac_yes == 'YES'){
			$pdf->SetXY(150.5, 96.5);
			$pdf->Write(1, '.');
		}
		
		if($ans_que_3_allergic_reac_no == 'NO'){
			$pdf->SetXY(163.5, 96);
			$pdf->Write(2, '.');
		}

		
		//yes4
		if($ans_que_4_immunized_yes == 'YES'){
			$pdf->SetXY(154.8, 102);
			$pdf->Write(1, '.');
		}
		
		if($ans_que_4_immunized_no == 'NO'){
			$pdf->SetXY(166, 101.7);
			$pdf->Write(2, '.');
		}



		//yes5
		if($ans_que_5_medication_yes == 'YES'){
			$pdf->SetXY(154.4, 113.2);
			$pdf->Write(1, '.');
		}
		if($ans_que_5_medication_no == 'NO'){
			$pdf->SetXY(166, 112.8);
			$pdf->Write(2, '.');
		}
		



		//yes6
		if($ans_que_6_steroids_yes == 'YES'){
			$pdf->SetXY(154.5, 119);
			$pdf->Write(1, '.');
		}
		
		//no
		if($ans_que_6_steroids_no == 'NO'){
			$pdf->SetXY(166, 118.7);
			$pdf->Write(2, '.');
		}





		//yes7
		if($ans_que_7_viral_infection_yes == 'YES'){
			$pdf->SetXY(154.5, 125);
			$pdf->Write(1, '.');
		}
		if($ans_que_7_viral_infection_no == 'NO'){
			$pdf->SetXY(166, 124.5);
			$pdf->Write(2, '.');
		}



		//yes
		if($ans_que_8_vaccine_yes == 'YES'){
			$pdf->SetXY(154.5, 130.5);
			$pdf->Write(1, '.');
		}
		//no
		if($ans_que_8_vaccine_no =='NO'){
			$pdf->SetXY(166, 130.2);
			$pdf->Write(2, '.');
		}

		//yes
		if($ans_que_9_pregnant_yes == 'YES'){
			$pdf->SetXY(154.5, 136.4);
			$pdf->Write(1, '.');
		}
		//no
		if($ans_que_9_pregnant_no =='NO'){
			$pdf->SetXY(166, 135.5);
			$pdf->Write(2, '.');
		}

	}





	if($pageNo == 29)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(110, 71);
		$pdf->Write(1, $com_disease_con_emp_name);

		$pdf->SetXY(95, 86);
		$pdf->Write(1, $com_disease_con_1explain);

		$pdf->SetXY(95, 108);
		$pdf->Write(1, $com_disease_con_2exp);

		$pdf->SetXY(95, 135);
		$pdf->Write(1, $com_disease_con_3exp);

		$pdf->SetXY(40, 151.5);
		$pdf->Write(1, $com_disease_con_4medications);

		$pdf->SetXY(95, 189);
		$pdf->Write(1, $com_disease_con_5exp);

		$pdf->Image($com_disease_con_emp_sign,40,223,30,10,'PNG');

		$pdf->SetXY(150, 232.5);
		$pdf->Write(1, $com_disease_con_date);


		$pdf->SetFont('Helvetica','','75');
		$pdf->SetTextColor(0, 0, 0);

		if($com_disease_con_initial == 'INITIAL'){
			$pdf->SetXY(36, 65);
			$pdf->Write(1, '.');
		}
		if($com_disease_con_update == 'UPDATE'){
			$pdf->SetXY(62.5, 65);
			$pdf->Write(1, '.');
		}
		


		if($com_disease_con_1far == 'YES'){
			$pdf->SetXY(35.5, 79);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(49.5);
			$pdf->Write(1, '.');
		}
		

		if($com_disease_con_2phy == 'YES'){
			$pdf->SetXY(35.5, 101);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(49.5, 101);
			$pdf->Write(1, '.');
		}



		if($com_disease_con_3phy == 'YES'){
			$pdf->SetXY(35.5, 128.5);
			$pdf->Write(1, '.');
		}
		
		else{
			$pdf->SetXY(49.5, 128.5);
			$pdf->Write(1, '.');
		}
		

		if($com_disease_con_5limit == 'YES'){
			$pdf->SetXY(35.5, 181.5);
			$pdf->Write(1, '.');
		}
		else{
			$pdf->SetXY(49.5, 181.5);
			$pdf->Write(1, '.');
		}
		
	}






	if($pageNo == 30)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->Image($notice_letter_sign,40,90,30,10,'PNG');

		$pdf->SetXY(150, 98.5);
		$pdf->Write(1, $notice_letter_date);
		
	}







	if($pageNo == 31)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(30, 69);
		$pdf->Write(1, $day_letter_emp_name);

		$pdf->SetXY(106, 75);
		$pdf->Write(1, $day_letter_date);

		// $pdf->SetXY(60, 89);
		// $pdf->Write(1, '2021');

		$pdf->Image($day_letter_sign,30,105,30,12,'PNG');

		$pdf->SetXY(140, 116);
		$pdf->Write(1, $day_letter_sign_date);
		
	}






	if($pageNo == 32)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 69);
		$pdf->Write(1, $drug_test_emp_name);

		$pdf->Image($drug_test_sign,30,133,30,12,'PNG');

		$pdf->SetXY(142, 143);
		$pdf->Write(1, $drug_test_date);
		
	}





	if($pageNo == 33)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
	}




	if($pageNo == 34)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
		$pdf->Image($solictation_agree_emp_sign,30,112.5,30,12,'PNG');

		$pdf->SetXY(143, 123);
		$pdf->Write(1, $solictation_agree_sign_date);
		
		// $pdf->SetXY(30, 160.5);
		// $pdf->Write(1, $solictation_agree_admin);


		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',30,142,30,12,'PNG');

		
		// $pdf->SetXY(143, 153.5);
		// $pdf->Write(1, $solictation_agree_admin_date);
	}







	if($pageNo == 35)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 69);
		$pdf->Write(0, $comp_policy_emp_name);

		$pdf->Image($comp_policy_sign,30,108,30,12,'PNG');

		$pdf->SetXY(140, 118.5);
		$pdf->Write(1, $comp_policy_date);
		
	}







	if($pageNo == 36)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(30, 71.5);
		$pdf->Write(0, $work_compen_emp_name);

		$pdf->Image($work_compen_sign,30,97,30,12,'PNG');

		$pdf->SetXY(140, 106.5);
		$pdf->Write(1, $work_compen_date);

		// $pdf->Image($work_compen_witness_sign,30,127,30,12,'PNG');

		// $pdf->SetXY(140, 136.5);
		// $pdf->Write(2, $work_compen_witness_date);
		
	}







	if($pageNo == 37)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
		$pdf->SetXY(30, 69.5);
		$pdf->Write(0, $consent_form_emp_name);

		$pdf->Image($consent_form_sign,30,103,30,12,'PNG');

		$pdf->SetXY(140, 113);
		$pdf->Write(1, $consent_form_date);
		
	}




	if($pageNo == 38)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 50);
		$pdf->Write(0, $consent_form_emp_name_1);

		$pdf->Image($consent_form_sign_1,30,102,30,12,'PNG');

		$pdf->SetXY(140, 112);
		$pdf->Write(1, $consent_form_date_1);
		
	}




	if($pageNo == 39)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(35, 70.5);
		$pdf->Write(0, $acknow_trainig_emp_name);

		$pdf->SetXY(75, 75.5);
		$pdf->Write(0, $acknow_trainig_date);


		$pdf->SetXY(145, 75.5);
		$pdf->Write(0, $acknow_trainig_trainer);

		

		$pdf->SetXY(30, 160);
		$pdf->Write(0, $acknow_trainig_pname);

		// $pdf->SetXY(30, 198);
		// $pdf->Write(0, 'MrLewis');
		$pdf->Image($acknow_trainig_emp_sign,30, 178,30,12,'PNG');



		$pdf->SetXY(140, 189);
		$pdf->Write(0, $acknow_trainig_sign_date);
		

		// $pdf->SetXY(30, 222);
		// $pdf->Write(0, 'MrLewis');
		// $pdf->Image($acknow_trainig_sign,30, 209,30,12,'PNG');


		// $pdf->SetXY(140, 220);
		// $pdf->Write(0, $acknow_trainig_date);
		
	}




	// if($pageNo == 40)
	// {
	// 	$pdf->useTemplate($tplIdx, 1, 1, 210);

	// 	$pdf->SetFont('Helvetica','','10');
	// 	$pdf->SetTextColor(0, 0, 0);

	// 	$pdf->SetXY(12, 142.5);
	// 	$pdf->Write(0, $health_insu_text1);

	// 	$pdf->SetXY(12, 153);
	// 	$pdf->Write(0, $health_insu_text2);

	// 	$pdf->SetXY(12, 175);
	// 	$pdf->Write(0, $health_insu_text3);


	// 	$pdf->SetXY(12, 197);
	// 	$pdf->Write(0, $health_insu_text4);


	// 	// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',20,218,30,9,'PNG');

	// 	$pdf->Image($health_insu_emp_sign,20,220,30,9,'PNG');


	// 	$pdf->SetXY(80, 229);
	// 	$pdf->Write(0, $health_insu_ssn);

	// 	$pdf->SetXY(125, 230);
	// 	$pdf->Write(0, $health_insu_date);
		
	// 	$pdf->SetXY(20, 247);
	// 	$pdf->Write(0, $health_insu_pname);		
	// }





	// if($pageNo == 41)
	// {
	// 	$pdf->useTemplate($tplIdx, 1, 1, 210);

	// 	$pdf->SetFont('Helvetica','','10');
	// 	$pdf->SetTextColor(0, 0, 0);

	// }



	if($pageNo == 40)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
	}



	if($pageNo == 41)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
	}




	if($pageNo == 42)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(40, 72);
		$pdf->Write(0, $emerge_con_name);

		$pdf->SetXY(137, 72);
		$pdf->Write(0, $emerge_con_date);

		$pdf->SetXY(40, 97);
		$pdf->Write(0, $emerge_con_pri_name);
		$pdf->SetXY(137, 97);
		$pdf->Write(0, $emerge_con_pri_relation);


		$pdf->SetXY(45, 105);
		$pdf->Write(0, $emerge_con_pri_adds);



		$pdf->SetXY(55, 120.5);
		$pdf->Write(0, $emerge_con_pri_hpho);
		
		$pdf->SetXY(120, 120.5);
		$pdf->Write(0, $emerge_con_pri_cell);

		$pdf->SetXY(40, 129);
		$pdf->Write(0, $emerge_con_pri_phon);

		$pdf->SetXY(60, 137.5);
		$pdf->Write(0, $emerge_con_pri_alt_phon);







		$pdf->SetXY(42, 164.5);
		$pdf->Write(0, $emerge_con_pri_1_name);
		$pdf->SetXY(137, 164.5);
		$pdf->Write(0, $emerge_con_pri_1_relation);

		$pdf->SetXY(45, 172);
		$pdf->Write(0, $emerge_con_pri_1_add);


		$pdf->SetXY(55, 187.5);
		$pdf->Write(0, $emerge_con_pri_1_hpho);
		$pdf->SetXY(128, 187.5);
		$pdf->Write(0, $emerge_con_pri_1_cell);


		$pdf->SetXY(40, 196);
		$pdf->Write(0, $emerge_con_pri_1phon);
		$pdf->SetXY(60, 204);
		$pdf->Write(0, $emerge_con_pri_1_alt_phon);

		
		
		// $pdf->Image('http://estrellahomecare.perfectwebsoldev.com/index.php?gf-signature=61377e01d46741.98886250&form-id=3&field-id=272&hash=67f28a50175a1c3c4f2543931163942e8111196fe2d8ba77b379c5bf092c70cf',20, 218,30,9,'PNG');
		
	}





	if($pageNo == 43)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetXY(30, 50);
		$pdf->Write(0, $new_emp_name);

		$pdf->SetXY(30, 72);
		$pdf->Write(0, $new_emp_pname);

		$pdf->SetXY(140, 72);
		$pdf->Write(0, $new_emp_date);

		$pdf->Image($new_emp_sign,30, 85,30,12,'PNG');

		$pdf->SetXY(140, 93);
		$pdf->Write(0, $new_emp_date2);

	}






	if($pageNo == 44)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
	}


	if($pageNo == 45)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
	}


	if($pageNo == 46)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
	}

	if($pageNo == 47)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);
		
	}


	if($pageNo == 48)
	{
		$pdf->useTemplate($tplIdx, 1, 1, 210);

		$pdf->SetFont('Helvetica','','10');
		$pdf->SetTextColor(0, 0, 0);


		$pdf->SetXY(122, 202);
		$pdf->Write(0, $new_emp_name);

		$pdf->Image($new_emp_sign ,150, 194,30,10,'PNG');
		
	}

}

$pdf->Output('employee_orientation_pdf/'.$personal_emp_name.'_'.$emp_risk_cat_ssn.'.pdf','F');




// attaching pdf to mail content and sent email 


		$filename = $personal_emp_name.'_'.$emp_risk_cat_ssn.'.pdf';
		$path = 'employee_orientation_pdf/';
		$filepath = $path . "/" . $filename;

		
		// carriage return type (RFC)
    	$separator = md5(time());
		$eol = PHP_EOL;
		
		
		$to = 'khusharperfect2018@gmail.com,hr@estrellacare.com';
    	$subject = 'Estrella Home Care Employment Orientation';
		
   		$message  = 'Hi Admin,'.$eol.$eol;
		$message .= 'An Orientation packet has been submitted.'.$eol.$eol;

		$message .= 'Thanks'.$eol;
		
		//attach pdf file to mail
		$attachments = array($filepath);
		
		
 		$headers = 'From: Estrellahomecare <wordpress@estrellahomecare.perfectwebsoldev.com>' . "\r\n";
 
		 
		wp_mail( $to, $subject, $message, $headers, $attachments );
?>
