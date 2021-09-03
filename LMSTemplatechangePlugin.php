<?php

/*
 *  LMS version 1.11-git
 *
 *  Copyright (C) 2001-2015 LMS Developers
 *
 *  Please, see the doc/AUTHORS for more information about authors!
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License Version 2 as
 *  published by the Free Software Foundation.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307,
 *  USA.
 *
 *  $Id$
 */

/**
 * LMSTemplatechangePlugin
 *
 * @author Grzegorz Cichowski <gc@ptlanet.pl>
 */
class LMSTemplatechangePlugin extends LMSPlugin {
	const plugin_directory_name = 'LMSTemplatechangePlugin';
	const PLUGIN_NAME = 'Templatechange';
	const PLUGIN_DESCRIPTION = 'Template changing';
	const PLUGIN_AUTHOR = 'Grzegorz Cichowski &lt;gc@ptlanet.pl&gt;';

	public function registerHandlers() {
		$this->handlers = array(
			'smarty_initialized' => array(
				'class' => 'TemplatechangeInitHandler',
				'method' => 'smartyInit'
			),
            'modules_dir_initialized' => array(
                'class' => 'TemplatechangeInitHandler',
                'method' => 'ModulesDirInit',
            ),
            'menu_initialized' => array(
                'class' => 'TemplatechangeInitHandler',
                'method' => 'menuInit'
            ),
            'access_table_initialized' => array(
                'class' => 'TemplatechangeInitHandler',
                'method' => 'accessTableInit'
            ),
		);
	}
}

?>
