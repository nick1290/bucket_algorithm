<?php

namespace App\Http\Livewire;

use App\Models\Bucket as BucketModel;
use Livewire\Component;

class Bucket extends Component
{
    public $bucket_name, $bucket_volume;
    public BucketModel $bucket;

    protected $rules = [
        'bucket_name' => 'required',
        'bucket_volume' => 'required',
    ];

    public function mount()
    {
        $this->bucket = new BucketModel();
    }

    public function render()
    {
        return view('livewire.bucket');
    }

    public function storeBucket()
    {
        $isBucketExists = $this->bucket->where([['name',$this->bucket_name],['volume',$this->bucket_volume]])->exists();
        if($isBucketExists){
            return session()->flash('error_message', 'Bucket already exists.');
        }else{
            $this->bucket->create([
                'name' => $this->bucket_name,
                'volume' => $this->bucket_volume,
            ]);
            session()->flash('message', 'Bucket successfully stored.');
            $this->resetField();
        }
    }

    public function resetField()
    {
        $this->bucket_name = '';
        $this->bucket_volume = '';
    }
}
