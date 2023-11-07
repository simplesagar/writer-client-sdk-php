<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class PagePublicApiResponse
{
	#[\JMS\Serializer\Annotation\SerializedName('createdAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('order')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $order;
    
	#[\JMS\Serializer\Annotation\SerializedName('section')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\SectionInfo')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SectionInfo $section = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\Status>')]
    public Status $status;
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
	#[\JMS\Serializer\Annotation\SerializedName('updatedAt')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
	#[\JMS\Serializer\Annotation\SerializedName('updatedBy')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\SimpleUser')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?SimpleUser $updatedBy = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $url;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->id = 0;
		$this->order = 0;
		$this->section = null;
		$this->status = \WriterAi\SDK\Models\Shared\Status::Live;
		$this->title = "";
		$this->updatedAt = new \DateTime();
		$this->updatedBy = null;
		$this->url = "";
	}
}
