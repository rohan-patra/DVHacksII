<?php
	//if(isset($_POST['submit']))
	//{
		$age = $_POST['age'];
		$race = $_POST['race'];
		$gender = $_POST['gender'];
		$time_in_hospital = $_POST['time_in_hospital'];
		$num_lab_procedures = $_POST['num_lab_procedures'];
		$num_procedures = $_POST['num_procedures'];
		$num_medications = $_POST['num_medications'];
		$number_diagnoses = $_POST['number_diagnoses'];
		$metformin = $_POST['metformin'];
		$repaglinide = $_POST['repaglinide'];
		$nateglinide = $_POST['nateglinide'];
		$chlorpropamide = $_POST['chlorpropamide'];
		$glimepiride = $_POST['glimepiride'];
		$glipizide = $_POST['glipizide'];
		$glyburide = $_POST['glyburide'];
		$pioglitazone = $_POST['pioglitazone'];
		$rosiglitazone = $_POST['rosiglitazone'];
		$acarbose = $_POST['acarbose'];
		$miglitol = $_POST['miglitol'];
		$insulin = $_POST['insulin'];
		$glyburidemetformin = $_POST['glyburide-metformin'];
		$acetohexamide = $_POST['acetohexamide'];
		$tolbutamide = $_POST['tolbutamide'];
		$troglitazone = $_POST['troglitazone'];
		$glipizidemetformin = $_POST['glipizide-metformin'];
		$glimepiridepioglitazone = $_POST['glimepiride-pioglitazone'];
		$metforminrosiglitazone = $_POST['metformin-rosiglitazone'];
		$metforminpioglitazone = $_POST['metformin-pioglitazone'];
		$tolazamide = $_POST['tolazamide'];
		$examide = $_POST['examide'];
		$sitagliptin = $_POST['sitagliptin'];
		$change = $_POST['change'];
		$diabetesMed = $_POST['diabetesMed'];
		
		//write to csv
		
		$file_open = fopen("diabetes.csv", "w");
		$form_headers = array(							
			encounter_id, patient_nbr, race, gender, age, weight, admission_type_id, discharge_disposition_id, admission_source_id, time_in_hospital, payer_code, medical_specialty, num_lab_procedures, num_procedures, num_medications, number_outpatient, number_emergency, number_inpatient, diag_1, diag_2, diag_3, number_diagnoses, max_glu_serum, A1Cresult, metformin, repaglinide, nateglinide, chlorpropamide, glimepiride, acetohexamide, glipizide, glyburide, tolbutamide, pioglitazone, rosiglitazone, acarbose, miglitol, troglitazone, tolazamide, examide, citoglipton, insulin, glyburide-metformin, glipizide-metformin, glimepiride-pioglitazone, metformin-rosiglitazone, metformin-pioglitazone, change, diabetesMed, readmitted
		);
		fputcsv($file_open, $form_headers);
		$form_data = array(
			d,d, $race, $gender, $age,d,d,d,d, $time_in_hospital,d,d, $num_lab_procedures, $num_procedures, $num_medications,d,d,d,d,d,d, $number_diagnoses,d,d, $metformin, $repaglinide, $nateglinide, $chlorpropamide, $glimepiride, $glipizide, $glyburide, $pioglitazone, $rosiglitazone, $acarbose, $miglitol, $insulin, $glyburidemetformin, $glimepiridepioglitazone, $metforminrosiglitazone, $metforminpioglitazone, $tolazamide, $examide, $sitagliptin, $change, $diabetesMed,d
		);
		fputcsv($file_open, $form_data);
		header("https://rohanpatra.com/Diabetes/diabetes.csv");
	//}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>