<template>
  <div class="flex gap-2 w-full">
    <div class="grid gap-5 bg-slate-500 w-[500px] p-10 h-fit">
      <div class="flex gap-3">
        <h1 class="font-bold text-white mt-3">Filter</h1>
        <div class="flex gap-3">
          <input
            type="text"
            class="w-[300px] h-[50px] bg-slate-400 text-black bottom-2 rounded-md"
          />
        </div>
      </div>
      <div class="flex text-white mt-4 w-[400px]">
        <h1 class="text-black font-bold">Price</h1>
        <div class="flex gap-5">
          <label for=""></label>
          <div class="flex gap-3">
            <p>Jean</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>

          <div class="flex gap-3">
            <p>Shirt</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex gap-3">
            <p>Shoes</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex gap-3">
            <p>Belt</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
        </div>
      </div>
      <div class="flex text-white mt-4 w-[400px]">
        <h1 class="text-black font-bold">Price</h1>
        <div class="flex gap-5">
          <label for=""></label>
          <div class="flex">
            <p>Below 10$</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>

          <div class="flex">
            <p>Over 10$</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex">
            <p>Below 20$</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex">
            <p>Over 20$</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
        </div>
      </div>
      <div class="flex text-white mt-4 w-[400px]">
        <h1 class="text-black font-bold">Size</h1>
        <div class="flex gap-5">
          <label for=""></label>
          <div class="flex gap-3">
            <p>S</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>

          <div class="flex gap-3">
            <p>M</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex gap-3">
            <p>L</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex gap-3">
            <p>XL</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
        </div>
      </div>
      <div class="flex text-white mt-4 w-[400px]">
        <h1 class="text-black font-bold">Color</h1>
        <div class="flex gap-5">
          <label for=""></label>
          <div class="flex gap-4">
            <p>Blue</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>

          <div class="flex gap-4">
            <p>Red</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex gap-4">
            <p>Green</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
          <div class="flex gap-4">
            <p>Black</p>
            <input type="checkbox" class="w-[20px] h-[20px]" />
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-4">
      <div class="grid border-2 p-2 bg-slate-600">
        <img src="../assets/product3.jpg" alt="" class="w-[300px] h-[300px]" />
        <b class="text-white">15$</b>
      </div>
      <div class="grid border-2 bg-slate-600 p-2">
        <img src="../assets/product2.jpg" alt="" class="w-[300px] h-[300px]" />
        <b class="text-white">15$</b>
      </div>
      <div class="grid border-2 bg-slate-600 p-2">
        <img src="../assets/product4.jpg" alt="" class="w-[300px] h-[300px]" />
        <b class="text-white">15$</b>
      </div>
      <div class="grid border-2 bg-slate-600 p-2">
        <img src="../assets/product5.jpg" alt="" class="w-[300px] h-[300px]" />
        <b class="text-white">15$</b>
      </div>
      <div class="grid border-2 bg-slate-600 p-2">
        <img src="../assets/produc1.jpg" alt="" class="w-[300px] h-[300px]" />
        <b class="text-white">15$</b>
      </div>
      <div class="grid border-2 bg-slate-600 p-2">
        <img src="../assets/product2.jpg" alt="" class="w-[300px] h-[300px]" />
        <b class="text-white">15$</b>
      </div>
      <div class="grid border-2 bg-slate-600 p-2">
        <img src="../assets/product3.jpg" alt="" class="w-[300px] h-[300px]" />
        <b class="text-white">15$</b>
      </div>
    </div>
  </div>
</template>
