<?php
class Player
{
  public $hp = 10000;
  public $mp = 5000;
  public $weapon;
  public $armor;
  public $skill;
  public function useSkill($skillName, $mpCost)
  {
    $this->skill = $skillName;
    $this->mp = $this->mp - $mpCost;

    return "menggunakan skill $this->skill menggunakan mp sebanyak $mpCost sisa mp $this->mp";
  }
  public function takeDamage($damage)
  {
    $this->hp = $this->hp - $damage;
    return "hp -$damage, sisa hp = $this->hp";
  }
  public function useWeapon($weapon)
  {
    $this->weapon = $weapon;
    return "menggunakan $weapon";
  }
}
