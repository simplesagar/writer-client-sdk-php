<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class MetaData
{
    /**
     * $portal
     * 
     * @var array<string, string> $portal
     */
	#[\JMS\Serializer\Annotation\SerializedName('portal')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $portal;
    
    /**
     * $reporting
     * 
     * @var array<string, string> $reporting
     */
	#[\JMS\Serializer\Annotation\SerializedName('reporting')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $reporting;
    
	#[\JMS\Serializer\Annotation\SerializedName('snippetsCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $snippetsCount;
    
	#[\JMS\Serializer\Annotation\SerializedName('ssoAccess')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $ssoAccess;
    
    /**
     * $styleguide
     * 
     * @var array<string, string> $styleguide
     */
	#[\JMS\Serializer\Annotation\SerializedName('styleguide')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $styleguide;
    
	#[\JMS\Serializer\Annotation\SerializedName('teamCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $teamCount;
    
	#[\JMS\Serializer\Annotation\SerializedName('termsCount')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $termsCount;
    
	#[\JMS\Serializer\Annotation\SerializedName('tier')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\MetaDataTier>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?MetaDataTier $tier = null;
    
	public function __construct()
	{
		$this->portal = [];
		$this->reporting = [];
		$this->snippetsCount = 0;
		$this->ssoAccess = false;
		$this->styleguide = [];
		$this->teamCount = 0;
		$this->termsCount = 0;
		$this->tier = null;
	}
}
