<?php

namespace App\Jobs;


use App\Models\User;
use App\Models\Job;
use App\Mail\NewJobNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendNewJobNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $jobDetails;

    /**
     * Create a new job instance.
     */
    public function __construct($job)
    {
        $this->jobDetails = $job;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $freelancers = User::whereCategoryId($this->jobDetails->category_id)->whereRole('freelancer')->get();

        foreach ($freelancers as $freelancer) {


            Mail::to($freelancer->email)->send(new NewJobNotification($this->jobDetails));


        }
    }
}
