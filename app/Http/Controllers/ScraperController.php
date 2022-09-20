<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Driver\Selector;

class ScraperController extends Controller
{

  private $results  = [];
  public function scraper() 
  {
    
     $client = new Client();
    //  $url =  'https://www.worldometers.info/coronavirus/';
       $url =  'https://result.neco.gov.ng/my-result?regno=60224012GH&token=162848401775&year=2016&type=SSCE_EXT';
     
    //  $url =  'https://www.waecdirect.org/DisplayResult.aspx?ExamNumber=4280714017&ExamYear=2017&serial=WRC1213426368&pin=101852816464&ExamType=MAY/JUNE';
     $page = $client->request('GET', $url);

     

      dd($page);

  // echo  $page->filter( selector: '.maincounter-number')->text();

    // $page->filter( selector: '#maincounter-wrap')->each(function ($item) {
    //  $this->results[$item->filter('h1')->text()] = $item->filter('.maincounter-number')->text();

    // });

    // $data =   $this->results;
    //  return view('scraper', compact('data')); 
  }
}
