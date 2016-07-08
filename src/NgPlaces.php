<?php

namespace Ibonly\NgPlaces;

use GuzzleHttp\Client;

class NgPlaces
{
	protected $baseUrl = "ngplaces.ifsolutionsng.com/api/v1";

	protected $response;

	protected $client;

	public function __construct()
	{
		$this->client = new Client(['base_uri' => $this->baseUrl]);
	}

	public function setResponse($url)
	{
		$this->response = $this->client->get($this->baseUrl.$url, []);
	}
}