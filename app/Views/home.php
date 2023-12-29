<?php if (in_groups('pengguna')):?> 
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>
<div class="w-full md:w-3/4 lg:w-4/5 p-5 md:px-12 lg:24 h-full overflow-x-scroll antialiased">
    <div class="bg-white w-full shadow rounded-lg p-5">
      <textarea class="bg-gray-200 w-full rounded-lg shadow border p-2" rows="5" placeholder="Speak your mind"></textarea>
      
      <div class="w-full flex flex-row flex-wrap mt-3">
        <div class="w-1/3">
          <select class="w-full p-2 rounded-lg bg-gray-200 shadow border float-left">
            <option>Public</option>
            <option>Private</option>
          </select>
        </div>
        <div class="w-2/3">
          <button type="button" class="float-right bg-indigo-400 hover:bg-indigo-300 text-white p-2 rounded-lg">Submit</button>
        </div>
      </div>
    </div>
    
    <div class="mt-3 flex flex-col">

      
      <div class="bg-white mt-3">
        <div class="bg-white border shadow p-3 text-m text-gray-700 font-semibold">
          A Pretty Cool photo from the mountains. Image credit to @danielmirlea on Unsplash.
        </div>
        <img class="border rounded-t-lg shadow-lg " src="https://images.unsplash.com/photo-1572817519612-d8fadd929b00?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80">
        <div class="bg-white border shadow p-5 text-xl text-gray-700 font-semibold">
          A Pretty Cool photo from the mountains. Image credit to @danielmirlea on Unsplash.
        </div>
        <div class="bg-white p-1 border shadow flex flex-row flex-wrap">
          <div class="w-1/3 hover:bg-gray-200 text-center text-xl text-gray-700 font-semibold">Like</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 border-r- text-center text-xl text-gray-700 font-semibold">Share</div>
          <div class="w-1/3 hover:bg-gray-200 border-l-4 text-center text-xl text-gray-700 font-semibold">Comment</div>
        </div>
    </div>
        

<?=$this->endSection()?>
<?php endif; ?>