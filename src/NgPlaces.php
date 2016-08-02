<?php

namespace Ibonly\NgPlaces;

use GuzzleHttp\Client;

class NgPlaces
{
	protected $baseUrl = "http://ngplaces.ifsolutionsng.com/api/v1";

	/**
	 * Set instance for response of guzzlehttp\client
	 */
	protected $response;

	/**
	 * Set instance of guzzlehttp\client
	 */
	protected $client;

	public function __construct()
	{
		$this->client = new Client(['base_uri' => $this->baseUrl]);
	}

	/**
	 * Set the response url for guzzle client
	 * 
	 * @param $url
	 * @return void
	 */
	public function setResponse($url)
	{
		$this->response = $this->client->get($this->baseUrl.$url, []);
	}

	/**
	 * Get all the states
	 * 
	 * @return object
	 */
	public function getAllStates()
	{
		return $this->api('/states');
	}

	/**
	 * Get a particular state
	 * 
	 * @param  $stateName
	 * @return object
	 */
	public function getState($stateName)
	{
		return $this->api('/state/'.$stateName);
	}

	/**
	 * Get all lga for a state
	 * 
	 * @param  $stateName
	 * @return object
	 */
	public function getStateLga($stateName)
	{
		return $this->api('/state/'.$stateName.'/lgas');
	}

	/**
	 * Get list of all banks
	 * 
	 * @return object
	 */
	public function getAllBanks()
	{
		return $this->api('/banks');
	}

	/**
	 * Get a particular bank
	 * 
	 * @param  $bankId
	 * @return object
	 */
	public function getBank($bankId)
	{
		return $this->api('/bank/'.$bankId);
	}

	/**
	 * Get list of all banks
	 * 
	 * @return object
	 */
	public function getAllInstitutions()
	{
		return $this->api('/institutions');
	}

	/**
	 * Get a particular Institution
	 * 
	 * @param  $instituteId
	 * @return object
	 */
	public function getInstitution($instituteId)
	{
		return $this->api('/institution/'.$instituteId);
	}

	/**
	 * Setup response data
	 * 
	 * @param  $url Query string
	 * @return object
	 */
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
        return json_decode($this->response->getBody());
    }
}
