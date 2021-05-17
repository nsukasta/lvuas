<?php

namespace App\Http\Livewire;

use App\Models\Pengguna;
use Livewire\Component;

class DetailMembers extends Component
{

    public $penggunas, $k3_akhir, $k3_awal, $tanggal, $member_id;
    public $nik, $no_meteran, $nama, $alamat, $no_hp, $email, $status, $pengguna_id;
    public $isModal;

    public function render()
    {
        return view('livewire.detail-members')->layout('layouts.admin2');
    }

    public function Mount($id)
    {
        $this->detailMember($id);
    }

    public function detailMember($id)
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
        $this->k3_awal = '';
        $this->k3_akhir = '';
        $this->tanggal = '';
    }

    public function store()
    {
        $this->validate(
            [

                'k3_awal' => 'required|numeric',
                'k_akhir' => 'required|numeric',
                'tanggal' => 'required|date',

            ]

        );

        Meteran::updateOrCreate(['id' => $this->meteran_id], [

            'k3_awal' => $this->k3_awal,
            'k3_akhir' => $this->k3_akhir,
            'tanggal' => $this->tanggal,

        ]);

        session()->flash('message', $this->meteran_id ? $this->k3_awal . ' Diperbaharui' : $this->k3_awal . ' Ditambahkan');
        $this->closeModal();
        $this->resetFields();

    }

    public function delete($id)
    {
        $meteran = Meteran::find($id);
        $pengguna->delete();
        session()->flash('message', $pengguna->nama . ' Dihapus');
    }
}
