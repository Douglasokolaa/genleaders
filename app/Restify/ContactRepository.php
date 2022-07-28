<?php

namespace App\Restify;

use App\Models\Contact;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class ContactRepository extends Repository
{
    public static string $model = Contact::class;
    public static bool|array $public = true;
    public static string $uriKey = 'contacts';

    public function fields(RestifyRequest $request): array
    {
        return [
            field('first_name')->required(),
            field('last_name')->required(),
            field('email')->required()->rules('email')->messages([
                'required' => 'This field is required.',
            ]),
            field('message')->required(),
        ];
    }
}
