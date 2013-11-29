<?php

use Illuminate\Database\Migrations\Migration;

class GlottosTableSeeds extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	  DB::table('glottos_domains')->insert(
						array( 
							  'name'=>'Application', 
							  'created_at' => new DateTime, 
							  'updated_at' => new DateTime
						    )
					  );


	   $glottos_countries_rows = array(
				array('id'=>'029', 'name'=>'Caribbean', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ae' , 'name'=>'U.A.E.', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'af' , 'name'=>'Afghanistan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'al' , 'name'=>'Albania', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'am' , 'name'=>'Armenia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ar' , 'name'=>'Argentina', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'at' , 'name'=>'Austria', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'au' , 'name'=>'Australia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'az' , 'name'=>'Azerbaijan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ba' , 'name'=>'Bosnia and Herzegovina', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bd' , 'name'=>'Bangladesh', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'be' , 'name'=>'Belgium', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bg' , 'name'=>'Bulgaria', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bh' , 'name'=>'Bahrain', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bn' , 'name'=>'Brunei Darussalam', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bo' , 'name'=>'Bolivia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'br' , 'name'=>'Brazil', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'by' , 'name'=>'Belarus', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bz' , 'name'=>'Belize', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ca' , 'name'=>'Canada', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ch' , 'name'=>'Switzerland', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'cl' , 'name'=>'Chile', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'cn' , 'name'=>'People\'s Republic of China', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'co' , 'name'=>'Colombia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'cr' , 'name'=>'Costa Rica', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'cs' , 'name'=>'Serbia and Montenegro (Former)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'cz' , 'name'=>'Czech Republic', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'de' , 'name'=>'Germany', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'dk' , 'name'=>'Denmark', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'do' , 'name'=>'Dominican Republic', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'dz' , 'name'=>'Algeria', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ec' , 'name'=>'Ecuador', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ee' , 'name'=>'Estonia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'eg' , 'name'=>'Egypt', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'es' , 'name'=>'Spain', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'et' , 'name'=>'Ethiopia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fi' , 'name'=>'Finland', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fo' , 'name'=>'Faroe Islands', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fr' , 'name'=>'France', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gb' , 'name'=>'United Kingdom', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ge' , 'name'=>'Georgia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gl' , 'name'=>'Greenland', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gr' , 'name'=>'Greece', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gt' , 'name'=>'Guatemala', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hk' , 'name'=>'Hong Kong S.A.R.', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hn' , 'name'=>'Honduras', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hr' , 'name'=>'Croatia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hu' , 'name'=>'Hungary', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'id' , 'name'=>'Indonesia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ie' , 'name'=>'Ireland', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'il' , 'name'=>'Israel', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'in' , 'name'=>'India', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'iq' , 'name'=>'Iraq', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ir' , 'name'=>'Iran', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'is' , 'name'=>'Iceland', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'it' , 'name'=>'Italy', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'jm' , 'name'=>'Jamaica', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'jo' , 'name'=>'Jordan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'jp' , 'name'=>'Japan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ke' , 'name'=>'Kenya', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kg' , 'name'=>'Kyrgyzstan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kh' , 'name'=>'Cambodia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kr' , 'name'=>'Korea', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kw' , 'name'=>'Kuwait', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kz' , 'name'=>'Kazakhstan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'la' , 'name'=>'Lao P.D.R.', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lb' , 'name'=>'Lebanon', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'li' , 'name'=>'Liechtenstein', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lk' , 'name'=>'Sri Lanka', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lt' , 'name'=>'Lithuania', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lu' , 'name'=>'Luxembourg', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lv' , 'name'=>'Latvia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ly' , 'name'=>'Libya', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ma' , 'name'=>'Morocco', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mc' , 'name'=>'Principality of Monaco', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'me' , 'name'=>'Montenegro', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mk' , 'name'=>'Macedonia (FYROM)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mn' , 'name'=>'Mongolia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mo' , 'name'=>'Macao S.A.R.', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mt' , 'name'=>'Malta', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mv' , 'name'=>'Maldives', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mx' , 'name'=>'Mexico', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'my' , 'name'=>'Malaysia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ng' , 'name'=>'Nigeria', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ni' , 'name'=>'Nicaragua', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'nl' , 'name'=>'Netherlands', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'no' , 'name'=>'Norway', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'np' , 'name'=>'Nepal', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'nz' , 'name'=>'New Zealand', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'om' , 'name'=>'Oman', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pa' , 'name'=>'Panama', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pe' , 'name'=>'Peru', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ph' , 'name'=>'Republic of the Philippines', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pk' , 'name'=>'Islamic Republic of Pakistan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pl' , 'name'=>'Poland', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pr' , 'name'=>'Puerto Rico', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pt' , 'name'=>'Portugal', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'py' , 'name'=>'Paraguay', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'qa' , 'name'=>'Qatar', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ro' , 'name'=>'Romania', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'rs' , 'name'=>'Serbia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ru' , 'name'=>'Russia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'rw' , 'name'=>'Rwanda', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sa' , 'name'=>'Saudi Arabia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'se' , 'name'=>'Sweden', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sg' , 'name'=>'Singapore', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'si' , 'name'=>'Slovenia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sk' , 'name'=>'Slovakia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sn' , 'name'=>'Senegal', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sv' , 'name'=>'El Salvador', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sy' , 'name'=>'Syria', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'th' , 'name'=>'Thailand', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tj' , 'name'=>'Tajikistan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tm' , 'name'=>'Turkmenistan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tn' , 'name'=>'Tunisia', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tr' , 'name'=>'Turkey', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tt' , 'name'=>'Trinidad and Tobago', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tw' , 'name'=>'Taiwan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ua' , 'name'=>'Ukraine', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'us' , 'name'=>'United States', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'uy' , 'name'=>'Uruguay', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'uz' , 'name'=>'Uzbekistan', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ve' , 'name'=>'Bolivarian Republic of Venezuela', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'vn' , 'name'=>'Vietnam', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ye' , 'name'=>'Yemen', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'za' , 'name'=>'South Africa', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'zw' , 'name'=>'Zimbabwe', 'created_at' => new DateTime, 'updated_at' => new DateTime),
	  );

	  DB::table('glottos_countries')->insert($glottos_countries_rows);



	  $glottos_languages_rows = array(
				array('id'=>'af', 'name'=>'Afrikaans', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'am', 'name'=>'Amharic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ar', 'name'=>'Arabic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'arn', 'name'=>'Mapudungun', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'as', 'name'=>'Assamese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'az', 'name'=>'Azeri', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'az', 'name'=>'Azeri', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ba', 'name'=>'Bashkir', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'be', 'name'=>'Belarusian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bg', 'name'=>'Bulgarian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bn', 'name'=>'Bengali', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bo', 'name'=>'Tibetan', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'br', 'name'=>'Breton', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bs', 'name'=>'Bosnian', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'bs', 'name'=>'Bosnian', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ca', 'name'=>'Catalan', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'co', 'name'=>'Corsican', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'cs', 'name'=>'Czech', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'cy', 'name'=>'Welsh', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'da', 'name'=>'Danish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'de', 'name'=>'German', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'dsb', 'name'=>'Lower Sorbian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'dv', 'name'=>'Divehi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'el', 'name'=>'Greek', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'en', 'name'=>'English', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'es', 'name'=>'Spanish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'et', 'name'=>'Estonian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'eu', 'name'=>'Basque', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fa', 'name'=>'Persian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fi', 'name'=>'Finnish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fil', 'name'=>'Filipino', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fo', 'name'=>'Faroese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fr', 'name'=>'French', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'fy', 'name'=>'Frisian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ga', 'name'=>'Irish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gd', 'name'=>'Scottish Gaelic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gl', 'name'=>'Galician', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gsw', 'name'=>'Alsatian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'gu', 'name'=>'Gujarati', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ha', 'name'=>'Hausa (Latin)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'he', 'name'=>'Hebrew', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hi', 'name'=>'Hindi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hr', 'name'=>'Croatian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hsb', 'name'=>'Upper Sorbian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hu', 'name'=>'Hungarian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'hy', 'name'=>'Armenian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'id', 'name'=>'Indonesian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ig', 'name'=>'Igbo', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ii', 'name'=>'Yi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'is', 'name'=>'Icelandic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'it', 'name'=>'Italian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'iu', 'name'=>'Inuktitut', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'iu', 'name'=>'Inuktitut', 'alphabet' => 'Syllabics', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ja', 'name'=>'Japanese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ka', 'name'=>'Georgian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kk', 'name'=>'Kazakh', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kl', 'name'=>'Greenlandic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'km', 'name'=>'Khmer', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kn', 'name'=>'Kannada', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ko', 'name'=>'Korean', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'kok', 'name'=>'Konkani', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ky', 'name'=>'Kyrgyz', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lb', 'name'=>'Luxembourgish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lo', 'name'=>'Lao', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lt', 'name'=>'Lithuanian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'lv', 'name'=>'Latvian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mi', 'name'=>'Maori', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mk', 'name'=>'Macedonian (FYROM)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ml', 'name'=>'Malayalam', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mn', 'name'=>'Mongolian', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mn', 'name'=>'Mongolian', 'alphabet' => 'Traditional Mongolian', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'moh', 'name'=>'Mohawk', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mr', 'name'=>'Marathi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ms', 'name'=>'Malay', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'mt', 'name'=>'Maltese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'nb', 'name'=>'Norwegian (Bokmal)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ne', 'name'=>'Nepali', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'nl', 'name'=>'Dutch', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'nn', 'name'=>'Norwegian (Nynorsk)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'nso', 'name'=>'Sesotho sa Leboa', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'oc', 'name'=>'Occitan', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'or', 'name'=>'Oriya', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pa', 'name'=>'Punjabi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pl', 'name'=>'Polish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ps', 'name'=>'Pashto', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'pt', 'name'=>'Portuguese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'qut', 'name'=>'K\'iche', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'quz', 'name'=>'Quechua', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'rm', 'name'=>'Romansh', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ro', 'name'=>'Romanian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ru', 'name'=>'Russian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'rw', 'name'=>'Kinyarwanda', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sa', 'name'=>'Sanskrit', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sah', 'name'=>'Yakut', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'se', 'name'=>'Sami (Northern)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'si', 'name'=>'Sinhala', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sk', 'name'=>'Slovak', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sl', 'name'=>'Slovenian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sma', 'name'=>'Sami (Southern)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'smj', 'name'=>'Sami (Lule)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'smn', 'name'=>'Sami (Inari)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sms', 'name'=>'Sami (Skolt)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sq', 'name'=>'Albanian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sr', 'name'=>'Serbian', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sr', 'name'=>'Serbian', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sv', 'name'=>'Swedish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'sw', 'name'=>'Kiswahili', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'syr', 'name'=>'Syriac', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ta', 'name'=>'Tamil', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'te', 'name'=>'Telugu', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tg', 'name'=>'Tajik (Cyrillic)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'th', 'name'=>'Thai', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tk', 'name'=>'Turkmen', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tn', 'name'=>'Setswana', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tr', 'name'=>'Turkish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tt', 'name'=>'Tatar', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'tzm', 'name'=>'Tamazight (Latin)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ug', 'name'=>'Uyghur', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'uk', 'name'=>'Ukrainian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'ur', 'name'=>'Urdu', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'uz', 'name'=>'Uzbek', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'uz', 'name'=>'Uzbek', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'vi', 'name'=>'Vietnamese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'wo', 'name'=>'Wolof', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'xh', 'name'=>'isiXhosa', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'yo', 'name'=>'Yoruba', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'zh', 'name'=>'Chinese', 'alphabet' => 'Simplified', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'zh', 'name'=>'Chinese', 'alphabet' => 'Traditional', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('id'=>'zu', 'name'=>'isiZulu', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			  );

	  DB::table('glottos_languages')->insert($glottos_languages_rows);




	  $glottos_countries_languages_rows = array(
				array('language_id'=>'ps', 'country_id'=>'af', 'regional_name'=>'Pashto (Afghanistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sq', 'country_id'=>'al', 'regional_name'=>'Albanian (Albania)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'dz', 'regional_name'=>'Arabic (Algeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'tzm', 'country_id'=>'dz', 'regional_name'=>'Tamazight (Latin) (Algeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'ar', 'regional_name'=>'Spanish (Argentina)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'hy', 'country_id'=>'am', 'regional_name'=>'Armenian (Armenia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'au', 'regional_name'=>'English (Australia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'de', 'country_id'=>'at', 'regional_name'=>'German (Austria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'az', 'country_id'=>'az', 'regional_name'=>'Azeri (Latin) (Azerbaijan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'bh', 'regional_name'=>'Arabic (Bahrain)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'bn', 'country_id'=>'bd', 'regional_name'=>'Bengali (Bangladesh)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'be', 'country_id'=>'by', 'regional_name'=>'Belarusian (Belarus)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'nl', 'country_id'=>'be', 'regional_name'=>'Dutch (Belgium)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fr', 'country_id'=>'be', 'regional_name'=>'French (Belgium)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'bz', 'regional_name'=>'English (Belize)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'ve', 'regional_name'=>'Spanish (Bolivarian Republic of Venezuela)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'quz', 'country_id'=>'bo', 'regional_name'=>'Quechua (Bolivia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'bo', 'regional_name'=>'Spanish (Bolivia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'bs', 'country_id'=>'ba', 'regional_name'=>'Bosnian (Latin) (Bosnia and Herzegovina)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'hr', 'country_id'=>'ba', 'regional_name'=>'Croatian (Bosnia and Herzegovina)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sr', 'country_id'=>'ba', 'regional_name'=>'Serbian (Latin) (Bosnia and Herzegovina)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'pt', 'country_id'=>'br', 'regional_name'=>'Portuguese (Brazil)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ms', 'country_id'=>'bn', 'regional_name'=>'Malay (Brunei Darussalam)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'bg', 'country_id'=>'bg', 'regional_name'=>'Bulgarian (Bulgaria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'km', 'country_id'=>'kh', 'regional_name'=>'Khmer (Cambodia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'ca', 'regional_name'=>'English (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fr', 'country_id'=>'ca', 'regional_name'=>'French (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'iu', 'country_id'=>'ca', 'regional_name'=>'Inuktitut (Syllabics) (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'moh', 'country_id'=>'ca', 'regional_name'=>'Mohawk (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'029', 'regional_name'=>'English (Caribbean)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'arn', 'country_id'=>'cl', 'regional_name'=>'Mapudungun (Chile)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'cl', 'regional_name'=>'Spanish (Chile)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'co', 'regional_name'=>'Spanish (Colombia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'cr', 'regional_name'=>'Spanish (Costa Rica)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'hr', 'country_id'=>'hr', 'regional_name'=>'Croatian (Croatia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'cs', 'country_id'=>'cz', 'regional_name'=>'Czech (Czech Republic)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'da', 'country_id'=>'dk', 'regional_name'=>'Danish (Denmark)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'do', 'regional_name'=>'Spanish (Dominican Republic)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'quz', 'country_id'=>'ec', 'regional_name'=>'Quechua (Ecuador)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'ec', 'regional_name'=>'Spanish (Ecuador)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'eg', 'regional_name'=>'Arabic (Egypt)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'sv', 'regional_name'=>'Spanish (El Salvador)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'et', 'country_id'=>'ee', 'regional_name'=>'Estonian (Estonia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'am', 'country_id'=>'et', 'regional_name'=>'Amharic (Ethiopia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fo', 'country_id'=>'fo', 'regional_name'=>'Faroese (Faroe Islands)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fi', 'country_id'=>'fi', 'regional_name'=>'Finnish (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'smn', 'country_id'=>'fi', 'regional_name'=>'Sami (Inari) (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'se', 'country_id'=>'fi', 'regional_name'=>'Sami (Northern) (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sms', 'country_id'=>'fi', 'regional_name'=>'Sami (Skolt) (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sv', 'country_id'=>'fi', 'regional_name'=>'Swedish (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'gsw', 'country_id'=>'fr', 'regional_name'=>'Alsatian (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'br', 'country_id'=>'fr', 'regional_name'=>'Breton (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'co', 'country_id'=>'fr', 'regional_name'=>'Corsican (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fr', 'country_id'=>'fr', 'regional_name'=>'French (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'oc', 'country_id'=>'fr', 'regional_name'=>'Occitan (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ka', 'country_id'=>'ge', 'regional_name'=>'Georgian (Georgia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'de', 'country_id'=>'de', 'regional_name'=>'German (Germany)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'dsb', 'country_id'=>'de', 'regional_name'=>'Lower Sorbian (Germany)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'hsb', 'country_id'=>'de', 'regional_name'=>'Upper Sorbian (Germany)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'el', 'country_id'=>'gr', 'regional_name'=>'Greek (Greece)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'kl', 'country_id'=>'gl', 'regional_name'=>'Greenlandic (Greenland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'qut', 'country_id'=>'gt', 'regional_name'=>'K\'iche (Guatemala)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'gt', 'regional_name'=>'Spanish (Guatemala)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'hn', 'regional_name'=>'Spanish (Honduras)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'zh', 'country_id'=>'hk', 'regional_name'=>'Chinese (Traditional) Legacy (Hong Kong S.A.R.)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'hu', 'country_id'=>'hu', 'regional_name'=>'Hungarian (Hungary)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'is', 'country_id'=>'is', 'regional_name'=>'Icelandic (Iceland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'as', 'country_id'=>'in', 'regional_name'=>'Assamese (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'bn', 'country_id'=>'in', 'regional_name'=>'Bengali (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'in', 'regional_name'=>'English (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'gu', 'country_id'=>'in', 'regional_name'=>'Gujarati (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'hi', 'country_id'=>'in', 'regional_name'=>'Hindi (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'kn', 'country_id'=>'in', 'regional_name'=>'Kannada (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'kok', 'country_id'=>'in', 'regional_name'=>'Konkani (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ml', 'country_id'=>'in', 'regional_name'=>'Malayalam (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'mr', 'country_id'=>'in', 'regional_name'=>'Marathi (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'or', 'country_id'=>'in', 'regional_name'=>'Oriya (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'pa', 'country_id'=>'in', 'regional_name'=>'Punjabi (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sa', 'country_id'=>'in', 'regional_name'=>'Sanskrit (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ta', 'country_id'=>'in', 'regional_name'=>'Tamil (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'te', 'country_id'=>'in', 'regional_name'=>'Telugu (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'id', 'country_id'=>'id', 'regional_name'=>'Indonesian (Indonesia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fa', 'country_id'=>'ir', 'regional_name'=>'Persian (Iran)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'iq', 'regional_name'=>'Arabic (Iraq)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'ie', 'regional_name'=>'English (Ireland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ga', 'country_id'=>'ie', 'regional_name'=>'Irish (Ireland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ur', 'country_id'=>'pk', 'regional_name'=>'Urdu (Islamic Republic of Pakistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'he', 'country_id'=>'il', 'regional_name'=>'Hebrew (Israel)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'it', 'country_id'=>'it', 'regional_name'=>'Italian (Italy)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'jm', 'regional_name'=>'English (Jamaica)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ja', 'country_id'=>'jp', 'regional_name'=>'Japanese (Japan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'jo', 'regional_name'=>'Arabic (Jordan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'kk', 'country_id'=>'kz', 'regional_name'=>'Kazakh (Kazakhstan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sw', 'country_id'=>'ke', 'regional_name'=>'Kiswahili (Kenya)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ko', 'country_id'=>'kr', 'regional_name'=>'Korean (Korea)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'kw', 'regional_name'=>'Arabic (Kuwait)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ky', 'country_id'=>'kg', 'regional_name'=>'Kyrgyz (Kyrgyzstan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'lo', 'country_id'=>'la', 'regional_name'=>'Lao (Lao P.D.R.)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'lv', 'country_id'=>'lv', 'regional_name'=>'Latvian (Latvia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'lb', 'regional_name'=>'Arabic (Lebanon)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'ly', 'regional_name'=>'Arabic (Libya)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'de', 'country_id'=>'li', 'regional_name'=>'German (Liechtenstein)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'lt', 'country_id'=>'lt', 'regional_name'=>'Lithuanian (Lithuania)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fr', 'country_id'=>'lu', 'regional_name'=>'French (Luxembourg)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'de', 'country_id'=>'lu', 'regional_name'=>'German (Luxembourg)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'lb', 'country_id'=>'lu', 'regional_name'=>'Luxembourgish (Luxembourg)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'zh', 'country_id'=>'mo', 'regional_name'=>'Chinese (Traditional) Legacy (Macao S.A.R.)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'mk', 'country_id'=>'mk', 'regional_name'=>'Macedonian (FYROM) (Macedonia (FYROM))', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'my', 'regional_name'=>'English (Malaysia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ms', 'country_id'=>'my', 'regional_name'=>'Malay (Malaysia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'dv', 'country_id'=>'mv', 'regional_name'=>'Divehi (Maldives)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'mt', 'country_id'=>'mt', 'regional_name'=>'Maltese (Malta)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'mx', 'regional_name'=>'Spanish (Mexico)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'mn', 'country_id'=>'mn', 'regional_name'=>'Mongolian (Cyrillic) (Mongolia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sr', 'country_id'=>'me', 'regional_name'=>'Serbian (Latin) (Montenegro)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'ma', 'regional_name'=>'Arabic (Morocco)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ne', 'country_id'=>'np', 'regional_name'=>'Nepali (Nepal)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'nl', 'country_id'=>'nl', 'regional_name'=>'Dutch (Netherlands)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fy', 'country_id'=>'nl', 'regional_name'=>'Frisian (Netherlands)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'nz', 'regional_name'=>'English (New Zealand)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'mi', 'country_id'=>'nz', 'regional_name'=>'Maori (New Zealand)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'ni', 'regional_name'=>'Spanish (Nicaragua)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ha', 'country_id'=>'ng', 'regional_name'=>'Hausa (Latin) (Nigeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ig', 'country_id'=>'ng', 'regional_name'=>'Igbo (Nigeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'yo', 'country_id'=>'ng', 'regional_name'=>'Yoruba (Nigeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'nb', 'country_id'=>'no', 'regional_name'=>'Norwegian (Bokmal) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'nn', 'country_id'=>'no', 'regional_name'=>'Norwegian (Nynorsk) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'smj', 'country_id'=>'no', 'regional_name'=>'Sami (Lule) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'se', 'country_id'=>'no', 'regional_name'=>'Sami (Northern) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sma', 'country_id'=>'no', 'regional_name'=>'Sami (Southern) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'om', 'regional_name'=>'Arabic (Oman)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'pa', 'regional_name'=>'Spanish (Panama)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'py', 'regional_name'=>'Spanish (Paraguay)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'zh', 'country_id'=>'cn', 'regional_name'=>'Chinese (Simplified) Legacy (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'mn', 'country_id'=>'cn', 'regional_name'=>'Mongolian (Traditional Mongolian) (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'bo', 'country_id'=>'cn', 'regional_name'=>'Tibetan (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ug', 'country_id'=>'cn', 'regional_name'=>'Uyghur (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ii', 'country_id'=>'cn', 'regional_name'=>'Yi (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'quz', 'country_id'=>'pe', 'regional_name'=>'Quechua (Peru)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'pe', 'regional_name'=>'Spanish (Peru)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fil', 'country_id'=>'ph', 'regional_name'=>'Filipino (Philippines)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'pl', 'country_id'=>'pl', 'regional_name'=>'Polish (Poland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'pt', 'country_id'=>'pt', 'regional_name'=>'Portuguese (Portugal)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fr', 'country_id'=>'mc', 'regional_name'=>'French (Principality of Monaco)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'pr', 'regional_name'=>'Spanish (Puerto Rico)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'qa', 'regional_name'=>'Arabic (Qatar)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'ph', 'regional_name'=>'English (Republic of the Philippines)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ro', 'country_id'=>'ro', 'regional_name'=>'Romanian (Romania)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ba', 'country_id'=>'ru', 'regional_name'=>'Bashkir (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ru', 'country_id'=>'ru', 'regional_name'=>'Russian (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'tt', 'country_id'=>'ru', 'regional_name'=>'Tatar (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sah', 'country_id'=>'ru', 'regional_name'=>'Yakut (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'rw', 'country_id'=>'rw', 'regional_name'=>'Kinyarwanda (Rwanda)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'sa', 'regional_name'=>'Arabic (Saudi Arabia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'wo', 'country_id'=>'sn', 'regional_name'=>'Wolof (Senegal)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sr', 'country_id'=>'rs', 'regional_name'=>'Serbian (Latin) (Serbia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sr', 'country_id'=>'cs', 'regional_name'=>'Serbian (Latin) (Serbia and Montenegro (Former))', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'zh', 'country_id'=>'sg', 'regional_name'=>'Chinese (Simplified) Legacy (Singapore)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'sg', 'regional_name'=>'English (Singapore)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sk', 'country_id'=>'sk', 'regional_name'=>'Slovak (Slovakia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sl', 'country_id'=>'si', 'regional_name'=>'Slovenian (Slovenia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'af', 'country_id'=>'za', 'regional_name'=>'Afrikaans (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'za', 'regional_name'=>'English (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'xh', 'country_id'=>'za', 'regional_name'=>'isiXhosa (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'zu', 'country_id'=>'za', 'regional_name'=>'isiZulu (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'nso', 'country_id'=>'za', 'regional_name'=>'Sesotho sa Leboa (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'tn', 'country_id'=>'za', 'regional_name'=>'Setswana (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'eu', 'country_id'=>'es', 'regional_name'=>'Basque (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ca', 'country_id'=>'es', 'regional_name'=>'Catalan (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'gl', 'country_id'=>'es', 'regional_name'=>'Galician (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'es', 'regional_name'=>'Spanish (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'si', 'country_id'=>'lk', 'regional_name'=>'Sinhala (Sri Lanka)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'smj', 'country_id'=>'se', 'regional_name'=>'Sami (Lule) (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'se', 'country_id'=>'se', 'regional_name'=>'Sami (Northern) (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sma', 'country_id'=>'se', 'regional_name'=>'Sami (Southern) (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'sv', 'country_id'=>'se', 'regional_name'=>'Swedish (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'fr', 'country_id'=>'ch', 'regional_name'=>'French (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'de', 'country_id'=>'ch', 'regional_name'=>'German (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'it', 'country_id'=>'ch', 'regional_name'=>'Italian (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'rm', 'country_id'=>'ch', 'regional_name'=>'Romansh (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'sy', 'regional_name'=>'Arabic (Syria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'syr', 'country_id'=>'sy', 'regional_name'=>'Syriac (Syria)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'zh', 'country_id'=>'tw', 'regional_name'=>'Chinese (Traditional) Legacy (Taiwan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'tg', 'country_id'=>'tj', 'regional_name'=>'Tajik (Cyrillic) (Tajikistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'th', 'country_id'=>'th', 'regional_name'=>'Thai (Thailand)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'tt', 'regional_name'=>'English (Trinidad and Tobago)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'tn', 'regional_name'=>'Arabic (Tunisia)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'tr', 'country_id'=>'tr', 'regional_name'=>'Turkish (Turkey)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'tk', 'country_id'=>'tm', 'regional_name'=>'Turkmen (Turkmenistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'ae', 'regional_name'=>'Arabic (U.A.E.)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'uk', 'country_id'=>'ua', 'regional_name'=>'Ukrainian (Ukraine)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'gb', 'regional_name'=>'English (United Kingdom)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'gd', 'country_id'=>'gb', 'regional_name'=>'Scottish Gaelic (United Kingdom)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'cy', 'country_id'=>'gb', 'regional_name'=>'Welsh (United Kingdom)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'us', 'regional_name'=>'English (United States)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'us', 'regional_name'=>'Spanish (United States)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'es', 'country_id'=>'uy', 'regional_name'=>'Spanish (Uruguay)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'uz', 'country_id'=>'uz', 'regional_name'=>'Uzbek (Latin) (Uzbekistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'vi', 'country_id'=>'vn', 'regional_name'=>'Vietnamese (Vietnam)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'ar', 'country_id'=>'ye', 'regional_name'=>'Arabic (Yemen)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
				array('language_id'=>'en', 'country_id'=>'zw', 'regional_name'=>'English (Zimbabwe)', 'created_at' => new DateTime, 'updated_at' => new DateTime),
			  );


		// First insert all languages without country as regional languages

		foreach($glottos_languages_rows as $language)
		{
			if(! DB::table('glottos_countries_languages')->where('language_id', $language['id'])->where('country_id', '')->get())
			{
				DB::table('glottos_countries_languages')->insert(
													array(
															'language_id' => $language['id'], 
															'country_id' => '', 
															'regional_name' => $language['name'], 
															'created_at' => new DateTime, 
															'updated_at' => new DateTime
														)
												);
			}
		}

		// Then insert all the others

		DB::table('glottos_countries_languages')->insert($glottos_countries_languages_rows);

		// And enable 2 of them by default

		DB::table('glottos_countries_languages')->where('language_id', 'pt')->where('country_id', 'br')->update(array('enabled' => true));

		DB::table('glottos_countries_languages')->where('language_id', 'en')->where('country_id', '')->update(array('enabled' => true));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	  DB::table('glottos_domains')->truncate();
	  DB::table('glottos_countries')->truncate();
	  DB::table('glottos_countries_languages')->truncate();
	  DB::table('glottos_languages')->truncate();
    }

}

/*

!TODO!

CULTURE   SPEC.CULTURE  ENGLISH NAME
--------------------------------------------------------------
Invariant Language (Invariant Country)
af          af-ZA       Afrikaans
af-ZA       af-ZA       Afrikaans (South Africa)
ar          ar-SA       Arabic
ar-AE       ar-AE       Arabic (U.A.E.)
ar-BH       ar-BH       Arabic (Bahrain)
ar-DZ       ar-DZ       Arabic (Algeria)
ar-EG       ar-EG       Arabic (Egypt)
ar-IQ       ar-IQ       Arabic (Iraq)
ar-JO       ar-JO       Arabic (Jordan)
ar-KW       ar-KW       Arabic (Kuwait)
ar-LB       ar-LB       Arabic (Lebanon)
ar-LY       ar-LY       Arabic (Libya)
ar-MA       ar-MA       Arabic (Morocco)
ar-OM       ar-OM       Arabic (Oman)
ar-QA       ar-QA       Arabic (Qatar)
ar-SA       ar-SA       Arabic (Saudi Arabia)
ar-SY       ar-SY       Arabic (Syria)
ar-TN       ar-TN       Arabic (Tunisia)
ar-YE       ar-YE       Arabic (Yemen)
az          az-Latn-AZ  Azeri
az-Cyrl-AZ  az-Cyrl-AZ  Azeri (Cyrillic, Azerbaijan)
az-Latn-AZ  az-Latn-AZ  Azeri (Latin, Azerbaijan)
be          be-BY       Belarusian
be-BY       be-BY       Belarusian (Belarus)
bg          bg-BG       Bulgarian
bg-BG       bg-BG       Bulgarian (Bulgaria)
bs-Latn-BA  bs-Latn-BA  Bosnian (Bosnia and Herzegovina)
ca          ca-ES       Catalan
ca-ES       ca-ES       Catalan (Catalan)
cs          cs-CZ       Czech
cs-CZ       cs-CZ       Czech (Czech Republic)
cy-GB       cy-GB       Welsh (United Kingdom)
da          da-DK       Danish
da-DK       da-DK       Danish (Denmark)
de          de-DE       German
de-AT       de-AT       German (Austria)
de-DE       de-DE       German (Germany)
de-CH       de-CH       German (Switzerland)
de-LI       de-LI       German (Liechtenstein)
de-LU       de-LU       German (Luxembourg)
dv          dv-MV       Divehi
dv-MV       dv-MV       Divehi (Maldives)
el          el-GR       Greek
el-GR       el-GR       Greek (Greece)
en          en-US       English
en-029      en-029      English (Caribbean)
en-AU       en-AU       English (Australia)
en-BZ       en-BZ       English (Belize)
en-CA       en-CA       English (Canada)
en-GB       en-GB       English (United Kingdom)
en-IE       en-IE       English (Ireland)
en-JM       en-JM       English (Jamaica)
en-NZ       en-NZ       English (New Zealand)
en-PH       en-PH       English (Republic of the Philippines)
en-TT       en-TT       English (Trinidad and Tobago)
en-US       en-US       English (United States)
en-ZA       en-ZA       English (South Africa)
en-ZW       en-ZW       English (Zimbabwe)
es          es-ES       Spanish
es-AR       es-AR       Spanish (Argentina)
es-BO       es-BO       Spanish (Bolivia)
es-CL       es-CL       Spanish (Chile)
es-CO       es-CO       Spanish (Colombia)
es-CR       es-CR       Spanish (Costa Rica)
es-DO       es-DO       Spanish (Dominican Republic)
es-EC       es-EC       Spanish (Ecuador)
es-ES       es-ES       Spanish (Spain)
es-GT       es-GT       Spanish (Guatemala)
es-HN       es-HN       Spanish (Honduras)
es-MX       es-MX       Spanish (Mexico)
es-NI       es-NI       Spanish (Nicaragua)
es-PA       es-PA       Spanish (Panama)
es-PE       es-PE       Spanish (Peru)
es-PR       es-PR       Spanish (Puerto Rico)
es-PY       es-PY       Spanish (Paraguay)
es-SV       es-SV       Spanish (El Salvador)
es-UY       es-UY       Spanish (Uruguay)
es-VE       es-VE       Spanish (Venezuela)
et          et-EE       Estonian
et-EE       et-EE       Estonian (Estonia)
eu          eu-ES       Basque
eu-ES       eu-ES       Basque (Basque)
fa          fa-IR       Persian
fa-IR       fa-IR       Persian (Iran)
fi          fi-FI       Finnish
fi-FI       fi-FI       Finnish (Finland)
fo          fo-FO       Faroese
fo-FO       fo-FO       Faroese (Faroe Islands)
fr          fr-FR       French
fr-BE       fr-BE       French (Belgium)
fr-CA       fr-CA       French (Canada)
fr-FR       fr-FR       French (France)
fr-CH       fr-CH       French (Switzerland)
fr-LU       fr-LU       French (Luxembourg)
fr-MC       fr-MC       French (Principality of Monaco)
gl          gl-ES       Galician
gl-ES       gl-ES       Galician (Galician)
gu          gu-IN       Gujarati
gu-IN       gu-IN       Gujarati (India)
he          he-IL       Hebrew
he-IL       he-IL       Hebrew (Israel)
hi          hi-IN       Hindi
hi-IN       hi-IN       Hindi (India)
hr          hr-HR       Croatian
hr-BA       hr-BA       Croatian (Bosnia and Herzegovina)
hr-HR       hr-HR       Croatian (Croatia)
hu          hu-HU       Hungarian
hu-HU       hu-HU       Hungarian (Hungary)
hy          hy-AM       Armenian
hy-AM       hy-AM       Armenian (Armenia)
id          id-ID       Indonesian
id-ID       id-ID       Indonesian (Indonesia)
is          is-IS       Icelandic
is-IS       is-IS       Icelandic (Iceland)
it          it-IT       Italian
it-CH       it-CH       Italian (Switzerland)
it-IT       it-IT       Italian (Italy)
ja          ja-JP       Japanese
ja-JP       ja-JP       Japanese (Japan)
ka          ka-GE       Georgian
ka-GE       ka-GE       Georgian (Georgia)
kk          kk-KZ       Kazakh
kk-KZ       kk-KZ       Kazakh (Kazakhstan)
kn          kn-IN       Kannada
kn-IN       kn-IN       Kannada (India)
ko          ko-KR       Korean
kok         kok-IN      Konkani
kok-IN      kok-IN      Konkani (India)
ko-KR       ko-KR       Korean (Korea)
ky          ky-KG       Kyrgyz
ky-KG       ky-KG       Kyrgyz (Kyrgyzstan)
lt          lt-LT       Lithuanian
lt-LT       lt-LT       Lithuanian (Lithuania)
lv          lv-LV       Latvian
lv-LV       lv-LV       Latvian (Latvia)
mi-NZ       mi-NZ       Maori (New Zealand)
mk          mk-MK       Macedonian
mk-MK       mk-MK       Macedonian (Former Yugoslav Republic of Macedonia)
mn          mn-MN       Mongolian
mn-MN       mn-MN       Mongolian (Cyrillic, Mongolia)
mr          mr-IN       Marathi
mr-IN       mr-IN       Marathi (India)
ms          ms-MY       Malay
ms-BN       ms-BN       Malay (Brunei Darussalam)
ms-MY       ms-MY       Malay (Malaysia)
mt-MT       mt-MT       Maltese (Malta)
nb-NO       nb-NO       Norwegian, Bokmal (Norway)
nl          nl-NL       Dutch
nl-BE       nl-BE       Dutch (Belgium)
nl-NL       nl-NL       Dutch (Netherlands)
nn-NO       nn-NO       Norwegian, Nynorsk (Norway)
no          nb-NO       Norwegian
ns-ZA       ns-ZA       Northern Sotho (South Africa)
pa          pa-IN       Punjabi
pa-IN       pa-IN       Punjabi (India)
pl          pl-PL       Polish
pl-PL       pl-PL       Polish (Poland)
pt          pt-BR       Portuguese
pt-BR       pt-BR       Portuguese (Brazil)
pt-PT       pt-PT       Portuguese (Portugal)
quz-BO      quz-BO      Quechua (Bolivia)
quz-EC      quz-EC      Quechua (Ecuador)
quz-PE      quz-PE      Quechua (Peru)
ro          ro-RO       Romanian
ro-RO       ro-RO       Romanian (Romania)
ru          ru-RU       Russian
ru-RU       ru-RU       Russian (Russia)
sa          sa-IN       Sanskrit
sa-IN       sa-IN       Sanskrit (India)
se-FI       se-FI       Sami (Northern) (Finland)
se-NO       se-NO       Sami (Northern) (Norway)
se-SE       se-SE       Sami (Northern) (Sweden)
sk          sk-SK       Slovak
sk-SK       sk-SK       Slovak (Slovakia)
sl          sl-SI       Slovenian
sl-SI       sl-SI       Slovenian (Slovenia)
sma-NO      sma-NO      Sami (Southern) (Norway)
sma-SE      sma-SE      Sami (Southern) (Sweden)
smj-NO      smj-NO      Sami (Lule) (Norway)
smj-SE      smj-SE      Sami (Lule) (Sweden)
smn-FI      smn-FI      Sami (Inari) (Finland)
sms-FI      sms-FI      Sami (Skolt) (Finland)
sq          sq-AL       Albanian
sq-AL       sq-AL       Albanian (Albania)
sr          sr-Latn-CS  Serbian
sr-Cyrl-BA  sr-Cyrl-BA  Serbian (Cyrillic) (Bosnia and Herzegovina)
sr-Cyrl-CS  sr-Cyrl-CS  Serbian (Cyrillic, Serbia)
sr-Latn-BA  sr-Latn-BA  Serbian (Latin) (Bosnia and Herzegovina)
sr-Latn-CS  sr-Latn-CS  Serbian (Latin, Serbia)
sv          sv-SE       Swedish
sv-FI       sv-FI       Swedish (Finland)
sv-SE       sv-SE       Swedish (Sweden)
sw          sw-KE       Kiswahili
sw-KE       sw-KE       Kiswahili (Kenya)
syr         syr-SY      Syriac
syr-SY      syr-SY      Syriac (Syria)
ta          ta-IN       Tamil
ta-IN       ta-IN       Tamil (India)
te          te-IN       Telugu
te-IN       te-IN       Telugu (India)
th          th-TH       Thai
th-TH       th-TH       Thai (Thailand)
tn-ZA       tn-ZA       Tswana (South Africa)
tr          tr-TR       Turkish
tr-TR       tr-TR       Turkish (Turkey)
tt          tt-RU       Tatar
tt-RU       tt-RU       Tatar (Russia)
uk          uk-UA       Ukrainian
uk-UA       uk-UA       Ukrainian (Ukraine)
ur          ur-PK       Urdu
ur-PK       ur-PK       Urdu (Islamic Republic of Pakistan)
uz          uz-Latn-UZ  Uzbek
uz-Cyrl-UZ  uz-Cyrl-UZ  Uzbek (Cyrillic, Uzbekistan)
uz-Latn-UZ  uz-Latn-UZ  Uzbek (Latin, Uzbekistan)
vi          vi-VN       Vietnamese
vi-VN       vi-VN       Vietnamese (Vietnam)
xh-ZA       xh-ZA       Xhosa (South Africa)
zh-CN       zh-CN       Chinese (People's Republic of China)
zh-HK       zh-HK       Chinese (Hong Kong S.A.R.)
zh-CHS      (none)      Chinese (Simplified)
zh-CHT      (none)      Chinese (Traditional)
zh-MO       zh-MO       Chinese (Macao S.A.R.)
zh-SG       zh-SG       Chinese (Singapore)
zh-TW       zh-TW       Chinese (Taiwan)
zu-ZA       zu-ZA       Zulu (South Africa)

*/