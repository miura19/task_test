<?php

namespace App\Services;


class CheckFormData
{
    public function checkGender($gender)
    {
        if ($gender === 0){
            $gender = "男性";
        } else {
            $gender = "女性";
        }

        return $gender;
    }

    public function checkAge($age)
    {
        if ($age === 1){
            $age = '~19歳';
        }
        if ($age === 2){
            $age = '20~29歳';
        }
        if ($age === 3){
            $age = '30~39歳';
        }
        if ($age === 4){
            $age = '40~49歳';
        }
        if ($age === 5){
            $age = '50~59歳';
        }
        if ($age === 6){
            $age = '60~歳';
        }

        return $age;
    }
}