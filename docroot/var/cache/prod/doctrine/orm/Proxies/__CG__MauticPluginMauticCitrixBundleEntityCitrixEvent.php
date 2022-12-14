<?php

namespace Proxies\__CG__\MauticPlugin\MauticCitrixBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CitrixEvent extends \MauticPlugin\MauticCitrixBundle\Entity\CitrixEvent implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'lead', 'product', 'email', 'eventName', 'eventDesc', 'eventType', 'eventDate'];
        }

        return ['__isInitialized__', 'id', 'lead', 'product', 'email', 'eventName', 'eventDesc', 'eventType', 'eventDate'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CitrixEvent $proxy) {
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
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
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
    public function getProduct()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', []);

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function setProduct($product)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProduct', [$product]);

        return parent::setProduct($product);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventName', []);

        return parent::getEventName();
    }

    /**
     * {@inheritDoc}
     */
    public function getEventNameOnly()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventNameOnly', []);

        return parent::getEventNameOnly();
    }

    /**
     * {@inheritDoc}
     */
    public function getEventId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventId', []);

        return parent::getEventId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDesc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventDesc', []);

        return parent::getEventDesc();
    }

    /**
     * {@inheritDoc}
     */
    public function getJoinUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJoinUrl', []);

        return parent::getJoinUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventName($eventName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventName', [$eventName]);

        return parent::setEventName($eventName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventDate', []);

        return parent::getEventDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventDate(\DateTime $eventDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventDate', [$eventDate]);

        return parent::setEventDate($eventDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventType', []);

        return parent::getEventType();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventType($eventType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventType', [$eventType]);

        return parent::setEventType($eventType);
    }

    /**
     * {@inheritDoc}
     */
    public function setEventDesc($eventDesc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventDesc', [$eventDesc]);

        return parent::setEventDesc($eventDesc);
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

}
