import assign from 'lodash/assign';

// Cover styles.
wp.blocks.registerBlockStyle( 'core/cover', {
	name: 'full-screen',
	label: 'Full Screen Size',
} );

// Group styles.
wp.blocks.registerBlockStyle( 'core/group', {
	name: 'full-screen',
	label: 'Full Screen Size',
} );

// Button styles.
wp.blocks.registerBlockStyle( 'core/button', {
	name: 'btn-block',
	label: 'Expanded',
} );

function addTableBlockClass( props, blockType ) {
	if ( blockType.name === 'core/table' ) {
		return assign( props, { className: 'table' } );
	}
	return props;
}

wp.hooks.addFilter(
	'blocks.getSaveContent.extraProps',
	'prdxntheme/add-table-block-class',
	addTableBlockClass
);

// Heading styles.
wp.blocks.registerBlockStyle( 'core/heading', {
	name: 'with-top-border',
	label: 'With Top Border',
} );


// Table styles.
wp.blocks.registerBlockStyle( 'core/table', {
	name: 'with-top-border',
	label: 'With Top Border',
} );
