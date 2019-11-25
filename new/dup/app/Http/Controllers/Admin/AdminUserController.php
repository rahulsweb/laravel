<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\ContactUs;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserRequest;
use App\Http\Requests\AdminUserUpdateRequest;
use App\Order;
use App\OrderCartDetail;
use App\User;
use Charts;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{

      /**
     *   AdminUserController   is  manage admin user data.
      * storing user data,assign roles  
      *  and also manage edit,delete operation
     *
     * @return \Illuminate\View\View
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    //function of admin dashboard

    public function dashboard(Request $request)
    {
        $contactUs = ContactUs::all();
        $users = User::whereHas('roles', function ($query) {

            $query->where('name', '=', 'customer');

        })->get();
        $orders = Order::all();
        $chart = Charts::database($orders, 'bar', 'highcharts')
            ->title("Monthly Order Placed")
            ->elementLabel("Total Orders")
            ->dimensions(500, 350)
            ->responsive(true)
            ->colors(['#ff6347', '#ff0000', '#3cb371', '#0000ff', '#fa4807', '#faf607', '#0778fa', '#68fa07', '#3407fa', '#07e6fa', '#13fa07', '#ee07fa', '#fa075c', '#fa0707'])
            ->groupByMonth(date('Y'), true);

        $category = OrderCartDetail::groupBy('category_name')->select('category_name', DB::raw('sum(total_qty) as total'))->get();
        if (isset($category)) {
            foreach ($category as $key => $value) {
                $name[] = $value->category_name;
                $total[] = $value->total;

            }
        }
        //use chart console/tv package
        $chart2 = Charts::create('pie', 'highcharts')
            ->title('Category wise Order Placed ')
            ->labels(isset($name) ? $name : ['empty order place'])
            ->values(isset($total) ? $total : [0])
            ->dimensions(1000, 500)
            ->responsive(true)
            ->colors(['#ff6347', '#ff0000', '#3cb371', '#0000ff', '#fa4807', '#faf607', '#0778fa', '#68fa07', '#3407fa', '#07e6fa', '#13fa07', '#ee07fa', '#fa075c', '#fa0707']);

        return view('admin.dashboard', compact('chart', 'chart2', 'orders', 'users', 'contactUs'));
    }

    //index page for list data
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;
        $adminUser = User::latest()->paginate($perPage);
        if (!empty($keyword)) {
            $adminUser = User::all()
                ->latest()->paginate($perPage);
        }
        return view('admin.user.index', compact('adminUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */


     //creating view form display on screen
    public function create()
    {
        $roles = Role::all();

        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

     //storing data on fill into creating form
    public function store(AdminUserRequest $request)
    {

        $user = new User;

        $user = $user->create($request->toArray());
        $user->assignRole($request->roles);

        return redirect('admin/user')->with('flash_message', 'adminUser added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    //display data specific user using id 
    public function show($id)
    {
        $adminUser = User::findOrFail($id);

        return view('admin.user.show', compact('adminUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
     //edit data specific user using id 
    public function edit($id)
    {
        $adminUser = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.user.edit', compact('adminUser', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
       //update data specific user using id 
    public function update(adminUserUpdateRequest $request, $id)
    {

        $adminUser = User::findOrFail($id);
        if (isset($adminUser->getRoleNames()[0])) {
            $adminUser->removeRole($adminUser->getRoleNames()[0]);
        }

        $adminUser->assignRole($request->roles);

        if (!empty($request['password'])) {
            $request['password'] = Hash::make($request['password']);
        } else {
            $request = array_except($request, array('password'));
        }

        $adminUser->update($request->all());

        return redirect('admin/user')->with('flash_message', 'adminUser updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
       //delete data specific user using id 
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'adminUser deleted!');
    }

       //get data specific subCategory of category using id 
    public function getSubcategory($id)
    {
        $category = Category::where('parent_id', '=', $id)->get();
        return $category;

    }

}
