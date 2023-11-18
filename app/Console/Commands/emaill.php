<?php

namespace App\Console\Commands;
use App\Models\User;
use App\Models\eamailForNotification;
use App\Models\notfication;
use  Notification;
use App\Notifications\EmailNotification;
use Illuminate\Console\Command;

class emaill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:lowstock_report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $userId = eamailForNotification::first();
        $user = User::find($userId->userId);
        $ldate = date('Y-m-d');
        $data= notfication::where('notfyDate',$ldate)->count();
        if($data != null){
        $project = [
         'greeting'=>' مرحبا ' .$user->name.',',
         'body'=>'هذا اشعار انتهاء اصدار اقامة موظف او اقامات عدد من الموظفين ادخل على 
         الرابط في الاسفل لمعرفة الاقامات المنتهية الاصدار',
         'actionText'=>'الاقامات منتهية الاصدار',
         'actionURL'=> url('/endCard'),
         'id'=>57
        ];
        Notification::send($user,new EmailNotification($project));
        return 'report has been sent successfully';
    }else{
        return 'report has not been sent successfully';

    }

    }
}
