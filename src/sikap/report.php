<?php
require_once 'lib/config.php';

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->mergeCells('A1:A2');
$sheet->mergeCells('B1:B2');
$sheet->mergeCells('I1:I2');
$sheet->mergeCells('C1:E1');
$sheet->mergeCells('F1:H1');
$sheet->setCellValue('A1', 'Nama');
$sheet->setCellValue('B1', 'Jumlah Hadir');
$sheet->setCellValue('C1', 'Jumlah Tidak Hadir');
$sheet->setCellValue('C2', 'Cuti');
$sheet->setCellValue('D2', 'Izin');
$sheet->setCellValue('E2', 'Absen');
$sheet->setCellValue('F1', 'Jam Kerja');
$sheet->setCellValue('F2', 'Total');
$sheet->setCellValue('G2', 'Selisih');
$sheet->setCellValue('H2', 'Persentasi');
$sheet->setCellValue('I1', 'Kinerja');

$query = $conn->query("
  SELECT pegawai.pe_nama,
    count(DISTINCT kehadiran.id) as kehadiran,
    COALESCE(round(sum(cuti.durasi)*count(DISTINCT(cuti.cuti_id))/count(*)),0) as cuti,
    COALESCE(round(sum(izin.durasi)*count(DISTINCT(izin.izin_id))/count(*)),0) as izin,
    COALESCE(round(sum(TIMESTAMPDIFF(MINUTE,kehadiran.jam_masuk,kehadiran.jam_keluar))*count(DISTINCT(kehadiran.id))/count(*)/60),0) as jam_kerja
    FROM pegawai LEFT JOIN kehadiran on pegawai.pe_id=kehadiran.pe_id
    LEFT JOIN cuti on pegawai.pe_id=cuti.pe_id
    LEFT JOIN izin on pegawai.pe_id=izin.pe_id
  GROUP BY pegawai.pe_id
");

$i = 3;
while($row = $query->fetch()) {
	$sheet->setCellValue('A'.$i, $row['pe_nama']);
	$sheet->setCellValue('B'.$i, $row['kehadiran']);
	$sheet->setCellValue('C'.$i, $row['cuti']);
	$sheet->setCellValue('D'.$i, $row['izin']);
	$sheet->setCellValue('E'.$i, 20-$row['kehadiran']); //asumsi sebulan 20 hari kerja
	$sheet->setCellValue('F'.$i, $row['jam_kerja']); //konversi menit ke jam
	$sheet->setCellValue('G'.$i, $row['jam_kerja']-170); //asumsi sebulan 170 jam kerja
	$i++;
}

$writer = new Xlsx($spreadsheet);
$writer->save('report.xlsx');
 
header('Location: report.xlsx');
?>