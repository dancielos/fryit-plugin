wp.blocks.registerBlockType('fryit/hello-world', {
	title: 'Hello World!',
	icon: 'smiley',
	category: 'common',
	edit: function () {
		return wp.element.createElement('h3', null, 'Hello World from the backend');
	},
	save: function () {
		return wp.element.createElement('h3', null, 'Frontend');
	},
});
