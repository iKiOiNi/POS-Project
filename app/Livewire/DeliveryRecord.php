<?php

namespace App\Livewire;

use App\Models\PurchaseOrder;
use Livewire\Component;

class DeliveryRecord extends Component
{
    public function render()
    {
        return view('livewire.delivery-record',
            [
                'deliveries' => PurchaseOrder::all()
            ]
        );
    }
}
