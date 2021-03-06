<?php
declare(strict_types=1);

require_once(__DIR__ . '/../../../vendor/autoload.php');
require_once(__DIR__ . '/../../../src/04_practices/Constant.php');

use exp\src\practice\GameStudioService;
use exp\src\practice\MonicaStudio;
use exp\src\practice\PixelStudio;
use PHPUnit\Framework\TestCase;


class GameStudioServiceTest extends TestCase
{
    public function testGetSaleGamesWillCallToStudioListWithCorrectParameters() {
        //TODO: Test function getSaleGames() will call to studios with correct parameter

        //HINT: fake $studio_list
        $gameStudioService = $this->getMockBuilder(GameStudioService::class)
                        ->getMock();

        $gameStudioService->expects($this->once())->method('getSaleGames')->with($this->equalTo(1));

        $gameStudioService->getSaleGames(1);
    }

    public function testGetSaleGamesWillReturnCorrectData() {
        //TODO: Test function getSaleGames() will return data that returned from studios

        //HINT: fake $studio_list returned data & check it
        $returnedData = [
            'Game X in MonicaStudio',
            'Game Y in MonicaStudio'
        ];

        $gameStudioService = $this->getMockBuilder(GameStudioService::class)
                                ->getMock();

        $gameStudioService->method('getSaleGames')
                        ->willReturn($returnedData);

        $this->assertEquals($returnedData, $gameStudioService->getSaleGames(1));
        
    }

    public function testNotifyNewCampaignWillUpdateStudioList()
    {
        //TODO: Test function notifyNewCampaign() will call to function updateStudioList()
        $gameStudioServiceMock = $this->getMockBuilder(GameStudioService::class)
                                    ->setMethods(['updateStudioList'])
                                    ->getMock();
        $gameStudioServiceMock->expects($this->once())
                            ->method('updateStudioList');

        $gameStudioServiceMock->notifyNewCampaign();
    }

    public function testUpdateStudioListWillThrowError() {
        //TODO: Test function updateStudioList() will throw error as default
        $gameStudioService = new GameStudioService();

        $expected_exception = 'FAKE ERROR: Update Studio List';

        $this->expectExceptionMessage($expected_exception);

        $gameStudioService->updateStudioList();

    }
}
