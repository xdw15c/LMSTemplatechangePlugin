<?php

/*
 * LMS version 1.11-git
 *
 *  (C) Copyright 2001-2017 LMS Developers
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

$layout['pagetitle'] = trans('template change');

$_ACTUALTEMPLATE = ConfigHelper::getConfig('invoices.template_file');
#$_TEMPLATES = ConfigHelper::getConfig('templatechange.templates');

$_TEMPLATES = array(
    "0" => array("id" => '1', "name" => 'standard', "description" => 'bez druku przelewu'),
    "1" => array("id" => '2', "name" => 'FT-0100', "description" => 'z drukiem przelewu'),
);
            if (isset($_GET['settemplate']) && isset($_POST['templatka'])) {
               $templatka = $_POST['templatka'];
               $DB->Execute("UPDATE uiconfig SET value = ? WHERE section = 'invoices' AND var = 'template_file'", array($templatka));
               $SESSION->redirect('?m=templatechange');
            } else {
$SMARTY->assign('actualtemplate', $_ACTUALTEMPLATE);
$SMARTY->assign('templates', $_TEMPLATES);
#$SMARTY->assign('templates', $hosts);
#$SMARTY->assign('hosts', $hosts);
$SMARTY->display('templatechange.html');
            }
