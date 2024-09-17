<?php

namespace App\Livewire\Supplier;

use App\Models\Item;
use Livewire\Component;
use App\Models\Supplier;
use Livewire\WithPagination;

class SupllierManagement extends Component
{

    public $CompanyName;
    public $ContactPerson;
    public $ContactNumber;
    public $Address;
    public $Status;
    public $selectedSupplier;
    public $search;

    use WithPagination;
    public function render()
    {
        return view('livewire.supplier.supllier-management',
            [
                'items' => Item::all(),
                'suppliers' => Supplier::search($this->search)->paginate(10),
            ]
        );
    }

    public function save(){


        $this->validate([
            'CompanyName' => 'required|regex:/^[a-zA-Z\s]+$/',
            'ContactPerson' => 'required|regex:/^[a-zA-Z\s]+$/',
            'ContactNumber' => [
                'required',
                'regex:/^(\+63|0)9\d{9}$/',
            ],
            'Address' => 'required',
            'Status' => 'required',
        ]);

        Supplier::create([
            'CompanyName' => $this->CompanyName,
            'ContactPerson' => $this->ContactPerson,
            'ContactNumber' => $this->ContactNumber,
            'Address' => $this->Address,
            'Status' => $this->Status,
        ]);

        session()->flash('message-create', 'Supplier successfully added.');

         $this->reset();
    }

    public function selectSupplier($id){
        $this->selectedSupplier = Supplier::find($id);
        $this->CompanyName = $this->selectedSupplier->CompanyName;
        $this->ContactPerson = $this->selectedSupplier->ContactPerson;
        $this->ContactNumber = $this->selectedSupplier->ContactNumber;
        $this->Address = $this->selectedSupplier->Address;
        $this->Status = $this->selectedSupplier->Status;
    }

    public function updateSupplier()
    {

        $this->validate([
            'CompanyName' => 'required|regex:/^[a-zA-Z\s]+$/',
            'ContactPerson' => 'required|regex:/^[a-zA-Z\s]+$/',
            'ContactNumber' => [
                'required',
                'regex:/^(\+63|0)9\d{9}$/',
            ],
            'Address' => 'required',
            'Status' => 'required',
        ]);

        if ($this->selectedSupplier) {
            $supplier = Supplier::find($this->selectedSupplier->SupplierId);

            $supplier->update([
                'CompanyName' => $this->CompanyName,
                'ContactPerson' => $this->ContactPerson,
                'ContactNumber' => $this->ContactNumber,
                'Address' => $this->Address,
                'Status' => $this->Status,
            ]);

            session()->flash('message', 'Supplier successfully updated.');
            $this->reset();
        }
    }


}
