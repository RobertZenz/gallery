<?php
/**
 * Nextcloud - Gallery
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Olivier Paroz <galleryapps@oparoz.com>
 *
 * @copyright Olivier Paroz 2017
 */

namespace OCA\Gallery\Service;

use \Psr\Log\LoggerInterface;

/**
 * Thrown when the service cannot reply to a request
 */
class ServiceException extends \Exception {

	/**
	 * Constructor
	 *
	 * @param string $msg the message contained in the exception
	 */
	public function __construct($msg) {
		\OCP\Server::get(LoggerInterface::class)->error('gallery Exception: ' . $msg);
		parent::__construct($msg);
	}
}
