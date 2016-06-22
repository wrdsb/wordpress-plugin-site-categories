<?php
/*
* Plugin Name: WRDSB Syndication Categories
* Plugin URI: https://github.com/wrdsb/wordpress-plugin-syndication-categories
* Description: Categories applied to content to indicate syndication targets
* Author: WRDSB
* Author URI: https://github.com/wrdsb
* Version: 0.0.1
* License: GNU AGPLv3
* GitHub Plugin URI: wrdsb/wordpress-plugin-syndication-categories
* GitHub Branch: master
*/

if (!defined('WRDSB_SYNDICATION_CATEGORIES_VERSION'))
	define('WRDSB_SYNDICATION_CATEGORIES_VERSION', '0.0.1');

function wrdsb_syndication_categories_check_version() {
	if (WRDSB_SYNDICATION_CATEGORIES_VERSION !== get_option('wrdsb_syndication_categories_version'))
		wrdsb_syndication_categories_activation();
}
add_action('plugins_loaded', 'wrdsb_syndication_categories_check_version');

register_activation_hook(__FILE__, 'wrdsb_syndication_categories_activation');

function wrdsb_syndication_categories_activation() {
	syndication_categories_taxonomy();
	wp_insert_term('Staff Intranet','syndication_categories',
		array(
			'description' => 'Staff Intranet',
			'slug'        => 'staff',
		)
	);
	wp_insert_term('WCSSAA','syndication_categories',
		array(
			'description' => 'WCSSAA',
			'slug'        => 'wcssaa',
		)
	);
	wp_insert_term('All Schools','syndication_categories',
		array(
			'description' => 'All schools',
			'slug'        => 'schools-all',
		)
	);
	$parent_term = term_exists( 'schools-all', 'syndication_categories' );
	$parent_term_id = $parent_term['term_id'];
	wp_insert_term('Elementary Schools','syndication_categories',
		array(
			'description' => 'Elementary Schools',
			'slug'        => 'schools-elementary',
			'parent'      => $parent_term_id,
		)
	);
	$parent_term = term_exists( 'schools-elementary', 'syndication_categories' );
	$parent_term_id = $parent_term['term_id'];
	wp_insert_term('ABE','syndication_categories',
		array(
			'description' => 'ABE',
			'slug'        => 'schools-abe',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('ALP','syndication_categories',
		array(
			'description' => 'ALP',
			'slug'        => 'schools-alp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('ARK','syndication_categories',
		array(
			'description' => 'ARK',
			'slug'        => 'schools-ark',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('AVE','syndication_categories',
		array(
			'description' => 'AVE',
			'slug'        => 'schools-ave',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('AYR','syndication_categories',
		array(
			'description' => 'AYR',
			'slug'        => 'schools-ayr',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('BDN','syndication_categories',
		array(
			'description' => 'BDN',
			'slug'        => 'schools-bdn',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('BGD','syndication_categories',
		array(
			'description' => 'BGD',
			'slug'        => 'schools-bgd',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('BLR','syndication_categories',
		array(
			'description' => 'BLR',
			'slug'        => 'schools-blr',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('BRE','syndication_categories',
		array(
			'description' => 'BRE',
			'slug'        => 'schools-bre',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('BRP','syndication_categories',
		array(
			'description' => 'BRP',
			'slug'        => 'schools-brp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CDC','syndication_categories',
		array(
			'description' => 'CDC',
			'slug'        => 'schools-cdc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CED','syndication_categories',
		array(
			'description' => 'CED',
			'slug'        => 'schools-ced',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CHA','syndication_categories',
		array(
			'description' => 'CHA',
			'slug'        => 'schools-cha',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CLE','syndication_categories',
		array(
			'description' => 'CLE',
			'slug'        => 'schools-cle',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CNC','syndication_categories',
		array(
			'description' => 'CNC',
			'slug'        => 'schools-cnc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CNW','syndication_categories',
		array(
			'description' => 'CNW',
			'slug'        => 'schools-cnw',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('COH','syndication_categories',
		array(
			'description' => 'COH',
			'slug'        => 'schools-coh',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CON','syndication_categories',
		array(
			'description' => 'CON',
			'slug'        => 'schools-con',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('COR','syndication_categories',
		array(
			'description' => 'COR',
			'slug'        => 'schools-cor',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CRE','syndication_categories',
		array(
			'description' => 'CRE',
			'slug'        => 'schools-cre',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CRL','syndication_categories',
		array(
			'description' => 'CRL',
			'slug'        => 'schools-crl',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CTR','syndication_categories',
		array(
			'description' => 'CTR',
			'slug'        => 'schools-ctr',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('DOO','syndication_categories',
		array(
			'description' => 'DOO',
			'slug'        => 'schools-doo',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('DPK','syndication_categories',
		array(
			'description' => 'DPK',
			'slug'        => 'schools-dpk',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('ELG','syndication_categories',
		array(
			'description' => 'ELG',
			'slug'        => 'schools-elg',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('ELZ','syndication_categories',
		array(
			'description' => 'ELZ',
			'slug'        => 'schools-elz',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('EMP','syndication_categories',
		array(
			'description' => 'EMP',
			'slug'        => 'schools-emp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('EST','syndication_categories',
		array(
			'description' => 'EST',
			'slug'        => 'schools-est',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('FGL','syndication_categories',
		array(
			'description' => 'FGL',
			'slug'        => 'schools-fgl',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('FHL','syndication_categories',
		array(
			'description' => 'FHL',
			'slug'        => 'schools-fhl',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('FLO','syndication_categories',
		array(
			'description' => 'FLO',
			'slug'        => 'schools-flo',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('FRA','syndication_categories',
		array(
			'description' => 'FRA',
			'slug'        => 'schools-fra',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('GCP','syndication_categories',
		array(
			'description' => 'GCP',
			'slug'        => 'schools-gcp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('GVC','syndication_categories',
		array(
			'description' => 'GVC',
			'slug'        => 'schools-gvc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('GVN','syndication_categories',
		array(
			'description' => 'GVN',
			'slug'        => 'schools-gvn',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('HES','syndication_categories',
		array(
			'description' => 'HES',
			'slug'        => 'schools-hes',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('HIG','syndication_categories',
		array(
			'description' => 'HIG',
			'slug'        => 'schools-hig',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('HIL','syndication_categories',
		array(
			'description' => 'HIL',
			'slug'        => 'schools-hil',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('HOW','syndication_categories',
		array(
			'description' => 'HOW',
			'slug'        => 'schools-how',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('JDP','syndication_categories',
		array(
			'description' => 'JDP',
			'slug'        => 'schools-jdp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('JFC','syndication_categories',
		array(
			'description' => 'JFC',
			'slug'        => 'schools-jfc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('JMA','syndication_categories',
		array(
			'description' => 'JMA',
			'slug'        => 'schools-jma',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('JST','syndication_categories',
		array(
			'description' => 'JST',
			'slug'        => 'schools-jst',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('JWG','syndication_categories',
		array(
			'description' => 'JWG',
			'slug'        => 'schools-jwg',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('KEA','syndication_categories',
		array(
			'description' => 'KEA',
			'slug'        => 'schools-kea',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('KED','syndication_categories',
		array(
			'description' => 'KED',
			'slug'        => 'schools-ked',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('LAU','syndication_categories',
		array(
			'description' => 'LAU',
			'slug'        => 'schools-lau',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('LBP','syndication_categories',
		array(
			'description' => 'LBP',
			'slug'        => 'schools-lbp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('LEX','syndication_categories',
		array(
			'description' => 'LEX',
			'slug'        => 'schools-lex',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('LIN','syndication_categories',
		array(
			'description' => 'LIN',
			'slug'        => 'schools-lin',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('LKW','syndication_categories',
		array(
			'description' => 'LKW',
			'slug'        => 'schools-lkw',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('LNH','syndication_categories',
		array(
			'description' => 'LNH',
			'slug'        => 'schools-lnh',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('LRW','syndication_categories',
		array(
			'description' => 'LRW',
			'slug'        => 'schools-lrw',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MAN','syndication_categories',
		array(
			'description' => 'MAN',
			'slug'        => 'schools-man',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MCG','syndication_categories',
		array(
			'description' => 'MCG',
			'slug'        => 'schools-mcg',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MCK','syndication_categories',
		array(
			'description' => 'MCK',
			'slug'        => 'schools-mck',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MEA','syndication_categories',
		array(
			'description' => 'MEA',
			'slug'        => 'schools-mea',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MIL','syndication_categories',
		array(
			'description' => 'MIL',
			'slug'        => 'schools-mil',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MJP','syndication_categories',
		array(
			'description' => 'MJP',
			'slug'        => 'schools-mjp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MOF','syndication_categories',
		array(
			'description' => 'MOF',
			'slug'        => 'schools-mof',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('MRG','syndication_categories',
		array(
			'description' => 'MRG',
			'slug'        => 'schools-mrg',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('NAM','syndication_categories',
		array(
			'description' => 'NAM',
			'slug'        => 'schools-nam',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('NDD','syndication_categories',
		array(
			'description' => 'NDD',
			'slug'        => 'schools-ndd',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('NLW','syndication_categories',
		array(
			'description' => 'NLW',
			'slug'        => 'schools-nlw',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('PIO','syndication_categories',
		array(
			'description' => 'PIO',
			'slug'        => 'schools-pio',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('PKM','syndication_categories',
		array(
			'description' => 'PKM',
			'slug'        => 'schools-pkm',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('PKW','syndication_categories',
		array(
			'description' => 'PKW',
			'slug'        => 'schools-pkw',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('PRE','syndication_categories',
		array(
			'description' => 'PRE',
			'slug'        => 'schools-pre',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('PRU','syndication_categories',
		array(
			'description' => 'PRU',
			'slug'        => 'schools-pru',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('QEL','syndication_categories',
		array(
			'description' => 'QEL',
			'slug'        => 'schools-qel',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('QSM','syndication_categories',
		array(
			'description' => 'QSM',
			'slug'        => 'schools-qsm',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('RIV','syndication_categories',
		array(
			'description' => 'RIV',
			'slug'        => 'schools-riv',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('ROC','syndication_categories',
		array(
			'description' => 'ROC',
			'slug'        => 'schools-roc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('RYE','syndication_categories',
		array(
			'description' => 'RYE',
			'slug'        => 'schools-rye',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SAB','syndication_categories',
		array(
			'description' => 'SAB',
			'slug'        => 'schools-sab',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SAG','syndication_categories',
		array(
			'description' => 'SAG',
			'slug'        => 'schools-sag',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SHE','syndication_categories',
		array(
			'description' => 'SHE',
			'slug'        => 'schools-she',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SHL','syndication_categories',
		array(
			'description' => 'SHL',
			'slug'        => 'schools-shl',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SIL','syndication_categories',
		array(
			'description' => 'SIL',
			'slug'        => 'schools-sil',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SND','syndication_categories',
		array(
			'description' => 'SND',
			'slug'        => 'schools-snd',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SMI','syndication_categories',
		array(
			'description' => 'SMI',
			'slug'        => 'schools-smi',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SRG','syndication_categories',
		array(
			'description' => 'SRG',
			'slug'        => 'schools-srg',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('STA','syndication_categories',
		array(
			'description' => 'STA',
			'slug'        => 'schools-sta',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('STJ','syndication_categories',
		array(
			'description' => 'STJ',
			'slug'        => 'schools-stj',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('STN','syndication_categories',
		array(
			'description' => 'STN',
			'slug'        => 'schools-stn',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('STW','syndication_categories',
		array(
			'description' => 'STW',
			'slug'        => 'schools-stw',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SUD','syndication_categories',
		array(
			'description' => 'SUD',
			'slug'        => 'schools-sud',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SUN','syndication_categories',
		array(
			'description' => 'SUN',
			'slug'        => 'schools-sun',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('TAI','syndication_categories',
		array(
			'description' => 'TAI',
			'slug'        => 'schools-tai',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('TRI','syndication_categories',
		array(
			'description' => 'TRI',
			'slug'        => 'schools-tri',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WCP','syndication_categories',
		array(
			'description' => 'WCP',
			'slug'        => 'schools-wcp',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WEL','syndication_categories',
		array(
			'description' => 'WEL',
			'slug'        => 'schools-wel',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WGD','syndication_categories',
		array(
			'description' => 'WGD',
			'slug'        => 'schools-wgd',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WLM','syndication_categories',
		array(
			'description' => 'WLM',
			'slug'        => 'schools-wlm',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WLS','syndication_categories',
		array(
			'description' => 'WLS',
			'slug'        => 'schools-WLS',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WPK','syndication_categories',
		array(
			'description' => 'WPK',
			'slug'        => 'schools-wpk',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WSH','syndication_categories',
		array(
			'description' => 'WSH',
			'slug'        => 'schools-wsh',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WSM','syndication_categories',
		array(
			'description' => 'WSM',
			'slug'        => 'schools-wsm',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WSV','syndication_categories',
		array(
			'description' => 'WSV',
			'slug'        => 'schools-wsv',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WTT','syndication_categories',
		array(
			'description' => 'WTT',
			'slug'        => 'schools-wtt',
			'parent'      => $parent_term_id,
		)
	);
	$parent_term = term_exists( 'schools-all', 'syndication_categories' );
	$parent_term_id = $parent_term['term_id'];
	wp_insert_term('Secondary Schools','syndication_categories',
		array(
			'description' => 'Secondary Schools',
			'slug'        => 'schools-secondary',
			'parent'      => $parent_term_id,
		)
	);
	$parent_term = term_exists( 'schools-secondary', 'syndication_categories' );
	$parent_term_id = $parent_term['term_id'];
	wp_insert_term('BCI','syndication_categories',
		array(
			'description' => 'BCI',
			'slug'        => 'schools-bci',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('CHC','syndication_categories',
		array(
			'description' => 'CHC',
			'slug'        => 'schools-chc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('ECI','syndication_categories',
		array(
			'description' => 'ECI',
			'slug'        => 'schools-eci',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('EDS','syndication_categories',
		array(
			'description' => 'EDS',
			'slug'        => 'schools-eds',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('FHC','syndication_categories',
		array(
			'description' => 'FHC',
			'slug'        => 'schools-fhc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('GCI','syndication_categories',
		array(
			'description' => 'GCI',
			'slug'        => 'schools-gci',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('GPS','syndication_categories',
		array(
			'description' => 'GPS',
			'slug'        => 'schools-gps',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('GRC','syndication_categories',
		array(
			'description' => 'GRC',
			'slug'        => 'schools-grc',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('HRH','syndication_categories',
		array(
			'description' => 'HRH',
			'slug'        => 'schools-hrh',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('JAM','syndication_categories',
		array(
			'description' => 'JAM',
			'slug'        => 'schools-jam',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('JHS','syndication_categories',
		array(
			'description' => 'JHS',
			'slug'        => 'schools-jhs',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('KCI','syndication_categories',
		array(
			'description' => 'KCI',
			'slug'        => 'schools-kci',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('PHS','syndication_categories',
		array(
			'description' => 'PHS',
			'slug'        => 'schools-phs',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('SSS','syndication_categories',
		array(
			'description' => 'SSS',
			'slug'        => 'schools-sss',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WCI','syndication_categories',
		array(
			'description' => 'WCI',
			'slug'        => 'schools-wci',
			'parent'      => $parent_term_id,
		)
	);
	wp_insert_term('WOD','syndication_categories',
		array(
			'description' => 'WOD',
			'slug'        => 'schools-wod',
			'parent'      => $parent_term_id,
		)
	);
	update_option('wrdsb_syndication_categories_version', WRDSB_SYNDICATION_CATEGORIES_VERSION);
}

// Register Custom Taxonomy
function syndication_categories_taxonomy() {
	$labels = array(
		'name'                       => 'Syndication Categories',
		'singular_name'              => 'Syndication Category',
		'menu_name'                  => 'Syndication',
		'all_items'                  => 'All Categories',
		'parent_item'                => 'Parent Category',
		'parent_item_colon'          => 'Parent Category:',
		'new_item_name'              => 'New Category Name',
		'add_new_item'               => 'Add New Syndication Category',
		'edit_item'                  => 'Edit Syndication Category',
		'update_item'                => 'Update Category',
		'view_item'                  => 'View Category',
		'separate_items_with_commas' => 'Separate names with commas',
		'add_or_remove_items'        => 'Add or remove categories',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Categories',
		'search_items'               => 'Search Syndication Categories',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No categories',
		'items_list'                 => 'Categories list',
		'items_list_navigation'      => 'Categories list navigation',
	);
	$capabilities = array(
		'manage_terms'               => 'manage_sites',
		'edit_terms'                 => 'manage_sites',
		'delete_terms'               => 'manage_sites',
		'assign_terms'               => 'edit_posts',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'capabilities'               => $capabilities,
	);
	register_taxonomy( 'syndication_categories', array( 'post', 'page' ), $args );
}
add_action( 'init', 'syndication_categories_taxonomy', 0 );
