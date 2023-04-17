<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;

use \WriterAi\SDK\Utils\SpeakeasyMetadata;
class ListTemplatesRequest
{
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=organizationId')]
    public ?int $organizationId = null;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=teamId')]
    public int $teamId;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=templateId')]
    public string $templateId;
    
	public function __construct()
	{
		$this->organizationId = null;
		$this->teamId = 0;
		$this->templateId = "";
	}
}
