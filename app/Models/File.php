<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
    'ESC_COD',	
    'UE',	
    'CUR_COD',	
    'CURSO',
    'ANO',
    'FORMA_OFERTA',	
    'OFERTA',	
    'EDU_FORMA_INGRESSO',	
    'INGRESSO',	
    'EDU_TURNO',	
    'TURNO',	
    'POSICAO',	
    'N_INSC',	
    'MAT',	
    'DATA_NASC',	
    'CANDIDATO',	
    'RG',	
    'CPF',	
    'SEXO_MFN',	
    'SEXO',	
    'TELEFONE_RES',	
    'TELEFONE_CEL',	
    'NUMERO',	
    'CEP',	
    'ENDERECO',	
    'BAI_COD',	
    'BAIRRO',	
    'EMAIL',	
    'COMPLEMENTO',	
    'MUN_COD',	
    'CIDADE',	
    'UF_COD',	
    'UF',	
    'NOME_MAE',	
    'NOTA',	
    'ST_COD',	
    'SITUACAO',	
    'NOTA_FINAL',	
    'NOTA_CONCEITO',	
    'VAGA_COD',	
    'VAGA',	
    'RAC_COD',	
    'COR_PELE',	
    'SORTEIO',	
    'FASE',	
    'ANO_CONCURSO',	
    'EDITAL'];
}
