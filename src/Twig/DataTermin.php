<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class DataTermin extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('terminKonta', [$this, 'terminKonta'])
        ];

    }

    public function getFunctions()
    {
        return [
            new TwigFunction('panelStyle', [$this, 'panelStyle'])
        ];
    }

    public function terminKonta(\DateTime $dataTermin)
    {
        if ($dataTermin > new \DateTime('+7 days')){

            return $dataTermin->format('Y-m-d H:i');
        }
        elseif ($dataTermin > new \DateTime('+1 days')){

            $nowaData = new \DateTime;

            $termin = $dataTermin->diff($nowaData);
            
            return $termin->format('%a dni') . ". W celu dalszego korzystania z aplikacji należy opłacić abonament!";
        }
        else{   
            
            $nowaData = new \DateTime;

            $termin = $dataTermin->diff($nowaData);
            
            return $termin->format('%H') . " godz. " . $termin->format('%i') . " min. W celu dalszego korzystania z aplikacji opłać abonament!"; 
        }
    }

    public function panelStyle(\DateTime $dataTermin)
    {
        if ($dataTermin < new \DateTime('+7 days')) {
            
            echo '<span class="label label-danger">Uwaga</span>';
        }
        else{

            echo '<span class=""></span>';
        }
 
    }
}