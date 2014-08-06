<?php
namespace Libeo\LboServicesEnLigne\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
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

/**
 * Test case for class Libeo\LboServicesEnLigne\Controller\ServiceController.
 *
 */
class ServiceControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Libeo\LboServicesEnLigne\Controller\ServiceController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Libeo\\LboServicesEnLigne\\Controller\\ServiceController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllServicesFromRepositoryAndAssignsThemToView() {

		$allServices = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$serviceRepository = $this->getMock('Libeo\\LboServicesEnLigne\\Domain\\Repository\\ServiceRepository', array('findAll'), array(), '', FALSE);
		$serviceRepository->expects($this->once())->method('findAll')->will($this->returnValue($allServices));
		$this->inject($this->subject, 'serviceRepository', $serviceRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('services', $allServices);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}
}
