<?php

namespace JMS\AwsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $tb = new TreeBuilder();

        $tb
        ->root('jms_aws', 'array')
            ->children()
                ->scalarNode('sdk_file')->defaultValue('%kernel.root_dir%/../vendor/aws-sdk/sdk.class.php')->end()
                ->scalarNode('key')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('secret')->isRequired()->cannotBeEmpty()->end()
            ->end()
        ->end();

        return $tb;
    }
}