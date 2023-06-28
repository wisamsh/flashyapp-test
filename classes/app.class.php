<?php
error_reporting(E_ERROR);
class CardClientApp
{

  function __construct()
  {
  }

  protected function apiurl()
  {
    return APIURL;
  }


  //make the error in array for more errors to come :
  protected function error_Handle()

  {
    return array("error" => "1", "GeneralERROR" => "An Error Has occurred!");
  }
  protected function fetch_ClientDetails($client_ID)
  {

    //we can isolate the errors ....but for now its all one big tranche of error :)
    if (!isset($client_ID) || $client_ID == '' || !is_numeric($client_ID)) {
      return json_encode($this->error_Handle(), JSON_PRETTY_PRINT);
      //if theres no continuens we can die();
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $this->apiurl() . $client_ID);

    $res = curl_exec($ch);
    //destructure $res (api content) for handling output! 
    $results = json_decode($res);

    //IF have no ERRORS FROM TH REQUEST : 
    if ($results->error == "") {
      return $res;
      //RETUTNING THE REALL RESULT HERE...
    } else {
      return json_encode($this->error_Handle(), JSON_PRETTY_PRINT);
      //IF THERE IS NO DATA FROM API SERVER I WANT TO OUTPUT MY OWN 
      //ERROR FOR SECURITY ISSUES
      //if theres no continuens we can die();
    }
  }

  public function Get_Client_Details($client_ID)
  {
    return $this->fetch_ClientDetails($client_ID);
  }
}
