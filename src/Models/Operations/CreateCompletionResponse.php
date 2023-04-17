<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;


class CreateCompletionResponse
{
	
    public ?\WriterAi\SDK\Models\Shared\CompletionResponse $completionResponse = null;
    
	
    public string $contentType;
    
    /**
     * Bad Request
     * 
     * @var ?\WriterAi\SDK\Models\Shared\FailResponse $failResponse
     */
	
    public ?\WriterAi\SDK\Models\Shared\FailResponse $failResponse = null;
    
    /**
     * $headers
     * 
     * @var ?array<string, array<string>> $headers
     */
	
    public ?array $headers = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->completionResponse = null;
		$this->contentType = "";
		$this->failResponse = null;
		$this->headers = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
