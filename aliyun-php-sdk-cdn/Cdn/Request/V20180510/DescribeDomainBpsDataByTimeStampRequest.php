<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDomainBpsDataByTimeStamp
 *
 * @method string getIspNames()
 * @method string getSecurityToken()
 * @method string getLocationNames()
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getTimePoint()
 */
class DescribeDomainBpsDataByTimeStampRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Cdn',
            '2018-05-10',
            'DescribeDomainBpsDataByTimeStamp'
        );
    }

    /**
     * @param string $ispNames
     *
     * @return $this
     */
    public function setIspNames($ispNames)
    {
        $this->requestParameters['IspNames'] = $ispNames;
        $this->queryParameters['IspNames'] = $ispNames;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $locationNames
     *
     * @return $this
     */
    public function setLocationNames($locationNames)
    {
        $this->requestParameters['LocationNames'] = $locationNames;
        $this->queryParameters['LocationNames'] = $locationNames;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $timePoint
     *
     * @return $this
     */
    public function setTimePoint($timePoint)
    {
        $this->requestParameters['TimePoint'] = $timePoint;
        $this->queryParameters['TimePoint'] = $timePoint;

        return $this;
    }
}
