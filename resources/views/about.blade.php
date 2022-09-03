@extends('masterLayout')
@section('content')


<div class="bg-base-100  min-h-screen flex items-center justify-center animate-custom">
    <div class="bg-white p-6 rounded-xl w-96 shadow">
      <div class="flex justify-between mb-4">
        <div class="flex align-center">
          
        </div>
      </div>
      <img src="img/bg.jpg" class="rounded-xl h-28 w-full object-cover" alt="">
      <div class="flex justify-center relative">
        <img src="user.png" class="w-28 h-28 object-cover rounded-full border-4 border-white absolute -top-16" alt="">
      </div>
      <h1 class="text-2xl mt-12 text-center font-semibold mb-1 flex justify-center items-center space-x-2">
        <span>Rafael Lorenzo</span>
       
      </h1>
      <div class="text-center text-sm text-gray-800 mb-4">
        hello my name is Rafael Lorenzo, <br> 
      </div>
      <div class="flex justify-center space-x-6 mb-8">
        <div class="text-center">
          <div class="text-2xl text-green-500">
            540
          </div>
          <div class="text-sm">
            Rating
          </div>
        </div>
        <div class="text-center">
          <div class="text-2xl">
            700
          </div>
          <div class="text-sm">
            Followers
          </div>
        </div>
        <div class="text-center">
          <div class="text-2xl">
            142
          </div>
          <div class="text-sm">
            Posts
          </div>
        </div>
      </div>
      
      <div class="text-gray-700 mb-2 flex space-x-2 items-center">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.00016 10.6276C7.40266 10.6276 6.09766 9.33008 6.09766 7.72508C6.09766 6.12008 7.40266 4.83008 9.00016 4.83008C10.5977 4.83008 11.9027 6.12758 11.9027 7.73258C11.9027 9.33758 10.5977 10.6276 9.00016 10.6276ZM9.00016 5.95508C8.02516 5.95508 7.22266 6.75008 7.22266 7.73258C7.22266 8.71508 8.01766 9.51008 9.00016 9.51008C9.98266 9.51008 10.7777 8.71508 10.7777 7.73258C10.7777 6.75008 9.97516 5.95508 9.00016 5.95508Z" fill="#292D32" />
          <path d="M8.99928 17.07C7.88928 17.07 6.77178 16.65 5.90178 15.8175C3.68928 13.6875 1.24428 10.29 2.16678 6.2475C2.99928 2.58 6.20178 0.9375 8.99928 0.9375C8.99928 0.9375 8.99928 0.9375 9.00678 0.9375C11.8043 0.9375 15.0068 2.58 15.8393 6.255C16.7543 10.2975 14.3093 13.6875 12.0968 15.8175C11.2268 16.65 10.1093 17.07 8.99928 17.07ZM8.99928 2.0625C6.81678 2.0625 4.01178 3.225 3.26928 6.495C2.45928 10.0275 4.67928 13.0725 6.68928 15C7.98678 16.2525 10.0193 16.2525 11.3168 15C13.3193 13.0725 15.5393 10.0275 14.7443 6.495C13.9943 3.225 11.1818 2.0625 8.99928 2.0625Z" fill="#292D32" />
        </svg>
        <span>Lives in <span class="font-semibold">INDONESIA</span></span>
      </div>
      <div class="text-gray-700 mb-2 flex space-x-2 items-center">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.99999 16.5H12C15.015 16.5 15.555 15.2925 15.7125 13.8225L16.275 7.8225C16.4775 5.9925 15.9525 4.5 12.75 4.5H5.24999C2.04749 4.5 1.52249 5.9925 1.72499 7.8225L2.28749 13.8225C2.44499 15.2925 2.98499 16.5 5.99999 16.5Z" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M6 4.5V3.9C6 2.5725 6 1.5 8.4 1.5H9.6C12 1.5 12 2.5725 12 3.9V4.5" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M10.5 9.75V10.5C10.5 10.5075 10.5 10.5075 10.5 10.515C10.5 11.3325 10.4925 12 9 12C7.515 12 7.5 11.34 7.5 10.5225V9.75C7.5 9 7.5 9 8.25 9H9.75C10.5 9 10.5 9 10.5 9.75Z" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M16.2375 8.25C14.505 9.51 12.525 10.26 10.5 10.515" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M1.96497 8.45251C3.65247 9.60751 5.55747 10.305 7.49997 10.5225" stroke="#292D32" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span>Work as <span class="font-semibold">Product Designer</span> at <span class="font-semibold">Netlinks</span></span>
      </div>
      <div class="text-gray-700 mb-2 flex space-x-2 items-center">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M16.245 7.83001L15.51 10.965C14.88 13.6725 13.635 14.7675 11.295 14.5425C10.92 14.5125 10.515 14.445 10.08 14.34L8.82001 14.04C5.69251 13.2975 4.72501 11.7525 5.46001 8.61751L6.19501 5.47501C6.34501 4.83751 6.52501 4.28251 6.75001 3.82501C7.62751 2.01001 9.12001 1.52251 11.625 2.11501L12.8775 2.40751C16.02 3.14251 16.98 4.69501 16.245 7.83001Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M11.295 14.5425C10.83 14.8575 10.245 15.12 9.53251 15.3525L8.34751 15.7425C5.37001 16.7025 3.80251 15.9 2.83501 12.9225L1.87501 9.95995C0.915012 6.98245 1.71001 5.40745 4.68751 4.44745L5.87251 4.05745C6.18001 3.95995 6.47251 3.87745 6.75001 3.82495C6.52501 4.28245 6.34501 4.83745 6.19501 5.47495L5.46001 8.61745C4.72501 11.7525 5.69251 13.2975 8.82001 14.04L10.08 14.34C10.515 14.445 10.92 14.5125 11.295 14.5425Z" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M9.47998 6.39746L13.1175 7.31996" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M8.745 9.30005L10.92 9.85505" stroke="#292D32" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span>Skills <span class="font-semibold">CSS, HTML, UX DESIGN</span> & 7 others</span>
      </div>
    </div>
  </div>



@endsection