<?php

namespace App\Livewire;

use App\Models\Item;
use App\Models\PurchaseOrder;
use Livewire\Component;
use App\Models\Supplier;

class OrderSupplies extends Component
{

    public $selectedItems = [];
    public $itemSelection;
    public $itemQuantity;

    public $totalPrice;
    public $totalQuantity;

    public $selectedEditItem;

    public $itemEditName;
    public $itemEditID;
    public $itemEditQuantity;
    public $itemEditTotalPrice;

    public $orderDetails;

    public $supplierSelection;

    public $filterSupplier;
    public $filterDate;


    public function render()
    {
        return view('livewire.order-supplies', [
            'suppliers' => Supplier::all(),
            'items' => Item::all(),
            'orders' => PurchaseOrder::where('status', 'Pending')
                            ->orderBy('purchase_order_id', 'desc')
                            ->get()
        ]);
    }

    public function createOrder(){
        // TODO: Save order to database

        $this->validate(
            [
                'supplierSelection' => 'required',
                'totalPrice' => 'required|numeric|min:1',
                'totalQuantity' => 'required|numeric|min:1'
            ]
        );

        $order = new PurchaseOrder();
        $order->SupplierId = $this->supplierSelection;
        $order->total_price = $this->totalPrice;
        $order->quantity = $this->totalQuantity;
        $order->status = 'Pending';
        $order->order_date = now();

        $order->save();

        foreach ($this->selectedItems as $item) {
            $order->items()->create([
                'itemID' => $item['item_id'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['unit_price'],
                'total_price' => $item['total_price']
            ]);
        }

        $this->reset('selectedItems', 'itemSelection', 'itemQuantity', 'totalPrice', 'totalQuantity', 'supplierSelection');
        session()->flash('message', 'Order has been created successfully');
    }

    public function addItem()
    {
        $this->validate(
            [
                'itemSelection' => 'required',
                'itemQuantity' => 'required|numeric|min:1'
            ]
        );

        $item = Item::find($this->itemSelection);

        $itemExists = false;

        foreach ($this->selectedItems as &$selectedItem) {
            if ($selectedItem['item_id'] == $item->itemID) {
                $selectedItem['quantity'] += $this->itemQuantity;
                $selectedItem['total_price'] = (int) $selectedItem['unit_price'] * (int) $selectedItem['quantity'];
                $itemExists = true;
                break;
            }
        }


        if (!$itemExists) {
            $this->selectedItems[] = [
                'item_id' => $item->itemID,
                'item_name' => $item->itemName,
                'unit_price' => $item->unitPrice,
                'quantity' => $this->itemQuantity,
                'total_price' => (int) $item->unitPrice * (int) $this->itemQuantity
            ];
        }

        $this->totalPrice = $this->summationPrice();
        $this->totalQuantity = $this->summationQuantity();


        $this->reset('itemSelection', 'itemQuantity');
    }


    public function updateItem()
    {
        $this->validate(
            [
                'itemEditQuantity' => 'required|numeric|min:1'
            ]
        );

        foreach ($this->selectedItems as $key => $item) {
            if ($item['item_id'] == $this->itemEditID) {
                $this->selectedItems[$key]['quantity'] = $this->itemEditQuantity;
                $this->selectedItems[$key]['total_price'] = (int) $this->selectedItems[$key]['unit_price'] * (int) $this->itemEditQuantity;
            }
        }

        $this->totalPrice = $this->summationPrice();
        $this->totalQuantity = $this->summationQuantity();
        $this->reset('itemEditName', 'itemEditID', 'itemEditQuantity');
    }

    public function editItem($itemId)
    {
        foreach ($this->selectedItems as $item) {
            if ($item['item_id'] == $itemId) {
                $this->itemEditName = $item['item_name'];
                $this->itemEditID = $item['item_id'];
                $this->itemEditQuantity = $item['quantity'];
            }
        }
    }

    public function removeItem($item_id)
    {
        foreach ($this->selectedItems as $key => $item) {
            if ($item['item_id'] == $item_id) {
                unset($this->selectedItems[$key]);
            }
        }
        $this->totalPrice = $this->summationPrice();
        $this->totalQuantity = $this->summationQuantity();
    }

    public function summationPrice()
    {
        $total = 0;
        foreach ($this->selectedItems as $item) {
            $total += $item['total_price'];
        }
        return $total;
    }
    public function summationQuantity()
    {
        $total = 0;
        foreach ($this->selectedItems as $item) {
            $total += $item['quantity'];
        }
        return $total;
    }

    public function selectOrder($orderId)
    {
        $order = PurchaseOrder::find($orderId);

        $this->orderDetails = $order->items;

    }

    public function completeOrder($orderId)
    {
        $order = PurchaseOrder::find($orderId);
        $order->status = 'Completed';
        $order->delivery_date = now();
        $order->save();
        session()->flash('message-status', 'Order has been completed successfully');
    }

    public function cancelOrder($orderId)
    {
        $order = PurchaseOrder::find($orderId);
        $order->status = 'Cancelled';
        $order->save();
        session()->flash('message-status', 'Order has been cancelled successfully');
    }
}
