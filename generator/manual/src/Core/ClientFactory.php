<?php

declare(strict_types=1);

namespace KatapultAPI\Core;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

class ClientFactory
{
    /**
     * @var string Your API key from Katapult.
     */
    private string $token;

    /**
     * @var string The host to use. Defaults to Katapult production.
     *             You probably don't need to change this unless you work at Krystal!
     */
    private string $host = 'api.katapult.io';

    private string $version;

    /**
     * @var ClientInterface|null Optional HTTP client to use, if you don't want to rely on php-http/discovery.
     */
    private ?ClientInterface $httpClient = null;

    public function __construct(string $token)
    {
        $this->token = $token;
        $this->version = trim(file_get_contents(__DIR__ . '/../VERSION'));
    }

    /**
     * @param string $host Hostname for Katapult. You don't need to explicitly set this if you're using api.katapult.io.
     *
     * @return $this
     */
    public function setHost(string $host): self
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @param ClientInterface|null $httpClient Inject a ClientInterface if you're not relying on php-http/discovery.
     *
     * @return $this
     */
    public function setHttpClient(?ClientInterface $httpClient): self
    {
        $this->httpClient = $httpClient;

        return $this;
    }

    /**
     * Create an instance of the Katapult API Client.
     * @return Client
     */
    public function create(): Client
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = Psr18ClientDiscovery::find();
        }

        $uri = Psr17FactoryDiscovery::findUriFactory()->createUri('https://' . $this->host . '/core/v1');

        $plugins = [];

        $plugins[] = new AddHostPlugin($uri);
        $plugins[] = new AddPathPlugin($uri);

        $plugins[] = new HeaderSetPlugin([
            'Authorization' => 'Bearer ' . $this->token,
            'User-Agent' => 'KatapultAPIClientPHP/' . $this->version,
        ]);

        $plugins[] = new ErrorPlugin();

        $pluginClient = new PluginClient($this->httpClient, $plugins);

        return Client::create($pluginClient);
    }
}
