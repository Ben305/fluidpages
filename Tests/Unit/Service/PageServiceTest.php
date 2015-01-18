<?php
namespace FluidTYPO3\Fluidpages\Tests\Unit\Service;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Göran Bodenschatz <coding@46halbe.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use FluidTYPO3\Fluidpages\Service\PageService;
use TYPO3\CMS\Core\Tests\UnitTestCase;

/**
 * Class PageServiceTest
 * @package FluidTYPO3\Fluidpages\Tests\Unit\Service
 */
class PageServiceTest extends UnitTestCase {

	/**
	 * @return PageService
	 */
	protected function getPageService() {
		return new PageService();
	}

	/**
	 * @test
	 */
	public function getPageFlexFormSourceWithZeroUidReturnsNull() {
		$this->assertNull($this->getPageService()->getPageFlexFormSource(0));
	}

	/**
	 * @test
	 */
	public function getPageTemplateConfigurationWithZeroUidReturnsNull() {
		$this->assertNull($this->getPageService()->getPageTemplateConfiguration(0));
	}
}
