<?php

 Blade::extend(function ($view)
 {
	 $view = preg_replace(
		 '/{{\'((.|\s)*?)\'}}/',
		 '<?php echo Glottos::translate("$1"); ?>', $view
	 );

	 return $view;
 });
