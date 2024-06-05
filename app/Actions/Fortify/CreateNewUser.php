<?php



namespace App\Actions\Fortify;

use App\Models\Job_title;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

 

    public function create(array $input)
    
    {

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
            'state' => ['string', 'max:64'],
            'job_title_id' => ['string', 'max:64'],
            'line_id' => ['required','string', 'max:64'],
            
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'state' =>  $input['state'],
            'job_title_id' => $input['job_title_id'],
            'line_id' => $input['line_id'],

        ]);
    }
}
