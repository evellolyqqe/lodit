<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\mo1;
use App\Models\Reservation;
use App\Models\Transaction;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransactionsExport;
use Barryvdh\DomPDF\Facade\Pdf;



class Home extends Controller 
{
    
public function dok(Request $request)
{
    
     if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }else{

    $hei = new mo1(); 

    $y = $hei->tampil('dok'); 
    $notbl = $hei->tampil('notsuspicious');
    $notatall = $hei->tampil('notatall');

    $joined = collect($y)->map(function ($dok) use ($notbl, $notatall) {
        $not = collect($notbl)->firstWhere('id', $dok->id);
        $not2 = collect($notatall)->firstWhere('id', $dok->id);

        return (object)[
            'id' => $dok->id,
            'nama' => $dok->nama,
            'foto' => $dok->foto ?? '',
            'MC' => $not->MC ?? 'None',
            'ML' => $not->ML ?? 'None',
            'personal_rating' => $not->personal_rating ?? 'None',
            'Website' => $not2->Website ?? 'None',
            'Safeness' => $not2->Safeness ?? 'None',
        ];
    });

    $hello = [
        'joined' => $joined,
            'notbl' => $notbl, 
            'y' => $y,
    ];

    
    

    echo view('header');
    echo view('dok', $hello);
    echo view('footer');
    echo view('menu');
}
}

public function users(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    $hei = new mo1();

    // Fetch your real tables
    $employees = $hei->tampil('employee');
    $users = $hei->tampil('login');
    $levels = $hei->tampil('level');

    // Join them together
    $joined = collect($employees)->map(function ($emp) use ($users, $levels) {
        $user = collect($users)->firstWhere('id', $emp->userid);
        $level = collect($levels)->firstWhere('lvlnumber', $user->level ?? null);

        return (object)[
        'employeeid' => $emp->employeeid,
        'userid' => $emp->userid,
        'employeename' => $emp->employeename,
        'employeeage' => $emp->employeeage,
        'employeegender' => $emp->employeegender,
        'employeebirthdate' => $emp->employeebirthdate,
        'employeerace' => $emp->employeerace,
        'employeereligion' => $emp->employeereligion,
        'employeebloodtype' => $emp->employeebloodtype,
        'employeeposition' => $emp->employeeposition,
        'username' => $user->username ?? 'No linked user',
        'level' => $user->level ?? 'N/A',
        'beingas' => $level->beingas ?? 'Unknown',

        ];
    });

    echo view('header');
    echo view('users', ['joined' => $joined]);
    echo view('footer');
    echo view('menu');
}


    



public function logout(Request $request)
{
    $request->session()->flush();

    return redirect('/login')->with('success', 'Logged out successfully.');
}



    public function login()
    {
        echo view ('loginheader');
        echo view('login');  
      
    }

public function aksi_login(Request $request)
{
    $username = $request->input('u');
    $password = $request->input('p');

    $user = DB::table('login')->where('username', $username)->first();

    if ($user && $user->password === $password) {
        $request->session()->put('id', $user->id);
        $request->session()->put('username', $user->username);
        $request->session()->put('level', $user->level);

        return redirect('/kli');
    } else {
        return redirect('/login')->with('error', 'Wrong username or password');
    }
}
                                                     


public function edit($id)

{
     
    $hei = new mo1();

    $dok = $hei->ya('dok', ['id' => $id]);
    if (is_array($dok)) {
        $dok = $dok[0];
    }

    $notbl = $hei->ya('notsuspicious', ['id' => $id]);
    $notatall = $hei->ya('notatall', ['id' => $id]);

    if (is_array($notbl)) {
        $notbl = $notbl[0];
    }
    if (is_array($notatall)) {
        $notatall = $notatall[0];
    }

    $joined = (object) [
        'id' => $dok->id ?? null,
        'nama' => $dok->nama ?? '',
        'foto' => $dok->foto ?? '',
        'MC' => $notbl->MC ?? '',
        'ML' => $notbl->ML ?? '',
        'Website' => $notatall->Website ?? '',
        'personal_rating' => $notbl->personal_rating ?? '',
        'Safeness' => $notatall->Safeness ?? '',
    ];
    echo view('header');    
    echo view('menu');
    echo view('edit', ['dok' => $joined]);
    echo view('footer');
}

public function EmployEdit($employeeid)
{
    $hei = new mo1();

    // Fetch employee info
    $emp = $hei->ya('employee', ['employeeid' => $employeeid]);
    if (is_array($emp)) {
        $emp = $emp[0];
    }

    // Fetch linked user and level (if any)
    $user = null;
    $level = null;
    if ($emp && isset($emp->userid)) {
        $user = $hei->ya('login', ['id' => $emp->userid]);
        if (is_array($user)) {
            $user = $user[0];
        }

        if ($user && isset($user->level)) {
            $level = $hei->ya('level', ['lvlnumber' => $user->level]);
            if (is_array($level)) {
                $level = $level[0];
            }
        }
    }

    // Merge all into one object
    $joined = (object)[
        'employeeid' => $emp->employeeid ?? null,
        'employeename' => $emp->employeename ?? '',
        'employeeage' => $emp->employeeage ?? '',
        'employeegender' => $emp->employeegender ?? '',
        'employeebirthdate' => $emp->employeebirthdate ?? '',
        'employeerace' => $emp->employeerace ?? '',
        'employeereligion' => $emp->employeereligion ?? '',
        'employeebloodtype' => $emp->employeebloodtype ?? '',
        'employeeposition' => $emp->employeeposition ?? '',
        'username' => $user->username ?? 'None',
        'level' => $user->level ?? '',
        'beingas' => $level->beinga ?? '',
    ];

    echo view('header');
    echo view('menu');
    echo view('EmployEdit', ['emp' => $joined]);
    echo view('footer');
}

public function EmployUpdate(Request $request, $employeeid)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    $hei = new mo1();
    $where = ['employeeid' => $employeeid];

    // Update employee table
    $dataEmp = [
        'employeename' => $request->input('employeename'),
        'employeeage' => $request->input('employeeage'),
        'employeegender' => $request->input('employeegender'),
        'employeebirthdate' => $request->input('employeebirthdate'),
        'employeerace' => $request->input('employeerace'),
        'employeereligion' => $request->input('employeereligion'),
        'employeebloodtype' => $request->input('employeebloodtype'),
        'employeeposition' => $request->input('employeeposition'),
    ];

    $hei->edit('employee', $dataEmp, $where);

    // If user info also edited
    $userid = $request->input('userid');
    if ($userid) {
        $dataUser = [
            'username' => $request->input('username'),
            'level' => $request->input('level'),
        ];
        $hei->edit('login', $dataUser, ['id' => $userid]);
    }

    return redirect('/users')->with('success', 'Employee updated successfully!');
}

public function update(Request $request, $id)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }
    $hei = new mo1();
    $where = ['id' => $id];

    $dataDok = [
        'nama' => $request->input('nama'),
    ];

    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('uploads', 'public');
        $dataDok['foto'] = $path;
    }

    $hei->edit('dok', $dataDok, $where);

    $dataNot = [
        'MC' => $request->input('MC'),
        'ML' => $request->input('ML'),
        'personal_rating' => $request->input('personal_rating'),
    ];
    $hei->edit('notsuspicious', $dataNot, $where);

    $dataNotAtAll = [
        'Website' => $request->input('Website'),
        'Safeness' => $request->input('Safeness'),
    ];
    $hei->edit('notatall', $dataNotAtAll, $where);

    return redirect('/dok');
}


public function wow()
{
    echo view('header');
    echo view('wow');
    echo view('footer');
}


public function hapus($id)
{
    
    
    $hei = new mo1();
    $where = ['id' => $id];

    $hei->hapus('notsuspicious', $where);
    $hei->hapus('notatall', $where);
    $hei->hapus('dok', $where);

    return redirect('/dok');
}

public function delEmployee($employeeid)
{
    $hei = new mo1();

    $employee = DB::table('employee')->where('employeeid', $employeeid)->first();

    if ($employee) {
        $hei->hapus('employee', ['employeeid' => $employeeid]);

        if (!empty($employee->userid)) {
            $hei->hapus('login', ['id' => $employee->userid]);
        }

        return redirect('/users')->with('success', 'Employee and linked user deleted successfully!');
    }

    return redirect('/users')->with('error', 'Employee not found!');
}


    public function tambah(Request $request)
    {
        if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.'); }
        
        $hei = new mo1();
        echo view('tmbh');
        echo view('header');
        echo view('footer');
        echo view('menu');
    }

public function addUser(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    // Only Admin (level 3) can add users
    if (session('level') != 3) {
        return redirect('/')->with('error', 'Access denied.');
    }

    echo view('header');
    echo view('addUser');
    echo view('footer');
    echo view('menu');
}

public function addEmployee(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    echo view('header');
    echo view('employeeData');
    echo view('footer');
    echo view('menu');
}

public function saveEmployee(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    $hei = new mo1();

    // 1️⃣ Create new user account in `login`
    $userData = [
        'username' => $request->input('username'),
        'password' => bcrypt($request->input('password')), // encrypt password!
        'level' => $request->input('level'), // e.g. 1 = Patient, 2 = Doctor, 3 = Admin
        'created_at' => now(),
        'updated_at' => now(),
    ];

    $newUserId = DB::table('login')->insertGetId($userData);

    // 2️⃣ Create employee entry linked to the new user
    $employeeData = [
        'userid' => $newUserId,
        'employeename' => $request->input('employeename'),
        'employeeage' => $request->input('employeeage'),
        'employeegender' => $request->input('employeegender'),
        'employeebirthdate' => $request->input('employeebirthdate'),
        'employeerace' => $request->input('employeerace'),
        'employeereligion' => $request->input('employeereligion'),
        'employeebloodtype' => $request->input('employeebloodtype'),
        'employeeposition' => $request->input('employeeposition'),
    ];

    $hei->insert('employee', $employeeData);

    return redirect('/users')->with('success', 'Employee and user account created successfully!');
}

public function resetPassword($userid)
{
    if (session('level') != 3) {
        return redirect('/users')->with('error', 'Unauthorized access.');
    }

    $defaultPassword =('password123'); 

    DB::table('login')
        ->where('id', $userid)
        ->update(['password' => $defaultPassword, 'updated_at' => now()]);

    return redirect('/users');
}

public function settings(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    $userId = $request->session()->get('id');
    $hei = new mo1();

    // Get user info
    $user = DB::table('login')->where('id', $userId)->first();
    $employee = DB::table('employee')->where('userid', $userId)->first();
    $level = DB::table('level')->where('lvlnumber', $user->level)->first();

    $info = (object)[
        'userid' => $userId,
        'username' => $user->username,
        'password' => $user->password,
        'level' => $user->level,
        'beingas' => $level->beingas ?? 'Unknown',
        'employeename' => $employee->employeename ?? '',
        'employeeage' => $employee->employeeage ?? '',
        'employeegender' => $employee->employeegender ?? '',
        'employeebirthdate' => $employee->employeebirthdate ?? '',
        'employeerace' => $employee->employeerace ?? '',
        'employeereligion' => $employee->employeereligion ?? '',
        'employeebloodtype' => $employee->employeebloodtype ?? '',
        'employeeposition' => $employee->employeeposition ?? '',
    ];

    echo view('header');
    echo view('menu');
    echo view('settings', ['info' => $info]);
    echo view('footer');
}

public function updateSettings(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    $userId = $request->session()->get('id');
    $hei = new mo1();

    // 🧩 Update login info (including password if filled)
    $userData = [
        'username' => $request->input('username'),
    ];

    // Only update password if user entered one
    if ($request->filled('password')) {
        $userData['password'] = $request->input('password'); // plaintext version (or bcrypt if using hashing)
    }

    $hei->edit('login', $userData, ['id' => $userId]);

    // 🧩 Update employee info
    $employeeData = [
        'employeename' => $request->input('employeename'),
        'employeeage' => $request->input('employeeage'),
        'employeegender' => $request->input('employeegender'),
        'employeebirthdate' => $request->input('employeebirthdate'),
        'employeerace' => $request->input('employeerace'),
        'employeereligion' => $request->input('employeereligion'),
        'employeebloodtype' => $request->input('employeebloodtype'),
        'employeeposition' => $request->input('employeeposition'),
    ];

    $hei->edit('employee', $employeeData, ['userid' => $userId]);

    return redirect('/kli')->with('success', 'Profile updated successfully!');
}






    
public function simpan(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }
    $hei = new mo1();

    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('uploads', 'public');
    } else {
        $path = '';
    }

    $dataDok = [
        'nama' => $request->input('nama'),
        'foto' => $path
    ];
    $hei->tambah('dok', $dataDok);

    $lastid = DB::getPdo()->lastInsertid();

    $dataNot = [
        'id' => $lastid,
        'Title' => $request->input('Title'), 
        'MC' => $request->input('MC'),
        'ML' => $request->input('ML'),
        'personal_rating' => $request->input('personal_rating'),
    ];
    $hei->tambah('notsuspicious', $dataNot);

    $dataNotAtAll = [
        'id' => $lastid,
        'Title' => $request->input('Title'),
        'Website' => $request->input('Website'),
        'Safeness' => $request->input('Safeness'),
    ];
    $hei->tambah('notatall', $dataNotAtAll);

    return redirect('/dok');
}


public function register()
{
    $hei = new mo1();
    echo view('loginheader');
    echo view('register');
}

 
public function register_save(Request $request)
{
    $username = $request->input('u');
    $password = $request->input('p');

    DB::table('login')->insert([
        'username' => $username,
        'password' => $password,
        'level' => 1, //
    ]);

    return redirect('/login')->with('success', 'Account created! Please log in.');
}


   


public function kli(Request $request)
{
    if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }
    $hei = new mo1(); 

    $y = $hei->tampil('dok'); 
    $regis = $hei->tampil('login');
    $notbl = $hei->tampil('notsuspicious');
    $notatall = $hei->tampil('notatall');

    $joined = collect($y)->map(function ($dok) use ($notbl, $notatall) {
       $not = collect($notbl)->firstWhere('id', $dok->id);
       $not2 = collect($notatall)->firstWhere('id', $dok->id);

    return [
            'dok' => $dok,
            'not' => $not,
            'not2' => $not2
    	   ];
    });

    $hello = [
        'joined' => $joined,
        'notbl' => $notbl, 
        'y' => $y,
             ];

    echo view('header');
    echo view('menu');
    echo view('kli', compact('y'));
    echo view('footer');
}

public function report()
{
    $hei = new mo1();
    echo view('header');
    echo view('menu');
    echo view('report');
    echo view('footer');
}

public function index()
    {
        $reservations = Reservation::latest()->get();
        return view('reservations.index', compact('reservations'));
    }

    // store new reservation
    public function store(Request $request)
{
    $request->validate([
        'patient_name' => 'required',
        'phone' => 'required',
        'email' => 'nullable|email',
        'doctor' => 'required',
        'date' => 'required|date',
        'complaint' => 'required',
    ]);

    \App\Models\Reservation::create([
        'patient_name' => $request->patient_name,
        'phone' => $request->phone,
        'email' => $request->email,
        'doctor' => $request->doctor,
        'date' => $request->date,
        'status' => 'pending',
        'complaint' => $request->complaint,
    ]);

    return back()->with('success', 'Reservation sent successfully!');
}

 public function indext(Request $request)
 
    {
        if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }
        $transactions = Transaction::orderBy('date', 'desc')->get();

        $totalIncome = Transaction::where('type', 'income')->sum('amount');
        $totalExpense = Transaction::where('type', 'expense')->sum('amount');
        $balance = $totalIncome - $totalExpense;

        echo view('header');
        echo view('menu');
        echo view('index', compact('transactions', 'totalIncome', 'totalExpense', 'balance'));
        echo view('footer');
    }

    public function storet(Request $request)
    {
        $request->validate([
            'type' => 'required|in:income,expense',
            'category' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Transaction::create($request->all());

        return redirect()->back()->with('success', 'Transaction added successfully!');
    }

    public function exportPdf()
{
    $transactions = Transaction::all();

    $totalIncome = $transactions->where('type', 'income')->sum('amount');
    $totalExpense = $transactions->where('type', 'expense')->sum('amount');
    $balance = $totalIncome - $totalExpense;

    $pdf = Pdf::loadView('transactions.pdf', compact('transactions', 'totalIncome', 'totalExpense', 'balance'));

    return $pdf->download('financial_report.pdf');
}

    public function exportExcel()
    {
        return Excel::download(new TransactionsExport, 'financial_report.xlsx');
    }

    public function export()
{
    return Excel::download(new TransactionsExport, 'financial_report.xlsx');
}
    

    public function clearTransactions()
{
    \App\Models\Transaction::truncate(); // Deletes all rows

    return redirect()->route('transactions.index')->with('success', 'All transactions have been cleared.');
}

    public function destroyTransaction($id)
{
    $transaction = \App\Models\Transaction::findOrFail($id);
    $transaction->delete();

    return redirect()->route('transactions.index')->with('success', 'Transaction deleted.');
}

public function filterTransactions(Request $request)
{
    if(!$request->session()->has('id')) {
        return redirect('/login')->with('error','Please login first.');

    }

    $query = Transaction::query();

    if ($request->filled('type')) {
        $query->where('type', $request->type);
    }

     if ($request->filled('category')) {
        $query->where('category', 'like', '%'. $request->type. '%');
     }

      if ($request->filled('from_date') && $request->filled('until_date')) {
        $query->whereBetween('date', [$request->from_date, $request->until_date]);
      }

      $transactions = $query->orderBy('date', 'desc')->get();

      $totalIncome = $transactions->where('type','income')->sum('amount');
      $totalExpense = $transactions->where('type','expense')->sum('amount');
      $balance = $totalIncome - $totalExpense;

      echo view('header');
      echo view('menu');
      echo view('index', compact('transactions','totalIncome','totalExpense','balance'));
      echo view('footer');
}

public function yao(Request $request)
 
    {
        if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }
     
    $username = $request->session()->get('username', 'Guest');
   

    echo view('header', compact('username'));
    echo view('menu', compact('username'));
    echo view('yao', compact('username'));
    echo view('footer', compact('username'));
    }

    public function storem(Request $request)
{
    $data = $request->validate([
        'customer_name' => 'required|string|max:255',
        'items' => 'required|array',
        'total' => 'required|numeric'
    ]);

    $order = DB::table('orders')->insertGetId([
        'customer_name' => $data['customer_name'],
        'items' => json_encode($data['items']),
        'total' => $data['total'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json([
        'success' => true,
        'order_id' => $order
    ]);
}

public function medtransactions(Request $request)
{
if (!$request->session()->has('id')) {
        return redirect('/login')->with('error', 'Please log in first.');
    }

    $query = DB::table('orders');

    // ✅ date filter
    if ($request->filled('from_date') && $request->filled('until_date')) {
        $query->whereBetween('created_at', [
            $request->from_date . ' 00:00:00',
            $request->until_date . ' 23:59:59'
        ]);
    }

    // ✅ sort order
    $sort = $request->get('sort', 'desc');
    $orders = $query->orderBy('created_at', $sort)->get();

    $totalSales = $orders->sum('total');



    echo view('header');
    echo view('menu');
    echo view('medtransactions',  compact('orders', 'totalSales'));
    echo view('footer');
}


public function clearMedTransactions()
{
    DB::table('orders')->truncate();

    return redirect('/medtransactions')->with('success', 'All medicine transactions cleared!');
}

public function exportMedPdf()
{
    $orders = DB::table('orders')->get();
    $totalSales = $orders->sum('total');

    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('medtransactions_pdf', compact('orders', 'totalSales'));
    return $pdf->download('medicine_transactions.pdf');
}

public function exportMedExcel()
{
    $orders = DB::table('orders')->get();
    $filename = 'medicine_transactions_' . now()->format('Y-m-d_H-i-s') . '.xlsx';

    // Quick inline export (no custom Export class needed)
    return \Maatwebsite\Excel\Facades\Excel::download(new \App\Exports\GenericExport($orders), $filename);
}



}

//     public function store(Request $request){
//         $nama=$request->input('nama');

//         if ($request->hasFile('foto')) {
//         $path= $request->file('foto')->store('uploads', 'public');
//     } else {
//         $path = '';
//     }
//         $rich=array(
//             'nama'=>$nama,
//             'foto'=>$file
//         );

//         $hei = new Table();
//         $hei = $apple->add('age',$yaps);
// }
