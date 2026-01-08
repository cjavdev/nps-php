<?php

declare(strict_types=1);

namespace Nps\Campgrounds\CampgroundListResponseItem\Data;

use Nps\Campgrounds\CampgroundListResponseItem\Data\Contacts\EmailAddress;
use Nps\Campgrounds\CampgroundListResponseItem\Data\Contacts\PhoneNumber;
use Nps\Core\Attributes\Optional;
use Nps\Core\Concerns\SdkModel;
use Nps\Core\Contracts\BaseModel;

/**
 * Information about contacting the park regarding this campground.
 *
 * @phpstan-import-type EmailAddressShape from \Nps\Campgrounds\CampgroundListResponseItem\Data\Contacts\EmailAddress
 * @phpstan-import-type PhoneNumberShape from \Nps\Campgrounds\CampgroundListResponseItem\Data\Contacts\PhoneNumber
 *
 * @phpstan-type ContactsShape = array{
 *   emailAddresses?: list<EmailAddress|EmailAddressShape>|null,
 *   phoneNumbers?: list<PhoneNumber|PhoneNumberShape>|null,
 * }
 */
final class Contacts implements BaseModel
{
    /** @use SdkModel<ContactsShape> */
    use SdkModel;

    /** @var list<EmailAddress>|null $emailAddresses */
    #[Optional(list: EmailAddress::class)]
    public ?array $emailAddresses;

    /** @var list<PhoneNumber>|null $phoneNumbers */
    #[Optional(list: PhoneNumber::class)]
    public ?array $phoneNumbers;

    public function __construct()
    {
        $this->initialize();
    }

    /**
     * Construct an instance from the required parameters.
     *
     * You must use named parameters to construct any parameters with a default value.
     *
     * @param list<EmailAddress|EmailAddressShape>|null $emailAddresses
     * @param list<PhoneNumber|PhoneNumberShape>|null $phoneNumbers
     */
    public static function with(
        ?array $emailAddresses = null,
        ?array $phoneNumbers = null
    ): self {
        $self = new self;

        null !== $emailAddresses && $self['emailAddresses'] = $emailAddresses;
        null !== $phoneNumbers && $self['phoneNumbers'] = $phoneNumbers;

        return $self;
    }

    /**
     * @param list<EmailAddress|EmailAddressShape> $emailAddresses
     */
    public function withEmailAddresses(array $emailAddresses): self
    {
        $self = clone $this;
        $self['emailAddresses'] = $emailAddresses;

        return $self;
    }

    /**
     * @param list<PhoneNumber|PhoneNumberShape> $phoneNumbers
     */
    public function withPhoneNumbers(array $phoneNumbers): self
    {
        $self = clone $this;
        $self['phoneNumbers'] = $phoneNumbers;

        return $self;
    }
}
