<?php

namespace Proxies\__CG__\Mautic\PageBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class VideoHit extends \Mautic\PageBundle\Entity\VideoHit implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'id', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'guid', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'dateHit', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'dateLeft', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'timeWatched', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'duration', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'redirect', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'lead', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'country', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'region', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'city', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'isp', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'organization', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'code', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'referer', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'url', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'userAgent', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'remoteHost', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'pageLanguage', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'browserLanguages', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'channel', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'channelId', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'query'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'id', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'guid', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'dateHit', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'dateLeft', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'timeWatched', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'duration', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'redirect', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'lead', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'country', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'region', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'city', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'isp', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'organization', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'code', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'referer', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'url', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'userAgent', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'remoteHost', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'pageLanguage', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'browserLanguages', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'channel', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'channelId', '' . "\0" . 'Mautic\\PageBundle\\Entity\\VideoHit' . "\0" . 'query'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (VideoHit $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateHit($dateHit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateHit', [$dateHit]);

        return parent::setDateHit($dateHit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateHit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateHit', []);

        return parent::getDateHit();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateLeft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateLeft', []);

        return parent::getDateLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateLeft($dateLeft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateLeft', [$dateLeft]);

        return parent::setDateLeft($dateLeft);
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setRegion($region)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRegion', [$region]);

        return parent::setRegion($region);
    }

    /**
     * {@inheritDoc}
     */
    public function getRegion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRegion', []);

        return parent::getRegion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsp($isp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsp', [$isp]);

        return parent::setIsp($isp);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsp', []);

        return parent::getIsp();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization($organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', [$organization]);

        return parent::setOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', []);

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferer($referer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferer', [$referer]);

        return parent::setReferer($referer);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferer', []);

        return parent::getReferer();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', [$url]);

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', []);

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserAgent($userAgent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserAgent', [$userAgent]);

        return parent::setUserAgent($userAgent);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserAgent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserAgent', []);

        return parent::getUserAgent();
    }

    /**
     * {@inheritDoc}
     */
    public function setRemoteHost($remoteHost)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRemoteHost', [$remoteHost]);

        return parent::setRemoteHost($remoteHost);
    }

    /**
     * {@inheritDoc}
     */
    public function getRemoteHost()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRemoteHost', []);

        return parent::getRemoteHost();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress(\Mautic\CoreBundle\Entity\IpAddress $ipAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', [$ipAddress]);

        return parent::setIpAddress($ipAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', []);

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPageLanguage($pageLanguage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPageLanguage', [$pageLanguage]);

        return parent::setPageLanguage($pageLanguage);
    }

    /**
     * {@inheritDoc}
     */
    public function getPageLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageLanguage', []);

        return parent::getPageLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setBrowserLanguages($browserLanguages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrowserLanguages', [$browserLanguages]);

        return parent::setBrowserLanguages($browserLanguages);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrowserLanguages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrowserLanguages', []);

        return parent::getBrowserLanguages();
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', []);

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\Mautic\LeadBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', [$lead]);

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel($channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        return parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelId', []);

        return parent::getChannelId();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelId($channelId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelId', [$channelId]);

        return parent::setChannelId($channelId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedirect()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedirect', []);

        return parent::getRedirect();
    }

    /**
     * {@inheritDoc}
     */
    public function setRedirect(\Mautic\PageBundle\Entity\Redirect $redirect)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedirect', [$redirect]);

        return parent::setRedirect($redirect);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuery()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuery', []);

        return parent::getQuery();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuery($query)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuery', [$query]);

        return parent::setQuery($query);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeWatched()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeWatched', []);

        return parent::getTimeWatched();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeWatched($timeWatched)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeWatched', [$timeWatched]);

        return parent::setTimeWatched($timeWatched);
    }

    /**
     * {@inheritDoc}
     */
    public function getGuid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGuid', []);

        return parent::getGuid();
    }

    /**
     * {@inheritDoc}
     */
    public function setGuid($guid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGuid', [$guid]);

        return parent::setGuid($guid);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuration', []);

        return parent::getDuration();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuration($duration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuration', [$duration]);

        return parent::setDuration($duration);
    }

}
