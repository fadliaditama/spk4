<?php  
 // http://cahyadsn.phpindonesia.id/extra/gap.php

 $asam = (Object)[
  'bobot' => 0.6,
  'cf' => 0.6,
  'sf' => 0.4,
  'sub_kriteria' => 
  [
   'Fixed acidity',
   'Volatile acidity',
   'Citric acidity',
   'Ph'
  ]
 ];
 $asam_nilai = [3,3,3,3];
 $asam_tipe = [
  'core',
  'second',
  'second',
  'core'
 ];

 $non_asam = (Object)[
  'bobot' => 0.4,
  'cf' => 0.55,
  'sf' => 0.45,
  'sub_kriteria' => 
  [
   'Residual sugar',
   'Chlorides',
   'Free sulfur dioxide',
   'Sulphates',
   'Alcohol'
  ]
 ];
 $non_asam_nilai = [3,3,3,3,3];
 $non_asam_tipe = [
  'second',
  'core',
  'core',
  'core',
  'second'
 ];

 // // 11 KOLOM
 // // ID (1) NAMA(1) NILAI KRITERIA (9)
 // // CONTROLLER
 // $data_user = $this->M_alt->get_all();
 // $ranking = $this->M_gap->hitung($data_user);
 
 // // CONTROLLER
 // function hitung($data_user)
 // {
 //  //MODEL

 //  $users =  $data_user; 
 //  $raw_asam = [];
 //  $raw_non_asam = [];
 //  foreach ($users as $key => $user) {
 //   // $nama_user[$key] = $user->nama;
 //   $data_user = array($user->Fixed, $user->asam2, $user->asam3, $user->asam4);
 //   array_push($raw_asam, $data_user);

 //   $data_user = array($user->non_asam1, $user->non_asam2, $user->non_asam3, $user->non_asam4, $user->non_asam5);
 //   array_push($raw_non_asam, $data_user);
 //  }

 //  // sisa kodingan...
 //  return $rank;
 // }
 

 

 $raw_asam = [
  [11.6, 0.58, 0.66, 3.25],
  [10.5, 0.59, 0.49, 3.3],
  [7.4, 0.7, 0,  3.51],
  [11.2, 0.28, 0.56, 3.16],
  [7.3, 0.65, 0,  3.39],
  [7.9, 0.35, 0.46, 3.35]

 ];
 $raw_non_asam = [
  [2.2, 0.074, 10, 0.57, 9],
  [2.1, 0.07, 14, 0.56, 9.6],
  [1.9, 0.076, 11, 0.56, 9.4],
  [1.9, 0.075, 17, 0.58, 9.8],
  [1.2, 0.065, 15, 0.47, 10],
  [3.6, 0.078, 15, 0.86, 12.8]

 ];

 foreach ($raw_asam as $key => $value) {
  foreach ($value as $key2 => $value2) {
   if($key2 == 0)
   {
    if(13 <= $value2 && $value2 <= 16)
     $alt_asam[$key][$key2] = 1;
    else if(9 <= $value2 && $value2 <= 13)
     $alt_asam[$key][$key2] = 2;
    else if(5 <= $value2 && $value2 <= 9)
     $alt_asam[$key][$key2] = 3;
    else if(0 <= $value2 && $value2 <= 5)
     $alt_asam[$key][$key2] = 4;
   }
   else if($key2 == 1)
   {
    if(1.6 <= $value2 && $value2 <= 2)
     $alt_asam[$key][$key2] = 1;
    else if(1.1 <= $value2 && $value2 <= 1.6)
     $alt_asam[$key][$key2] = 2;
    else if(0.5 <= $value2 && $value2 <= 1.1)
     $alt_asam[$key][$key2] = 3;
    else if(0 <= $value2 && $value2 <= 0.5)
     $alt_asam[$key][$key2] = 4;
   }
   else if($key2 == 2)
   {
    if(0.76 <= $value2 && $value2 <= 1)
     $alt_asam[$key][$key2] = 1;
    else if(0.51 <= $value2 && $value2 <= 0.76)
     $alt_asam[$key][$key2] = 2;
    else if(0.26 <= $value2 && $value2 <= 0.51)
     $alt_asam[$key][$key2] = 3;
    else if(0 <= $value2 && $value2 <= 0.26)
     $alt_asam[$key][$key2] = 4;
   }
   else if($key2 == 3)
   {
    if(0 <= $value2 && $value2 <= 1)
     $alt_asam[$key][$key2] = 1;
    else if(1 <= $value2 && $value2 <= 6)
     $alt_asam[$key][$key2] = 2;
    else if(6 <= $value2 && $value2 <= 7)
     $alt_asam[$key][$key2] = 3;
    else if(7 <= $value2 && $value2 <= 14)
     $alt_asam[$key][$key2] = 4;
   }
  }
 }

 foreach ($raw_non_asam as $key => $value) {
  foreach ($value as $key2 => $value2) {
   if($key2 == 0)
   {
    if(13 <= $value2 && $value2 <= 16)
     $alt_non_asam[$key][$key2] = 1;
    else if(9 <= $value2 && $value2 <= 13)
     $alt_non_asam[$key][$key2] = 2;
    else if(5 <= $value2 && $value2 <= 9)
     $alt_non_asam[$key][$key2] = 3;
    else if(0 <= $value2 && $v