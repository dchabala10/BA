<?php

class Cone {
 	 
  	const FLAV1 = 'Chocolate';
  	const FLAV2 = 'Vanilla';
  	const FLAV3 = 'Strawberry';
  	const FLAV4 = 'Mint';
  	const FLAV5	= 'Superman';


	public  $setScoops;
	private $typeDessert = "Waffle Cone";

    public function availableFlavors(){
        return "Our flavors, you may choose up to two: " . Cone::FLAV1 . ", " . Cone::FLAV2 . ", " . Cone::FLAV3 . ", " .
        Cone::FLAV4 . ", " . Cone::FLAV5 . "<br><br>";
    }

	public function getTypeDessert(){
		return "Type of Dessert: " . $this->typeDessert . "<br>";
	}

//	public function getFirstFlavor(){
//        return "Your first flavor: " . Cone::FLAV1 . "<br>";
//
//    public function getScoops(){
//
//        }
//
//  	}
//  	public function getSecFlavor(){
//        return "Your second flavor: " . Cone::FLAV2 . "<br><br>";
//	}

	
} // Cone

$icCone = new Cone;
echo $icCone->getTypeDessert();
echo $icCone->availableFlavors();
//echo $icCone->getFirstFlavor();
//echo $icCone->getSecFlavor();

class Milkshake{


    const FLAV1 = 'Chocolate';
    const FLAV2 = 'Vanilla';
    const FLAV3 = 'Strawberry';
    const FLAV4 = 'Mint';
    const FLAV5 = 'Superman';

    const MILK1 = 'Skim';
    const MILK2 = 'Two Percent';
    const MILK3 = 'Whole';



    private $typeDessert = 'Milkshake Cup';
    private $discount = 5;

    public function availableFlavors(){
        return "Our flavors, choose one: " . Milkshake::FLAV1 . ", " . Milkshake::FLAV2 . ", " . Milkshake::FLAV3 . ", " .
        Milkshake::FLAV4 . ", " . Milkshake::FLAV5 . "<br>";
    }

    public function getMilkType(){
        return "Our types of Milk: " . Milkshake::MILK1 . ", " .  Milkshake::MILK2 . ", " .  Milkshake::MILK3 . "<br>";
    }

    public function getTypeDessert(){
        return "Type of Dessert: " . $this->typeDessert . "<br>";
    }

    public function getDiscount(){
        return "You received a discount of ". $this->discount . "%<br><br>";
    }

//    public static function getFlavor(){
//        return "Choose one flavor: " . Cone::FLAV1 . "<br><br>";
//
//    }



}//Milkshake

$icMilkshake = new Milkshake;
echo $icMilkshake->getTypeDessert();
echo $icMilkshake->availableFlavors();
echo $icMilkshake->getMilkType();
echo $icMilkshake->getDiscount();
//echo $icMilkshake->getFlavor();


class Float {

    const FLAV1 = 'Chocolate';
    const FLAV2 = 'Vanilla';
    const FLAV3 = 'Strawberry';
    const FLAV4 = 'Mint';
    const FLAV5	= 'Superman';

    const SODA1 = 'Coke';
    const SODA2 = 'Sprite';
    const SODA3 = 'Fanta';


    private $typeDessert = "Float";
    private $discount = 5;

    public function getTypeDessert(){
        return "Type of Dessert: " . $this->typeDessert . "<br>";
    }

    public function availableFlavors(){
        return "Choose as many flavors as you would like: " . Float::FLAV1 . ", " . Float::FLAV2 . ", " . Float::FLAV3 . ", " .
        Float::FLAV4 . ", " . Float::FLAV5 . "<br>";
    }

    public function getSoda(){
        return "Choose a soda: " . Float::SODA1 . ", " . Float::SODA2 . ", " . Float::SODA3 . "<br>";
    }

    public function getDiscount(){
        return "You received a discount of " . $this->discount . "%<br><br>";
    }


} //Float

$icFloat = new Float();
echo $icFloat->getTypeDessert();
echo $icFloat->availableFlavors();
echo $icFloat->getSoda();
echo $icFloat->getDiscount();




