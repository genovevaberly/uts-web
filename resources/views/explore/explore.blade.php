@extends('layouts.navbarMain')
@section('content')


    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-6 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
      <h2 class="text-4xl font-bold tracking-tight text-cyan-600">Hot Deals</h2>
  
      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div class="group relative">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                </a>
                
                <div class="px-5 pb-5">
                    <span class="inline-flex items-center rounded-md my-1 bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Tanggal 11 October 20222</span>
                    
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobil balazp 1</h5>
                    </a>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        
                        <a href="{{ url('placeBid') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="group relative">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                </a>
                
                <div class="px-5 pb-5">
                    <span class="inline-flex items-center rounded-md my-1 bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Tanggal 11 October 20222</span>
                    
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobil balap 1</h5>
                    </a>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="group relative">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                </a>
                
                <div class="px-5 pb-5">
                    <span class="inline-flex items-center rounded-md my-1 bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Tanggal 11 October 20222</span>
                    
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobil balap 1</h5>
                    </a>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="group relative">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                </a>
                
                <div class="px-5 pb-5">
                    <span class="inline-flex items-center rounded-md my-1 bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Tanggal 11 October 20222</span>
                    
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Mobil balap 1</h5>
                    </a>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                    </div>
                    
                </div>
            </div>
        </div>
        
  
        <!-- More products... -->
      </div>
    </div>

    <div class="mx-auto max-w-2xl px-2 py-6 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">
        <h2 class=" py-6 text-4xl font-bold tracking-tight text-cyan-600">Explore More</h2>
        <button type="button" class="px-6 w-48 mr-4 py-3.5 font-medium text-white bg-blue-900 focus:ring-4 focus:outline-none  rounded-lg text-center">
            <i class="fa-solid fa-car fa-lg px-2"></i>
            Cars
          </button>
        <button type="button" class="px-6 w-48 mr-4 py-3.5 font-medium text-white bg-blue-700 focus:ring-4 focus:outline-none  rounded-lg text-center">
            <i class="fa-solid fa-car fa-lg px-2"></i>
            Accessories
          </button>
        <button type="button" class="px-6 w-48 mr-4 py-3.5 font-medium text-white bg-blue-700 focus:ring-4 focus:outline-none  rounded-lg text-center">
            <i class="fa-solid fa-car fa-lg px-2"></i>
            Antique
          </button>
        <button type="button" class="px-6 w-48 mr-4 py-3.5 font-medium text-white bg-blue-700 focus:ring-4 focus:outline-none  rounded-lg text-center">
            <i class="fa-solid fa-car fa-lg px-2"></i>
            Fashion Bag
          </button>
        <button type="button" class="px-6 w-48 mr-4 py-3.5 font-medium text-white bg-blue-700 focus:ring-4 focus:outline-none  rounded-lg text-center">
            <i class="fa-solid fa-car fa-lg px-2"></i>
            Shoes
          </button>


        
          

          
        
         
         
    
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
          <div class="group relative">
              <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                  </a>
                  <div class="px-5 pb-5">
                      <a href="#">
                          <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kucing Mahal</h5>
                      </a>
                      
                      <div class="flex items-center justify-between">
                          <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="group relative">
              <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                  </a>
                  <div class="px-5 pb-5">
                      <a href="#">
                          <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kucing Mahal</h5>
                      </a>
                      
                      <div class="flex items-center justify-between">
                          <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="group relative">
              <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                  </a>
                  <div class="px-5 pb-5">
                      <a href="#">
                          <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kucing Mahal</h5>
                      </a>
                      
                      <div class="flex items-center justify-between">
                          <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="group relative">
              <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <a href="#">
                      <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                  </a>
                  <div class="px-5 pb-5">
                      <a href="#">
                          <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kucing Mahal</h5>
                      </a>
                      
                      <div class="flex items-center justify-between">
                          <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                          <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="group relative">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="product image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Kucing Mahal</h5>
                    </a>
                    
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 dark:text-white">$599</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Place a Bid</a>
                    </div>
                </div>
            </div>
        </div>
    
          <!-- More products... -->
        </div>
      </div>
  </div>
  @endsection