<?php

namespace App\Http\Livewire;

use App\Models\Meteran;
use App\Models\Pengguna;
use Livewire\Component;
use Livewire\WithPagination;

class DetailMembers extends Component
{

    public $penggunas, $k3_akhir, $k3_awal, $tanggal, $member_id;
    public $nik, $no_meteran, $nama, $alamat, $no_hp, $email, $status, $pengguna_id;
    public $isModal;
    public $dataMember;
    public $meteran_id;
    public $dataAir;
    use WithPagination;
    public function render()
    {
        // $this->dataMember = Meteran::with('hanyaPunya')->get();
        $this->dataAir = Meteran::where('id_pengguna', $this->pengguna_id)->get();
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
        $this->meteran_id = '';
    }

    public function store()
    {

        $this->validate(

            [

                'k3_awal' => 'required|numeric',
                'k3_akhir' => 'required|numeric',
                'tanggal' => 'required|date',

            ]

        );

        Meteran::updateOrCreate(['id' => $this->meteran_id],
            [

                'k3_awal' => $this->k3_awal,
                'k3_akhir' => $this->k3_akhir,
                'tanggal' => $this->tanggal,
                'id_pengguna' => $this->pengguna_id,

            ]);

        session()->flash('message', $this->meteran_id ? ' Data air diperbaharui' : ' Data Air Ditambahkan');

        $this->closeModal();
        $this->resetFields();
    }

    public function delete($id)
    {
        $meteran = Meteran::find($id);
        $meteran->delete();
        session()->flash('message', ' Data air dihapus');
    }

    public function edit($id)
    {
        $meteran = Meteran::find($id);
        $this->meteran_id = $id;
        $this->k3_awal = $meteran->k3_awal;
        $this->k3_akhir = $meteran->k3_akhir;
        $this->tanggal = $meteran->tanggal;

        $this->openModal();

    }

    public function statistik()
    {
        $maxAir = Meteran::meterans('');
        $minAir = Meteran::min('k3_akhir');
        $n = Meteran::count('');
    }
}
