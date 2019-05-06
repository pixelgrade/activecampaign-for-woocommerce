<?php

/**
 * The file for the Activecampaign_for_Woocommerce_Ecom_Customer_Repository class
 *
 * @link       https://www.activecampaign.com/
 * @since      1.0.0
 *
 * @package    Activecampaign_For_Woocommerce
 * @subpackage Activecampaign_For_Woocommerce/includes/repositories
 */

use Activecampaign_For_Woocommerce_Api_Client as Api_Client;

use Activecampaign_For_Woocommerce_Ecom_Customer as Ecom_Customer;
use Activecampaign_For_Woocommerce_Ecom_Model_Interface as Ecom_Model;
use Activecampaign_For_Woocommerce_Interacts_With_Api as Interacts_With_Api;
use Activecampaign_For_Woocommerce_Repository_Interface as Repository;


/**
 * The repository class for Ecom Customers
 *
 * @since      1.0.0
 * @package    Activecampaign_For_Woocommerce
 * @subpackage Activecampaign_For_Woocommerce/includes/repositories
 * @author     acteamintegrations <team-integrations@activecampaign.com>
 */
class Activecampaign_For_Woocommerce_Ecom_Customer_Repository implements Repository {
	use Interacts_With_Api;

	/**
	 * The singular resource name as it maps to the AC API
	 */
	const RESOURCE_NAME = 'ecomCustomer';

	/**
	 * The plural resource name as it maps to the AC API.
	 */
	const RESOURCE_NAME_PLURAL = 'ecomCustomers';

	/**
	 * The API client.
	 *
	 * @var Api_Client
	 */
	private $client;

	/**
	 * Activecampaign_For_Woocommerce_Ecom_Customer_Repository constructor.
	 *
	 * @param Api_Client $api_client The api client.
	 */
	public function __construct( Api_Client $api_client ) {
		$this->client = $api_client;

		$this->client->configure_client();
	}

	/**
	 * Finds a resource by its ID and returns an instantiated model with the resource's data.
	 *
	 * @param string|int $id The ID to find the resource by.
	 *
	 * @return Ecom_Model
	 * @throws Activecampaign_For_Woocommerce_Resource_Not_Found_Exception A 404 response.
	 * @throws \GuzzleHttp\Exception\GuzzleException A general Guzzle exception.
	 */
	public function find_by_id( $id ) {
		/**
		 * An Ecom Customer model.
		 *
		 * @var Ecom_Customer $ecom_customer_model
		 */
		$ecom_customer_model = new Ecom_Customer();

		$this->get_and_set_model_properties_from_api_by_id(
			$this->client,
			$ecom_customer_model,
			(string) $id
		);

		return $ecom_customer_model;
	}

	/**
	 * Finds a resource by a filtered list response and returns an instantiated model with the resource's data.
	 *
	 * @param string $filter_name  The filter name.
	 * @param string $filter_value The filter value.
	 *
	 * @return Ecom_Model
	 * @throws Activecampaign_For_Woocommerce_Resource_Not_Found_Exception A 404 response.
	 * @throws \GuzzleHttp\Exception\GuzzleException A general Guzzle exception.
	 */
	public function find_by_filter( $filter_name, $filter_value ) {
		/**
		 * An Ecom Customer Model.
		 *
		 * @var Ecom_Customer $ecom_order_model
		 */
		$ecom_order_model = new Ecom_Customer();

		$this->get_and_set_model_properties_from_api_by_filter(
			$this->client,
			$ecom_order_model,
			$filter_name,
			$filter_value
		);

		return $ecom_order_model;
	}

	/**
	 * Finds a resource by its email and returns an instantiated model with the resource's data.
	 *
	 * @param string $email The email to find the resource by.
	 * @param string $connection_id The connection ID for the woocommerce integration.
	 *
	 * @return Ecom_Model
	 * @throws Activecampaign_For_Woocommerce_Resource_Not_Found_Exception A 404 response.
	 */
	public function find_by_email_and_connection_id( $email, $connection_id ) {
		$ecom_order_model = new Ecom_Customer();

		$result_array = $this->get_result_set_from_api_by_filter(
			$this->client,
			'email',
			$email
		);
		$result       = array_filter(
			$result_array,
			function( $result ) use ( $connection_id ) {
				return $result['connectionid'] === $connection_id;
			}
		);

		if ( empty( $result ) ) {
			throw new Activecampaign_For_Woocommerce_Resource_Not_Found_Exception();
		}

		return $ecom_order_model->set_properties_from_serialized_array( array_values( $result )[0] );
	}

	/**
	 * Creates a remote resource and updates the model with the returned data.
	 *
	 * @param Ecom_Model $model The model to be created remotely.
	 *
	 * @return Ecom_Model
	 * @throws Activecampaign_For_Woocommerce_Resource_Unprocessable_Exception A 422 exception.
	 * @throws \GuzzleHttp\Exception\GuzzleException A general Guzzle exception.
	 */
	public function create( Ecom_Model $model ) {
		$this->create_and_set_model_properties_from_api(
			$this->client,
			$model
		);

		return $model;
	}

	/**
	 * Updates a remote resource and updates the model with the returned data.
	 *
	 * @param Ecom_Model $model The model to be updated remotely.
	 *
	 * @return Ecom_Model
	 * @throws Activecampaign_For_Woocommerce_Resource_Not_Found_Exception A 404 exception.
	 * @throws Activecampaign_For_Woocommerce_Resource_Unprocessable_Exception A 422 exception.
	 * @throws \GuzzleHttp\Exception\GuzzleException A general Guzzle exception.
	 */
	public function update( Ecom_Model $model ) {
		$this->update_and_set_model_properties_from_api(
			$this->client,
			$model
		);

		return $model;
	}
}
