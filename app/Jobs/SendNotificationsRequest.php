<?php

namespace App\Jobs;

use App\Models\Notification;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendNotificationsRequest implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        try
        {
            $title = 'Anfrage Genusshaus';

            $client = new Client(['headers' => ['Accept' => 'application/json', 'Content-Type' => 'application/json']]);

            $response = $client->request('POST', 'https://erp.smartgate.ch/api/webhook/tickets', [
                'form_params' => [
                    'auth_key' => env('WEBHOOK_AUTH_KEY'),

                    'tags' => ['genusshaus','form'],
                    'title' => $title,
                    'body' => $this->notification->name . ' hat eine Anfrage gesendet. Mit seinem Lokal: ' . $this->notification->company . ', möchte er über eine Teilnahme beraten werden.',

                    'name' => $this->notification->name,
                    'email' => $this->notification->email,
                    'phone' => $this->notification->phone,

                    'company' => $this->notification->company,
                ]
            ]);

            if($response->getStatusCode() === 200)
            {
                $this->notification->forwarded = true;
                $this->notification->save();
            }

        }
        catch (\Exception $exception)
        {
            $this->notification->forwarded = false;
            $this->notification->save();

        }

    }
}
