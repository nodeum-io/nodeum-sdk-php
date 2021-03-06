<?php
/**
 * NasSharesApiTest
 * PHP version 5
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Nodeum API
 *
 * The Nodeum API makes it easy to tap into the digital data mesh that runs across your organisation. Make requests to our API endpoints and we’ll give you everything you need to interconnect your business workflows with your storage.  All production API requests are made to:  http://nodeumhostname/api/  The current production version of the API is v1.   **REST** The Nodeum API is a RESTful API. This means that the API is designed to allow you to get, create, update, & delete objects with the HTTP verbs GET, POST, PUT, PATCH, & DELETE.  **JSON** The Nodeum API speaks exclusively in JSON. This means that you should always set the Content-Type header to application/json to ensure that your requests are properly accepted and processed by the API.  **Authentication** All API calls require user-password authentication.   **Cross-Origin Resource Sharing** The Nodeum API supports CORS for communicating from Javascript for these endpoints. You will need to specify an Origin URI when creating your application to allow for CORS to be whitelisted for your domain.   **Pagination** Some endpoints such as File Listing return a potentially lengthy array of objects. In order to keep the response sizes manageable the API will take advantage of pagination. Pagination is a mechanism for returning a subset of the results for a request and allowing for subsequent requests to “page” through the rest of the results until the end is reached. Paginated endpoints follow a standard interface that accepts two query parameters, limit and offset, and return a payload that follows a standard form. These parameters names and their behavior are borrowed from SQL LIMIT and OFFSET keywords.  **Versioning** The Nodeum API is constantly being worked on to add features, make improvements, and fix bugs. This means that you should expect changes to be introduced and documented.   However, there are some changes or additions that are considered backwards-compatible and your applications should be flexible enough to handle them. These include:  - Adding new endpoints to the API - Adding new attributes to the response of an existing endpoint - Changing the order of attributes of responses (JSON by definition is an object of unordered key/value pairs)  **Filter parameters** When browsing a list of items, multiple filter parameters may be applied. Some operators can be added to the value as a prefix:  - `=` value is equal. Default operator, may be omitted  - `!=` value is different  - `>` greater than  - `>=` greater than or equal  - `<` lower than  - `>=` lower than or equal  - `><` included in list, items should be separated by `|`  - `!><` not included in list, items should be separated by `|`  - `~` pattern matching, may include `%` (any characters) and `_` (one character)  - `!~` pattern not matching, may include `%` (any characters) and `_` (one character)
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: info@nodeum.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace NodeumSDK\Client;

use \NodeumSDK\Client\Configuration;
use \NodeumSDK\Client\ApiException;
use \NodeumSDK\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * NasSharesApiTest Class Doc Comment
 *
 * @category Class
 * @package  NodeumSDK\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NasSharesApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createNasShareByNas
     *
     * Creates a new NAS share..
     *
     */
    public function testCreateNasShareByNas()
    {
    }

    /**
     * Test case for destroyNasShare
     *
     * Destroys a specific NAS share..
     *
     */
    public function testDestroyNasShare()
    {
    }

    /**
     * Test case for destroyNasShareByNas
     *
     * Destroys a specific NAS share..
     *
     */
    public function testDestroyNasShareByNas()
    {
    }

    /**
     * Test case for destroyNasShareByPool
     *
     * Destroys a specific NAS share..
     *
     */
    public function testDestroyNasShareByPool()
    {
    }

    /**
     * Test case for indexNasShares
     *
     * Lists all NAS shares..
     *
     */
    public function testIndexNasShares()
    {
    }

    /**
     * Test case for indexNasSharesByNas
     *
     * Lists all NAS shares..
     *
     */
    public function testIndexNasSharesByNas()
    {
    }

    /**
     * Test case for indexNasSharesByPool
     *
     * Lists all NAS shares from pool..
     *
     */
    public function testIndexNasSharesByPool()
    {
    }

    /**
     * Test case for mountStatusNasShare
     *
     * Get mount status of NAS Share..
     *
     */
    public function testMountStatusNasShare()
    {
    }

    /**
     * Test case for mountStatusNasShareByNas
     *
     * Get mount status of NAS Share..
     *
     */
    public function testMountStatusNasShareByNas()
    {
    }

    /**
     * Test case for mountStatusNasShareByPool
     *
     * Get mount status of NAS Share..
     *
     */
    public function testMountStatusNasShareByPool()
    {
    }

    /**
     * Test case for showNasShare
     *
     * Displays a specific NAS share..
     *
     */
    public function testShowNasShare()
    {
    }

    /**
     * Test case for showNasShareByNas
     *
     * Displays a specific NAS share..
     *
     */
    public function testShowNasShareByNas()
    {
    }

    /**
     * Test case for showNasShareByPool
     *
     * Displays a specific NAS share..
     *
     */
    public function testShowNasShareByPool()
    {
    }

    /**
     * Test case for testNasShare
     *
     * Test an unsaved NAS Share..
     *
     */
    public function testTestNasShare()
    {
    }

    /**
     * Test case for testResultNasShare
     *
     * Check result of a NAS Share test job..
     *
     */
    public function testTestResultNasShare()
    {
    }

    /**
     * Test case for updateNasShare
     *
     * Updates a specific NAS share..
     *
     */
    public function testUpdateNasShare()
    {
    }

    /**
     * Test case for updateNasShareByNas
     *
     * Updates a specific NAS share..
     *
     */
    public function testUpdateNasShareByNas()
    {
    }

    /**
     * Test case for updateNasShareByPool
     *
     * Updates a specific NAS share..
     *
     */
    public function testUpdateNasShareByPool()
    {
    }
}
