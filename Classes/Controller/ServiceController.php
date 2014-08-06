<?php
namespace Libeo\LboServicesEnLigne\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * ServiceController
 */
class ServiceController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * serviceRepository
	 *
	 * @var \Libeo\LboServicesEnLigne\Domain\Repository\ServiceRepository
	 * @inject
	 */
	protected $serviceRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$services = $this->serviceRepository->findAll();
		$this->view->assign('services', $services);
	}

	/**
	 * action
	 *
	 * @return void
	 */
	public function Action() {
		
	}

}