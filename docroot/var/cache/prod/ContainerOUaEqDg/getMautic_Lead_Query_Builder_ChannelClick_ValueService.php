<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mautic.lead.query.builder.channel_click.value' shared service.

return $this->services['mautic.lead.query.builder.channel_click.value'] = new \Mautic\LeadBundle\Segment\Query\Filter\ChannelClickQueryBuilder(($this->services['mautic.lead.model.random_parameter_name'] ?? ($this->services['mautic.lead.model.random_parameter_name'] = new \Mautic\LeadBundle\Segment\RandomParameterName())), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
