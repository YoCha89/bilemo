<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Exception\PropertyException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use ApiPlatform\Core\Exception\ItemNotFoundException;
use ApiPlatform\Core\Exception\InvalidArgumentException;
use ApiPlatform\Core\Exception\InvalidValueException;

class ErrorSubscriber implements EventSubscriberInterface
{
    public function onKernelException(ExceptionEvent $event): void
    {   
        $exception = $event->getThrowable();

        if ($exception instanceof HttpException) {
            $status = $exception->getStatusCode();
            if($exception instanceof ItemNotFoundException || $exception instanceof NotFoundHttpException){
                $status = 404;
            }elseif($exception instanceof PropertyException){
                $status = 403;
            }elseif($exception instanceof InvalidArgumentException || $exception instanceof InvalidValueException){
                $status = 422;
            }

            $data = [
                'status' => $status,
                'message' => $exception->getMessage()
            ];

            $event->setResponse(new JsonResponse($data));
      } else {

            $status = 500;
            $message = $exception->getMessage();
            if($exception instanceof ItemNotFoundException || $exception instanceof NotFoundHttpException){
                $status = 404;
            }elseif($exception instanceof PropertyException){
                $status = 403;
                $message = 'We have not find the user you are trying to delete in your registered users. You can only delete accounts from your user\'s list.';
            }elseif($exception instanceof InvalidArgumentException || $exception instanceof InvalidValueException){
                $status = 422;
            }

            $data = [
                'status' => $status,
                'message' => $message
            ];

            $event->setResponse(new JsonResponse($data));
      }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }
}
