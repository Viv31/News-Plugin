<?php 
//news post type goes here
if(!function_exists('NewsCPT')){
function NewsCPT(){
	register_post_type('news-section',array(
   			'labels'=>array(
   			'name'=>__('News'),
   			'Singular_name'=>__('news'),
            'menu_name' => __('News Post','admin menu')
   		),
   		'supports'=>array('title','editor','thumbnail','excerpt','custom-fields','revisions'),
   		'public'=>true,
   			'has_archive'=>true,
   			'can_export'=>true,
   			'rewrite'=>array('slug'=>'news')
   		));

}
}
add_action('init','NewsCPT');
