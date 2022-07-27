<?php

namespace Proxies\__CG__\Mautic\ChannelBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MessageQueue extends \Mautic\ChannelBundle\Entity\MessageQueue implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'id', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'channel', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'channelId', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'event', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'lead', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'priority', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'maxAttempts', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'attempts', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'success', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'status', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'datePublished', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'scheduledDate', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'lastAttempt', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'options', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'processed', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'failed', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'metadataUpdated'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'id', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'channel', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'channelId', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'event', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'lead', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'priority', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'maxAttempts', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'attempts', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'success', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'status', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'datePublished', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'scheduledDate', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'lastAttempt', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'options', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'processed', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'failed', '' . "\0" . 'Mautic\\ChannelBundle\\Entity\\MessageQueue' . "\0" . 'metadataUpdated'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MessageQueue $proxy) {
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
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttempts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttempts', []);

        return parent::getAttempts();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttempts($attempts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttempts', [$attempts]);

        return parent::setAttempts($attempts);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOptions', []);

        return parent::getOptions();
    }

    /**
     * {@inheritDoc}
     */
    public function setOptions($options)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOptions', [$options]);

        return parent::setOptions($options);
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
    public function getEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvent', []);

        return parent::getEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvent(\Mautic\CampaignBundle\Entity\Event $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvent', [$event]);

        return parent::setEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePublished', []);

        return parent::getDatePublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePublished($datePublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePublished', [$datePublished]);

        return parent::setDatePublished($datePublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSent', []);

        return parent::getDateSent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSent($dateSent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSent', [$dateSent]);

        return parent::setDateSent($dateSent);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastAttempt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastAttempt', []);

        return parent::getLastAttempt();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastAttempt($lastAttempt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastAttempt', [$lastAttempt]);

        return parent::setLastAttempt($lastAttempt);
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
    public function getMaxAttempts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMaxAttempts', []);

        return parent::getMaxAttempts();
    }

    /**
     * {@inheritDoc}
     */
    public function setMaxAttempts($maxAttempts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMaxAttempts', [$maxAttempts]);

        return parent::setMaxAttempts($maxAttempts);
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPriority', []);

        return parent::getPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setPriority($priority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPriority', [$priority]);

        return parent::setPriority($priority);
    }

    /**
     * {@inheritDoc}
     */
    public function getScheduledDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScheduledDate', []);

        return parent::getScheduledDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setScheduledDate($scheduledDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScheduledDate', [$scheduledDate]);

        return parent::setScheduledDate($scheduledDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getSuccess()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSuccess', []);

        return parent::getSuccess();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuccess()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuccess', []);

        return parent::isSuccess();
    }

    /**
     * {@inheritDoc}
     */
    public function setSuccess($success = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSuccess', [$success]);

        return parent::setSuccess($success);
    }

    /**
     * {@inheritDoc}
     */
    public function isFailed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFailed', []);

        return parent::isFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function setFailed($failed = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFailed', [$failed]);

        return parent::setFailed($failed);
    }

    /**
     * {@inheritDoc}
     */
    public function isProcessed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isProcessed', []);

        return parent::isProcessed();
    }

    /**
     * {@inheritDoc}
     */
    public function setProcessed($processed = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProcessed', [$processed]);

        return parent::setProcessed($processed);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadata', []);

        return parent::getMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetadata(array $metadata = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetadata', [$metadata]);

        return parent::setMetadata($metadata);
    }

    /**
     * {@inheritDoc}
     */
    public function wasMetadataUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'wasMetadataUpdated', []);

        return parent::wasMetadataUpdated();
    }

}