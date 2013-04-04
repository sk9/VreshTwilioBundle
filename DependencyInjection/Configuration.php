<?php
/*
* This file is part of the VreshTwilio package.
*
* (c) Frido Koch <frido@vresh.net
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/
namespace Vresh\TwilioBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * Class Configuration
 *
 * @author Fridolin Koch <info@fridokoch.de>
 */
class Configuration
{
    /**
     * Generates the configuration tree.
     *
     * @return \Symfony\Component\Config\Definition\NodeInterface
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('twilio');

        $rootNode
            ->children()
            ->scalarNode('sid')->defaultValue('')->end()
            ->scalarNode('authToken')->defaultValue('')->end()
            ->scalarNode('version')->defaultValue(null)->end()
            ->scalarNode('httpClient')->defaultValue(null)->end()
            ->scalarNode('retryAttempts')->defaultValue(1)->end()
            ->end();

        return $treeBuilder->buildTree();
    }
}