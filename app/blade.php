<?php

function html_tag($matches)
{
	$attributes = [];

	$command = $matches[1];

	if (isset($matches[3]))
	{
		$parameters = $matches[3];	
	}
	
	$value = false;
	$label = false;
	$name = false;
	$group = false;
	$classes = false;
	$defaultAttribute = 'class';

	switch ($command) {
		case 'row':
			$classes[] = "row";
			break;

		case 'a':
			$defaultAttribute = 'href';
			break;

		case 'h1':
		case 'h2':
		case 'h3':
		case 'h4':
		case 'h5':
		case 'p':
			$defaultAttribute = 'value';
			break;
	}

	if (isset($parameters))
	{
		foreach(explode(',', $parameters) as $parameter)
		{
			$parts = explode('=',$parameter);

			if (count($parts) == 1)
			{
				${$defaultAttribute} = $parts[0];
			}
			else
			if (count($parts) > 1)
			{
				$attrName = $parts[0];
				$attrValue = $parts[1];

				if (isset($attrValue[0]))
				{
					$attrValue = $attrValue[0] == "$" ? '<?='.$attrValue.'?>' : $attrValue;
				}
				else
				{
					$attrValue = '';	
				}
			
				$name = $attrName == 'name' ? $attrValue : $name;

				switch ($attrName) {
					case 'value':
						$value = $attrValue;
						break;

					case 'label':
						$label = $attrValue;
						break;

					case 'color':
						$classes[] = "btn-$attrValue";
						break;

					case 'icon':
						$classes[] = "$attrValue";
						break;

					case 'md':
						$classes[] = "col-md-$attrValue";
						break;

					case 'xs':
						$classes[] = "col-xs-$attrValue";
						break;

					case 'sm':
						$classes[] = "col-sm-$attrValue";
						break;

					case 'class':
						$classes[] = "$attrValue";
						break;

					default:
						$attributes[] = "$attrName=\"$attrValue\"";
						break;
				}
			}

		}
	}


	if (isset($class))
	{
		$classes[] = $class;
	}

	if ($classes)
	{
		$attributes[] = 'class="'.implode(' ', $classes).'"';
	}

	$attributes = implode(' ', $attributes);

	switch ($command) {
		case 'php':
			$attributes = "<?php ";
			break;

		case 'endphp':
			$attributes = "; ?>";
			break;

		case 'div':
			$attributes = "<div $attributes>";
			break;

		case 'enddiv':
			$attributes = "</div>";
			break;

		case 'form':
			$attributes = "<form $attributes>";
			break;

		case 'formend':
			$attributes = "</form>";
			break;

		case 'textarea':
			$attributes = "<textarea $attributes>$value</textarea>";
			$group = true;
			break;

		case 'password':
		case 'text':
			$attributes .= $value ? " value=\"$value\"" : ''; 
			$attributes = "<input type=\"$command\" $attributes>";
			$group = true;
			break;

		case 'button':
			$attributes = "<button $attributes>$value</button>";
			$group = true;
			break;

		case 'row':
			$attributes = "<div $attributes>";
			break;

		case 'col':
			$attributes = "<div $attributes>";
			break;

		case 'endcol':
			$attributes = '</div>';
			break;

		case 'br':
			$attributes = "<br>";
			break;

		case 'script':
			$attributes = "<script>";
			break;

		case 'h1':
		case 'h2':
		case 'h3':
		case 'h4':
		case 'h5':
		case 'p':
			$attributes = "<$command $attributes>$value</$command>";
			break;

		case 'icon':
			$attributes = "<i $attributes></i>";
			break;

		case 'span':
			$attributes = "<span $attributes>";
			break;

		case 'endspan':
			$attributes = "</span>";
			break;

		case 'code':
			$attributes = "<code $attributes>";
			break;

		case 'endcode':
			$attributes = "</code>";
			break;

		case 'pre':
			$attributes = "<pre $attributes>";
			break;

		case 'endpre':
			$attributes = "</pre>";
			break;

	}

	if ($label)
	{
		$attributes = "<label".($name ? " for=\"$name\"" : '').">$label</label>" . $attributes;
	}

	if ($group)
	{
		$attributes = "<div class=\"form-group\">" . $attributes . "</div>";
	}

	return $attributes;
}

Blade::extend(function ($view) {

	$commands = [
					'php',
					'endphp',
					'code',
					'endcode',
					'button',
					'formend',
					'form',
					'textarea',
					'text',
					'password',
					'h1',
					'h2',
					'h3',
					'h4',
					'h5',
					'comment',
					'row',
					'endrow',
					'col',
					'endcol',
					'div',
					'enddiv',
					'br',
					'meta',
					'script',
					'endscript',
					'p',
					'span',
					'endspan',
					'pre',
					'endpre',
					'icon',
				];

	arsort($commands);

    $view = preg_replace(
                         '/{{\'((.|\s)*?)\'}}/', 
                         '<?php echo Glottos::translate("$1"); ?>', $view
                       );


	$view = preg_replace_callback(
                         '/@('.implode('|', $commands).')(\(((.|\s)*?)\))*/', 
                         'html_tag', 
                         $view
                       );

	return $view;

});

