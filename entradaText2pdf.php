<?php
	//
    // Mètodes de Dompdf --> https://gennco.com.co/ANT/dompdf/DOMPDF.html
    // Codi Font --> https://github.com/dompdf/dompdf
    //
    // Accedint al framework
    require_once 'vendor/autoload.php'; //path relatiu al directori a on està el codi principal del projecte 
    use Dompdf\Dompdf as Dompdf //Utilització del framework Dompdf. Es crea una classe de nom PDF
	//
	// Utilitzant la classe Dompdf del framework. $dompdf serà un objecte de la classe Dompdf
    dompdf = new Dompdf(); 
    //
    //Convertint text en HTML
    $text=explode("\n",$_GET["text"]);
    $textPDF="";
    foreac($text as $posicio => $linia) {
		$textPDF = $textPDF.htmlspecialchars($linia)."<br>";
	}
    $dompdf->loadHtml($textPDF);  
    //
    // Renderitzant i mostrant el PDF
    // 
    $dompdf->setPaper('A4', 'landscape'); //Sets the paper size & orientation
    $dompdf->render(); // Renders the HTML to PDF
    $dompdf-stream("text_entrada.pdf"); //Streams the PDF to the client (for example: browser)


?>
