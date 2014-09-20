<?php
App::uses('Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class AuthController {

    function genToken()
    {
        <?xml version="1.0" encoding="utf-8"?>
        <FetchTokenRequest xmlns="urn:ebay:apis:eBLBaseComponents">
          <Version>613</Version>
           <RequesterCredentials>
             <DevId>MyDevID</DevId>
             <AppId>MyAppID</AppId>
             <AuthCert>MyAuthCert</AuthCert>
           </RequesterCredentials>
           <SessionID>MySessionID</SessionID>
        </FetchTokenRequest>
    }
}
