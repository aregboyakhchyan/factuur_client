<?php

namespace Factuur\FactuurAPI;
use GuzzleHttp\Exception\RequestException;
use Factuur\Base;


class FactuurAPI extends Base
{

    /* -----Products----- */

    /** Get single product
      *  Method - GET
      *  Params - product id (required) */
    public function getProduct($id)
    {
        try{
            $url = "/products/".$id;
            $response = $this->callFactuurApi("get", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Get products list
      *  Method - GET
      *  Params - offset (optimal), count(optimal) */
    public function getProducts($offset = 0, $count = 10)
    {
        try{
            $url = "/products";
            $data = ['offset' => $offset, 'count' => $count];
            $response = $this->callFactuurApi("get", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Create new product
      *  Method - POST
      *  Params -
      *           product_name (required)
      *           product_code (optional)
      *           unit (optional)
      *           vat (required)
      *           price_excl_vat (required, if price_incl_vat is empty)
      *           price_incl_vat (required, if price_excl_vat is empty)
      *           category_id (optional) */
    public function createProduct($data)
    {
        try{
            $url = "/products";
            $response = $this->callFactuurApi("post", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Update product
     *   Method - PUT
     *   Params -
     *            product id (required)
     *
     *            product_name (optional)
     *            product_code (optional)
     *            unit (optional)
     *            vat (optional)
     *            price_excl_vat (optional)
     *            price_incl_vat (optional)
     *            category_id (optional) */
    public function updateProduct($id, $data)
    {
        try{
            $url = "/products/".$id;
            $response = $this->callFactuurApi("put", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Delete product
     *   Method - DELETE
     *   Params - product id (required) */
    public function deleteProduct($id)
    {
        try{
            $url = "/products/".$id;
            $response = $this->callFactuurApi("delete", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /* -----Clients----- */

    /** Get single client
     *  Method - GET
     *  Params - client id (required) */
    public function getClient($id)
    {
        try{
            $url = "/clients/".$id;
            $response = $this->callFactuurApi("get", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Get clients list
     *  Method - GET
     *  Params - offset (optimal), count(optimal) */
    public function getClients($offset = 0, $count = 10)
    {
        try{
            $url = "/clients";
            $data = ['offset' => $offset, 'count' => $count];
            $response = $this->callFactuurApi("get", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Create new client
     *  Method - POST
     *  Params -
     *           client_nr (optional)
     *           company_name (required, if contact_name is empty)
     *           contact_name (required, if company_name is empty)
     *           status (optional)
     *           street_nr (optional)
     *           zip (optional)
     *           city (optional)
     *           country (optional)
     *           vat_nr (optional)
     *           vat_shifted (optional)
     *           email (optional)
     *           phone (optional)
     *           mobile (optional)
     *           sending_method (optional)
     *           invoice_expiration_period (optional)
     *           iban (optional)
     *           vat (optional)
     *           max_intensity_level_reminders (optional)
     *           no_reminders_until (optional) */
    public function createClient($data)
    {
        try{
            $url = "/clients";
            $response = $this->callFactuurApi("post", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Update client
     *  Method - PUT
     *  Params -
     *           client_nr (optional)
     *           company_name (optional)
     *           contact_name (optional)
     *           status (optional)
     *           street_nr (optional)
     *           zip (optional)
     *           city (optional)
     *           country (optional)
     *           vat_nr (optional)
     *           vat_shifted (optional)
     *           email (optional)
     *           phone (optional)
     *           mobile (optional)
     *           sending_method (optional)
     *           invoice_expiration_period (optional)
     *           iban (optional)
     *           vat (optional)
     *           max_intensity_level_reminders (optional)
     *           no_reminders_until (optional) */
    public function updateClient($id, $data)
    {
        try{
            $url = "/clients/".$id;
            $response = $this->callFactuurApi("put", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Delete client
     *   Method - DELETE
     *   Params - client id (required) */
    public function deleteClient($id){
        try{
            $url = "/clients/".$id;
            $response = $this->callFactuurApi("delete", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /* -----Categories----- */

    /** Get single category
     *  Method - GET
     *  Params - category id (required) */
    public function getCategory($id)
    {
        try{
            $url = "/categories/".$id;
            $response = $this->callFactuurApi("get", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Get client categories list
     *  Method - GET
     *  Params - offset (optimal), count(optimal) */
    public function getCategories($offset = 0, $count = 10)
    {
        try{
            $url = "/categories";
            $data = ['offset' => $offset, 'count' => $count];
            $response = $this->callFactuurApi("get", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Create new category
     *  Method - POST
     *  Params - category_name (required) */
    public function createCategory($data)
    {
        try{
            $url = "/categories";
            $response = $this->callFactuurApi("post", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Update category
     *  Method - PUT
     *  Params -
     *           category id (required)
     *           category_name (required) */
    public function updateCategory($id, $data)
    {
        try{
            $url = "/categories/".$id;
            $response = $this->callFactuurApi("put", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Delete category
     *   Method - DELETE
     *   Params - category id (required) */
    public function deleteCategory($id)
    {
        try{
            $url = "/categories/".$id;
            $response = $this->callFactuurApi("delete", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /* -----Invoices----- */

    /** Get single invoice
     *  Method - GET
     *  Params - invoice id (required) */
    public function getInvoice($id)
    {
        try{
            $url = "/invoices/".$id;
            $response = $this->callFactuurApi("get", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Get invoices list
     *  Method - GET
     *  Params - offset (optimal), count(optimal) */
    public function getInvoices($offset = 0, $count = 10)
    {
        try{
            $url = "/invoices";
            $data = ['offset' => $offset, 'count' => $count];
            $response = $this->callFactuurApi("get", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Create new invoice
     *  Method - POST
     *  Params -
     *           client_id (required)
     *           reference (optional)
     *           expiry_date (optional)
     *           send_method (optional)
     *           line_items (required) - [
     *              [
     *                quantity (required)
     *                unit (optional)
     *                description (required)
     *                price (required)
     *                vat_regime (optional)
     *                discount
     *              ]
     *           ] */
    public function createInvoice($data)
    {
        try{
            $url = "/invoices";
            $response = $this->callFactuurApi("post", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Delete invoice
     *   Method - DELETE
     *   Params - invoice id (required) */
    public function deleteInvoice($id)
    {
        try{
            $url = "/invoices/".$id;
            $response = $this->callFactuurApi("delete", $url);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Make invoice payment
     *   Method - PUT
     *   Params - category id (required)
     *            amount (optional)
     *            date (optional) */
    public function payInvoice($id, $data = [])
    {
        try{
            $url = "/invoices/".$id.'/payments';
            $response = $this->callFactuurApi("put", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /** Send invoice reminder
     *   Method - POST
     *   Params - invoice id (required)
     *            reminder_type (optional)
     *            subject (optional)
     *            message (optional)
     *            email (optional) */
    public function remindInvoice($id, $data = [])
    {
        try{
            $url = "/invoices/".$id.'/reminders';
            $response = $this->callFactuurApi("post", $url, $data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
}