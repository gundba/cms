<?php
namespace Blocks;

/**
 * URL functions
 */
class UrlVariable
{
	/**
	 * Returns the current base URL (either for the CP or site, depending on the request mode).
	 * @return string
	 */
	public function base()
	{
		return $this->url('');
	}

	/**
	 * Returns a resource URL.
	 * @param string $path
	 * @param mixed $params
	 * @return string
	 */
	public function resource($path = '', $params = null)
	{
		return $this->generateResourceUrl($path, $params);
	}

	/**
	 * Returns an action URL.
	 * @param string $path
	 * @param mixed  $params
	 * @return string
	 */
	public function action($path = '', $params = null)
	{
		return $this->generateActionUrl($path, $params);
	}

	/**
	 * Returns a URL.
	 * @param string $path
	 * @param mixed $params
	 * @return string
	 */
	public function url($path = '', $params = null)
	{
		return $this->generateUrl($path, $params);
	}

	/**
	 * Returns all URL segments.
	 * @return array
	 */
	public function segments()
	{
		return b()->request->pathSegments;
	}

	/**
	 * Returns a specific URL segment.
	 * @param int    $num Which segment to retrieve
	 * @param string $default
	 * @return bool
	 */
	public function segment($num = null, $default = '')
	{
		return b()->request->getPathSegment($num, $default);
	}

	/**
	 * @returns the request domain.
	 * @return string
	 */
	public function domain()
	{
		return b()->request->serverName;
	}

	/**
	 * @returns a GET variable.
	 * @param string $var
	 * @param string $default
	 * @return bool
	 */
	public function get($var = null, $default = '')
	{
		return b()->request->getQuery($var, $default);
	}
}
