<?php
namespace Biancalaura\ComposerPhp;

class Dog extends Wolf
{
    public function talking()
    {
        return 'au au au';
    }

    public function reactPhrase($phrase)
    {
        if($phrase == "Toma comida" || $phrase == "Olá"){
            return 'Abanar o rabo e latir';
        } else {
           return 'Rosnar';
        }
        
    }
    
    public function reactHour($hour, $min)
    {
        if($hour < 12){
            return 'Abanar o rabo';
        } elseif($hour >= 18){
            return 'Ignorar';
        } else {
            return 'Abanar e latir';
        }
        
    }

    public function reactOwner($owner)
    {
      if($owner){
          return 'Abanar o rabo';
      } else {
          return 'Rosnar e Latir';
      }

    }

    public function reactYears($years, $weight)
    {
        if($years < 5){
            if($weight < 10){
                return 'Abanar o rabo';
            } else {
                return 'Latir';
            } if($weight < 10){
                return 'Rosnar';
            } else {
                return 'ignorar';
            }
        }
    }
}