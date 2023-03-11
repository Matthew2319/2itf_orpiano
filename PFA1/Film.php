<?php

echo 'Credits'."<br>";
echo "<br>";
class Director{ #Parent Class
private string $Name;
private int $ID;

public function setName($Name){
    $this->Name = $Name;
}
public function getName(){
    return $this->Name;
}
public function setID($ID){
    $this->ID = $ID;
}
public function getID(){
    return $this->ID;
}
public function displayinfo($Name, $ID){
    echo $Name;
    echo $ID;
}
}

echo "Dirctors". "<br>";
$HR1 = new Director();
$HR1->setName('Ven Spellberg ');
echo $HR1->getName();
$HR1->setID(00);
echo $HR1->getID() . "<br>";

$HR2 = new Director();
echo $HR2->displayinfo('Adam SeeRight ',01). "<br>";
echo "<br>";





class ScriptWriter extends Director{ #Single Inheritance
private string $Approval;
public int $WH;

public function setApproval($Approval){
    $this->Approval = $Approval;
}
public function getApproval(){
    return $this->Approval;
}
public function displayinfo($Name, $ID){
    echo $Name;
    echo $ID;
}
public function printinfo($Approval){
    echo $Approval;
}


}

echo "ScriptWriters". "<br>";
$HR3 = new ScriptWriter();
$HR3->setName('Weiss Elio ');
echo $HR3->getName();
$HR3->setID(02);
echo $HR3->getID();
$HR3->setApproval(' Script Denied');
echo $HR3->getApproval(). "<br>";

$HR4 = new ScriptWriter();
echo $HR4->displayinfo('Yva Vellan ',03). $HR4->printinfo(' Script Accepted'). "<br>";
echo "<br>";




class Actor extends Director{ #Hierarchical Inheritance
private string $Role;

public function setRole($Role){
    $this->Role = $Role;
}
public function getRole(){
    return $this->Role;
}
public function printAs($Role){
    echo $Role;
}
}

echo "Actors". "<br>";
$HR5 = new Actor();
$HR5->setName('John Blanc ');
echo $HR5->getName();
$HR5->setID(04);
echo $HR5->getID();
$HR5->setRole(' as Bouncer #2');
echo $HR5->getRole(). "<br>";

$HR6 = new Actor();
echo $HR6->displayinfo('Kris Phat ',05). $HR6->printAs(' as Oiram'). "<br>";
echo "<br>";





class Animator extends Actor{ #Multilevel Inheritance
    
}

echo "Animators". "<br>";
$HR7 = new Animator();
$HR7->setName('Jaden Yuki ');
echo $HR7->getName();
$HR7->setID(06);
echo $HR7->getID();
$HR7->setRole(' animated Bouncer #2');
echo $HR7->getRole(). "<br>";

$HR8 = new Animator();
echo $HR8->displayinfo('James Ode ',07). $HR8->printAs(' animated Oiram'). "<br>";
echo "<br>";
?>