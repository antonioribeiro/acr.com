<?php

class ConstrueLanguagesTableSeeder extends Seeder {

    public function run()
    {
        $table = 'construe_languages';

        $rows = array(
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

        DB::table($table)->truncate();		
        DB::table($table)->insert($rows);

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