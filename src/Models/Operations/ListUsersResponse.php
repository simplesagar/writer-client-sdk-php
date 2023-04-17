<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Operations;


class ListUsersResponse
{
	
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
    
	
    public ?\WriterAi\SDK\Models\Shared\PaginatedResultUserPublicResponse $paginatedResultUserPublicResponse = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->failResponse = null;
		$this->headers = null;
		$this->paginatedResultUserPublicResponse = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
