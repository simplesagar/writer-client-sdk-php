<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class CompletionResponse
{
    /**
     * $choices
     * 
     * @var ?array<\WriterAi\SDK\Models\Shared\CompletionGenerationChoice> $choices
     */
	#[\JMS\Serializer\Annotation\SerializedName('choices')]
    #[\JMS\Serializer\Annotation\Type('array<WriterAi\SDK\Models\Shared\CompletionGenerationChoice>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $choices = null;
    
	public function __construct()
	{
		$this->choices = null;
	}
}
