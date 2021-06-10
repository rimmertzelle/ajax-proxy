<?php
/**
 * Class to handle an AJAX call as a proxy
 */
class Proxy
{
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getData($collection)
    {
        $request_url = $this->url . "/" . $collection . "/";
        $curl = curl_init($request_url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
        
        //API call with Authorization
        //Change the key with your settings
        // curl_setopt($curl, CURLOPT_HTTPHEADER, [
        //     'Content-Type: application/json',
        //     'Authorization: Bearer key'
        // ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
