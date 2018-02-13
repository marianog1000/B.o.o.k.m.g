<?php
	include(TEMPLATEPATH . '/includes/scripts.php');


	include(TEMPLATEPATH . '/includes/menus.php');

	
	
	
	// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'top'; // specify custom menu slug
	$locations = get_nav_menu_locations();
	
	if ( isset($locations[$menu_name])) {
			
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<div id="navbar" class="navbar-collapse collapse">'."\n";
		//$menu_list = '<nav>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="nav navbar-nav cl-effect-18">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'" class="page-scroll" data-hover="'. $title .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		//$menu_list .= "\t\t\t". '</nav>' ."\n";
		$menu_list .= "\t\t\t". '</div>' ."\n";
		
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

function turnos_custom_menus() {
	$menu_name = 'turnos'; // specify custom menu slug
	$locations = get_nav_menu_locations();
	
	if ( isset($locations[$menu_name])) {
			
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$menu_list = '<div id="navbar" class="navbar-collapse collapse">'."\n";
		//$menu_list = '<nav>' ."\n";
		$menu_list .= "\t\t\t\t". '<ul class="nav navbar-nav cl-effect-18">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			$menu_list .= "\t\t\t\t\t". '<li><a href="'. $url .'" class="page-scroll" data-hover="'. $title .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
		//$menu_list .= "\t\t\t". '</nav>' ."\n";
		$menu_list .= "\t\t\t". '</div>' ."\n";
		
	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}
/*

function mod_contact7_form_content( $template, $prop ) {
  if ( 'form' == $prop ) {
    return implode( '', array(
	
	
	
	'<div class="col-lg-4 col-md-4 col-sm-4" data-aos="zoom-in">',    
				'<div class="control-group form-group">',
                    '<div class="controls">',						
                        '<label>Nombre:</label>',
						'<span class="wpcf7-form-control-wrap your-name">',
						'[text* your-name placeholder”Name”]',
                        '<p class="help-block"></p>',
						'</span>',
                    '</div>',
				'</div>',
			'</div>',
	
	'<div class="col-lg-4 col-md-4 col-sm-4" data-aos="zoom-in">',	
                '<div class="control-group form-group">',
					'<div class="controls">',
                        '<label>Teléfono:</label>',
						'<input type="tel" class="form-control" id="phone" required data-validation-required-message="Por Favor Ingrese su Teléfono.">',
                    '</div>',
                '</div>',
			'</div>',
			'<div class="col-lg-4 col-md-4 col-sm-4" data-aos="zoom-in">',			
                '<div class="control-group form-group">',
                    '<div class="controls">',		
                        '<label>Email:</label>',
						'<span class="wpcf7-form-control-wrap your-email">',
                        '<input type="email" class="form-control wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="your-email" size="40" aria-required="true" aria-invalid="false">',
						'</span>',
                    '</div>',
                '</div>',
			'</div>',			
			'<div class="clearfix"></div>',
			'<div class="col-lg-12" data-aos="zoom-in">',	
                '<div class="control-group form-group">',
                    '<div class="controls">',
                        '<label>Mensaje:</label>',
						'<span class="wpcf7-form-control-wrap your-subject">',
                        '<textarea rows="10" cols="100" class="form-control wpcf7-form-control wpcf7-text" id="your-subject" aria-invalid="false" maxlength="999" style="resize:none"></textarea>',
						'</span>',
					'</div>',
                '</div>',
                '<div id="success"></div>',
                '<!-- For success/fail messages -->',
			'</div>',
			'<div class="col-lg-12" data-aos="zoom-in">',	
                '<button type="submit" class="btn btn-primary wpcf7-form-control wpcf7-submit">Enviar</button>',
				'<span class="ajax-loader"></span>',
            '</div>',
			'<div class="clearfix"></div>',	
		'</form>',
	
	
	
      '<div class="row">',
        '<div class="col">',
          '[text* your-name placeholder”Name”]',
          '[email* your-email placeholder”Email”]',
          '[text* your-subject placeholder”Subject”]',
        '</div>',
        '<div class=”col”>',
          '[textarea* your-message placeholder"Message"]',
        '</div>',
      '</div>',
      '<div class="row">',
        '[submit class:btn "Send Mail"]',
      '</div>'
    ) );
  } else {
    return $template;
  } 
}

add_filter(
  'wpcf7_default_template',
  'mod_contact7_form_content',
  10,
  2
);*/	

?>