<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


class FullTermWithUser
{
	#[\JMS\Serializer\Annotation\SerializedName('approvedTermExtension')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\ApprovedTermExtension')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?ApprovedTermExtension $approvedTermExtension = null;
    
    /**
     * $backlinkedTerms
     * 
     * @var ?array<\WriterAi\SDK\Models\Shared\FullLinkedTerm> $backlinkedTerms
     */
	#[\JMS\Serializer\Annotation\SerializedName('backlinkedTerms')]
    #[\JMS\Serializer\Annotation\Type('array<WriterAi\SDK\Models\Shared\FullLinkedTerm>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $backlinkedTerms = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('caseSensitive')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $caseSensitive;
    
	#[\JMS\Serializer\Annotation\SerializedName('createdUser')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\TerminologyUser')]
    public TerminologyUser $createdUser;
    
	#[\JMS\Serializer\Annotation\SerializedName('creationTime')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $creationTime;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * $examples
     * 
     * @var ?array<\WriterAi\SDK\Models\Shared\TermExample> $examples
     */
	#[\JMS\Serializer\Annotation\SerializedName('examples')]
    #[\JMS\Serializer\Annotation\Type('array<WriterAi\SDK\Models\Shared\TermExample>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $examples = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('highlight')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $highlight;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $id;
    
    /**
     * $linkedTerms
     * 
     * @var ?array<\WriterAi\SDK\Models\Shared\FullLinkedTerm> $linkedTerms
     */
	#[\JMS\Serializer\Annotation\SerializedName('linkedTerms')]
    #[\JMS\Serializer\Annotation\Type('array<WriterAi\SDK\Models\Shared\FullLinkedTerm>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $linkedTerms = null;
    
    /**
     * $mistakes
     * 
     * @var ?array<\WriterAi\SDK\Models\Shared\TermMistake> $mistakes
     */
	#[\JMS\Serializer\Annotation\SerializedName('mistakes')]
    #[\JMS\Serializer\Annotation\Type('array<WriterAi\SDK\Models\Shared\TermMistake>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $mistakes = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('modificationTime')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $modificationTime;
    
	#[\JMS\Serializer\Annotation\SerializedName('modifiedUser')]
    #[\JMS\Serializer\Annotation\Type('WriterAi\SDK\Models\Shared\TerminologyUser')]
    public TerminologyUser $modifiedUser;
    
	#[\JMS\Serializer\Annotation\SerializedName('pos')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\FullTermWithUserPos>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?FullTermWithUserPos $pos = null;
    
    /**
     * $tags
     * 
     * @var ?array<\WriterAi\SDK\Models\Shared\TermTagResponse> $tags
     */
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<WriterAi\SDK\Models\Shared\TermTagResponse>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('term')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $term;
    
	#[\JMS\Serializer\Annotation\SerializedName('termBankId')]
    #[\JMS\Serializer\Annotation\Type('int')]
    public int $termBankId;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<WriterAi\SDK\Models\Shared\Type>')]
    public Type $type;
    
	public function __construct()
	{
		$this->approvedTermExtension = null;
		$this->backlinkedTerms = null;
		$this->caseSensitive = false;
		$this->createdUser = new \WriterAi\SDK\Models\Shared\TerminologyUser();
		$this->creationTime = new \DateTime();
		$this->description = null;
		$this->examples = null;
		$this->highlight = false;
		$this->id = 0;
		$this->linkedTerms = null;
		$this->mistakes = null;
		$this->modificationTime = new \DateTime();
		$this->modifiedUser = new \WriterAi\SDK\Models\Shared\TerminologyUser();
		$this->pos = null;
		$this->tags = null;
		$this->term = "";
		$this->termBankId = 0;
		$this->type = \WriterAi\SDK\Models\Shared\Type::Approved;
	}
}
