<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacien extends Model

{
    protected $fillable = [
        'personid_ext',
        'inami',
        'nom',
        'prenom',
        'date_naissance',
        'date_diplome',
        'adresse',
        'lieu_naissance',
        'autre_diplome',
        'num_bandagiste',
        'cinq_ans_de_pratique',
        'formation_continue_effectuee',
        'progression',
        'registre_national',
        'ci_recto_verso',
        'date_envoi_copie_ci_recto_verso',
        'rgpd',
        'agree_autre_universite_id',
        'nationalite_id',
        'universite_id',
        'localite_be_id',
        'motivation_id',
        'agrement_id',
        'user_id',
        'genre_id',
        'statut_pharmacien_id',
        
    ];

    /**
     * Relation Pharmacien User
     * 
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
