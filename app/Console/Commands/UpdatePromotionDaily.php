<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Promotion;
use Carbon\Carbon;
class UpdatePromotionDaily extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdatePromotionDaily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $datenow = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $khuyen_mai = Promotion::all();
        if ($khuyen_mai->count() > 0)
        {
            foreach ($khuyen_mai as $promotion)
            {
                if ($promotion->Tg_Ket_Thuc < $datenow) $promotion->Trang_Thai = 1;
                else if ($promotion->Tg_Bat_Dau > $datenow) $promotion->Trang_Thai = 2;
                else $promotion->Trang_Thai = 0;
                $promotion->save();
            }
        }
        return 0;
    }
}
