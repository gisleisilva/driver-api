<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "firstName"=> $this->primeiro_nome,
            "lastName"=> $this->ultimo_nome,
            "cpfRne"=> $this->cpf_rne,
            "email"=> $this->email,
            "phone"=> $this->telefone_celular,
            "dateBirth"=> $this->data_nascimento,
            "sex"=> $this->sexo,
            "created_at" => Carbon::make($this->created_at)->format('d/m/Y'),
            "updated_at" => Carbon::make($this->updated_at)->format('d/m/Y'),
        ];
    }
}
