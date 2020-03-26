<?php

namespace Sendportal\Base\Http\Controllers\Auth;

use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Sendportal\Base\Http\Controllers\Controller;
use Sendportal\Base\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Show the profile edit page.
     *
     * @return View
     */
    public function edit()
    {
        return view('sendportal::profile.edit');
    }

    /**
     * Update the active user's profile.
     *
     * @param ProfileUpdateRequest $request
     *
     * @return RedirectResponse
     * @throws Exception
     */
    public function update(ProfileUpdateRequest $request)
    {
        user()->update($request->validated());

        return redirect()->back()->with('success', __('Your profile was updated successfully!'));
    }
}