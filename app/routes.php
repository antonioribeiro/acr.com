<?php

Route::group(['namespace' => 'ACR\Controllers'], function()
{
	Route::get('/', array('as' => 'home', 'uses' => 'Home@index'));

	Route::get('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'Api@markdown'));
	Route::post('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'Api@markdown'));

	Route::get('contact', array('as' => 'contact', 'uses' => 'Contact@show'));

	Route::post('contact/send', array('as' => 'contact.send', 'uses' => 'Contact@send'));

	Route::group(array('prefix' => 'technology'), function()
	{
	    Route::get('/', array('as' => 'technology', 'uses' => 'Technology@index'));

	    Route::get('months/{month}/{year}', array('as' => 'technology.months', 'uses' => 'Technology@months'));

	    Route::get('articles/{slug}/{lang?}', array('as' => 'technology.articles.show', 'uses' => 'Technology@show'));

	    Route::get('{page}', array('as' => 'bio', 'uses' => 'StaticPages@show'));
	});

	Route::group(array('prefix' => 'photography'), function()
	{
		Route::get('/', array('as' => 'photography', 'uses' => 'Photography@index'));

		Route::group(array('prefix' => 'api'), function()
		{
			Route::get('download/{type}/{photo}',
	           array(
					'as' => 'photography.api.download',
					'uses' => 'Photography@apiDownloadPhoto'
				)
			);

			Route::get('download/thumbnail/{type}/{photo}',
	           array(
		           'as' => 'photography.api.download.thumbnail',
		           'uses' => 'Photography@apiDownloadThumbnail'
	           )
			);
		});
	});

	Route::get('language/{lang}', array('as' => 'language.select', 'uses' => 'Language@select'));

	Route::get('login', array('as' => 'login.form', 'uses' => 'Logon@form'));

	Route::post('login', array('as' => 'login.do', 'uses' => 'Logon@login'));

	Route::get('logout', array('as' => 'logout.do', 'uses' => 'Logon@logout'));

	Route::group(array('before' => 'auth'), function()
	{
	    Route::group(array('prefix' => 'admin'), function()
	    {
		    Route::get('/', array('as' => 'admin', 'uses' => 'Admin\Admin@index'));

		    Route::group(array('prefix' => 'articles'), function()
		    {
			    Route::get('/', array('as' => 'admin.articles.index', 'uses' => 'Admin\Articles@index'));

			    Route::get('{id}/edit', array('as' => 'admin.articles.edit', 'uses' => 'Admin\Articles@edit'));

			    Route::patch('{id}', array('as' => 'admin.articles.update', 'uses' => 'Admin\Articles@update'));

			    Route::get('create', array('as' => 'admin.articles.create', 'uses' => 'Admin\Articles@create'));

			    Route::post('store', array('as' => 'admin.articles.store', 'uses' => 'Admin\Articles@store'));

			    Route::get('{id}/publish', array('as' => 'admin.articles.publish', 'uses' => 'Admin\Articles@publish'));

			    Route::get('{id}/unpublish', array('as' => 'admin.articles.unpublish', 'uses' => 'Admin\Articles@unpublish'));
		    });

		    Route::group(array('prefix' => 'pages'), function()
		    {
			    Route::get('/', array('as' => 'admin.pages.index', 'uses' => 'Admin\Pages@index'));

			    Route::get('{id}/edit', array('as' => 'admin.pages.edit', 'uses' => 'Admin\Pages@edit'));

			    Route::patch('{id}', array('as' => 'admin.pages.update', 'uses' => 'Admin\Pages@update'));

			    Route::get('create', array('as' => 'admin.pages.create', 'uses' => 'Admin\Pages@create'));

			    Route::post('store', array('as' => 'admin.pages.store', 'uses' => 'Admin\Pages@store'));
		    });

		    Route::group(array('prefix' => 'languages'), function()
		    {
			    Route::get('/', array('as' => 'admin.languages.index', 'uses' => 'Admin\Languages@index'));

			    Route::get('stats', array('as' => 'admin.languages.stats', 'uses' => 'Admin\Languages@stats'));

			    Route::get('translate', array('as' => 'admin.languages.translate', 'uses' => 'Admin\Languages@translate'));

			    Route::get('translation/next/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.next', 'uses' => 'Admin\Languages@next'));

			    Route::get('translation/edit/{message}/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.edit', 'uses' => 'Admin\Languages@edit'));

			    Route::post('translation/store/{message}/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.store', 'uses' => 'Admin\Languages@store'));

			    Route::get('show/{primary}/{secondary?}', array('as' => 'admin.languages.show', 'uses' => 'Admin\Languages@show'));

			    Route::get('{filter?}', array('as' => 'admin.languages.index', 'uses' => 'Admin\Languages@index'));

			    Route::get('{id}/enable', array('as' => 'admin.languages.enable', 'uses' => 'Admin\Languages@enableLanguage'));

			    Route::get('{id}/disable', array('as' => 'admin.languages.disable', 'uses' => 'Admin\Languages@disableLanguage'));

			    Route::get('messages/{messageId}/delete', array('as' => 'admin.languages.messages.delete', 'uses' => 'Admin\Languages@deleteMessage'));
		    });

		    Route::group(array('prefix' => 'tracker'), function()
		    {
			    Route::any('/', array('as' => 'admin.tracker.index', 'uses' => 'Admin\UsageTracker@index'));
			    
			    Route::get('log/{uuid}', array('as' => 'admin.tracker.log', 'uses' => 'Admin\UsageTracker@log'));

			    Route::get('api/pageviews', array('as' => 'admin.tracker.api.pageviews', 'uses' => 'Admin\UsageTracker@apiPageviews'));

			    Route::get('api/pageviewsbycountry', array('as' => 'admin.tracker.api.pageviewsbycountry', 'uses' => 'Admin\UsageTracker@apiPageviewsByCountry'));
		    });
	    });
	});
});

Route::get('keybase.txt', function() {

	return '==================================================================
			https://keybase.io/antonioribeiro
			--------------------------------------------------------------------

			I hereby claim:

			  * I am an admin of https://antoniocarlosribeiro.com
			  * I am antonioribeiro (https://keybase.io/antonioribeiro) on keybase.
			  * I have a public key with fingerprint 8E5E 0BAE 09D7 5F91 4E89  111F 5A6C 7BCA BBC9 E0F7

			To claim this, I am signing this object:

			{
			    "body": {
			        "key": {
			            "fingerprint": "8e5e0bae09d75f914e89111f5a6c7bcabbc9e0f7",
			            "host": "keybase.io",
			            "key_id": "5a6c7bcabbc9e0f7",
			            "uid": "e777b2152fdca1522977f0cec49d2d00",
			            "username": "antonioribeiro"
			        },
			        "service": {
			            "hostname": "antoniocarlosribeiro.com",
			            "protocol": "https:"
			        },
			        "type": "web_service_binding",
			        "version": 1
			    },
			    "ctime": 1405097787,
			    "expire_in": 157680000,
			    "prev": "197821018e9a7aa6078cb19f560394db1ff4197568df6880f93f6806a5279d9d",
			    "seqno": 5,
			    "tag": "signature"
			}

			with the aforementioned key, yielding the PGP signature:

			-----BEGIN PGP MESSAGE-----
			Version: Keybase OpenPGP v0.1.23
			Comment: https://keybase.io/crypto

			yMHwAnicbZFdSBRtFIB3zX+S7A8p0XIMpBCZWXfmnXe96Er7uTG0UiNZ5+ed9XV1
			ZpsZt0QXL0K7+b6wPiVFirCPLKlEiewjwZ8ikixCCMvyu1l2rUBLyw00zXfELoLm
			5jDnPOc5h/c8SdpkS7SnN5f9tVwairY/H4mutRUPp+TVU6Im11GuesqL1oOCVQ/S
			fTpWTcpF8YhFtCggGsqAVSDjRDxkGEZhBU4CoiSIogQRrQAqm6rUDKuDaETBQDlY
			Izny48Yyyf6Br10vIACA6GBYhyJLAgkOCIBCS0hyQtkh07QFGkhXhRpEaEE1NRVr
			OhYR1jUqkE2Rmh9LpFa/vsDvnCTo1ZqxQedIWg2x+XTN1CStmlCVpukzXJbFrPNZ
			bWeR6N4QukWsyuQpSIcf6QbWVMrFEFIysTWBcdIsTVblQTaFzvmwjtzYIljA8TT5
			rDnIT5QMBLyDoRkeQQEIAkcDXhIZqLAcnQudssgoipMwLMfLCsfztAJzSaQ5gXUA
			KEOZzDfQGVWjXCxZU/AQpYE9qmDW6ogKjA6fjrbZE22xMVHWMW2JCcm/TvwiK24l
			metrGkorDHrf/Nc4nzr0+FVa99PFANw2V3A//KE8WEEtTN1OnmkJf9p+6WTG3SOR
			v3tmDpWLHed7H1wMRk6VRcYr5r038/T9nQmL8Ke0q/ja8p7SjqMnbh3HrsBC078P
			b/gOHyxZCm5eCU0vtv+TubeNG8/qdx6YfTQWw8X3dwdKUnq73ke8c1dDTaNGAbt6
			paOl6OPWH3bWU8q8DX9ra703xqVfb27ouvxuIMM9kT/zur1guurr9/hBMNY72HMB
			HzO2LBmZA/xUnNAZ2meutkaNDNwZysx/OWm4/seVgOvraaz6XDPpL5xoS909mbTj
			y86iWPPZRMNs2FbkjKwB2y4lYQ==
			=MtLv
			-----END PGP MESSAGE-----

			And finally, I am proving ownership of this host by posting or
			appending to this document.

			View my publicly-auditable identity here: https://keybase.io/antonioribeiro

			==================================================================
	';
});
