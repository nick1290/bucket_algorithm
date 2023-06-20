<?php

namespace App\Http\Livewire;

use App\Models\Ball as BallModel;
use App\Models\Color;
use Livewire\Component;

class Ball extends Component
{
    public $ball_name, $ball_volume, $colors;
    public BallModel $ball;
    public Color $color;

    protected $rules = [
        'ball_name' => 'required',
        'ball_volume' => 'required',
    ];

    public function mount()
    {
        $this->ball = new BallModel();
        $this->color = new Color();
        $this->colors = Color::all();
    }

    public function render()
    {
        return view('livewire.ball');
    }

    public function storeBall()
    {

        $isBallExists = $this->ball->where([['name',$this->ball_name],['volume',$this->ball_volume]])->exists();
        if($isBallExists){
            return session()->flash('ball_error_message', 'Ball already exists.');
        }else{
            $this->ball->create([
                'name' => $this->ball_name,
                'volume' => $this->ball_volume,
            ]);
            $this->resetField();
            return session()->flash('ball_message', 'Ball successfully stored.');
        }
    }

    public function updatedBallName($value)
    {
        $this->ball_name = $value;
    }

    public function resetField()
    {
        $this->ball_name = '';
        $this->ball_volume = '';
    }
}
