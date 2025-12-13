<?php

namespace Hubleto\App\Custom\IpInfoTest\Controllers;

use Hubleto\App\Custom\IpInfoTest\Models\IpInfoModel;

class Home extends \Hubleto\Erp\Controller
{

  public function getBreadcrumbs(): array
  {
    return array_merge(parent::getBreadcrumbs(), [
      // ['url' => 'ipinfotest', 'content' => 'IpInfoTest'],
    ]);
  }

  public function prepareView(): void
  {
    parent::prepareView();

    $mIpInfo = $this->getModel(IpInfoModel::class);
    $ips = $mIpInfo->record
      ->prepareReadQuery()
      ->get()
      ->toArray();

    $this->viewParams['now'] = date('Y-m-d H:i:s');
    $this->viewParams['ip'] = $_SERVER['REMOTE_ADDR'];
    $this->viewParams['data'] = $ips;

    $this->setView('@Hubleto:App:Custom:IpInfoTest/Home.twig');
  }
}
