<?php
// Ensure to download and include the FPDF library in your project
include('assets/fpdf/fpdf.php');

include('layout/config.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$pid = intval($_GET['pid']);
// Fetch patient data from the database
$patient_sql = "SELECT * FROM patients WHERE patient_id = '$pid'"; // Assuming patient_id is the unique identifier for patients
$patient_stmt = $conn->prepare($patient_sql);
$patient_stmt->bind_param("i", $patient_id); // Assuming $patient_id is the patient ID you want to retrieve
$patient_id = 1; // Set the patient ID you want to retrieve
$patient_stmt->execute();
$patient_result = $patient_stmt->get_result();
$patient_data = $patient_result->fetch_assoc();

// Fetch prescription data from the database
$sql = "SELECT * FROM tbl_prescription INNER JOIN patients ON patients.patient_id = tbl_prescription.patient_id";
$result = $conn->query($sql);

$prescription_data = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $prescription_data[] = $row;
    }
}

$conn->close();

// Create PDF document
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 50, '', 0, 1); // Empty cell to create space for the header

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(0, 10, 'Patient Information', 0, 1, 'C'); // Centered heading

// Display Patient Information in a horizontal table
$pdf->Cell(40, 10, 'Patient Name:', 0, 0);
$pdf->Cell(60, 10, $patient_data['patient_name'], 0, 0);

$pdf->Cell(20, 10, 'Patient ID:', 0, 0);
$pdf->Cell(30, 10, $patient_data['patient_id'], 0, 0);

$pdf->Cell(20, 10, 'Date:', 0, 0);
$pdf->Cell(30, 10, $patient_data['date'], 0, 0);

$pdf->Ln();

$pdf->Cell(20, 10, 'Age:', 0, 0);
$pdf->Cell(20, 10, $patient_data['age'], 0, 0);

$pdf->Cell(20, 10, 'Gender:', 0, 0);
$pdf->Cell(30, 10, $patient_data['gender'], 0, 1);

// Add header to the PDF
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(0, 10, 'Prescription', 0, 1, 'C');
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

// Add content to the PDF based on prescription_data
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 10, 'Medicine Name', 0);
$pdf->Cell(30, 10, 'Dosage', 0);
$pdf->Cell(30, 10, 'Duration', 0);
$pdf->Cell(60, 10, 'Instruction', 0);
$pdf->Ln(); // Move to the next line
$pdf->SetFont('Arial', '', 9);

// Data rows
foreach ($prescription_data as $prescription) {
    $data = $prescription['updatedBy'];

    $pdf->Cell(40, 5, $prescription['drug_name'], 0);
    $pdf->Cell(30, 5, $prescription['dose'], 0);
    $pdf->Cell(30, 5, $prescription['duration'] . " Months", 0);
    $pdf->Cell(60, 5, $prescription['instruction'], 0);

    $pdf->Ln(); // Move to the next line
}

$pdf->SetFont('Arial', '', 10);
$pdf->SetY(-140); // Adjust the Y position as needed
$pdf->SetX(10);   // Adjust the X position as needed

// Add the "Printed By" information
$pdf->Cell(180, 10, "Printed By: " . $data, 0, 1, 'R');

// Output the PDF as a download
$pdf_filename = 'prescription.pdf';
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . $pdf_filename . '"');
$pdf->Output('D');
?>