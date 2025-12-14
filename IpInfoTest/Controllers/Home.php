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

    //natvrdo pridane pre učel zobrazenia dát
    $mIpInfo->record->recordCreate([
      'status' => 'test',
      'continent' => 'test',
      'country' => 'test',
      'country_code' => 'test',
      'region_name' => 'test',
      'city' => 'test',
      'zip' => 'test',
      'lat' => 'test',
      'lon' => 'test',
      'timezone' => 'test',
      'currency' => 'test',
      'isp' => 'test',
      'org' => 'test',
      'as' => 'test',
      'reverse' => 'test',
      'mobile' => 'test',
      'proxy' => 'test',
      'hosting' => 'test',
      'ip' => 'test',
      'cached' => 'test',
    ]);

    $this->viewParams['now'] = date('Y-m-d H:i:s');
    $this->viewParams['ip'] = $_SERVER['REMOTE_ADDR'];
    $this->viewParams['data'] = $ips;

    $this->setView('@Hubleto:App:Custom:IpInfoTest/Home.twig');
  }
}
