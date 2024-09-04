<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\GameParent;
use App\Models\Transaction;
use App\Models\UserGameResult;
use App\Models\WithdrawalRequest;
use DataTables;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index(Request $request) {
        // $users = User::where('type', 2)->orderBy('id', 'desc')->paginate(10);

        // return view('admin/users/index', compact('users'));

        if ($request->ajax()) {
            $data = User::with('transactions')->where('type', 2);

            // if(isset($request->filter) && !empty($request->filter)) {
            //     if ($request->filter == 'suspended') {
            //         $data = $data->where('is_suspend', '1');
            //     }
            //     else if ($request->filter == 'active') {
            //         $data = $data->where('is_suspend', '0');
            //     }
            // }

            $data = $data->latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/admin/user/'.$row->id.'/edit"><i class="fas fa-edit"></i></a>
                                    <a href="/admin/user/'.$row->id.'/wallet"><i class="fas fa-wallet"></i></a>';
                    return $actionBtn;
                })
                ->editColumn('is_suspend', function($row) {
                    if($row->is_suspend == '1') { $label = '<span class="badge bg-success">Yes</span>'; }else{ $label = '<span class="badge bg-danger">No</span>'; }

                    return $label;
                })
                ->editColumn('app_notification', function($row) {
                    if($row->app_notification == 'on') { $label = '<span class="badge bg-success">Yes</span>'; }else{ $label = '<span class="badge bg-danger">No</span>'; }

                    return $label;
                })
                // ->editColumn('wallet_balance', function($row) {
                //     $credit = 0;
                //     $debit = 0;

                //     if ( isset($row->transactions) && count($row->transactions) > 0 ) {
                //         foreach ( $row->transactions as $value ) {
                //             if ($value->type == "credit") {
                //                 $credit = $credit + $value->amount;
                //             }

                //             if ($value->type == "withdrawal") {
                //                 $debit = $debit + $value->amount;
                //             }
                //         }
                //     }

                //     $html = '<p class="text-success">Credit: '.$credit.'</p>
                //     <p class="text-primary">Debit: '.$debit.'</p>
                //     <p class="text-info">Balance: '.$row->wallet_balance.'</p>';

                //     return $html;
                // })
                ->rawColumns(['action', 'is_suspend'])
                ->make(true);
        }

        return view('admin/users/tables');
    }

    public function view(Request $request) {
        $user = User::find($request->id);

        return view('admin/users/view', compact('user'));
    }

    public function edit(Request $request) {
        $user = User::find($request->id);

        return view('admin/users/edit', compact('user'));
    }

    public function update(Request $request) {
        // dd($request->all());

        $validator = $request->validate([
            'name' => 'required',
            'mobile' => 'required|unique:users,mobile,'.$request->id,
            'email' => 'required|email|unique:users,email,'.$request->id,
        ]);

        $is_block = isset($request->is_block) && $request->is_block == 'on' ? '1':'0';
        // dd($is_block);
        $is_suspend = isset($request->is_suspend) && $request->is_suspend == 'on' ? '1':'0';


        $user = User::find($request->id);
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->is_blocked = $is_block;
        $user->is_suspend = $is_suspend;
        $user->save();

        return redirect()->back();

    }

    public function changePassword(Request $request) {
        $user = User::find($request->user_id);
        $user->password = \Hash::make($request->password);
        $user->save();

        if ($user) {
            return response()->json(['success'=>true, 'message' => "password changed successfully" ]);
        }
        return response()->json(['success'=>false ]);
    }

    public function profile(Request $request){
        
        return view('admin/users/profile');
    }
}