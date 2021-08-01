<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class StatusMessage extends AbstractExtension
{
  public function getFilters()
  {
    return [
      new TwigFilter('statusStyleMessage', [$this, 'statusStyleMessage']),
      new TwigFilter('statusStyleOpis', [$this, 'statusStyleOpis']),
    ];
  }

  public function statusStyleMessage(bool $status)
  {
    if ($status == false) {

      echo 'danger';

    }
    else {

      echo 'default';
      
    }
  }

  public function statusStyleOpis($status)
  {
    if ($status == false) {

      echo 'ZAMKNIĘTE';

    }
    else {

      echo 'NOWA';
      
    }
  }
}