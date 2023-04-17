<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;

use \WriterAi\SDK\Utils\SpeakeasyMetadata;
class UpdateSnippetsRequest
{
    /**
     * $requestBody
     * 
     * @var ?array<\WriterAi\SDK\Models\Shared\SnippetUpdate> $requestBody
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?array $requestBody = null;
    
	#[SpeakeasyMetadata('header:style=simple,explode=false,name=X-Request-ID')]
    public ?string $xRequestID = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public ?int $organizationId = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=teamId')]
    public int $teamId;
    
	public function __construct()
	{
		$this->requestBody = null;
		$this->xRequestID = null;
		$this->organizationId = null;
		$this->teamId = 0;
	}
}
