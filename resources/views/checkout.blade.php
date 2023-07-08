@extends('master.master')

@section('content')
    
@endsection
<!-- cart product start -->
<div class="flex flex-col items-center h-screen">
    <div class="mt-1">
        <lottie-player src="{{asset('/order-placed/drone.json')}}" background="transparent" speed="1" style="width: 100%; height: 250px;"autoplay loop></lottie-player>
    </div>
    <div class="px-3 h-5/9">
        <div class="card card-compact bg-black h-full">
            <div class="card-actions justify-between items-center p-4">
                <h2 class="text-xl">Checkout</h2>
               <button class="btn btn-sm">Buy Now</button>
            </div>
          <div class="card-body h-full">
            <div class="overflow-y-scroll max-h-[330px]">
                
            <div class="product flex flex-col space-y-4">
                <div class="flex h-20 bg-slate-900 rounded-lg overflow-hidden">
                    <div class="product-image flex justify-center w-3/12">
                        <img class=" scale-150" src="{{asset('products/product1.jpg')}}" alt="">
                    </div>
                    <div class="product-info ps-4 pt-2 flex flex-col w-7/12">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <small>Lorem ipsum dolor sit amet.</small>
                    </div>
                    <div class="flex w-2/12">
                        <button>-</button>
                        <input type="text" class="">
                        <button>+</button>
                    </div>
                </div>
                <!-- item -->
                <div class="flex h-20 bg-slate-900 rounded-lg overflow-hidden">
                    <div class="product-image flex justify-center w-3/12">
                        <img class=" scale-150" src="{{asset('products/product1.jpg')}}" alt="">
                    </div>
                    <div class="product-info ps-4 pt-2 flex flex-col">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <small>Lorem ipsum dolor sit amet.</small>
                    </div>
                </div>
                <!-- item -->
                <div class="flex h-20 bg-slate-900 rounded-lg overflow-hidden">
                    <div class="product-image flex justify-center w-3/12">
                        <img class=" scale-150" src="{{asset('products/product1.jpg')}}" alt="">
                    </div>
                    <div class="product-info ps-4 pt-2 flex flex-col">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <small>Lorem ipsum dolor sit amet.</small>
                    </div>
                </div>
                <!-- item -->
                <div class="flex h-20 bg-slate-900 rounded-lg overflow-hidden">
                    <div class="product-image flex justify-center w-3/12">
                        <img class=" scale-150" src="{{asset('products/product1.jpg')}}" alt="">
                    </div>
                    <div class="product-info ps-4 pt-2 flex flex-col">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <small>Lorem ipsum dolor sit amet.</small>
                    </div>
                </div>
                <!-- item -->
                <div class="flex h-20 bg-slate-900 rounded-lg overflow-hidden">
                    <div class="product-image flex justify-center w-3/12">
                        <img class=" scale-150" src="{{asset('products/product1.jpg')}}" alt="">
                    </div>
                    <div class="product-info ps-4 pt-2 flex flex-col">
                        <h3>Lorem ipsum dolor sit amet.</h3>
                        <small>Lorem ipsum dolor sit amet.</small>
                    </div>
                </div>
                <!-- item -->
            </div>
                
            </div>
          </div>
        </div>
    </div>
</div>
<!-- cart product end -->