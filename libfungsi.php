<?php

function kelulusan($nilai_akhir)
{
  if ($nilai_akhir > 55) {
    return 'LULUS';
  } else {
    return 'TIDAK LULUS';
  }
}

function grade($nilai_akhir)
{
  if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
    return 'E';
  } else if ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
    return 'D';
  } else if ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
    return 'C';
  } else if ($nilai_akhir >= 60 && $nilai_akhir <= 84) {
    return 'B';
  } else if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    return 'A';
  }
}

function predikat($grade)
{
  switch ($grade) {
    case 'A':
      return 'Sangat Memuaskan';
      break;
    case 'B':
      return 'Memuaskan';
      break;
    case 'C':
      return 'Cukup';
      break;
    case 'D':
      return 'Kurang';
      break;
    case 'E':
      return 'Sangat Kurang';
      break;
    default:
      return 'Tidak Ada';
      break;
  }
}
