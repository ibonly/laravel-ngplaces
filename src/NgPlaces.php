<?php

namespace Ibonly\NgPlaces;

use GuzzleHttp\Client;

class NgPlaces
{
	protected $baseUrl = "http://ngplaces.ifsolutionsng.com/api/v1";

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

	public function getAllStates()
	{
		return $this->api('/states');
	}

	public function getState($state_name)
	{
		return $this->api('/state/'.$state_name);
	}

	public function getStateLga($state_name)
	{
		return $this->api('/state/'.$state_name.'/lgas');
	}

	public function api($url)
	{
		$this->setResponse($url);

		return $this->data();
	}

    /**
     *  Get the details of the required request
     *  
     * @return object
     */
    private function data()
    {
        $result = json_decode($this->response->getBody());
        $simplifiedResult = [];
        if (is_array($result)) {
            foreach ($result as $key => $value) {
                $simplifiedResult[$key] = (array)$value;
            }
            return $simplifiedResult;
        }
        return (array)$result;
    }
}