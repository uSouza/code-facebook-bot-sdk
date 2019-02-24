<?php
/**
 * Created by PhpStorm.
 * User: uesley
 * Date: 24/02/19
 * Time: 09:29
 */

namespace CodeBot\Element;


class Product implements ElementInterface
{

    private $title;
    private $image_url;
    private $subtitle;
    private $default_action;
    private $buttons;

    public function __construct(string $title, ? string $image_url, ? string $subtitle, Button $default_action)
    {
        $this->title = $title;
        $this->image_url = $image_url;
        $this->subtitle = $subtitle;
        $this->default_action = $default_action;
    }

    public function add(Button $element)
    {
        $this->buttons[] = $element->get();
    }


    public function get(): array
    {
        $result['title'] = $this->title;

        if ($this->image_url !== null) {
            $result['image_url'] = $this->image_url;
        }
        if ($this->subtitle !== null) {
            $result['subtitle'] = $this->subtitle;
        }
        if ($this->buttons !== null) {
            $result['buttons'] = $this->buttons;
        }
        if ($this->default_action !== null) {
            $default_action = $this->default_action->get();
            unset($default_action['title']);
            $result['default_action'] = $default_action;
        }
        return $result;
    }
}