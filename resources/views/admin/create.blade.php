<x-app-layout>
<x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      商品登録
  </h2>
</x-slot>

<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">

              <section class="text-gray-600 body-font relative">
                <div class="container px-5 mx-auto">
                  <div class="flex flex-col w-full mb-12">
                    <div class="text-center">
                      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">商品登録</h1>
                    </div>
                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                      <form method="post" action="{{ route('admin.product.store')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="-m-2">
                          <div class="p-2 w-1/2 mx-auto" >
                            <div class="relative">
                              <label for="name" class="leading-7 text-sm text-gray-600">商品名</label>
                              <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="price" class="leading-7 text-sm text-gray-600">料金</label>
                              <input type="text" id="price" name="price" value="{{ old('price') }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="image_path" class="leading-7 text-sm text-gray-600">画像パス</label>
                              <input type="file" id="image_path" name="image_path" value="{{ old('image_path') }}" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="size" class="leading-7 text-sm text-gray-600">サイズ</label>
                              <select id="size" name="size" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                              </select>
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="category" class="leading-7 text-sm text-gray-600">カテゴリー</label>
                              <select id="category" name="category" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="tops">tops</option>
                                <option value="pants">pants</option>
                                <option value="outer">outer</option>
                                <option value="other">other</option>
                              </select>
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="gender" class="leading-7 text-sm text-gray-600">性別</label>
                              <select id="gender" name="gender" required class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="mens">mens</option>
                                <option value="womens">women</option>
                                <option value="mens_and_womens">mens_and_women</option>
                                <option value="womens">kids</option>
                              </select>
                            </div>
                          </div>
                          <div class="p-2 w-1/2 mx-auto">
                            <div class="relative">
                              <label for="etc" class="leading-7 text-sm text-gray-600">その他</label>
                              <input type="text" id="etc" name="etc" value="{{ old('etc') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                          </div>
                          <div class="pt-4 flex justify-around">
                            <div class="p-2 w-1/2 mx-auto">
                              <a href="{{ route('admin.top') }}">戻る</a>
                            </div>
                            <div class="p-2 w-1/2 mx-auto">
                              <button type="submit">登録する</button>
                            </div>
                          </div>
                        </div>
                      </form>

                        {{-- フラッシュメッセージ --}}
                        @if(session('message'))
                        <div class="p-6">
                        {{ session('message') }}
                        </div>
                        @endif

                    </div>
                  </div>
                </div>
              </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
