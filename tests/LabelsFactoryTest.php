<?php
/**
 * This file is part of pdflabels.
 *
 * Copyright (c) 2014 Hannes Forsgård
 *
 * pdflabels is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * pdflabels is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with pdflabels.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace ledgr\pdflabels;

class LabelsFactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateStd()
    {
        $labels = LabelsFactory::createStd();
        $this->assertEquals(3, $labels->getNrOfCols());
    }

    public function testCreateHama50450()
    {
        $labels = LabelsFactory::createHama50450();
        $this->assertEquals(24, $labels->getNrOfCellsPerPage());
    }
}
