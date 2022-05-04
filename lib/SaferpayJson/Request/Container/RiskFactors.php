<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

final class RiskFactors
{
    const DELIVERY_TYPE_EMAIL = "EMAIL";
    const DELIVERY_TYPE_SHOP = "SHOP";
    const DELIVERY_TYPE_HOMEDELIVERY = "HOMEDELIVERY";
    const DELIVERY_TYPE_PICKUP = "PICKUP";
    const DELIVERY_TYPE_HQ = "HQ";

    /**
     * @var string|null
     * @SerializedName("DeliveryType")
     */
    private $deliveryType;

    /**
     * @var PayerProfile|null
     * @SerializedName("PayerProfile")
     */
    private $payerProfile;

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(?string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;

        return $this;
    }

    public function getPayerProfile(): ?PayerProfile
    {
        return $this->payerProfile;
    }

    public function setPayerProfile(?PayerProfile $payerProfile): self
    {
        $this->payerProfile = $payerProfile;

        return $this;
    }
}
