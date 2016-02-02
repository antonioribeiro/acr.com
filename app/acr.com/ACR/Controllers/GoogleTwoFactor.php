<?php

namespace ACR\Controllers;

use Response;
use View;
use Google2FA;

class GoogleTwoFactor extends Base {

	protected $company = 'PragmaRX';

	protected $holder = 'user@hisdomain.com';

	protected $secret = 'ADUMJO5634NPDEKW';

	public function show()
	{
		$url = Google2FA::getQRCodeGoogleUrl($this->company, $this->holder, $this->secret);

		return View::make('technology.pages.google2fa', compact('url'));
	}

	public function get()
	{
		return Google2FA::getCurrentOtp($this->secret);
	}

}
