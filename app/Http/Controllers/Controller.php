<?php

namespace App\Http\Controllers;

use App\Repositories\EmailRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EmailController extends Controller
{
    protected $emailRepository;

    public function __construct(EmailRepositoryInterface $emailRepository)
    {
        $this->emailRepository = $emailRepository;
    }

    public function index()
    {
        $emails = $this->emailRepository->getAll();
        return view('emails.index', compact('emails'));
    }

    public function create()
    {
        return view('emails.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
        $this->emailRepository->create($data);
        return redirect()->route('emails.index');
    }

    public function destroy($id)
    {
        $this->emailRepository->delete($id);
        return redirect()->route('emails.index');
    }
}

