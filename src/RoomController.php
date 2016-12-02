<?php

    namespace ffy\rooms;

    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;

    class RoomController extends Controller {

        public function index() {
            return view('rooms::index')->with('user', Auth::user());
        }
    }
