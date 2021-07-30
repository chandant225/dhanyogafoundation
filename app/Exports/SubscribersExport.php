<?php

namespace App\Exports;

use App\Subscriber;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SubscribersExport implements FromCollection, WithHeadings, WithMapping
{
    public function headings():array
    {
        return ['Email', 'Subscribed At'];
    }
    
    public function map($subscriber):array
    {
        return [
            $subscriber->email,
            $subscriber->created_at->format('d-m-Y'),
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Subscriber::all();
    }
}
