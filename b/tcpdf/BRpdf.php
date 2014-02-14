<?php

class PDF extends TCPDF {
	function log($txt) {
		$log = 'tcpdf.log';
		$handle = fopen($log,'a');
		$date = new DateTime();
		$txt = $date->format('Y-m-d H:i:s') . ": $txt\n";
		fwrite($handle,$txt);
		fclose($handle);
	}

	function WriteJustify($txt) {
		$cm = $this->GetCellMargins();
		$cp = $this->GetCellPaddings();

		$txt2 = $txt;
		$this->startTransaction();
		for($i=0;$i<100;$i++) {
			$w = $this->GetRemainingWidth() 
					- $this->GetStringWidth($txt2);
			if($w >= 0) break;
			$txt2 = ltrim($this->Write(0,$txt2,'',false,'J',false,0,true));
		}
		$this->rollbackTransaction(true);
		$txt1 = rtrim(substr($txt,0,strlen($txt)-strlen($txt2)));
		$txt2 = ltrim($txt2);
		$this->Write(0,$txt1,'',false,'J');
		$this->Ln();
		$this->Write(0,$txt2,'',false,'L');
	}
	function GetRemainingWidth() {
		return parent::GetRemainingWidth();
	}
	function getMarginCoords() {
		$pw = $this->getPageWidth();
		$ph = $this->getPageHeight();
		$margins = $this->getMargins();
		$lm = $margins['left'];
		$rm = $pw - $margins['right'];
		$tm = $margins['top'];
		$bm = $ph - $margins['bottom'];
		return array(
			'left' => $lm,
			'right' => $rm,
			'top' => $tm,
			'bottom' => $bm
		);

	}
}


?>

