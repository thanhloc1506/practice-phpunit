<?php
declare(strict_types=1);

require_once (__DIR__ . '/../../../vendor/autoload.php');
require_once (__DIR__ . '/../../../src/04_practices/Constant.php');

use exp\src\practice\PixelStudio;
use PHPUnit\Framework\TestCase;

class PixelStudioTest extends TestCase {

    public function provideSeasonData() {
        return [
            [1, [
                'Game A in PixelStudio',
                'Game B in PixelStudio'
            ]],
            [2, []],
            [3, []],
            [4, []],
        ];
    }

    /**
     * @dataProvider provideSeasonData
     */
    public function testGetSaleGamesReturnCorrectData($season, $expected_result) {
        //TODO: Test function getSaleGames() will return correct data
        //Require: Use data provider
        $pixelStudio = new PixelStudio();

        $this->assertEquals($expected_result, $pixelStudio->getSaleGames($season));
    }

    public function testGetStudioName() {
        //TODO: Test function getStudioName()
        $pixelStudio = new PixelStudio();

        $expected_result = 'PixelStudio';

        $this->assertEquals($expected_result, $pixelStudio->getStudioName());
    }
}
