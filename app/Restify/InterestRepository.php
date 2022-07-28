<?php

namespace App\Restify;

use App\Models\Interest;
use Binaryk\LaravelRestify\Http\Requests\RestifyRequest;

class InterestRepository extends Repository
{
    public static string $model = Interest::class;

    public static string $uriKey = 'interests';

    public function fields(RestifyRequest $request): array
    {
        return [
            field('first_name')->required()->rules('string', 'max:191'),
            field('last_name')->required()->rules('string', 'max:191'),
            field('email')->required()->rules('email')->messages([
                'required' => 'This field is required.',
            ]),
            field('phone')->required()->rules('string', 'max:191'),
            field('location')->required()->rules('string', 'max:191'),
            field('profession')->required()->rules('string', 'max:191'),
            field('about')->required()->rules('string'),
        ];
    }
}
