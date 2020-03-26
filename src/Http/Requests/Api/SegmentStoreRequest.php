<?php

declare(strict_types=1);

namespace Sendportal\Base\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SegmentStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', Rule::unique('segments', 'name')->where('team_id', $this->route('teamId'))],
            'subscribers' => ['array', 'nullable']
        ];
    }
}