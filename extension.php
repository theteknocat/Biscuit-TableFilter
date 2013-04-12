<?php
/**
 * Extension for easy inclusion of Table Filter JS file
 *
 * @package Extensions
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0
 **/
class TableFilterJs extends AbstractExtension {
	function run() {
		$this->register_js('footer','table_filter.js');
	}
}
?>