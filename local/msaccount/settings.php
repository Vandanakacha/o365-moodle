<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local Microsoft Account settings.
 * @package    local_msaccount
 * @author Vinayak (Vin) Bhalerao (v-vibhal@microsoft.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright  Microsoft, Inc.
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_msaccount', get_string('pluginname', 'local_msaccount'));
    $ADMIN->add('localplugins', $settings);

    $settings->add(new \local_msaccount\form\adminsetting\redirecturl('local_msaccount/redirect',
                   get_string('redirect', 'local_msaccount'), '', '0'));
    $settings->add(new admin_setting_configtext('local_msaccount/clientid', get_string('clientid', 'local_msaccount'),
                   get_string('clientiddetails', 'local_msaccount'), '', PARAM_ALPHANUMEXT));
    $settings->add(new admin_setting_configtext('local_msaccount/clientsecret', get_string('clientsecret', 'local_msaccount'),
                   get_string('clientsecretdetails', 'local_msaccount'), '', PARAM_ALPHANUMEXT));
}
