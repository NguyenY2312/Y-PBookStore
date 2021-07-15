<?php

namespace App\Console\Commands;
use App\Models\Promotion;
use App\Models\DetailPromotion;
use App\Models\Book;
use Illuminate\Console\Command;

class UpdatePricePromotion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdatePricePromotion';

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
        // kiểm tra có khuyến mãi hay không
        $promotion = Promotion::where('Trang_Thai', 0)->where('is_deleted', 0)->orderBy('Id', 'desc')->first();
        if ($promotion != null){
            //lấy nội dung chương trình
            $all = Book::where('is_deleted', '=', 0)->get();
            foreach ($all as $sp)
            {
                $sp->Gia_Khuyen_Mai = 0;
                $sp->save();
            }
            $detail = DetailPromotion::where('Id_Khuyen_Mai', $promotion->Id)->where('Kich_Hoat', 0)->get();       
            foreach($detail as $detailpromotion)
            {
                //lấy sách có trong chương trình khuyến mãi
                $book = Book::where([ ['The_Loai', '=',$detailpromotion->Id_The_Loai], ['is_deleted', '=', 0] ])->get();
                if ($book != null) {
                foreach ($book as $book_id)
                {
                    $sach = Book::find($book_id->Id);
                    $sach->Gia_Khuyen_Mai = $sach->Gia_Tien - ($sach->Gia_Tien * ($detailpromotion->Gia_Tri_Khuyen_Mai / 100));
                    $sach->save();
                }
                }    
            }
        }
        else{
            $sach = Book::all();
            foreach($sach as $book)
            {
                $sp = Book::find($book->Id);
                $sp->Gia_Khuyen_Mai = 0;
                $sp->save();
            }
        }
        return 0;
    }
}
