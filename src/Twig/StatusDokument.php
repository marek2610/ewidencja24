<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class StatusDokument extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('statusStyle', [$this, 'statusStyle'])
        ];
    }

    public function statusStyle($status)
    {
        if ($status === 'delete') {
            
            echo 'danger';
        }
        else{

            echo 'success';
        }
 
    }
}