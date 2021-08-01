<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class RodzajDokument extends AbstractExtension
{
  public function getFilters()
  {
    return [
      new TwigFilter('rodzajStyleDokument', [$this, 'rodzajStyleDokument']),
      new TwigFilter('kwotaStyleDokument', [$this, 'kwotaStyleDokument']),
      new TwigFilter('rodzajEwidencjaStyleDokument', [$this, 'rodzajEwidencjaStyleDokument']),
      new TwigFilter('kwotaBilansDokument', [$this, 'kwotaBilansDokument'])
    ];
  }

  //Zestawienei miesięczne w kolumnie bilans
  public function kwotaBilansDokument($kwota)
  {
    if ($kwota > 0){
      echo 'Dochód';
    }

    else {
      echo 'Strata';
    }
  }

  //Podsumowanie na stronie głównej
  public function rodzajStyleDokument($rodzaj)
  {
    if ($rodzaj == 'koszt'){
      echo 'class="text-danger"';
    }
  }
  //Podsumowanie na stronie głównej
  public function kwotaStyleDokument($kwota)
  {
    if ($kwota < 0){
      echo 'class="text-danger"';
    }
  }
  //strona główna wykaz dokumentów
  //Podsumowanie na stronie głównej
  public function rodzajEwidencjaStyleDokument($rodzaj)
  {
    if ($rodzaj == 'koszt'){
      echo 'text-danger';
    }
  }


}