<?php
/**
 * Default regions for the state field: US states and territories.
 *
 * One country's worth, because the field has no country to key off — it is a
 * standalone control, not the second half of a country/region pair. Sites
 * outside the US replace this from the Regions option on the settings screen,
 * which is why the list is a default rather than a bundled world table.
 *
 * WooCommerce, when active, supplies its own regions for the store's base
 * country ahead of this.
 *
 * @package WPCMB
 */

declare( strict_types=1 );

defined( 'ABSPATH' ) || exit;

return array(
	'AL' => __( 'Alabama', 'metafields-custom-fields' ),
	'AK' => __( 'Alaska', 'metafields-custom-fields' ),
	'AZ' => __( 'Arizona', 'metafields-custom-fields' ),
	'AR' => __( 'Arkansas', 'metafields-custom-fields' ),
	'CA' => __( 'California', 'metafields-custom-fields' ),
	'CO' => __( 'Colorado', 'metafields-custom-fields' ),
	'CT' => __( 'Connecticut', 'metafields-custom-fields' ),
	'DE' => __( 'Delaware', 'metafields-custom-fields' ),
	'DC' => __( 'District of Columbia', 'metafields-custom-fields' ),
	'FL' => __( 'Florida', 'metafields-custom-fields' ),
	'GA' => __( 'Georgia', 'metafields-custom-fields' ),
	'HI' => __( 'Hawaii', 'metafields-custom-fields' ),
	'ID' => __( 'Idaho', 'metafields-custom-fields' ),
	'IL' => __( 'Illinois', 'metafields-custom-fields' ),
	'IN' => __( 'Indiana', 'metafields-custom-fields' ),
	'IA' => __( 'Iowa', 'metafields-custom-fields' ),
	'KS' => __( 'Kansas', 'metafields-custom-fields' ),
	'KY' => __( 'Kentucky', 'metafields-custom-fields' ),
	'LA' => __( 'Louisiana', 'metafields-custom-fields' ),
	'ME' => __( 'Maine', 'metafields-custom-fields' ),
	'MD' => __( 'Maryland', 'metafields-custom-fields' ),
	'MA' => __( 'Massachusetts', 'metafields-custom-fields' ),
	'MI' => __( 'Michigan', 'metafields-custom-fields' ),
	'MN' => __( 'Minnesota', 'metafields-custom-fields' ),
	'MS' => __( 'Mississippi', 'metafields-custom-fields' ),
	'MO' => __( 'Missouri', 'metafields-custom-fields' ),
	'MT' => __( 'Montana', 'metafields-custom-fields' ),
	'NE' => __( 'Nebraska', 'metafields-custom-fields' ),
	'NV' => __( 'Nevada', 'metafields-custom-fields' ),
	'NH' => __( 'New Hampshire', 'metafields-custom-fields' ),
	'NJ' => __( 'New Jersey', 'metafields-custom-fields' ),
	'NM' => __( 'New Mexico', 'metafields-custom-fields' ),
	'NY' => __( 'New York', 'metafields-custom-fields' ),
	'NC' => __( 'North Carolina', 'metafields-custom-fields' ),
	'ND' => __( 'North Dakota', 'metafields-custom-fields' ),
	'OH' => __( 'Ohio', 'metafields-custom-fields' ),
	'OK' => __( 'Oklahoma', 'metafields-custom-fields' ),
	'OR' => __( 'Oregon', 'metafields-custom-fields' ),
	'PA' => __( 'Pennsylvania', 'metafields-custom-fields' ),
	'RI' => __( 'Rhode Island', 'metafields-custom-fields' ),
	'SC' => __( 'South Carolina', 'metafields-custom-fields' ),
	'SD' => __( 'South Dakota', 'metafields-custom-fields' ),
	'TN' => __( 'Tennessee', 'metafields-custom-fields' ),
	'TX' => __( 'Texas', 'metafields-custom-fields' ),
	'UT' => __( 'Utah', 'metafields-custom-fields' ),
	'VT' => __( 'Vermont', 'metafields-custom-fields' ),
	'VA' => __( 'Virginia', 'metafields-custom-fields' ),
	'WA' => __( 'Washington', 'metafields-custom-fields' ),
	'WV' => __( 'West Virginia', 'metafields-custom-fields' ),
	'WI' => __( 'Wisconsin', 'metafields-custom-fields' ),
	'WY' => __( 'Wyoming', 'metafields-custom-fields' ),
	'AS' => __( 'American Samoa', 'metafields-custom-fields' ),
	'GU' => __( 'Guam', 'metafields-custom-fields' ),
	'MP' => __( 'Northern Mariana Islands', 'metafields-custom-fields' ),
	'PR' => __( 'Puerto Rico', 'metafields-custom-fields' ),
	'VI' => __( 'U.S. Virgin Islands', 'metafields-custom-fields' ),
);
