
    <form class="w-full max-w-xl" action="/message" method="POST" id="contact-form" wire:submit.prevent="submit">
        @csrf
        <div class=" mb-6">
          <div class="md:w-full">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Full Name</label>
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400" id="inline-full-name" type="text" name="name" placeholder="" wire:model="name">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        </div>
        <div class=" mb-6"> 
            <div class="md:w-full">
              <label for="inline-full-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your Email</label>
              <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-400" id="email" name="email" type="email" value="" wire:model="email">
              @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class=" mb-6">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
            <textarea id="message" rows="4" name="message" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-400 focus:border-green-400" placeholder="Your message..." wire:model="message"></textarea>
            @error('message')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <button class="shadow bg-green-500 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white font-regular py-2 px-4 rounded">submit</button>
          {{-- <div class=" md:w-2/3">
            <button class="shadow bg-green-500 hover:bg-green-700 focus:shadow-outline focus:outline-none text-white font-regular py-2 px-4 rounded" type="button">
              submit
            </button>
          </div> --}}

    </form>

