<?php
declare(strict_types=1);

require_once (__DIR__ . '/../../../vendor/autoload.php');
require_once (__DIR__ . '/../../../src/04_practices/Constant.php');

use exp\src\practice\MonicaStudio;
use PHPUnit\Framework\TestCase;

class MonicaStudioTest extends TestCase {

    public function provideSeasonData() {
        return [
            [1, []],
            [2, []],
            [3, []],
            [4, [
                'Game X in MonicaStudio',
                'Game Y in MonicaStudio'
            ]],
        ];
    }

    /**
     * @dataProvider provideSeasonData
     */
    public function testGetSaleGamesReturnCorrectData($season, $expected_result) {
        //TODO: Test function getSaleGames() will return correct data
        //Require: Use data provider
        $monicaStudio = new MonicaStudio();

        $this->assertEquals($expected_result, $monicaStudio->getSaleGames($season));
    }

    public function testGetStudioName() {
        //TODO: Test function getStudioName()
        $monicaStudio = new MonicaStudio();

        $expected_result = 'Santa Monica Studio';

        $this->assertEquals($expected_result, $monicaStudio->getStudioName());
    }
}
