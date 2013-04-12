<?php
/**
 * Extension for easy inclusion of Table Filter JS file
 *
 * @package Extensions
 * @subpackage TableFilter
 * @author Peter Epp
 * @copyright Copyright (c) 2009 Peter Epp (http://teknocat.org)
 * @license GNU Lesser General Public License (http://www.gnu.org/licenses/lgpl.html)
 * @version 2.0 $Id: extension.php 13982 2011-08-08 18:51:55Z teknocat $
 **/
class TableFilterJs extends AbstractExtension {
	function run() {
		$this->register_js('footer','table_filter.js');
	}
}
?>