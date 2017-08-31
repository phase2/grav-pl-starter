<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;
use \Twig_Loader_Filesystem;
use \Twig_Loader_Chain;

/**
 * Class TwignamespacesPlugin
 * @package Grav\Plugin
 */
class TwignamespacesPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin.
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onTwigLoader' => ['onTwigLoader', 0]
        ]);
    }

    /**
     * Enable Twig namespaces for Grav.
     */
    public function onTwigLoader()
    {
        $config = $this->config->get('plugins.twig-namespaces');
        if (!empty($config['namespaces'])) {
            foreach ($config["namespaces"] as $namespace => $item) {
                foreach ($item["paths"] as $path) {
                    $this->grav['twig']->addPath($path, $namespace);
                }
            }
        }
    }
}
