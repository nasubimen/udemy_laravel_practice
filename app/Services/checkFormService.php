<?php

namespace App\Services;


class checkFormService
{

  public static function checkGender($data)
  {
    if ($data->gender === 0) {
      $gender = '男性';
    } else {
      $gender = '女性';
    }

    return $gender;
  }
  public static function checkAge($data)
  {
    if ($data->age === 1) {
      $age = '10代';
    }
    if ($data->age === 2) {
      $age = '20代';
    }
    if ($data->age === 3) {
      $age = '30代';
    }
    if ($data->age === 4) {
      $age = '40代';
    }
    if ($data->age === 5) {
      $age = '50代';
    }
    if ($data->age === 6) {
      $age = '60代';
    }

    return $age;
  }
}
