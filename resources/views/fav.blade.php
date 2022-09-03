@extends('masterLayout')
@section('content')


<div class="text-5xl pt-[6rem]  animate-custom"><h1 class="text-center">My Favorite</h1></div>

<div class="flex flex-col w-full lg:flex-row animate-custom-end pb-10 ">
  <div class="grid flex-grow h-[32rem] card rounded-box place-items-center sm:mx-24 mx-4 mb-2 mt-20 ">
    <div class="card w-96 bg--100 shadow-xl ">
      <figure><img src="food.jpg" alt="Shoes" /></figure>
      <div class="card-body ">
        <h2 class="card-title">My Favorite Food!</h2>
        <p>This is my Favorite food</p>
        <div class="card-actions justify-end">
          <div class="dropdown dropdown-left dropdown-end">
            <label tabindex="0" class="btn m-1">Food's</label>
            <ul tabindex="0" class="dropdown-content menu t-10  bg-base-100 rounded-box border-none w-64">
              @foreach($foods as $food)
              <li><a>{{ $food->name }}</a></li>
              @endforeach
            </ul>
          </div>
         </div>
      </div>
    </div>
  </div> 
  
  <div class="grid flex-grow h-[32rem] card rounded-box place-items-center sm:mx-24 mx-8 mb-2 mt-20 ">
    <div class="card w-96 bg-base-100 shadow-xl">
      <figure><img src="drink.jpg" alt="Shoes" /></figure>
      <div class="card-body">
        <h2 class="card-title">Favorite Drink!</h2>
        <p>This is my Favorite Drink</p>
        <div class="card-actions justify-end">
          <div class="dropdown dropdown-left dropdown-end">
            <label tabindex="0" class="btn m-1">Drink's</label>
            <ul tabindex="0" class="dropdown-content menu t-10  bg-base-100 rounded-box border-none w-64">
              @foreach($drinks as $drink)
              <li><a>{{ $drink->name }}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>

@endsection
