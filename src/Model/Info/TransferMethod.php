<?php

namespace BitcoinVN\Model\Info;

use JMS\Serializer\Annotation as Serializer;

class TransferMethod
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    private $asset;

    /**
     * @var integer
     *
     * @Serializer\Type("integer")
     */
    private $decimals;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $enabled;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $depositEnabled;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $settleEnabled;

    /**
     * @var boolean
     *
     * @Serializer\Type("boolean")
     */
    private $internalBalance;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $networkFee;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $depositFee;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $settleFee;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     */
    private $exchangeFee;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     */
    private $infoUrl;

    /**
     * @var array|null
     *
     * @Serializer\Type("array")
     */
    private $details;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * @return int
     */
    public function getDecimals(): int
    {
        return $this->decimals;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @return bool
     */
    public function isDepositEnabled(): bool
    {
        return $this->depositEnabled;
    }

    /**
     * @return bool
     */
    public function isSettleEnabled(): bool
    {
        return $this->settleEnabled;
    }

    /**
     * @return bool
     */
    public function isInternalBalance(): bool
    {
        return $this->internalBalance;
    }

    /**
     * @return float
     */
    public function getNetworkFee(): float
    {
        return $this->networkFee;
    }

    /**
     * @return float
     */
    public function getDepositFee(): float
    {
        return $this->depositFee;
    }

    /**
     * @return float
     */
    public function getSettleFee(): float
    {
        return $this->settleFee;
    }

    /**
     * @return float
     */
    public function getExchangeFee(): float
    {
        return $this->exchangeFee;
    }

    /**
     * @return string|null
     */
    public function getInfoUrl(): ?string
    {
        return $this->infoUrl;
    }

    /**
     * @return array|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }
}
