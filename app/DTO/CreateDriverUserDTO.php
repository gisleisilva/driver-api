<?php

namespace App\DTO;

use App\Http\Requests\DriverUserRequest;

class CreateDriverUserDTO{

  public function __construct(
    public string $primeiro_nome,
    public string $ultimo_nome,
    public string $cpf_rne,
    public string $email,
    public string $telefone_celular,
    public string $data_nascimento,
    public string $sexo,
  ){}

  public static function makeFromRequest(DriverUserRequest $request): self
  {
    return new self(
      $request->firstName,
      $request->lastName,
      $request->cpfRne,
      $request->email,
      $request->phone,
      $request->dateBirth,
      $request->sex,
    );
  }
}
