<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK;

class Content 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Check your content against your preset styleguide.
     * 
     * @param \WriterAi\SDK\Models\Operations\ContentCheckRequest $request
     * @return \WriterAi\SDK\Models\Operations\ContentCheckResponse
     */
	public function check(
        \WriterAi\SDK\Models\Operations\ContentCheckRequest $request,
    ): \WriterAi\SDK\Models\Operations\ContentCheckResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/content/organization/{organizationId}/team/{teamId}/check', \WriterAi\SDK\Models\Operations\ContentCheckRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "contentRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \WriterAi\SDK\Models\Operations\ContentCheckResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->processedContent = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\ProcessedContent', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->failResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\FailResponse', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Apply the style guide suggestions directly to your content.
     * 
     * @param \WriterAi\SDK\Models\Operations\ContentCorrectRequest $request
     * @return \WriterAi\SDK\Models\Operations\ContentCorrectResponse
     */
	public function correct(
        \WriterAi\SDK\Models\Operations\ContentCorrectRequest $request,
    ): \WriterAi\SDK\Models\Operations\ContentCorrectResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/content/organization/{organizationId}/team/{teamId}/correct', \WriterAi\SDK\Models\Operations\ContentCorrectRequest::class, $request, $this->sdkConfiguration->globals);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "contentRequest", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options = array_merge_recursive($options, Utils\Utils::getHeaders($request, $this->sdkConfiguration->globals));
        if (!array_key_exists('headers', $options)) {
            $options['headers'] = [];
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \WriterAi\SDK\Models\Operations\ContentCorrectResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->correctionResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\CorrectionResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 500) {
            $response->headers = $httpResponse->getHeaders();
            
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->failResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'WriterAi\SDK\Models\Shared\FailResponse', 'json');
            }
        }

        return $response;
    }
}