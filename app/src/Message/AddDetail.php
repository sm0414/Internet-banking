<?php

namespace App\Message;

use Symfony\Component\Cache\Adapter\RedisAdapter;

class AddDetail
{
    private $action;
    private $money;
    private $currentBalance;
    private $remark;
    private $date;
    private $userId;

    public function __construct($username)
    {
        $redis = RedisAdapter::createConnection('redis://redis-service');

        $this->action = $redis->hmGet($username, ['action'])['action'];
        $this->money = $redis->hmGet($username, ['money'])['money'];
        $this->currentBalance = $redis->hmGet($username, ['currentBalance'])['currentBalance'];
        $this->remark = $redis->hmGet($username, ['remark'])['remark'];
        $this->date = new \DateTime($redis->hmGet($username, ['date'])['date']);
        $this->userId = $redis->hmGet($username, ['userId'])['userId'];

        $redis->del($username);
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function getCurrentBalance()
    {
        return $this->currentBalance;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}
