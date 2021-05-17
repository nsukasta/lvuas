<?php

namespace App\Http\Livewire;

use App\Models\Pengguna;
use Livewire\Component;

class Members extends Component
{
    public $penggunas, $nik, $no_meteran, $nama, $alamat, $no_hp, $email, $status, $pengguna_id;
    public $isModal;

    public function render()
    {
        $this->penggunas = Pengguna::orderBy('created_at', 'DESC')->get();
        return view('livewire.members')->layout('layouts.admin2');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function resetFields()
    {
        $this->nik = '';
        $this->no_meteran = '';
        $this->nama = '';
        $this->alamat = '';
        $this->no_hp = '';
        $this->email = '';
        $this->status = '';
        $this->pengguna_id = '';
    }

    public function store()
    {
        $this->validate(
            [
                'nik' => 'required|numeric|unique:penggunas,nik,' . $this->pengguna_id,
                'no_meteran' => 'required|numeric|unique:penggunas,no_meteran,' . $this->pengguna_id,
                'nama' => 'required|string',
                'alamat' => 'required|string',
                'no_hp' => 'required|numeric',
                'email' => 'required|email|unique:penggunas,email,' . $this->pengguna_id,
                'status' => 'required',
            ]

        );

        Pengguna::updateOrCreate(['id' => $this->pengguna_id], [

            'nik' => $this->nik,
            'no_meteran' => $this->no_meteran,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
            'email' => $this->email,
            'status' => $this->status,
        ]);

        session()->flash('message', $this->pengguna_id ? $this->nama . ' Diperbaharui' : $this->nama . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();

    }

    public function edit($id)
    {
        $pengguna = Pengguna::find($id);
        $this->pengguna_id = $id;
        $this->nik = $pengguna->nik;
        $this->no_meteran = $pengguna->no_meteran;
        $this->nama = $pengguna->nama;
        $this->alamat = $pengguna->alamat;
        $this->no_hp = $pengguna->no_hp;
        $this->email = $pengguna->email;
        $this->status = $pengguna->status;

        $this->openModal();

    }

    public function delete($id)
    {
        $pengguna = Pengguna::find($id);
        $pengguna->delete();
        session()->flash('message', $pengguna->nama . ' Dihapus');
    }
}
