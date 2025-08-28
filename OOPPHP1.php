<?php

class Rectangle {
	public $width;
	public $height;

	function __construct($w = 1, $h = 1) {
		$this->width = $w; 
		$this->height = $h;
	}

	function area() {
		return $this->width * $this->height;
	}

	function perimeter() {
		return 2 * ($this->width + $this->height);
	}

	function show() {
		echo "Rectangle\n";
		echo "width = " . $this->width . "\n";
		echo "height = " . $this->height . "\n";
		echo "area = " . $this->area() . "\n";
		echo "perimeter = " . $this->perimeter() . "\n";
	}
}


$r1 = new Rectangle();
echo "Default rectangle:\n";
$r1->show();
echo "\n";

$r2 = new Rectangle(5, 3);
echo "Second rectangle (5 x 3):\n";
$r2->show();

?>
