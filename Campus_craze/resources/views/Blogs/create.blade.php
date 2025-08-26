<main id="main" class="min-h-[70vh] flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-blue-100 py-12 px-4">
    <form 
      method="POST" 
      action="{{ route('blog.store') }}" 
      enctype="multipart/form-data" 
      hsx-swap="outerHTML"
      hsx-target="body"
      class="w-full max-w-4xl bg-white p-10 rounded-2xl shadow-2xl border border-blue-100 space-y-8"
    >
      @csrf
      <h2 class="font-bold text-2xl text-blue-900 mb-6 text-center">Tell us your story</h2>
      
      {{-- Blog Image --}}
      <div>
        <label for="image" class="block text-sm font-medium text-blue-800 mb-1">Blog Header Image</label>
        <input 
          type="file" 
          name="image" 
          id="image" 
          accept="image/*"
          class="block w-full text-sm text-blue-900 border border-blue-200 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-300 focus:border-blue-400 transition"
        >
      </div>
      
      {{-- Blog Title --}}
      <div>
        <label for="title" class="block text-sm font-medium text-blue-800 mb-1">Blog Title</label>
        <input 
          type="text" 
          name="title" 
          id="title" 
          class="block w-full p-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-blue-400 outline-none transition"
          required
        >
      </div>
      
      {{-- Blog Content --}}
      <div>
        <label for="content" class="block text-sm font-medium text-blue-800 mb-1">Content</label>
        <textarea 
          name="content" 
          id="editor" 
          rows="16"
          class="block w-full p-3 border border-blue-200 rounded-lg focus:ring-2 focus:ring-blue-300 focus:border-blue-400 outline-none transition resize-y min-h-[400px]"
          required
        ></textarea>
      </div>
      
      {{-- Submit Button --}}
      <div class="text-right">
        <button 
          type="submit" 
          class="inline-block bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white px-7 py-3 rounded-xl font-semibold shadow hover:from-blue-600 hover:to-blue-800 transition"
        >
          Publish Blog
        </button>
      </div>
    </form>
    <script defer>
      CKEDITOR.replace('editor');
    </script>
  </main>