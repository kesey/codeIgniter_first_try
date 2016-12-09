/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'cfoot\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-fille': '&#xe900;',
		'icon-garcon': '&#xe901;',
		'icon-search': '&#xe986;',
		'icon-trophy': '&#xe99e;',
		'icon-ctrl2': '&#xe42d;',
		'icon-ctrl': '&#xea50;',
		'icon-facebook': '&#xea8c;',
		'icon-facebook3': '&#xea8e;',
		'icon-twitter': '&#xea91;',
		'icon-twitter3': '&#xea93;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
