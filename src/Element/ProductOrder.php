<?php
/**
 * Created by PhpStorm.
 * User: uesley
 * Date: 24/02/19
 * Time: 09:46
 */

namespace CodeBot\Element;


class ProductOrder implements ElementInterface
{

    private $title;
    private $subtitle;
    private $quantity;
    private $price;
    private $currency;
    private $image_url;

    public function __construct(string $title, string $subtitle, ? int $quantity, ? float $price, ? string $currency, string $image_url)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->currency = $currency;
        $this->image_url = $image_url;
    }


    public function get(): array
    {
        $result['title'] = $this->title;
        $result['subtitle'] = $this->subtitle;
        $result['price'] = $this->price;

        if ($this->quantity !== null) {
            $result['quantity'] = $this->quantity;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->image_url !== null) {
            $result['image_url'] = $this->image_url;
        }

        return $result;
    }
}