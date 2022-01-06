<?php

// Date/Time
//  time()
//  date()
//  mktime()
//  strtotime()

// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH Time
// detik yg telah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l, d M Y", time() + 60*60*24*10 );

// mktime
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l, d M Y", mktime(0,0,0,1,16,2005));

// strtotime()
echo date("l, d M Y", strtotime("16 january 2005"));



?>