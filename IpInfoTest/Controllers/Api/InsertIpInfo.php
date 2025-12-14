<?php

namespace Hubleto\App\Custom\IpInfoTest\Controllers\Api;

use Hubleto\Erp\Controller;
use Hubleto\App\Custom\IpInfoTest\Models\IpInfoModel;

class InsertIpInfo extends Controller
{
  public function index(): void
  {
    $input = json_decode(file_get_contents('php://input'), true);

    if (!$input) {
      $this->sendJson(['success' => false, 'error' => 'Nesprávny JSON']);
      return;
    }


    $model = $this->getModel(IpInfoModel::class);

    $record = $model->record->recordCreate($data);

    echo json_encode([
      'success' => true,
      'id' => $record->id ?? null,
    ]);

    exit;
  }
}
