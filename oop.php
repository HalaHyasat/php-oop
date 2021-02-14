<?php
class student {
  public $Id;
  public $Name;
  public $Email;
  public $Mobile_number;
  public function __construct($Id, $Name, $Email, $Mobile_number) {
    $this->Id = $Id;
    $this->Name = $Name;
    $this->Email = $Email;
    $this->Mobile_number = $Mobile_number;
  }
}

class teacher extends student {
  public $Salary;
  public $Subjects;
  public function __construct($Id, $Name, $Email, $Mobile_number, $Salary, $Subjects) {
    $this->Id = $Id;
    $this->Name = $Name;
    $this->Email = $Email;
    $this->Mobile_number = $Mobile_number;
    $this->Salary = $Salary;
    $this->Subjects = $Subjects;
  }
}

$Teacher  = new teacher('96432', 'Sadi', 'adam@orange.com', '0777788888', '800', ['English', 'Arabic', 'Math', 'Science']);
echo $Teacher -> Id;
echo ', ';
echo $Teacher -> Name;
echo ', ';
echo $Teacher -> Email;
echo ', ';
echo $Teacher -> Mobile_number;
echo ', ';
echo $Teacher -> Salary;
echo ', ';
print_r($Teacher -> Subjects);
echo '<br>';

$Student = new student ('123443', 'Sara', 'eva@orange.com', '0777777777');
echo $Student -> Id;
echo ', ';
echo $Student -> Name;
echo ', ';
echo $Student -> Email;
echo ', ';
echo $Student -> Mobile_number;



?>