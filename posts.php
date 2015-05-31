<?php
	
	class PostsList
	{
		protected $posts = [
		[
			'author' => 'Adrian',
			'data'	=> '25.04.2015',
			'title'	=> 'Lorem ipsum',
			'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquet fermentum nibh vel venenatis. Vestibulum pretium euismod iaculis. Nunc aliquam vestibulum fringilla. Suspendisse potenti. Quisque lectus turpis, convallis vitae mattis ac, placerat non nulla. Quisque fringilla enim vitae volutpat tempus. Pellentesque facilisis feugiat quam quis hendrerit. Nunc id porta ipsum. Quisque gravida, orci in luctus vulputate, ex purus malesuada nibh, vel feugiat felis neque vel diam. Donec auctor, purus quis accumsan efficitur, est neque volutpat dolor, a accumsan lacus dolor sit amet nulla. Aliquam ut pellentesque arcu.'
		],
		[
			'author' => 'Robert',
			'data'	=> '26.04.2015',
			'title'	=> 'Aenean et',
			'content' => 'Aenean et euismod tortor, quis lobortis dui. Vestibulum condimentum molestie dolor sed cursus. Mauris magna ipsum, viverra non sodales sed, iaculis quis felis. Integer sed neque nec massa molestie tincidunt eu porttitor ligula. Ut tincidunt quam ex, eu tempus mauris sagittis at. Aliquam et ante convallis, pulvinar lorem a, rutrum velit. Aenean porta, tortor a auctor rutrum, diam nibh lacinia mi, eu mollis ex velit eu lacus. Aliquam non ultrices nulla, non aliquam purus. Integer tincidunt risus ipsum, at blandit ligula posuere at. Sed nibh ante, euismod sit amet massa at, ullamcorper pulvinar nulla. Curabitur ultrices imperdiet urna vitae egestas. Cras at turpis pulvinar, aliquet tortor at, aliquet arcu. Aliquam ultricies libero sagittis aliquet volutpat. Cras rutrum felis ut ex accumsan vestibulum. Pellentesque felis tortor, semper eget aliquam vel, auctor nec nunc. '
		],
		[
			'author' => 'Martyna',
			'data'	=> '27.04.2015',
			'title'	=> 'Suspendisse',
			'content' => 'Suspendisse eget elit felis. Donec blandit porta magna vel iaculis. Vivamus finibus viverra vulputate. Nulla gravida lacinia rutrum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras et ligula scelerisque, scelerisque lectus eleifend, sodales orci. Mauris bibendum viverra neque et vulputate. Aliquam varius ultrices erat ut tincidunt. Curabitur mattis ligula augue, eu porttitor justo dignissim quis. Donec sit amet neque nec mauris mollis aliquam nec in dolor. Duis eget neque non lectus hendrerit laoreet sed vitae nisl. Mauris sed blandit massa. Suspendisse a massa tincidunt libero tincidunt vestibulum non consectetur augue. '
		],
		[
			'author' => 'Ania',
			'data'	=> '28.04.2015',
			'title'	=> 'Quisque rutrum',
			'content' => 'Quisque rutrum sem quis condimentum tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean erat ex, scelerisque a ullamcorper at, aliquet vel magna. Pellentesque laoreet vel est vitae scelerisque. Etiam non consequat elit. Donec nec purus vitae eros venenatis blandit. Donec ornare tellus vitae lorem auctor, quis placerat ex consectetur. Pellentesque id posuere urna, nec tincidunt nisi. Morbi sagittis imperdiet lorem vel ullamcorper. Fusce eu lectus consequat quam tincidunt rhoncus a eget justo. Aenean tincidunt id quam id aliquam. Suspendisse vitae nunc condimentum, lacinia diam elementum, ultricies felis. Fusce commodo ultricies lorem nec mollis. Curabitur vestibulum non dui eu ultrices. Praesent nec molestie enim, venenatis faucibus felis. '
		],
		[
			'author' => 'Witek',
			'data'	=> '29.04.2015',
			'title'	=> 'Proin eget',
			'content' => 'Proin eget metus lacus. Praesent nisi lorem, sollicitudin ut nisi eu, ultrices imperdiet metus. Morbi tortor odio, accumsan sed varius vel, aliquet a ante. Proin vel lacus ultrices, gravida dolor eget, ullamcorper libero. Morbi ultricies laoreet metus ut porta. Nunc ut vulputate nunc, vel dapibus enim. Proin interdum, elit in blandit laoreet, felis velit lacinia neque, et ultricies risus ex at felis. Ut vehicula at massa non pellentesque. Etiam sit amet diam et justo mattis aliquet quis ut mi. Mauris volutpat risus a libero lobortis, a fermentum justo mollis. Aenean velit nisi, lobortis at enim ut, porta vehicula erat. '
		]
		];
		
		public function __construct()
		{
			shuffle($this->posts);
		}
		
		public function getRandom($x)
		{
			$random_posts = array_chunk($this->posts, $x);
			return $random_posts[0];
		}
	}

?>