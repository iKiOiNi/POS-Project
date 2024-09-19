<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Inventory;

class InventoryManagement extends Component
{
    public $search = "";
    public function render()
    {
        return view('livewire.inventory-management', [
            'inventories' => Inventory::search($this->search)->get()
        ]);
    }
}
