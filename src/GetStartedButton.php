<?php
/**
 * Created by PhpStorm.
 * User: uesley
 * Date: 24/02/19
 * Time: 11:15
 */

namespace CodeBot;


class GetStartedButton
{
    public function add(string $postback)
    {
        return [
            'get_started' => [
                'payload' => $postback
            ]
        ];
    }

    public function remove()
    {
        return [
            'fields' => [
                'get_started'
            ]
        ];
    }
}