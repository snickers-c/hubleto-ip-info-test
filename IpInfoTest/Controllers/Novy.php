<?php

namespace Hubleto\App\Custom\IpInfoTest\Controllers;

class Novy extends \Hubleto\Erp\Controller
{

  public function getBreadcrumbs(): array
  {
    return array_merge(parent::getBreadcrumbs(), [
      ['url' => 'ipinfotest', 'content' => 'IpInfoTest'],
    ]);
  }

  public function prepareView(): void
  {
    parent::prepareView();
    $this->viewParams['ip'] = $_SERVER['REMOTE_ADDR'];
    $this->setView('@Hubleto:App:Custom:IpInfoTest/Novy.twig');
  }
}
