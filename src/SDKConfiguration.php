<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '1.7';
	public string $sdkVersion = '1.7.1';
	public string $genVersion = '2.70.2';
	/** @var array<string, array<string, array<string, mixed>>> */
	public ?array $globals = [
    	'parameters' => []
    ];

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return Writer::SERVERS[$this->serverIndex];
	}
	
}