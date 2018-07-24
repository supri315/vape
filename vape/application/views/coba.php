<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('daftar pembelian');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 006', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();
			$html=' <h2 align="center"> '.$title.'</h2>
					<table border="1" cellspacing="1" cellpadding="8">
						<tr bgcolor="000000" >
							<th align="center" width="6%">No</th>
							<th align="center">tanggal transaksi</th>
							<th align="center">nama barang</th>
							<th align="center" width="12%"> jumlah</th>
							<th align="center">Harga</th>
						</tr>';
			 $no=1; foreach ($pembelian as $pembelian ) { 
		
				
			 		$html.='<tr>
			 				<td >'.$no.'</td>
			 				<td>'.$pembelian['tgl_transaksi'].'</td>
			 				<td>'.$pembelian['nama_barang'].'</td>
			 				<td>'.$pembelian['jumlah'].'</td>
			 				<td align="left">Rp.'.number_format($pembelian['harga'],0,",",",").'</td>
			 			</tr>';
			   $no++; }

			$html.='</table>';
			
			$pdf->writeHTML($html, true, false, true, false, '');

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content



// output some RTL HTML content

// test some inline CSS

// reset pointer to the last page


// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('coba.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>