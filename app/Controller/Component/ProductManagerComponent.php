<?php

App::uses('Component', 'Controller');

class ProductManagerComponent extends Component
{

    public function getProductsWithCategory($category = '')
    {$url = "http://open.api.ebay.com/shopping?";
		$maxents = 12;
		$appid = 'JohnBlum-7b5c-4253-8e84-43ead7c00efb';

		//nabbed from the tut
		$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';
		$version = '1.0.0';
		$globalid = 'EBAY-US';
		$query = $category; //change shirts to categories
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

		if(empty($resp->searchResult->item)){
			return array();
		}
		
		foreach($resp->searchResult->item as $item) {
			$uuid = (string)$item->itemId;
			$name = (string)$item->title;
			$description = '';
			$imageURL   = (string)$item->galleryURL;
			$referenceURL  = (string)$item->viewItemURL;
			
			$products[] = compact('uuid', 'name', 'description', 'imageURL', 'referenceURL');
		}
		
		return $products;
    }

    public function getProductUrl() {

    }

}
