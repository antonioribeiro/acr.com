jQuery('.categories-block li a').live('click', function(e) {

	jQuery.when(selectCategory(jQuery(this).attr('data-id'))).done(function() 
	{
		$(window).trigger('resize');
	});

	return false;

});

function selectCategory(category)
{
	allItems = jQuery('.category-all');

	jQuery('#hidden_items').hide();

	if (category == 'all') 
	{
		jQuery('#visible_items').prepend(allItems);
	} 
	else 
	{
		jQuery('#hidden_items').prepend(allItems);

		jQuery('#visible_items').prepend(jQuery('.category-' + category));

		console.log('done remove');
	}
}