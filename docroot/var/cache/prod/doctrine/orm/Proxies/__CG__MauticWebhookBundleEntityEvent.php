<?php

namespace Proxies\__CG__\Mautic\WebhookBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \Mautic\WebhookBundle\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'webhook', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'queues', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'eventType'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'webhook', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'queues', '' . "\0" . 'Mautic\\WebhookBundle\\Entity\\Event' . "\0" . 'eventType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
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
    public function getWebhook()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebhook', []);

        return parent::getWebhook();
    }

    /**
     * {@inheritDoc}
     */
    public function setWebhook(\Mautic\WebhookBundle\Entity\Webhook $webhook)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWebhook', [$webhook]);

        return parent::setWebhook($webhook);
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
    public function setQueues($queues)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQueues', [$queues]);

        return parent::setQueues($queues);
    }

    /**
     * {@inheritDoc}
     */
    public function getQueues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQueues', []);

        return parent::getQueues();
    }

}
