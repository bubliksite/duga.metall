<?php 

/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.css');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Отключаем визуальный редактор **/
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

/** Включаем меню **/
register_nav_menu('menu', 'Главное меню');


/**Создаем новый тип записей - Услуги**/
add_action('init', 'services');
function services() {
	register_post_type('services', array(
			'public' => true,
			'supports' => array ('title'),
			'labels' => array (
				'name' => 'Услуги',
				'add_new' => 'Добавить услугу',
				'all_items' => 'Все услуги',
				'add_new_item' => 'Добавить услугу'
			),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-hammer'
		));
}

/**Создаем новый тип записей - Проекты**/
add_action('init', 'projects');
function projects() {
	register_post_type('projects', array(
			'public' => true,
			'supports' => array ('title'),
			'labels' => array (
				'name' => 'Проекты',
				'add_new' => 'Добавить проект',
				'all_items' => 'Все проекты',
				'add_new_item' => 'Добавить проект'
			),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-image-filter'
		));
}

/**Создаем новый тип записей - Товары**/
add_action('init', 'goods');
function goods() {
	register_post_type('goods', array(
			'public' => true,
			'supports' => array ('title'),
			'labels' => array (
				'name' => 'Товары',
				'add_new' => 'Добавить товар',
				'all_items' => 'Все товары',
				'add_new_item' => 'Добавить товар'
			),
			'taxonomies'  => array( 'goodscategory' ),
			'menu_position' => 4,
			'menu_icon' => 'dashicons-cart'
		));
}

// Создаем тип таксономии категории
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	register_taxonomy( 'goodscategory', [ 'goods' ], [ 
		'label'                 => '',
		'labels'                => [
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Найти категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Посмотреть категория',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Изменить категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Название категории',
			'menu_name'         => 'Категория',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => true,
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => false,

		'rewrite'               => true,
		//'query_var'             => $goodscategory, // название параметра запроса
		'capabilities'          => array(),
		//'meta_box_cb'           => post_categories_meta_box, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $goodscategory
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}