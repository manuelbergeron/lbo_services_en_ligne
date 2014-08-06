<?php
namespace Libeo\LboServicesEnLigne\Domain\Model;


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
 * Service
 */
class Service extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * titre
	 *
	 * @var string
	 */
	protected $titre = '';

	/**
	 * url
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * type
	 *
	 * @var integer
	 */
	protected $type = 0;

	/**
	 * Returns the titre
	 *
	 * @return string $titre
	 */
	public function getTitre() {
		return $this->titre;
	}

	/**
	 * Sets the titre
	 *
	 * @param string $titre
	 * @return void
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
	}

	/**
	 * Returns the url
	 *
	 * @return string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the type
	 *
	 * @return integer $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

}