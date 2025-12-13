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

      ],
      parent::describeColumns()
    );
  }
}
