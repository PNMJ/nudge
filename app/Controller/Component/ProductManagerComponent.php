<?php

App::uses('Component', 'Controller');

class ProductManagerComponent extends Component
{
	const APPID = 'JohnBlum-7b5c-4253-8e84-43ead7c00efb';

    public function getProductsWithCategory($category = '')
    {
		$url = "http://open.api.ebay.com/shopping?";
		$maxents = 20;
		$appid = self::APPID;
		
		//nabbed from the tut
		$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';
		$version = '1.0.0';
		$globalid = 'EBAY-US';
		$query = $category;
		$safequery = urlencode($query);
		
		$apicall = "$endpoint?";
		$apicall .= "OPERATION-NAME=findItemsByKeywords";
		$apicall .= "&SERVICE-VERSION=$version";
		$apicall .= "&SECURITY-APPNAME=$appid";
		$apicall .= "&GLOBAL-ID=$globalid";
		$apicall .= "&keywords=$safequery";
		$apicall .= "&paginationInput.entriesPerPage=$maxents";
		
		$resp = simplexml_load_file($apicall);
		$results = '';
		$products = array();
		
		if(!is_array($resp->searchResult->item)){
			return array();
		}
		
		foreach($resp->searchResult->item as $item) {
			$pic   = $item->galleryURL;
			$link  = $item->viewItemURL;
			$title = $item->title;
			
			$products[] = $item;
			//$results .= "<tr><td><img src=\"$pic\"></td><td><a href=\"$link\">$title</a></td></tr>";
		}
		
		return $products;
	}

}
