<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use LdapRecord\Models\ActiveDirectory\User;
use App\Models\Deltas\DataProduksi;
use App\Models\ApplicationAccess;
use App\Models\User;

class DeltasPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function view(
        ApplicationAccess $applicationAccess, 
        DataProduksi $dataProduksi,
        User $user
    )
    {
        $authorizeUser = ApplicationAccess::select('deltas')
                                        ->where('user_id',''='', $user->id)
                                        ->get();
        return $user->id === 
    }
}
