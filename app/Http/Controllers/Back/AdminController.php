<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Repositories\PDFRepository;
use App\Result;
use Mpdf\Mpdf;
use App;
use Zip;

class AdminController extends Controller
{

	private $project;

	public function __construct(PDFRepository $projects)
	{
		$this->project = $projects;

	}

	public function generatePDF(Result $result)
	{
		$data['projects']  = $this->project->getResultInfos($result->id);

 		$pdf = App::make('dompdf.wrapper');
		$pdf->loadView('pdf.invoice', $data);
		$pdf->setOptions(['dpi' => 300, 'defaultFont' => 'sans-serif']);
		$pdf->save(storage_path('app/public/pdf/invoice.pdf'));

		$zip = Zip::create(storage_path('app/public/archives/archive.zip'));
		$zip->add(storage_path('app/public/pdf/invoice.pdf'));

		return $pdf->stream('invoice.pdf');
	}
}

