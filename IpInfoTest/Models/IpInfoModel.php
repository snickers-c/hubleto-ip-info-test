<?php

namespace Hubleto\App\Custom\IpInfoTest\Models;

use Hubleto\Erp\Model;
use Hubleto\Framework\Db\Column\Varchar;

class IpInfoModel extends Model
{


  public string $table = 'favorite_ips';
  public string $recordManagerClass = RecordManagers\IpInfoManager::class;


  public function describeColumns(): array
  {
    return array_merge(
      [
        'status' => (new Varchar($this, 'status')),
        'continent' => (new Varchar($this, 'continent')),
        'country' => (new Varchar($this, 'country')),
        'country_code' => (new Varchar($this, 'country Code')),
        'region_name' => (new Varchar($this, 'region Name')),
        'city' => (new Varchar($this, 'city')),
        'zip' => (new Varchar($this, 'zip')),
        'lat' => (new Varchar($this, 'lat')),
        'lon' => (new Varchar($this, 'lon')),
        'timezone' => (new Varchar($this, 'timezone')),
        'currency' => (new Varchar($this, 'currency')),
        'isp' => (new Varchar($this, 'isp')),
        'org' => (new Varchar($this, 'org')),
        'as' => (new Varchar($this, 'as')),
        'reverse' => (new Varchar($this, 'reverse')),
        'mobile' => (new Varchar($this, 'mobile')),
        'proxy' => (new Varchar($this, 'proxy')),
        'hosting' => (new Varchar($this, 'hosting')),
        'ip' => (new Varchar($this, 'ip')),
        'cached' => (new Varchar($this, 'cached')),
      ],
      parent::describeColumns()
    );
  }
}
