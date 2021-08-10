<?php
class Square{
  private $side;

  public function __construct($side = 1)
  {
    $this->side = $side;
  }

  public function area(){
    return pow($this->side, 2);
  }

  public function setSide($side){
    $this->side = $side;
  }
}
  
class Rectangle{
  private $width;
  private $length;

  public function __construct($width = 1, $length = 1)
  {
    $this->width = $width;
    $this->length = $length;
  }

  public function area(){
    return $this->width * $this->length;
  }

  public function setWidth($width){
    $this->width = $width;
  }

  public function setLength($length){
    $this->length = $length;
  }
}

class Triangle{
  private $height;
  private $base;
  
  public function __construct($height = 1, $base = 1)
  {
    $this->height = $height;
    $this->base = $base;
  }

  public function area(){
    return ($this->height * $this->base) / 2;
  }

  public function setHeight($height){
    $this->height = $height;
  }

  public function setBase($base){
    $this->base = $base;
  }
}
  
  $squ = new Square();
  $tri = new Triangle();
  $rec = new Rectangle();
  
  if (!empty($_GET['opp'])){
		switch($_GET['opp']){
    case 'squ':
      if(!is_numeric($_GET['side'])){
        echo "Enter Numeric Values only";
        break;
      }
      $squ->setSide($_GET['side']);
      echo $squ->area();
      break;
    case 'tri':
      if(!is_numeric($_GET['base']) || !is_numeric($_GET['height'])){
        echo "Enter Numeric Values only";
        break;
      }
      $tri->setBase($_GET['base']);
      $tri->setHeight($_GET['height']);
      echo $tri->area();
      break;
    case 'rec':
      if(!is_numeric($_GET['width']) || !is_numeric($_GET['length'])){
        echo "Enter Numeric Values only";
        break;
      }
      $rec->setWidth($_GET['width']);
      $rec->setLength($_GET['length']);
      echo $rec->area();
      break;
    default:
      echo 'hacker-man';
      break;
    }
	}
  else
    echo '🤷';
?>