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

namespace OCA\Gallery\Middleware;

/**
 * Thrown when one of the tests in the "check" middlewares fails
 *
 * @package OCA\Gallery\Middleware
 */
class CheckException extends \Exception {

	/**
	 * Constructor
	 *
	 * @param string $msg the message contained in the exception
	 * @param int $code the HTTP status code
	 */
	public function __construct($msg, $code = 0) {
		\OCP\Server::get(LoggerInterface::class)->error('gallery Exception: ' . $msg . ' (' . $code . ')');
		parent::__construct($msg, $code);
	}

}
