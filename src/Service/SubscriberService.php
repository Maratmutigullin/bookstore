<?php

namespace App\Service;

use App\Entity\Subscriber;
use App\Exception\SubscriberEmailExistsExeption;
use App\Model\SubscriberRequest;
use App\Repository\SubscriberRepository;

class SubscriberService
{
    public function __construct(private SubscriberRepository $subscriberRepository)
    {
    }

    public function subscribe(SubscriberRequest $request): void
    {
        if($this->subscriberRepository->existsByEmail($request->getEmail())) {
            throw new SubscriberEmailExistsExeption();
        }

        $subscriber = new Subscriber();
        $this->subscriberRepository->saveAndCommit($subscriber->setEmail($request->getEmail()));
    }
}