<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Fabian Eisele 2012 
 * @author     Fabian Eisele 
 * @package    photoalbums2 - Language pack 
 * @license    LGPL 
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['pa2Album'] = array('Select photoalbum', 'Please select your favourite album.');

$GLOBALS['TL_LANG']['tl_module']['pa2PhotosTemplate'] = array('Photo Layout', 'Please choose here the layout of the photos.');
$GLOBALS['TL_LANG']['tl_module']['pa2NumberOfPhotos'] = array('Total number of photos', 'Here you can specify the total number of photos. Enter 0 to display all.');
$GLOBALS['TL_LANG']['tl_module']['pa2PhotosPerPage'] = array('Photos per Page', 'The number of photos per page. Enter 0 to disable the automatic page break.');
$GLOBALS['TL_LANG']['tl_module']['pa2PhotosShowHeadline'] = array('Show the module title in the photo view', 'Set this checkbox to display the module title in the photo view.');
$GLOBALS['TL_LANG']['tl_module']['pa2PhotosShowTitle'] = array('Show the album title in the photo view', 'Set this checkbox to display the module title in the photo view.');
$GLOBALS['TL_LANG']['tl_module']['pa2PhotosShowTeaser'] = array('Teaser in Foto-Ansicht anzeigen', 'Setzen Sie dieses Häkchen, um den Teaser in der Foto-Ansicht anzuzeigen.');

$GLOBALS['TL_LANG']['tl_module']['pa2PhotosImageSize'] = array('Photo view image dimensions', 'Here you can set the image dimensions and the resize mode.');
$GLOBALS['TL_LANG']['tl_module']['pa2PhotosImageMargin'] = array('Photo view image margin', 'Here you can enter the top, right, bottom and left margin and the unit.');
$GLOBALS['TL_LANG']['tl_module']['pa2PhotosPerRow'] = array('Photos per row', 'Please enter the number of photos to display per row');

$GLOBALS['TL_LANG']['tl_module']['pa2PhotosMetaFields'] = array('Foto-Ansicht Meta Felder', 'Please select the meta fields to display in the photo view.');

$GLOBALS['TL_LANG']['tl_module']['pa2TimeFilter'] = array('Time filter', 'Here you have the option of the photo albums for a period previous filter.');
$GLOBALS['TL_LANG']['tl_module']['pa2TimeFilterStart'] = array('Period of', 'Enter the starting value of the period to be filtered. Example, if you enter 10 days, so the albums of the past 10 days are shown in the frontend. To start from today, enter the number "0".');
$GLOBALS['TL_LANG']['tl_module']['pa2TimeFilterEnd'] = array('Period up', 'Enter here the final value of the period to be filtered. For example, you should enter in the first field 10 days and in this field 5 days, the albums are displayed in the period before 10 days from 5 days before the front end. To add to the end of the period to today, enter the number "0".');

$GLOBALS['TL_LANG']['tl_module']['pa2Teaser'] = array('Teaser', 'Hier können Sie einen Teaser definieren. Achten Sie darauf, dass der Teaser nur angezeigt wird, wenn Sie im oberen Teil des Formulars die Ausgabe aktiviert haben.');


/**
 * Reference
 */
$GLOBALS['TL_LANG']['tl_content']['config_legend'] = 'Configuration';
$GLOBALS['TL_LANG']['tl_module']['pa2Template_legend'] = 'Template settings';
$GLOBALS['TL_LANG']['tl_module']['pa2Image_legend'] = 'Photo settings';
$GLOBALS['TL_LANG']['tl_module']['pa2Meta_legend'] = 'Meta settings';
$GLOBALS['TL_LANG']['tl_module']['pa2TimeFilter_legend'] = 'Time filter settings';
$GLOBALS['TL_LANG']['tl_module']['pa2Other_legend'] = 'Other';

?>