<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class StatusUser extends AbstractExtension
{
  public function getFunctions()
  {
    return [
      new TwigFunction('statusTerminStyle', [$this, 'statusTerminStyle']),
      new TwigFunction('statusOpisStyle', [$this, 'statusOpisStyle']),
    ];
  }

  public function statusTerminStyle(\DateTime $dataTermin)
  {
    if ($dataTermin > new \DateTime('+7 days')) {

      echo 'success';
    } elseif ($dataTermin < new \DateTime()) {

      echo 'danger';
    } else {

      echo 'warning';
    }
  }
  
  public function statusOpisStyle(\DateTime $dataTermin)
  {
    if ($dataTermin > new \DateTime('+7 days')) {

      echo 'OPŁACONY';

      
    } elseif ($dataTermin < new \DateTime()) {

      echo 'BRAK DOSTĘPU';
    } else {

      echo 'OPŁATA';
      
    }
  }

}