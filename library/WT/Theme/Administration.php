<?php namespace WT\Theme;
// webtrees: Web based Family History software
// Copyright (C) 2014 webtrees development team.
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA
use WT_I18N;

/**
 * Class Administration - The admin theme.
 */
class Administration extends BaseTheme {
	/** {@inheritdoc} */
	protected function stylesheets() {
		return array(
			WT_BOOTSTRAP_CSS_URL,
			WT_DATATABLES_BOOTSTRAP_CSS_URL,
			WT_FONT_AWESOME_CSS_URL,
			$this->cssUrl() . 'style.css',
		);
	}

	/** {@inheritdoc} */
	public function cssUrl() {
		return 'themes/_administration/css-1.6.2/';
	}

	/** {@inheritdoc} */
	protected function favicon() {
		// Use the default webtrees favicon
		return '<link rel="icon" href="favicon.ico" type="image/x-icon">';
	}

	/** {@inheritdoc} */
	protected function footerContent() {
		return '';
	}

	/** {@inheritdoc} */
	public function hookFooterExtraJavascript() {
		return
			'<script src="' . WT_BOOTSTRAP_JS_URL . '"></script>' .
			'<script src="' . WT_JQUERY_DATATABLES_URL . '"></script>' .
			'<script src="' . WT_DATATABLES_BOOTSTRAP_JS_URL . '"></script>' .
			'<script src="' . WT_JQUERY_COLORBOX_URL . '"></script>' .
			'<script src="' . WT_JQUERY_WHEELZOOM_URL . '"></script>' .
			'<script>' .
			'activate_colorbox();' .
			'jQuery.extend(jQuery.colorbox.settings, {' .
			' width: "75%",' .
			' height: "75%",' .
			' transition: "none",' .
			' slideshowStart: "' . WT_I18N::translate('Play') . '",' .
			' slideshowStop: "' . WT_I18N::translate('Stop') . '",' .
			' title: function() { return jQuery(this).data("title"); }' .
			'});' .
			'</script>';
	}

	/** {@inheritdoc} */
	public function themeId() {
		return '_administration';
	}

	/** {@inheritdoc} */
	public function themeName() {
		return 'administration';
	}
}
