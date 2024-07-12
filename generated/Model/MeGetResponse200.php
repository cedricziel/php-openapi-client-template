<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\LeonardoAI\Generated\Model;

class MeGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var list<MeGetResponse200UserDetailsItem>
     */
    protected $userDetails;

    /**
     * @return list<MeGetResponse200UserDetailsItem>
     */
    public function getUserDetails(): array
    {
        return $this->userDetails;
    }

    /**
     * @param list<MeGetResponse200UserDetailsItem> $userDetails
     */
    public function setUserDetails(array $userDetails): self
    {
        $this->initialized['userDetails'] = true;
        $this->userDetails = $userDetails;

        return $this;
    }
}
