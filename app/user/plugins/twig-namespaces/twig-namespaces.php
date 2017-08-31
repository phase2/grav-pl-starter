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
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onTwigInitialized' => ['onTwigInitialized', 0]
        ]);
    }

    /**
     * Enable twig namespaces for Grav.
     *
     * @param Event $e
     */
    public function onTwigInitialized(Event $e)
    {
      $twig_loader = new Twig_Loader_Filesystem($this->grav['twig']->twig_paths);
      $config = $this->config->get('plugins.twig-namespaces');

      if (array_key_exists("namespaces", $config)) {
        $namespaceLoader = new Twig_Loader_Filesystem(array());
        if ($config["namespaces"]) {
          foreach ($config["namespaces"] as $namespace => $item) {
            $namespaceLoader->setPaths($item["paths"], $namespace);
          }
        }

        $loader_chain = new Twig_Loader_Chain([$namespaceLoader, $twig_loader]);
        $this->grav['twig']->twig->getLoader()->addLoader($loader_chain);
      }
    }
}
