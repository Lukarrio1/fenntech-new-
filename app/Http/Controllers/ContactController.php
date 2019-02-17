<?php
// this is the contact controller for fen 
namespace App\Http\Controllers;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NewMessage;
use App\User;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['create','store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $messages = Contact::orderBy('created_at', 'DESC')->get();
      $count = DB::table('contacts')->count();
      return view('Contact.index')->with('messages',$messages)->with('count',$count);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('Contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'body' => 'required|max:700',
        ]);
        $message = new Contact;
        $message->body = $request->input('body');
        $message->subject = $request->input('subject');
        $message->email = $request->input('email');
        $message->dy_id = str_random(10);
        $message->save();
    //     $user = User::find(1);
    //   $user->notify(new NewMessage());
        return redirect('Contact/create')->with('success',$request->input('email').' Message sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $count = DB::table('contacts')->count();
        $message = Contact::find($id);
        return view('Contact.show')->with('message',$message)->with('count',$count);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Contact::find($id);
        $delete->delete();
        return redirect('/Contact')->with('error','Message deleted!!');
    }
}
