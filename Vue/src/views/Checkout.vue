<template>
  <div class="flex p-20 h-full justify-between">
    <div class="grid gap-3 w-2/5">
      <div class="grid gap-2">
        <h1>Name</h1>
        <input type="text " class="border-2 rounded-md p-1" />
      </div>
      <div class="grid gap-2">
        <h1>Phone number</h1>
        <input type="number " class="border-2 rounded-md p-1" />
      </div>
      <div class="grid gap-2">
        <h1>Select City</h1>
        <input type="text " class="border-2 rounded-md p-1" />
      </div>
      <div class="grid gap-2">
        <h1>District</h1>
        <input type="text " class="border-2 rounded-md p-1" />
      </div>
      <div class="grid gap-2">
        <h1>Village</h1>
        <input type="text " class="border-2 rounded-md p-1" />
      </div>
      <div class="grid text-[16px] gap-2">
        <label for="">Delivery By</label>
        <select
          name="express"
          id=""
          class="border-2 rounded-md border-blue-50 w-full h-[40px]"
        >
          <option value="vireak buntham">Vireak Buntham</option>
          <option value="J&T">J&T</option>
          <option value="CE express">CE express</option>
        </select>
      </div>
    </div>
    <div class="w-1/2 grid gap-3">
      <div class="grid gap-[10px]">
        <div class="flex justify-between">
          <h1 class="font-[600] text-md text-slate-400 grow-0 w-1/3">
            Product
          </h1>
          <h1 class="font-[600] text-md text-slate-400 grow-0">Product</h1>
          <h1 class="font-[600] text-slate-400 text-md grow-0">Price</h1>
        </div>
        <hr />
        <div class="flex justify-between border-[1px] p-2 rounded-md">
          <div class="flex w-1/3 gap-4">
            <img
              src="../assets/produc1.jpg"
              alt=""
              class="w-[80px] object-cover h-[80px]"
            />
            <div class="">
              <h1 class="font-bold text-sm text-slate-500">
                Long Shirt sleeve
              </h1>
              <h1 class="font-bold text-sm text-slate-500">Size: M</h1>
            </div>
          </div>

          <h1 class="font-[600] text-md text-slate-400 grow-0">2</h1>
          <h1 class="font-[600] text-slate-400 text-md grow-0">250$</h1>
        </div>
        <div class="flex justify-between border-[1px] p-2 rounded-md">
          <div class="flex w-1/3 gap-4">
            <img
              src="../assets/produc1.jpg"
              alt=""
              class="w-[80px] object-cover h-[80px]"
            />
            <div class="">
              <h1 class="font-bold text-sm text-slate-500">
                Long Shirt sleeve
              </h1>
              <h1 class="font-bold text-sm text-slate-500">Size: M</h1>
            </div>
          </div>
          <h1 class="font-[600] text-md text-slate-400 grow-0">2</h1>
          <h1 class="font-[600] text-slate-400 text-md grow-0">250$</h1>
        </div>
        <div class="grid gap-1">
          <label for="">Payment</label>
          <button
            class="w-full py-2 bg-blue-700 rounded-md text-xl font-[600] text-white"
          >
            Continue to Pay
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {},
};
</script>

<style></style>
