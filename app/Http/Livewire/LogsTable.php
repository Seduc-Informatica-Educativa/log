<?php

namespace App\Http\Livewire;

use App\Models\Log;
use Livewire\Component;
use Livewire\WithPagination;



class LogsTable extends Component
{
    use WithPagination;

    public $search  = '';
    public $perPage = '10';
    public $campo   = null;
    public $order   = null;
    public $showModal = 'hidden';

    public $escola_id= '';

    protected $queryString = [
        'search'    => ['except' => ''],
        'campo'     => ['except' => null],
        'order'     => ['except' => null],
        'perPage'   => ['except' => '10']
    ];
    protected $listeners = [
        'logListUpdate' => 'render',
        'deleteLogList' => 'deleteLog'  
    ];

    public function render()
    {
        $logs = Log::termino($this->search)
        ->escolaid($this->escola_id);

        if ($this->campo && $this->order) {
            $logs = $logs->orderBy($this->campo, $this->order);
        } else {
            $this->campo = null;
            $this->order = null;
        }
        $logs = $logs->paginate($this->perPage);
        return view('livewire.logs-table', [
            'logs' => $logs
        ]);
    }

    public function clear()
    {
        $this->reset();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function showModal(Log $log)
    {
        if($log->name){
            $this->emit('showModal', $log);
        }else{
            $this->emit('showModalNewLog');
        }       
    }
}
