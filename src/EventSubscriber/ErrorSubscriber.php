<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Exception\PropertyException;

class ErrorSubscriber implements EventSubscriberInterface
{
    public function onKernelException(ExceptionEvent $event): void
    {   
        $exception = $event->getThrowable();

        if ($exception instanceof HttpException) {

            $status = $exception->getStatusCode();
            if($exception instanceof ItemNotFoundException){
                $status = 404;
            }elseif($exception instanceof PropertyException){
                $status = 403;
            }

            $data = [
                'status' => $status,
                'message' => $exception->getMessage()
            ];

            $event->setResponse(new JsonResponse($data));
      } else {

            $status = 500;
            $message = $exception->getMessage();
            if($exception instanceof ItemNotFoundException){
                $status = 404;
            }elseif($exception instanceof PropertyException){
                $status = 403;
                $message = 'We have not find the user you are trying to delete in your registered users. You can only delete accounts from your user\'s list.';
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
