<?php
namespace Blocks;

/**
 * Email functions
 */
class EmailVariable
{
	/**
	 * Returns the email settings.
	 * @return array
	 */
	public function settings()
	{
		return b()->email->getEmailSettings();
	}
}
