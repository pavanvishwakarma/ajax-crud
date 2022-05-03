<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HTTPHEADER => array(
    'X-CSCAPI-KEY: WVBOZ0tVajRLMElWcG55YlJPb3lTbFBNdjFvakpXRzVVV0hJeTZ2UQ=='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
print_r($response);
