<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Horizontal Gridfolio Pro</title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Import required css and js files -->
		<link rel="stylesheet" type="text/css"  href="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_global.css') }}"/>
		<script type="text/javascript" src="{{ asset('assets/layouts/photography/horizontal-gridfolio/FWDGrid.js') }}"></script>

		<!-- Setup the grid (all settings are explained in detail in the documentation files) -->
		<script type="text/javascript">
			var grid;
			FWDUtils.onReady(function(){
				grid = new FWDGrid({
					//main settings
					divHolderId:"myDiv",//this is ignored because the displayType is set to fullscreen!
					gridPlayListAndSkinId:"playlist",
					removePlayListFromDOM:"yes",
					displayType:"fullscreen",
					scrollBarType:"drag",
					autoScale:"yes",//this is ignored because the displayType is set to fullscreen!
					width:820,//this is ignored because the displayType is set to fullscreen!
					height:550,//this is ignored because the displayType is set to fullscreen!
					thumbnailOverlayType:"icons",
					showContextMenu:"yes",
					addMargins:"yes",
					addMouseWheelSupport:"yes",
					scrollBarOffset:0,
					backgroundColor:"#000000",
					scrollbarDisabledColor:"#000000",
					//thumbnails settings
					thumbnailBaseWidth:278,
					thumbnailBaseHeight:188,
					nrOfThumbsToShowOnSet:37,
					horizontalSpaceBetweenThumbnails:4,
					verticalSpaceBetweenThumbnails:4,
					thumbnailBorderSize:4,
					thumbnailBorderRadius:0,
					thumbnailOverlayOpacity:.85,
					thumbnailOverlayColor:"#000000",
					thumbnailBackgroundColor:"#333333",
					thumbnailBorderNormalColor:"#FFFFFF",
					thumbnailBorderSelectedColor:"#FFFFFF",
					//combobox settings
					startAtCategory:1,
					selectLabel:"Antonio Carlos Ribeiro - Menu",
					allCategoriesLabel:"All Categories",
					showAllCategories:"yes",
					comboBoxPosition:"topleft",
					selctorBackgroundNormalColor:"#FFFFFF",
					selctorBackgroundSelectedColor:"#000000",
					selctorTextNormalColor:"#000000",
					selctorTextSelectedColor:"#FFFFFF",
					buttonBackgroundNormalColor:"#FFFFFF",
					buttonBackgroundSelectedColor:"#000000",
					buttonTextNormalColor:"#000000",
					buttonTextSelectedColor:"#FFFFFF",
					comboBoxShadowColor:"#000000",
					comboBoxHorizontalMargins:12,
					comboBoxVerticalMargins:12,
					comboBoxCornerRadius:0,
					//fullscreen button settings
					showFullScreenButton:"yes",
					fullScreenButtonPosition:"topright",
					fullScreenButtonHorizontalMargins:10,
					fullScreenButtonVerticalMargins:10,
					//ligtbox settings
					addLightBoxKeyboardSupport:"yes",
					showLightBoxNextAndPrevButtons:"yes",
					showLightBoxZoomButton:"yes",
					showLightBoxInfoButton:"yes",
					showLighBoxSlideShowButton:"yes",
					showLightBoxInfoWindowByDefault:"no",
					slideShowAutoPlay:"no",
					lightBoxVideoAutoPlay:"no",
					forceRoundBorderToIframe:"no",
					lighBoxBackgroundColor:"#000000",
					lightBoxInfoWindowBackgroundColor:"#FFFFFF",
					lightBoxItemBorderColor:"#FFFFFF",
					lightBoxItemBackgroundColor:"#222222",
					lightBoxMainBackgroundOpacity:.8,
					lightBoxInfoWindowBackgroundOpacity:.9,
					lightBoxBorderSize:4,
					lightBoxBorderRadius:0,
					lightBoxSlideShowDelay:4
				});
			})
		</script>
	</head>

	<body>
		<!-- gallery data list -->
		<ul id="playlist" style="display: none;">

			{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/rotite-30-29.png') }}

			<!-- skin -->
			<ul data-skin="">
				<li data-preloader-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/rotite-30-29.png') }}"></li>
				<li data-show-more-thumbnails-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/showMoreThumbsNormalState.png') }}"></li>
				<li data-show-more-thumbnails-button-selectsed-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/showMoreThumbsSelectedState.png') }}"></li>
				<li data-image-icon-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/photoIcon.png') }}"></li>
				<li data-video-icon-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/videoIcon.png') }}"></li>
				<li data-link-icon-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/linkIcon.png') }}"></li>
				<li data-iframe-icon-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/iframeIcon.png') }}"></li>
				<li data-hand-move-icon-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/handnmove.cur') }}"></li>
				<li data-hand-drag-icon-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/handgrab.cur') }}"></li>
				<li data-fullscreen-button-normal-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/fbnn.png') }}"></li>
				<li data-fullscreen-button-normal-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/fbns.png') }}"></li>
				<li data-fullscreen-button-full-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/fbfn.png') }}"></li>
				<li data-fullscreen-button-full-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/fbfs.png') }}"></li>
				<li data-combobox-down-arrow-icon-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/combobox-down-arrow.png') }}"></li>
				<li data-combobox-down-arrow-icon-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/combobox-down-arrow-rollover.png') }}"></li>
				<li data-combobox-up-arrow-icon-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/combobox-up-arrow.png') }}"></li>
				<li data-combobox-up-arrow-icon-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/combobox-up-arrow-rollover.png') }}"></li>
				<li data-scrollbar-track-background-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-track-background.png') }}"></li>
				<li data-scrollbar-handler-background-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-center-background.png') }}"></li>
				<li data-scrollbar-handler-background-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-center-background-rollover.png') }}"></li>
				<li data-scrollbar-handler-left-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-left.png') }}"></li>
				<li data-scrollbar-handler-left-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-left-rollover.png') }}"></li>
				<li data-scrollbar-handler-right-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-right.png') }}"></li>
				<li data-scrollbar-handler-right-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-right-rollover.png') }}"></li>
				<li data-scrollbar-handler-center-icon-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-center-icon.png') }}"></li>
				<li data-scrollbar-handler-center-icon-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/scrollbar-handler-center-icon-rollover.png') }}"></li>
				<li data-lightbox-slideshow-preloader-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/slideShowPreloader.png') }}"></li>
				<li data-lightbox-close-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/galleryCloseButtonNormalState.png') }}"></li>
				<li data-lightbox-close-button-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/galleryCloseButtonSelectedState.png') }}"></li>
				<li data-lightbox-next-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/nextIconNormalState.png') }}"></li>
				<li data-lightbox-next-button-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/nextIconSelectedState.png') }}"></li>
				<li data-lightbox-prev-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/prevIconNormalState.png') }}"></li>
				<li data-lightbox-prev-button-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/prevIconSelectedState.png') }}"></li>
				<li data-lightbox-play-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/playButtonNormalState.png') }}"></li>
				<li data-lightbox-play-button-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/playButtonSelectedState.png') }}"></li>
				<li data-lightbox-pause-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/pauseButtonNormalState.png') }}"></li>
				<li data-lightbox-pause-button-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/pauseButtonSelectedState.png') }}"></li>
				<li data-lightbox-maximize-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/maximizeButtonNormalState.png') }}"></li>
				<li data-lightbox-maximize-button-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/maximizeButtonSelectedState.png') }}"></li>
				<li data-lightbox-minimize-button-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/minimizeButtonNormalState.png') }}"></li>
				<li data-lightbox-minimize-button-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/minimizeButtonSelectedState.png') }}"></li>
				<li data-lightbox-info-button-open-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/infoButtonOpenNormalState.png') }}"></li>
				<li data-lightbox-info-button-open-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/infoButtonOpenSelectedState.png') }}"></li>
				<li data-lightbox-info-button-close-normal-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/infoButtonCloseNormalPath.png') }}"></li>
				<li data-lightbox-info-button-close-selected-path="{{ asset('assets/layouts/photography/horizontal-gridfolio/skin_minimal_dark_square/infoButtonCloseSelectedPath.png') }}"></li>
			</ul>

			<!-- image playlist category  -->
			@foreach($photos as $key => $photo)
				<ul data-cat="{{$photo['type']}}">
					<ul>
						<li data-type="media" data-url="{{$photo['photography']}}"></li>
						<li data-thumbnail-path="{{$photo['thumbnail']}}"></li>
						<li data-thumbnail-text="">
							<p class="largeLabel">LOAD MORE THUMBNAILS FEATURE</p>
							<p class="smallLabel">This is an awesome feature which improves the overall performance and speed of loading because in this way not all the thumbnails are loaded and displayed at once.</p>
						</li>
						<li data-info="">
							<p class="mediaDescriptionHeader">LOAD MORE THUMBNAILS FEATURE.</p>
							<p class="mediaDescriptionText">This is an awesome feature which improves the overall performance and speed of loading because in this way not all the thumbnails are loaded and displayed at once. For example if you have a total of 120 thumbnails you can show them in sets of 50 thumbnails, and so initially in the grid the first set of 50 thumbnails are loaded and displayed, and when the "load more thumbnails" button is pressed the next set of 50 thumbnails are loaded and displayed, and finally when the "load more thumbnails" button is pressed again the 20 remaining thumbnails are showed. The number of thumbnails to load per set is customizable, it does not have to be 50 it can be any number that you consider. This feature is optional, if it is disabled all thumbnails are loaded and displayed.</p>
						</li>
					</ul>
				</ul>
			@endforeach
			<!-- end -->

		</ul>

	</body>
</html>
