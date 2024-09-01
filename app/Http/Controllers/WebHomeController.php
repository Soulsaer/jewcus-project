<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TblMetaInfo;
use App\Models\Blog;
use App\Models\Shop;
use App\Models\FaqBlog;
use App\Models\Lastblog;
use App\Models\Slider;
use App\Models\Gellery;
use App\Models\NewProduct;
use App\Models\Chieldcategory;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Ads;
use App\Models\SectionImage;
use App\Models\Team;
use App\Models\Bestjewelry;
use App\Models\HomePageSection;
use DB;
use App\Models\User;
use Auth;

class WebHomeController extends Controller
{
    public function index()
    {
        // Fetch data
        $homeSection = HomePageSection::find(1);
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::where('status', 1)->get();
        $international_shop = Shop::all();
        $lastblogs = Lastblog::where('status', 1)->take(4)->orderBy('id', 'desc')->get(); //
        $slider = Slider::where('status', 1)->get();
        $gellary = Gellery::where('status', 1)->take(4)->get();
        $products = NewProduct::all(); //
        $faqs = Faq::all();
        $sectionOneImages = SectionImage::all(); //
        
        // Meta data
        $meta_data = TblMetaInfo::find(1);
        $keyword = $meta_data->keyword ?? '';
        $title = $meta_data->title ?? '';
        $description = $meta_data->description ?? '';
        $others = $meta_data->other_meta ?? '';
        $content_home = $meta_data->content ?? '';

        // Render view
        return view('index', compact(
            'homeSection',
            'international_shop',
            'sectionOneImages',
            'subChieldcategory',
            'content_home',
            'formatTreeCategory',
            'keyword',
            'title',
            'others',
            'description',
            'faqs',
            'slider',
            'lastblogs',
            'gellary',
            'products'
        ));
    }

    public function allfaq(){
        $faqBlogs = FaqBlog::all();
        return view('faqs', compact('faqBlogs'));
    }

    public function faqShow($id){
        $faqBlog = FaqBlog::find($id);
        return view('faq-detail', compact('faqBlog'));
    }


    public function products(){
        $products = NewProduct::all();
        $faqs = Faq::all();

        return view("products", compact('products', 'faqs'));
    }
    

    public function cart()
    {
        return view(
            "cart"
        );
    }

    public function wishlist()
    {
        return view(
            "wishlist",
        );
    }
    
    
    
    public function category_details(Request $request){

        $slug = $request->segment(1);
                // dd('aaa');
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $categoryData = Category::where('url',$slug)->first();
          $international_shop = Shop::all();
        $productDetails = Product::where('parent_category',$categoryData->id)->inRandomOrder()->paginate(36);
        // dd($categoryData);
        
       
        $content =$categoryData->description;
        $meta_data = TblMetaInfo::find(10);
        if($meta_data){
            //   $keyword = $meta_data->keyword;
            //   $title = $meta_data->title;
            //   $description = $meta_data->description;
            //   $others = $meta_data->other_meta;
            $keyword =  $categoryData->meta_keyword;
            $title =  $categoryData->meta_title;
            $description =  $categoryData->meta_description;
            $others = $categoryData->other_meta;
          }


        return view('category_details',compact(['international_shop','keyword','title','description','others','formatTreeCategory','subChieldcategory','productDetails' ,'content']));
    }
      
    public function child_category_details($slug ,$child_slug){
        //   dd($slug ,$child_slug);
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
           $international_shop = Shop::all();
        $categoryData = Category::where('url',$slug)->first();
        
        
         
          
        $childCategoryData = Chieldcategory::where('url',$child_slug)->first();
        $childCategoryData = Chieldcategory::where([['parent_category' ,'=', $categoryData->id],['url','=',$child_slug]])->first();
          
          
 


          
        $productDetails = Product::where([['parent_category', '=',$categoryData->id],['child_category', '=',$childCategoryData->id]])->inRandomOrder()->paginate(36);
     
        $content =$childCategoryData->description;
        $meta_data = TblMetaInfo::find(3);
        if($meta_data){
            //   dd($childCategoryData);
          $keyword = $childCategoryData->meta_keyword;
          $title = $childCategoryData->meta_title;
          $description = $childCategoryData->meta_description;
          $others = $childCategoryData->other_meta;
          }
        return view('category_details',compact(['international_shop','keyword','title','description','others','formatTreeCategory','subChieldcategory','productDetails','content']));
          
    }

    public function userlogin()
    {
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
           $international_shop = Shop::all();

        $meta_data = TblMetaInfo::find(4);
        if ($meta_data) {
            $keyword = $meta_data->keyword;
            $title = $meta_data->title;
            $description = $meta_data->description;
            $others = $meta_data->other_meta;
        }
        return view(
            "user-login",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                // "category",
                // "subcategory",
                // "childcategory",
              
            ])
        );
    }
    
     public function allblogs()
    {
        $blogs = Lastblog::get();
        return view(
           
            "all_blog",
            compact(
                "blogs",)
        );
    }
    

    
    public function shipping_policy(){
            $formatTreeCategory = Category::tree();
            $subChieldcategory = Chieldcategory::all();
            $international_shop = Shop::all();
            $category = Category::where("status", "1")->get();
            $subcategory = Subcategory::where("status", "1")->get();
            $childcategory = Chieldcategory::where("status", "1")->get();

            $meta_data = TblMetaInfo::find(14);
            if ($meta_data) {
                $keyword = $meta_data->keyword;
                $title = $meta_data->title;
                $description = $meta_data->description;
                $others = $meta_data->other_meta;
                $content = $meta_data->content;
            }
            return view(
            
                "Shipping_policy",
                compact([
                    "subChieldcategory",
                    "formatTreeCategory",
                    "international_shop",
                    "keyword",
                    "title",
                    "others",
                    "description",
                    "content",
                
                ])
            );
    }
    
    public function return_policy(){
        return view(
            "return_policy",
        );
    }
     
    public function about_us(){
        return view(
            "about_us",
        );
    }
        
    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")->get();

        return response()->json($products);
    }
        

    public function customization()
    {
        return view("customization");
    }


    // public function singleproduct(Request $request, $url)
    // {
    //     // dd($url);
    //     $id = $request->id;
    //     $formatTreeCategory = Category::tree();
    //     $subChieldcategory = Chieldcategory::all();
    //     $international_shop = Shop::all();


    //     // dd($request);
    //     $slug = $request->segment(1);
 
    //     $keyword = $title = $description = $others = "";

    //     $product = Product::with(['metal_variants' => function($q) {
    //         $q->with('variant');
    //     }, 'gemstone_variants' => function($q) {
    //         $q->with('variant');
    //     }])->where("url_key", $slug)->first();

    //     $products = Product::where('parent_category', $product->parent_category)->inRandomOrder()
    //         ->limit(10)
    //         ->get();
    //     if (!empty($product)) {
    //         //dd($product);
    //         $keyword = $product->meta_keyword;
    //         $title = $product->meta_title;
    //         $description = $product->meta_description;
    //         $others = $product->other_meta;
            

    //         return view(
    //             "product_details",
    //             compact([
    //                 "subChieldcategory",
    //                 "formatTreeCategory",
    //                  "international_shop",
    //                 "keyword",
    //                 "title",
    //                 "description",
    //                 "others",
    //                 "product",
    //                 "products",
    //             ])
    //         );
    //     } else {
    //         return view(
    //             "error_404",
    //             compact([
    //                 "subChieldcategory",
    //                 "formatTreeCategory",
    //                  "international_shop",
    //                 "keyword",
    //                 "title",
    //                 "description",
    //                 "others",
    //             ])
    //         );
    //     }
    // } 
    
    //  public function singleblogs(Request $request, $id)
    // {
    //        //dd($id);
    //     $formatTreeCategory = Category::tree();
    //     $subChieldcategory = Chieldcategory::all();
    //     $international_shop = Shop::all();
    //     // dd($request);
    //     $slug = $request->segment(1);
 
    //     $keyword = $title = $description = $others = "";
    //     $blog = Lastblog::where("slug", $slug)->first();
    //     $blogs = Lastblog::orderby("id", "desc")
    //         ->limit(10)
    //         ->get();
    //     if (!empty($blog)) {
    //         $keyword = $blog->meta_keyword;
    //         $title = $blog->meta_title;
    //         $description = $blog->meta_description;
    //         $others = $blog->other_meta;
            

    //         return view(
    //             "blogs_details",
    //             compact([
    //                 "subChieldcategory",
    //                 "formatTreeCategory",
    //                  "international_shop",
    //                 "keyword",
    //                 "title",
    //                 "description",
    //                 "others",
    //                 "blog",
    //                 "blogs",
    //             ])
    //         );
    //     } else {
    //         return view(
    //             "error_404",
    //             compact([
    //                 "subChieldcategory",
    //                 "formatTreeCategory",
    //                  "international_shop",
    //                 "keyword",
    //                 "title",
    //                 "description",
    //                 "others",
    //             ])
    //         );
    //     }
    // }
    
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        
        // Check if the user is logged in
        if (Auth::check()) {
            // If user is logged in, store the cart items in the database
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'qty' => 1,
                'price' => $product->price,
            ]);
        } else {
            // If user is not logged in, store the cart items in the session
            $cart = session()->get('cart', []);
    
            if (isset($cart[$id])) {
                $cart[$id]['qty']++;
            } else {
                $cart[$id] = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'qty' => 1,
                    'price' => $product->price,
                    'product_image' => $product->product_image
                ];
            }
    
            session()->put('cart', $cart);
        }
    
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function update(Request $request)
    {
        try {
            $id = $request->id;
            $qty = $request->qty;

            if ($id && $qty) {
                // Check if the user is logged in
                if (Auth::check()) {
                    // If logged in, update the cart item in the database
                    $cartItem = Cart::where('id', $id)
                        ->where('user_id', Auth::user()->id)
                        ->first();

                    if ($cartItem) {
                        $cartItem->update(['qty' => $qty]);
                        session()->flash('success', 'Cart updated successfully');
                    } else {
                        session()->flash('error', 'Product not found in the cart');
                    }
                } else {
                    // If not logged in, update the cart item in the session
                    $cart = session()->get('cart', []);

                    if (isset($cart[$id])) {
                        $cart[$id]["qty"] = $qty;
                        session()->put('cart', $cart);
                        session()->flash('success', 'Cart updated successfully');
                    } else {
                        session()->flash('error', 'Product not found in the cart');
                    }
                }
            } else {
                session()->flash('error', 'Invalid parameters provided for updating cart');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while updating the cart');
        }
    }

    public function remove(Request $request)
    {
        try {
            $id = $request->id;

            if ($id) {
                // Check if the user is logged in
                if (Auth::check()) {
                    // If logged in, remove the cart item from the database
                    $cartItem = Cart::where('id', $id)
                        ->where('user_id', Auth::user()->id)
                        ->first();

                    if ($cartItem) {
                        $cartItem->delete();
                        session()->flash('success', 'Product removed successfully');
                    } else {
                        session()->flash('error', 'Product not found in the cart');
                    }
                } else {
                    // If not logged in, remove the cart item from the session
                    $cart = session()->get('cart', []);

                    if (isset($cart[$id])) {
                        unset($cart[$id]);
                        session()->put('cart', $cart);
                        session()->flash('success', 'Product removed successfully');
                    } else {
                        session()->flash('error', 'Product not found in the cart');
                    }
                }
            } else {
                session()->flash('error', 'Invalid parameter provided for removing product from the cart');
            }
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while removing the product from the cart');
        }
    }
    public function showRegistrationForm(Request $request){
        $formatTreeCategory = Category::tree();
            $subChieldcategory = Chieldcategory::all();
            $international_shop = Shop::all();
    
            $meta_data = TblMetaInfo::find(4);
            if ($meta_data) {
                $keyword = $meta_data->keyword;
                $title = $meta_data->title;
                $description = $meta_data->description;
                $others = $meta_data->other_meta;
            }
            return view(
                "register",
                compact([
                    "subChieldcategory",
                    "formatTreeCategory",
                    "international_shop",
                    "keyword",
                    "title",
                    "others",
                    "description",
                
                ])
            );
    }
    public function register(Request $request)
    {
         $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed', // 'confirmed' checks if the password_confirmation field matches the password field
            'termCon' => 'required|accepted', // 'accepted' validates that the field is equal to "yes", "on", "1", or true
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // You can log in the user here if needed

        return redirect('/')->with('success', 'Registration successful');
    }

    public function webLogin(Request $request)
    {
     
        // $cartData = session('cart');
        // dd($cartData);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //   dd($request->all());
        if (Auth::attempt($credentials)) {
            $cartData = session('cart');
        
            if ($cartData !== null) { // Check if $cartData is not null
                // Calculate total quantity and total price
                $totalQuantity = 0;
                $totalPrice = 0;
        
                foreach ($cartData as $item) {
                    $totalQuantity += $item['qty'];
                    $totalPrice += $item['qty'] * $item['price'];
                }
        
                // Save cart records to the Cart model
                if ($cartData) {
                    foreach ($cartData as $item) {
                        Cart::create([
                            'user_id' => Auth::user()->id,
                            'product_id' => $item['product_id'],
                            'qty' => $item['qty'],
                            'price' => $item['price']
                        ]);
                    }
        
                    // Clear the session after saving to the database
                    session(['cart' => []]);
                }
            }
        
            $request->session()->regenerate();
        
            return redirect()->intended('/');
        }

        else{
            // session()->flash('error', 'Invalid credentials');
            // return redirect()->back();
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }


     public function ordersList()
    {
        // dd('hello');
        if (Auth::check()) {

            $orders = Order::where('user_id', Auth::user()->id)->latest()->paginate(10);
            $title = 'Order Tracking';
            $description = 'Order Tracking';
            $others = 'Order Tracking';
            $keyword = 'Order Tracking';
            $formatTreeCategory = Category::tree();
            $subChieldcategory = Chieldcategory::all();
            $international_shop = Shop::all();


            return view('my_orders', compact('international_shop','title', 'orders','description','others','keyword','formatTreeCategory','subChieldcategory'));
        }
        else{
            return redirect()->route('userlogin'); // Replace 'login' with the actual login route name
        }
    }


    public function trackOrder($id)
    {
        // dd('hello');
        if (Auth::check()) {
            $order = Order::find($id);
            $title = 'Order Tracking';
            $description = 'Order Tracking';
            $others = 'Order Tracking';
            $keyword = 'Order Tracking';
            $formatTreeCategory = Category::tree();
            $subChieldcategory = Chieldcategory::all();
            $international_shop = Shop::all();


            return view('order_track', compact('international_shop','title', 'order','description','others','keyword','formatTreeCategory','subChieldcategory'));
        }
        else{
            return redirect()->route('userlogin'); // Replace 'login' with the actual login route name
        }
    }

    public function contactUs(){
       
        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        
        $keyword = "Contact Us";
        $title = "Contact Us";
        $description = "Contact Us";
        $others = "Contact Us";
        $content = "Contact Us";
        
        return view(
           
            "contact",
            compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }

    public function privacyPolicy() {

        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        $keyword = "Privacy Policy";
        $title = "Privacy Policy";
        $description = "Privacy Policy";
        $others = "Privacy Policy";
        $content = "Privacy Policy";

        return view('privacy-policy', compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }

    public function termsConditions() {

        $formatTreeCategory = Category::tree();
        $subChieldcategory = Chieldcategory::all();
        $international_shop = Shop::all();
        $category = Category::where("status", "1")->get();
        $subcategory = Subcategory::where("status", "1")->get();
        $childcategory = Chieldcategory::where("status", "1")->get();

        $keyword = "Terms & Conditions";
        $title = "Terms & Conditions";
        $description = "Terms & Conditions";
        $others = "Terms & Conditions";
        $content = "Terms & Conditions";

        return view('terms', compact([
                "subChieldcategory",
                "formatTreeCategory",
                "international_shop",
                "keyword",
                "title",
                "others",
                "description",
                "content",
               
            ])
        );
    }
   
}
